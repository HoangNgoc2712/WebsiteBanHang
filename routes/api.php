<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
use App\Http\Controllers\api\apisanphamcontroller;
use App\Http\Controllers\api\apiloaispcontroller;
use App\Http\Controllers\api\apinhacungcapcontroller;
use App\Http\Controllers\api\apikhachhangcontroller;
use App\Http\Controllers\api\apinhanviencontroller;
use App\Http\Controllers\api\apithuonghieucontroller;
use App\Http\Controllers\api\apidongsanphamcontroller;
use App\Http\Controllers\api\apithongsokythuatcontroller;
use App\Http\Controllers\api\apibaivietcontroller;
use App\Http\Controllers\api\apihoadonnhapcontroller;
use App\Http\Controllers\api\apihoadonbancontroller;
use App\Http\Controllers\api\apiuserscontroller;
use App\Http\Controllers\api\apilogincontroller;
use App\Http\Controllers\api\apicthdnhapcontroller;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resource('products', apisanphamcontroller::class);
Route::resource('lsanpham', apiloaispcontroller::class);
Route::resource('nhacc', apinhacungcapcontroller::class);
Route::resource('customer', apikhachhangcontroller::class);
Route::resource('employees', apinhanviencontroller::class);
Route::resource('thuonghieus', apithuonghieucontroller::class);
Route::resource('dongsanphams', apidongsanphamcontroller::class);
Route::resource('tskts', apithongsokythuatcontroller::class);
Route::resource('blogs', apibaivietcontroller::class);
Route::resource('hdnhaps', apihoadonnhapcontroller::class);
Route::resource('hdbans', apihoadonbancontroller::class);
Route::resource('userss', apiuserscontroller::class);
Route::resource('login', apilogincontroller::class);
Route::resource('cthdnhaps', apicthdnhapcontroller::class);


Route::get('/sanpham/getSPDong/{id}',[apisanphamcontroller::class,'getSPDong']);
Route::get('/sanpham/listSPTheoTH/{id?}',[apisanphamcontroller::class,'listSPTheoTH']);
Route::get('/sanpham/listSPMoi',[apisanphamcontroller::class,'listSPMoi']);
Route::get('/sanpham/listSPBanChay',[apisanphamcontroller::class,'listSPBanChay']);
Route::get('/sanpham/LayTSKT/{id}',[apisanphamcontroller::class,'LayTSKT']);
Route::get('/addcart/{id}',[apisanphamcontroller::class,'addcart']);
Route::get('/getcart',[apisanphamcontroller::class,'getcart']);
Route::get('/singup',[apilogincontroller::class,'getsignup']);
Route::post('/singup',[apilogincontroller::class,'postsignup']);
Route::get('/login',[apilogincontroller::class,'getlogin']);
Route::post('/login',[apilogincontroller::class,'postlogin']);
Route::get('/logout',[apilogincontroller::class,'getlogout']);
Route::get('/hoadonban/LayCTHDBan/{id}',[apihoadonbancontroller::class,'LayCTHDBan']);
Route::get('/hoadonnhap/LayCTHDNhap/{id}',[apihoadonnhapcontroller::class,'LayCTHDNhap']);
Route::get('/hoadonnhap/ThemCTHD',[apihoadonnhapcontroller::class,'ThemCTHD']);

route::resource("kh",apikhachhangcontroller::class);
route::get("kh1/get/{tk}&{mk}",[apikhachhangcontroller::class,"show2"]);
route::get("kh1/get/{tk}",[apikhachhangcontroller::class,"show3"]);


