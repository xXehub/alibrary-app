<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data = [];
        $data['judul'] = 'Manajemen User';
        $data['sub_judul'] = 'Data User';

        $search = $request->query('search');
        $tiangBiasa = User::where('type', 0);

        if ($search) {
            $tiangBiasa = $tiangBiasa->where(function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%')
                    ->orWhere('email', 'like', '%' . $search . '%');
            });
        }
        $tiangBiasa = $tiangBiasa->paginate(8);
        $totalUsers = User::where('type', 0)->count();

        if ($request->ajax()) {
            $query = User::where('type', 0);

            if ($search) {
                $query = $query->where(function ($query) use ($search) {
                    $query->where('name', 'like', '%' . $search . '%')
                        ->orWhere('email', 'like', '%' . $search . '%');
                });
            }

            return DataTables::of($query)
                ->addIndexColumn()
                ->editColumn('type', function ($user) {
                    return 'User';
                })
                ->addColumn('action', function ($row) {
                    return view('admin.supplier.action', ['id' => $row->id])->render();
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.user.index', $data, compact('tiangBiasa', 'totalUsers'));
    }


    public function adalahAdmin(Request $request)
    {
        $data = [];
        $data['main'] = 'User';
        $data['judul'] = 'Manajemen Admin';
        $data['sub_judul'] = 'Data Admin';

        $search = $request->query('search');
        $tiangPusat = User::whereIn('type', [1, 2]);

        if ($search) {
            $tiangPusat = $tiangPusat->where(function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%') // Ngawe 'name' 
                    ->orWhere('email', 'like', '%' . $search . '%');
            });
        }
        $tiangPusat = $tiangPusat->paginate(8);
        $totalUsers = User::whereIn('type', [1, 2])->count(); // Total user 

        if ($request->ajax()) {
            $query = User::whereIn('type', [1, 2]);

            if ($search) {
                $query = $query->where(function ($query) use ($search) {
                    $query->where('name', 'like', '%' . $search . '%')
                        ->orWhere('email', 'like', '%' . $search . '%');
                });
            }
            return DataTables::of($query)
                ->editColumn('type', function ($user) {
                    return ucfirst($user->type);
                })
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    return view('admin.supplier.action', ['id' => $row->id])->render();
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.user.admin', $data, compact('tiangPusat', 'totalUsers'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|unique:users,username|max:255',
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'required|string|min:8|confirmed',
            'type' => 'required|in:0,1,2' // Corresponds to user, admin, petugas
        ]);

        $user = User::create([
            'name' => $validatedData['name'],
            'username' => $validatedData['username'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'type' => $validatedData['type']
        ]);

        return redirect()->route('users.index')
            ->with('success', 'Pengguna berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|unique:users,username,' . $user->id . '|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id . '|max:255',
            'password' => 'nullable|string|min:8|confirmed',
            'type' => 'required|in:0,1,2'
        ]);

        // Prepare update data
        $updateData = [
            'name' => $validatedData['name'],
            'username' => $validatedData['username'],
            'email' => $validatedData['email'],
            'type' => $validatedData['type']
        ];

        // Update password only if provided
        if (!empty($validatedData['password'])) {
            $updateData['password'] = Hash::make($validatedData['password']);
        }

        $user->update($updateData);

        return redirect()->route('users.index')
            ->with('success', 'Pengguna berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = User::find($id);

        // Pastikan ID pengguna yang akan dihapus tidak sama dengan ID pengguna yang sedang login
        if (!$user) {
            return response()->json(['message' => 'Pengguna tidak ditemukan'], 404);
        }

        if ($user->id === Auth::id()) {
            return response()->json(['message' => 'kamu tidak bisa menghapus dirimu sendiri'], 403);
        }

        $user->delete();
        return response()->json(['message' => 'Penguna berhasil dihapus']);
    }


    /**
     * Generate action buttons for DataTables
     */

}