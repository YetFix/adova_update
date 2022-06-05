<?php

use Illuminate\Support\Facades\Route;
use App\Models\Slider;
use App\Models\Product;
use App\Models\Category;
use App\Models\Settings;
use App\Models\Team;
use App\Models\NewProduct;
use Illuminate\Support\Facades\Auth;
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
Auth::routes([
    'register' => true, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
  ]);

Route::get('/', function () {
    $settings= Settings::get();
    $categories= Category::get();
    $sliders = Slider::get();
    $teams = Team::get();
   
    $products=Product::where('type','=','recent')->paginate(5);
    return view('welcome',compact('sliders','categories','products','settings','teams','products'));
});
Route::get('/f/contact', function(){
  $settings= Settings::get();
  $categories= Category::get();
  return view('contact',compact('settings','categories'));
});
Route::get('/f/gallery', function(){
  $settings= Settings::get();
  $categories= Category::get();
  $sliders = Slider::get();
  $products = Product::get();
  return view('gallery',compact('settings','categories','products','sliders'));
});
Route::get('/f/team', function(){
  $settings= Settings::get();
  $categories= Category::get();
  $teams = Team::get();
 
  return view('team',compact('settings','categories','teams',));
});
Route::get('/f/who-we-are', function(){
  $settings= Settings::get();
  $categories= Category::get();
  $teams = Team::get();
  return view('who',compact('settings','categories','teams'));
});
Route::get('/f/what-we-do', function(){
  $settings= Settings::get();
  $categories= Category::get();
  return view('what',compact('settings','categories'));
});

Route::get('/f/products', [App\Http\Controllers\ShopController::class, 'shop'])->name('f.product');
Route::get('/f/products/{id}', [App\Http\Controllers\ShopController::class, 'shopById'])->name('f.product.single');
Route::get('/products/category/{id}', [App\Http\Controllers\ShopController::class, 'productByCateId'])->name('product.cat');
Route::get('/products/type/{type}', [App\Http\Controllers\ShopController::class, 'productsByType'])->name('product.type');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('logout', [App\Http\Controllers\HomeController::class, 'logout']);
//admin routes
Route::get('/categories',[App\Http\Controllers\CategoryController::class, 'index']);
Route::get('/subcategories',[App\Http\Controllers\SubcategoryController::class, 'index']);
Route::get('/types',[App\Http\Controllers\TypeController::class, 'index']);
Route::get('/sliders',[App\Http\Controllers\SliderController::class, 'index']);
Route::get('/teams',[App\Http\Controllers\TeamController::class, 'index']);
Route::get('/admins',[App\Http\Controllers\AdminController::class, 'index']);
Route::get('/products',[App\Http\Controllers\ProductController::class, 'index']);
Route::get('/newproducts',[App\Http\Controllers\NewProductController::class, 'index']);
//contacts
Route::post('/contact',[App\Http\Controllers\ContactController::class, 'contact'])->name('contact');
Route::get('/contacts',[App\Http\Controllers\ContactController::class, 'index'])->name('contact.all');
Route::get('/contact/delete/{id}',[App\Http\Controllers\ContactController::class, 'delete'])->name('contact.del');



//category
Route::get('category',[App\Http\Controllers\CategoryController::class, 'create']);
Route::post('create/category',[App\Http\Controllers\CategoryController::class, 'store'])->name('cat.store');
Route::get('category/edit/{id}',[App\Http\Controllers\CategoryController::class, 'edit'])->name('cat.edit');
Route::put('category/update/{id}',[App\Http\Controllers\CategoryController::class, 'update'])->name('cat.update');
Route::get('category/delete/{id}',[App\Http\Controllers\CategoryController::class, 'delete'])->name('cat.del');


//subcategory
Route::get('subcategory',[App\Http\Controllers\SubcategoryController::class, 'create']);
Route::post('create/subcategory',[App\Http\Controllers\SubcategoryController::class, 'store'])->name('scat.store');
Route::get('subcategory/edit/{id}',[App\Http\Controllers\SubcategoryController::class, 'edit'])->name('scat.edit');
Route::put('subcategory/update/{id}',[App\Http\Controllers\SubcategoryController::class, 'update'])->name('scat.update');
Route::get('subcategory/delete/{id}',[App\Http\Controllers\SubcategoryController::class, 'delete'])->name('scat.del');

