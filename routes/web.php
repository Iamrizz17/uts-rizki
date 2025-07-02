<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\ControllerMhs;
Use App\Http\Controllers\ControllerMatakuliah;
Use App\Http\Controllers\ControllerMaster;
use App\Http\Controllers\ContactController;

Route::prefix('admin')->middleware('admin.auth')->group(function () {
    Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
    Route::get('/contact/create', [ContactController::class, 'create'])->name('contact.create');
    Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
    Route::get('/contact/{id}/edit', [ContactController::class, 'edit'])->name('contact.edit');
    Route::put('/contact/{id}', [ContactController::class, 'update'])->name('contact.update');
    Route::delete('/contact/{id}', [ContactController::class, 'destroy'])->name('contact.destroy');
});

use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

use App\Http\Controllers\PostController;

Route::prefix('admin')->middleware('admin.auth')->group(function () {
    Route::get('/post', [PostController::class, 'index'])->name('post.index');
    Route::get('/post/create', [PostController::class, 'create'])->name('post.create');
    Route::post('/post', [PostController::class, 'store'])->name('post.store');
    Route::get('/post/{id}', [PostController::class, 'show'])->name('post.show');
    Route::get('/post/{id}/edit', [PostController::class, 'edit'])->name('post.edit');
    Route::put('/post/{id}', [PostController::class, 'update'])->name('post.update');
    Route::delete('/post/{id}', [PostController::class, 'destroy'])->name('post.destroy');
    Route::get('/about', [PostController::class, 'about'])->name('about');
    Route::get('/homepage', [PostController::class, 'homepage'])->name('homepage');
});









/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('front-end/home');
});

Route::get('/about', function () {
    return view('front-end/about');
});

Route::get('/why', function () {
    return view('front-end/why');
});

Route::get('/contact', function () {
    return view('front-end/contact');
});

Route::get('/team', function () {
    return view('front-end/team');
});

Route::get('/buynow', function () {
    return view('front-end/buynow');
});

Route::get('/readmore', function () {
    return view('front-end/readmore');
});

Route::get('/merchandise', function () {
    return view('front-end/merchandise');
});

Route::get('/stadium', function () {
    return view('front-end/stadium');
});

Route::get('/bootstrap', function () {
    return view('bootstrap');
});

Route::get('/latihan2bs', function () {
    return view('latihan2bs');
});

Route::get('/master', function () {
    return view('master/master');
});

Route::get('/main', function () {
    return view('admin/login');
});





//Route::get('/main/contacts', function () {
  //  return view('admin/contacts');
//});





Route::get('/mhs', [ControllerMhs::class,'index']);

Route::get('/matakuliah', [ControllerMatakuliah::class,'matakuliah']);

Route::get('/mhs/tambah', [ControllerMhs::class,'tambahData']);

Route::post('/mhs/simpan', [ControllerMhs::class,'simpan']);

//untuk url halaman ubah data beserta penamaan router
Route::get('/mhs/edit/{id}', [ControllerMhs::class,'edit']);
Route::post('/mhs/update', [ControllerMhs::class,'update'])->name('mhs.update');

//untuk url halaman hapus data
Route::get('/mhs/hapus/{id}', [ControllerMhs::class,'hapus']);


Route::get('/matakuliah/tambah', [ControllerMatakuliah::class,'tambahData']);

Route::post('/matakuliah/simpan', [ControllerMatakuliah::class,'simpan']);

Route::get('/home', function () {
    return view('home');
});

//untuk url sesuaikan dengan a href pada page ex_main dan fungsi pada controller
Route::get('/master/mahasiswa', [ControllerMaster::class,'mahasiswa']);
Route::get('/master/matakuliah', [ControllerMaster::class,'matakuliah']);
Route::get('/master/nilai', [ControllerMaster::class,'nilai']);

//Route::resource('/posts', \App\Http\Controllers\PostController::class);