<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\DispatchedRider\Form;
use App\Http\Controllers\CustomerController;
use App\Http\Livewire\Customers\CustomerDetails;
use App\Http\Controllers\DeliveryStatusController;
use App\Http\Controllers\DispatchedRiderController;
use App\Http\Livewire\Customers\UpdateCustomerInfo;
use App\Http\Livewire\Settings\ItemCategory\ItemType;
use App\Http\Controllers\ChargesPerLocationController;


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

Route::group(['prefix' => 'admin', 'as'=> 'admin.'], function () {
    Route::resources([
        'delivery-status'  =>  DeliveryStatusController::class,
        'customers'        =>  CustomerController::class,
        'dispatch-rider'   =>  DispatchedRiderController::class,
        'charges-per-location'   =>  ChargesPerLocationController::class,
    ]);

    // Route::group(['prefix' => 'setting', 'as' => 'setting.'], function () {

    //     Route::resource('dashboard', DashboardSettingController::class);
    //     // Route::resource('customers', CustomerController::class);
    //     // Route::resource('dispatch-rider',  DispatchedRiderController::class);
    //     // Route::resource('charges-per-location',  ChargesPerLocationController::class);

    // });

    Route::any('item-categories', ItemType::class );
    Route::any('customer-details', CustomerDetails::class );
    Route::any('riders', Form::class);


});


