<?php
namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Buku; 
use App\Models\Penulis; 
use Yajra\DataTables\Facades\DataTables;

class BukuController extends Controller
{
    public function index(Request $request)
    {
        // Memuat buku dengan relasi penulis, penerbit, dan genre serta melakukan pagination
        $bukus = Buku::with(['penulis', 'penerbit', 'genre'])->paginate(12);  // Menampilkan 12 buku per halaman
    
        return view('client.buku.index', compact('bukus'));
    }
}
