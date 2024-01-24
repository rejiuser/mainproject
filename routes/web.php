<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\onecontroller;
use App\Http\Controllers\ajaxcontroller;

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

Route::get('form',[onecontroller::class,'show']);
Route::post('admininsert',[onecontroller::class,'insert']);
Route::get('login',[onecontroller::class,'display']);
Route::get('home',[onecontroller::class,'newhome']);
Route::post('loginaction',[onecontroller::class,'login']);




Route::get('seller',[onecontroller::class,'sellerreg']);
Route::post('registerinsert',[onecontroller::class,'registerinsert']);
Route::get('viewseller',[onecontroller::class,'viewseller']);
Route::get('details/{id}',[onecontroller::class,'details']);
Route::get('sellerhome',[onecontroller::class,'sellerhome']);
Route::post('approve/{id}',[onecontroller::class,'approve']);
Route::get('viewprofile',[onecontroller::class,'viewprofile']);
Route::get('editprofile/{id}',[onecontroller::class,'editprofile']);
Route::post('updateprofile/{id}',[onecontroller::class,'updateprofile']);


Route::get('buyer',[onecontroller::class,'buyerregister']);
Route::post('buyerinsert',[onecontroller::class,'buyerinsert']);
Route::get('viewbuyer',[onecontroller::class,'viewbuyer']);
Route::get('editbuyer/{id}',[onecontroller::class,'editbuyer']);
Route::post('updatebuyer/{id}',[onecontroller::class,'updatebuyer']);
Route::get('buyerhome',[onecontroller::class,'buyerhome']);

Route::get('viewbuyerprofile',[onecontroller::class,'viewbuyerprofile']);
Route::get('editbuyerprofile',[onecontroller::class,'editbuyerprofile']);
Route::post('updatebuyerprofile/{id}',[onecontroller::class,'updatebuyerprofile']);


Route::get('addcategory',[onecontroller::class,'addcategory']);
Route::post('categoryinsert',[onecontroller::class,'categoryinsert']);

Route::get('viewcategory',[onecontroller::class,'viewcategory']);
Route::get('editcategory/{id}',[onecontroller::class,'editcategory']);
Route::post('updatecategory/{id}',[onecontroller::class,'updatecategory']);
Route::get('deletecategory/{id}',[onecontroller::class,'deletecategory']);

Route::get('subcategory',[onecontroller::class,'subcategory']);
Route::post('subcategoryinsert',[onecontroller::class,'subcategoryinsert']);
Route::get('viewsubcategory',[onecontroller::class,'viewsubcategory']);
Route::get('editsub/{id}',[onecontroller::class,'editsub']);
Route::post('updatesub/{id}',[onecontroller::class,'updatesub']);
Route::get('deletesub/{id}',[onecontroller::class,'deletesub']);

Route::get('addproduct',[onecontroller::class,'addproduct']);
Route::get('subcategoryajax',[onecontroller::class,'subcategoryajax']);
Route::post('addproductinsert',[onecontroller::class,'addproductinsert']);
Route::get('viewproduct',[onecontroller::class,'viewproduct']);
Route::get('editproduct/{id}',[onecontroller::class,'editproduct']);
Route::post('updateproduct/{id}',[onecontroller::class,'updateproduct']);
Route::get('deleteproduct/{id}',[onecontroller::class,'deleteproduct']);



Route::get('viewbuyerproduct',[onecontroller::class,'viewbuyerproduct']);
Route::get('buyerproductdetails/{id}',[onecontroller::class,'buyerproductdetails']);
Route::post('updatetocart/{id}',[onecontroller::class,'updatetocart']);
Route::get('logout',[onecontroller::class,'logout']);


Route::get('viewcart',[onecontroller::class,'viewcart']);
Route::post('btnajax/{id}',[onecontroller::class,'btnajax']);

Route::get('cartproceed',[onecontroller::class,'cartproceed']);
Route::post('cartproceedinsert',[onecontroller::class,'cartproceedinsert']);
Route::get('remove/{id}',[onecontroller::class,'remove']);


Route::get('myorders',[onecontroller::class,'myorders']);
Route::get('orderedprodetails/{id}',[onecontroller::class,'orderedprodetails']);

Route::get('vieworders',[onecontroller::class,'vieworders']);
Route::get('vieworderdetails/{id}',[onecontroller::class,'vieworderdetails']);

Route::post('detailsapprove/{id}',[onecontroller::class,'detailsapprove']);

Route::get('changepassword',[onecontroller::class,'changepassword']);
Route::post('changepasswordupdate',[onecontroller::class,'changepasswordupdate']);
Route::get('changepasswordadmi',[onecontroller::class,'changepasswordadmi']);
Route::post('passwordupdateadmin',[onecontroller::class,'passwordupdateadmin']);

Route::get('changepasswordseller',[onecontroller::class,'changepasswordseller']);
Route::post('updatepasswordseller',[onecontroller::class,'updatepasswordseller']);

Route::get('forgotpassword',[onecontroller::class,'forgotpassword']);
Route::post('usernamecheck',[onecontroller::class,'usernamecheck']);

Route::get('emailcheck',[onecontroller::class,'emailcheck']);
Route::post('updateemail',[onecontroller::class,'updateemail']);

Route::get('updatepassword',[onecontroller::class,'updatepassword']);
Route::post('newforgotpwinsert',[onecontroller::class,'newforgotpwinsert']);



Route::get('vieworderadmi',[onecontroller::class,'vieworderadmi']);
Route::get('orderdetailsadmi/{id}',[onecontroller::class,'orderdetailsadmi']);

Route::get('logoutseller',[onecontroller::class,'logoutseller']);
// Route::get('stripe',[onecontroller::class,'cartproceedinsert']);
// Route::post('stripepost',[onecontroller::class,'stripepost']);
Route::post('stripe',[onecontroller::class,'stripe']);
Route::post('stripepost',[onecontroller::class,'stripePost'])->name('stripepost');




Route::get('trackingdetails/{id}',[onecontroller::class,'trackingdetails']);
Route::post('trackinginsert',[onecontroller::class,'trackinginsert']);

Route::get('trackproduct/{id}',[onecontroller::class,'trackproduct']);
Route::post('searchajax',[onecontroller::class,'searchajax']);
Route::post('viewprosearch',[onecontroller::class,'viewprosearch']);

Route::get('logoutadmin',[onecontroller::class,'logoutadmin']);








Route::get('welcomehome',[onecontroller::class,'welcomehome']);
Route::get('welcomehomeprodetails/{id}',[onecontroller::class,'welcomehomeprodetails']);
// Route::get('addcarthome/{id}',[onecontroller::class,'addcarthome']);




// ajaxcontroller
Route::get('insert',[ajaxcontroller::class,'insert']);
Route::post('inserttb',[ajaxcontroller::class,'inserttb']);
Route::get('viewurl',[ajaxcontroller::class,'viewtb']);
Route::get('edittb/{id}',[ajaxcontroller::class,'edit']);
Route::post('updatetb/{id}',[ajaxcontroller::class,'update']);
Route::get('deletetb/{id}',[ajaxcontroller::class,'delete']);
Route::get('viewtable',[ajaxcontroller::class,'viewtable']);
Route::get('text',[ajaxcontroller::class,'searchbtn']);



Route::get('extra',[onecontroller::class,'extra']);





