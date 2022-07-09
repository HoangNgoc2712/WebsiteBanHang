<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\apisanphamcontroller;
use App\Http\Controllers\api\apidongsanphamcontroller;
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
    return view('welcome');
});
Route::get('/index/thongbao', function () {
    return view('thongbao');
});
Route::get('/index/dangki', function () {
    return view('register');
});
Route::get('/index/singup', function () {
    return view('dangki');
});
Route::get('/index/login1', function () {
    return view('login');
});
Route::get('/index/login', function () {
    return view('dangnhap');
});
Route::get('/index/checkout', function () {
    return view('dathang');
});
Route::get('/index/cart', function () {
    return view('cart');
});
Route::get('/index/blogs', function () {
    return view('blog');
});
Route::get('/index/product_detail', function () {
    return view('product_detail');
});
Route::get('/index/laptop', function () {
    return view('laptop');
});
Route::get('/index/trangchu', function () {
    return view('trangchu');
});
Route::get('/index/listSPTheoDong', function () {
    return view('product');
});
Route::get('/admin', function () {
    return view('_layout_admin');
});
Route::get('/admin/products', function () {
    return view('admin.sanpham');
});
Route::get('/admin/lsanpham', function () {
    return view('admin.loaisp');
});
Route::get('/admin/nhacc', function () {
    return view('admin.nhacungcap');
});
Route::get('/admin/customer', function () {
    return view('admin.khachhang');
});

Route::get('/admin/employees', function () {
    return view('admin.nhanvien');
});

Route::get('/admin/tskts', function () {
    return view('admin.thongsokythuat');
});
Route::get('/admin/thuonghieus', function () {
    return view('admin.thuonghieu');
});

Route::get('/admin/dongsanphams', function () {
    return view('admin.dongsanpham');
});
Route::get('/admin/blog', function () {
    return view('admin.baiviet');
});
Route::get('/admin/hdnhaps', function () {
    return view('admin.hoadonnhap');
});
Route::get('/admin/hdbans', function () {
    return view('admin.hoadonban');
});
Route::get('/admin/userss', function () {
    return view('admin.users');
});
Route::get('/admin/login', function () {
    return view('admin.login');
});
Route::get('index/getSPDong', function () {
    return view('product');
});
Route::get('index/getSPthuonghieu', function () {
    return view('productbybrand');
});