//product types
Route::get('/ptype',[App\Http\Controllers\TypeController::class, 'create']);
Route::post('create/ptype',[App\Http\Controllers\TypeController::class, 'store'])->name('ptype.store');
Route::get('ptype/edit/{id}',[App\Http\Controllers\TypeController::class, 'edit'])->name('ptype.edit');
Route::put('ptype/update/{id}',[App\Http\Controllers\TypeController::class, 'update'])->name('ptype.update');
Route::get('ptype/delete/{id}',[App\Http\Controllers\TypeController::class, 'delete'])->name('ptype.del');

//products

Route::get('product',[App\Http\Controllers\ProductController::class, 'create']);
Route::post('create/product',[App\Http\Controllers\ProductController::class, 'store'])->name('pro.store');
Route::get('product/edit/{id}',[App\Http\Controllers\ProductController::class, 'edit'])->name('pro.edit');
Route::put('product/update/{id}',[App\Http\Controllers\ProductController::class, 'update'])->name('pro.update');
Route::get('product/delete/{id}',[App\Http\Controllers\ProductController::class, 'delete'])->name('pro.del');
Route::get('product/{id}',[App\Http\Controllers\ProductController::class, 'show'])->name('pro.show');
Route::get('productsBySubcategory/{subcategory}',[App\Http\Controllers\ProductController::class, 'showBySubCat'])->name('pro.showBySubCat');
Route::get('product/view/{id}',[App\Http\Controllers\ProductController::class, 'viewPdf'])->name('pro.view');
Route::get('product/download/{id}',[App\Http\Controllers\ProductController::class, 'Download'])->name('pro.down');



//upcoming products

Route::get('newproduct',[App\Http\Controllers\NewProductController::class, 'create']);
Route::post('create/newproduct',[App\Http\Controllers\NewProductController::class, 'store'])->name('npro.store');
Route::get('newproduct/edit/{id}',[App\Http\Controllers\NewProductController::class, 'edit'])->name('npro.edit');
Route::put('newproduct/update/{id}',[App\Http\Controllers\NewProductController::class, 'update'])->name('npro.update');
Route::get('newproduct/delete/{id}',[App\Http\Controllers\NewProductController::class, 'delete'])->name('npro.del');
Route::get('newproducts/{id}',[App\Http\Controllers\NewProductController::class, 'showById'])->name('npro.showById');
Route::get('newproduct/view/{id}',[App\Http\Controllers\NewProductController::class, 'viewPdf'])->name('npro.view');
Route::get('newproduct/download/{id}',[App\Http\Controllers\NewProductController::class, 'Download'])->name('npro.down');


//sliders
Route::get('slider',[App\Http\Controllers\SliderController::class, 'create']);
Route::post('create/slider',[App\Http\Controllers\SliderController::class, 'store'])->name('sld.store');
Route::get('slider/edit/{id}',[App\Http\Controllers\SliderController::class, 'edit'])->name('sld.edit');
Route::put('slider/update/{id}',[App\Http\Controllers\SliderController::class, 'update'])->name('sld.update');
Route::get('slider/delete/{id}',[App\Http\Controllers\SliderController::class, 'delete'])->name('sld.del');


//teams
Route::get('team',[App\Http\Controllers\TeamController::class, 'create']);
Route::post('create/team',[App\Http\Controllers\TeamController::class, 'store'])->name('tm.store');
Route::get('team/edit/{id}',[App\Http\Controllers\TeamController::class, 'edit'])->name('tm.edit');
Route::put('team/update/{id}',[App\Http\Controllers\TeamController::class, 'update'])->name('tm.update');
Route::get('team/delete/{id}',[App\Http\Controllers\TeamController::class, 'delete'])->name('tm.del');


//admins
Route::get('admin',[App\Http\Controllers\AdminController::class, 'create']);
Route::post('create/admin',[App\Http\Controllers\AdminController::class, 'store'])->name('adm.store');
Route::get('admin/edit/{id}',[App\Http\Controllers\AdminController::class, 'edit'])->name('adm.edit');
Route::put('admin/update/{id}',[App\Http\Controllers\AdminController::class, 'update'])->name('adm.update');
Route::get('admin/delete/{id}',[App\Http\Controllers\AdminController::class, 'delete'])->name('adm.del');




//setting and newletter route
Route::get('/settings',[App\Http\Controllers\HomeController::class,'settings'])->name('settings');
Route::post('/settings',[App\Http\Controllers\HomeController::class,'setStore'])->name('set.store');

Route::post('/news',[App\Http\Controllers\HomeController::class,'news'])->name('news');