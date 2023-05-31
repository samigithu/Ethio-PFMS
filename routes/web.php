<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FarmHandlerController;
use App\Http\Controllers\VeterinaryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\SalesManagerController;
use App\Http\Controllers\BusinessOwenerController;


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

// Route::get('/', function () {
//     return view('welcome');
// });
//===============================================================//
                               //HomeController
Route::get('/',[HomeController::class,'index']);
Route::get('/home',[HomeController::class,'redirect']);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
//===============================================================//
                 //Language
Route::get('lang/{lang}',[
    'uses'=>'App\Http\Controllers\LocalizationController@switchLang']);
//===============================================================//
                     //Admin Manage users
Route::get('/manage_customers_view',[AdminController::class,'customers']);
Route::get('/manage_admins_view',[AdminController::class,'admins']);
Route::get('/manage_user_view',[AdminController::class,'addview']);
Route::post('/upload_user',[AdminController::class,'upload']);
Route::get('/deactivate_user_view/{id}',[AdminController::class,'deactivate_user']);
Route::post('/edit_user_view/{id}',[AdminController::class,'edit_user']);
                 //Viw Reports
Route::get('/population_report_eggs_admin',[AdminController::class,'show_production']);
Route::get('/inventory_report_admin',[AdminController::class,'show_iventory']);
Route::get('/population_report_admin',[AdminController::class,'show_population']);
//===============================================================//
                             //Customer
Route::get('/manage_my_orders',[CustomerController::class,'manage_my_order']);
Route::post('/manage_my_orders',[CustomerController::class,'manage_my_order']);
Route::get('/make_orders',[CustomerController::class,'make_order']);
Route::post('/make_orders',[CustomerController::class,'make_order']);
//remove
Route::get('make_orders/remove', [CustomerController::class,'remove']);

//order
Route::post('checkout', [CustomerController::class,'cart']);
Route::post('reserve',[CustomerController::class,'reserve_order']);

//===============================================================//
                          //Farm Handler 
//products
Route::get('/manage_products',[FarmHandlerController::class,'show_product']);
Route::post('/add_products',[FarmHandlerController::class,'add_product']);
Route::post('/update_products/{id}',[FarmHandlerController::class,'update_product']);
//eggs
Route::get('/manage_product_eggs',[FarmHandlerController::class,'show_product_egg']);
Route::post('/add_product_eggs',[FarmHandlerController::class,'add_product_egg']);
Route::post('/update_product_eggs/{id}',[FarmHandlerController::class,'update_product_egg']);
//Supplies
Route::get('/manage_supplies',[FarmHandlerController::class,'show_supplies']);
Route::post('/add_supplies',[FarmHandlerController::class,'add_supplie']);

Route::post('/update_supplies/{id}',[FarmHandlerController::class,'update_supplie']);
//Feeds
Route::get('/manage_feeds',[FarmHandlerController::class,'show_feeds']);
Route::post('/add_feeds',[FarmHandlerController::class,'add_feed']);
Route::post('/update_feeds/{id}',[FarmHandlerController::class,'update_feed']);
//disease
Route::get('/manage_disease',[FarmHandlerController::class,'show_disease']);
Route::post('/add_disease',[FarmHandlerController::class,'add_diseas']);
Route::post('/update_disease/{id}',[FarmHandlerController::class,'update_diseas']);
//============================================================//
                      //VeterinaryController 
//treatement
Route::get('/manage_treatement',[VeterinaryController::class,'show_treat']);
Route::post('/add_treatement/{id}',[VeterinaryController::class,'add_treat']);
Route::post('/update_traatement/{id}',[VeterinaryController::class,'update_treat']);
//Medicine
Route::get('/manage_medicine',[VeterinaryController::class,'show_medicine']);
Route::post('/add_medicines',[VeterinaryController::class,'add_medicine']);
Route::post('/update_medicines/{id}',[VeterinaryController::class,'update_medicine']);
//===============================================================//
               //SalesManagerController
Route::get('/manage_sales',[SalesManagerController::class,'show_sales']);
Route::post('/add_sale_chickens',[SalesManagerController::class,'add_sale_chicken']);
Route::post('/add_sale_eggs',[SalesManagerController::class,'add_sale_egg']);
Route::post('/update_sales/{id}',[SalesManagerController::class,'uppdate_sale']);
Route::get('/view_customers',[SalesManagerController::class,'show_customers']);
Route::get('/manage_orders',[SalesManagerController::class,'manage_order']);
Route::get('/manage_orders_approved',[SalesManagerController::class,'manage_approved_order']);
Route::get('/manage_orders_rejected',[SalesManagerController::class,'manage_rejected_order']);
Route::post('/approve_orders/{id}',[SalesManagerController::class,'approve_order']);
//=================================================================//
                          //BusinessOwenerController
Route::get('/population_report_eggs',[BusinessOwenerController::class,'show_production']);
Route::get('/inventory_report',[BusinessOwenerController::class,'show_iventory']);
Route::get('/population_report',[BusinessOwenerController::class,'show_population']);
 //=================================================================//                          
                        //message Controller 
Route::get('/contact_admins',[MessageController::class,'send_message']);
Route::post('/submit_message',[MessageController::class,'add_message']);
Route::post('/submit_message_guest',[MessageController::class,'add_message_guest']);
Route::post('/manage_message',[MessageController::class,'show_message']);