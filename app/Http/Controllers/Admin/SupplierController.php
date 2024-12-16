<?php

namespace App\Http\Controllers\Admin;

use App\Models\Supplier;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Controllers\Controller;

class SupplierController extends Controller
{
    /**
     * Display a listing of the supplier.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = [];
        $data['judul'] = 'Manajemen Supplier';
        if ($request->ajax()) {
            $data = Supplier::select('id', 'kode', 'jenis_pakan', 'nama', 'harga_per_kg', 'alamat', 'telepon');
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    return view('admin.supplier.action', ['id' => $row->id])->render();
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.supplier.index', $data);

    }


    // Update
    public function update(Request $request, $id)
    {
        $request->validate([
            'kode' => 'required|string|max:255',
            'jenis_pakan' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'harga_per_kg' => 'required|numeric',
            'alamat' => 'required|string',
            'telepon' => 'required|string|max:15',
        ]);

        $supplier = Supplier::findOrFail($id);
        $supplier->update($request->all());

        return redirect()->route('suppliers.index')
            ->with('success', 'Data supplier berhasil diperbarui.');
    }
    public function edit($id)
    {
        $supplier = Supplier::findOrFail($id);
        return view('admin.supplier.edit', compact('supplier'));
    }
    public function destroy($id)
    {
        $supplier = Supplier::findOrFail($id);
        $supplier->delete();

        return response()->json(['success' => 'Supplier deleted successfully']);
    }

    public function show($id)
    {
        $supplier = Supplier::findOrFail($id); // Get supplier by ID
        return view('admin.supplier.show', compact('supplier')); // Pass the supplier to the view
    }

    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'kode' => 'required|string|max:255',
            'jenis_pakan' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'harga_per_kg' => 'required|numeric',
            'alamat' => 'required|string',
            'telepon' => 'required|string|max:15',
        ]);

        // Create a new supplier record
        Supplier::create([
            'kode' => $request->kode,
            'jenis_pakan' => $request->jenis_pakan,
            'nama' => $request->nama,
            'harga_per_kg' => $request->harga_per_kg,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
        ]);

        // Redirect to the supplier list with a success message
        return redirect()->route('suppliers.index')
            ->with('success', 'Supplier berhasil ditambahkan.');
    }
    public function create()
    {
        return view('admin.supplier.create');
    }

}