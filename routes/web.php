<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SingleController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ProductController;

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
    return view('index');
});

Route::get('/',[HomeController::class,'index']);
Route::get('/about',[HomeController::class,'about']);
Route::get('/contact',[HomeController::class,'contact']);
Route::get('/product',[HomeController::class,'product']);
Route::get('/adminindex',[AdminController::class,'index']);
Route::get('/addcategory',[AdminController::class,'addcategory']);
Route::post('/savecategory',[AdminController::class,'savecategory']);
Route::get('/adminlogin',[LoginController::class,'adminlogin']);
Route::get('/userprofile',[AdminController::class,'usersprofile']);
Route::get('/totalcategory',[AdminController::class,'totalcategory']);
Route::get('/totalsubcategory',[AdminController::class,'totalsubcategory']);
Route::get('/subcategory',[AdminController::class,'subcategory']);
Route::post('/ProcessLoginAdmin',[LoginController::class,'ProcessLoginAdmin']);
Route::get('/demo',SingleController::class);
Route::resource('/photo',AdminController::class);
Route::get('get-all-session',function(){
    $session=session()->all();
    echo "<pre>";
    print_r($session);exit;
});
Route::get('set-all-session',function(Request $req){
    $req->session()->put('user_name','mahel');
    return redirect('get-all-session');
});
Route::get('destory-all-session',function(Request $req){
    session()->forget('user_name');
    return redirect('get-all-session');
});
Route::get('category/delete_category/{id}',[AdminController::class,'delete_category'])->name('category.delete_category');
Route::get('category/edit/{id}',[AdminController::class,'edit'])->name('category.edit');
Route::post('update_category/{id}',[AdminController::class,'update_category']);
Route::post('/addsubcategory',[AdminController::class,'addsubcategory']);
Route::get('/deletesub_cat/{id}',[AdminController::class,'deletesub_cat']);
Route::get('editsubcat/{id}',[AdminController::class,'editsubcat']);
Route::post('update_subcat/{id}',[AdminController::class,'update_subcat']);
Route::get('/category/trash',[AdminController::class,'category_trash']);
Route::get('category/restore/{id}',[AdminController::class,'category_restore'])->name('category.restore');
Route::get('category/force-delete/{id}',[AdminController::class,'category_forcedelete'])->name('category.force-delete');
Route::get('/upload',[AdminController::class,'upload']);
Route::post('/upload_image',[AdminController::class,'upload_image']);
Route::post('/saveproduct',[ProductController::class,'saveproduct']);
Route::get('/addproduct',[ProductController::class,'add_product']);

