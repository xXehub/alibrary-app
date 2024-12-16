<?php

use App\Http\Controllers\Admin\BukuController;
use App\Http\Controllers\ErrorController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\UserController;

Route::get('/', function () {
    return view('client.index');
});

Route::get('/buku', [App\Http\Controllers\Client\BukuController::class, 'index'])->name('bukuClient.index');
Route::get('/not-found', [ErrorController::class, 'notFound'])->name('not-found');
Auth::routes();

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');
    // Route::get('/buku', [BukuController::class, 'index'])->name('buku.index');
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');

    // Supplier
    Route::get('admin/suppliers', [App\Http\Controllers\Admin\SupplierController::class, 'index'])->name('suppliers.index');
    Route::get('admin/suppliers/create', [App\Http\Controllers\Admin\SupplierController::class, 'create'])->name('suppliers.create');
    Route::post('admin/suppliers', [App\Http\Controllers\Admin\SupplierController::class, 'store'])->name('suppliers.store');
    Route::get('admin/suppliers/{id}/show', [App\Http\Controllers\Admin\SupplierController::class, 'show'])->name('suppliers.show');
    Route::get('admin/suppliers/{id}/edit', [App\Http\Controllers\Admin\SupplierController::class, 'edit'])->name('suppliers.edit');
    Route::put('admin/suppliers/{id}', [App\Http\Controllers\Admin\SupplierController::class, 'update'])->name('suppliers.update');
    Route::delete('admin/suppliers/{id}', [App\Http\Controllers\Admin\SupplierController::class, 'destroy'])->name('suppliers.destroy');

    // User List
    Route::get('admin/users', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('users.index');
    Route::get('admin/users/users-admin', [App\Http\Controllers\Admin\UserController::class, 'adalahAdmin'])->name('users.adalahAdmin');

    Route::get('admin/buku', [App\Http\Controllers\Admin\BukuController::class, 'index'])->name('bukus.index');
    Route::post('admin/buku', [App\Http\Controllers\Admin\BukuController::class, 'store'])->name('bukus.store');
    Route::get('admin/buku/create', [App\Http\Controllers\Admin\BukuController::class, 'create'])->name('bukus.create');
    Route::put('admin/buku/{id}', [App\Http\Controllers\Admin\BukuController::class, 'update'])->name('bukus.update');
    // Route::get('/admin/buku', [BukuController::class, 'index'])->name('bukus.index');
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:petugas'])->group(function () {

    Route::get('/petugas/home', [HomeController::class, 'petugasHome'])->name('petugas.home');
});


