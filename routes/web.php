<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Router; // Thêm dấu chấm phẩy
use App\Http\Controllers\CategoriesController;
use  App\Http\Controllers\Admin\ProductController;
use  App\Http\Controllers\Admin\DashboardController;
use  App\Http\Controllers\HomeController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/',[HomeController::class,'haha'])->name('home');
// Route::get('/tin-tuc',[HomeController::class,'getNew'])->name('news');
// Route::get('/chuyen-muc',[HomeController::class,'getCategories']);


// Route::get('/', function () {
//     return view('home');
// })->name('home');
// Route::get('/home', function () {
//     return view('home');
// });

// Route::prefix('admin')->group(function () {
//     // Đặt các route cho nhóm 'admin' ở đây

//     Route::get('tin-tuc/{id?}-{slug?}.html', function ($id=null,$slug=null) {
//         $content="id=".$id."<br/>";
//         $content.="slug=".$slug;
//         return $content;
//     })->where('id','\d+')->where('slug','.+')->name('admin.tintuc');

//     Route::prefix('products')->middleware('CheckPermission')->group(function () {
//         Route::get('/', function () {
//             return 'Danh sách sản phẩm';
//         });

//         Route::get('/add', function () {
//             return 'Thêm sản phẩm';
//         });
//     });
// });


//Client route
Route::get('/',[HomeController::class,'index'])->name('home');

Route::prefix('categories')->group(function(){
    //Danh sách chuyên mục
    Route::get('/',[CategoriesController::class,'index'])->name('categories.list');
    //Lấy chi tiết một chuyên mục
    Route::get('/edit/{id}',[CategoriesController::class,'getCategory'])->name('categories.edit');
    //Xử lí update chuyên mục
    Route::post('/edit/{id}',[CategoriesController::class,'updateCategory']);
    //Hiển thị form add data
    Route::get('/add',[CategoriesController::class,'addCategory'])->name('categories.add');
    //Xử lý thêm chuyên mục
    Route::post('/add',[CategoriesController::class,'handleAddCategory']);
    //Xóa chuyên mục 
    Route::delete('/delete/{id}',[CategoriesController::class,'deleteCategory'])->name('categories.delete');
});
Route::get('san-pham/{id}',[HomeController::class,'getProductDetail']);

Route::middleware('auth.admin')->prefix('admin')->group(function(){
    Route::get('/',[DashboardController::class,'index']);
    Route::middleware('auth.admin.product')->resource('products',ProductController::class);
    
});