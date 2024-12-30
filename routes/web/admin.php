<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\VehicleFaqController;
use App\Http\Controllers\VehicleRuleController;
use App\Http\Controllers\web\admin\DriverController;
use App\Http\Controllers\web\admin\MasterRateController;
use App\Http\Controllers\web\admin\RateController;
use App\Http\Controllers\web\admin\RoleController;
use App\Http\Controllers\web\admin\UserController;

//admin routes


Auth::Routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('drivers', DriverController::class);

    // rate routes
    Route::get('rate', [RateController::class, 'index'])->name('rates.index');
    Route::get('rate/create', [RateController::class, 'create'])->name('rates.create');
    Route::post('rate/store', [RateController::class, 'store'])->name('rates.store');
    Route::get('rate/edit/{id}', [RateController::class, 'edit'])->name('rates.edit');
    Route::post('rate/update/{id}', [RateController::class, 'update'])->name('rates.update');
    Route::delete('rate/destroy/{id}', [RateController::class, 'destroy'])->name('rates.destroy');

    //vehicle routes
    Route::get('vehicle', [MasterRateController::class, 'index'])->name('vehicles.index');
    Route::get('vehicle/create', [MasterRateController::class, 'create'])->name('vehicles.create');
    Route::post('vehicle/store', [MasterRateController::class, 'store'])->name('vehicles.store');
    Route::get('vehicle/edit/{id}', [MasterRateController::class, 'edit'])->name('vehicles.edit');
    Route::post('vehicle/update/{id}', [MasterRateController::class, 'update'])->name('vehicles.update');
    Route::delete('vehicle/destroy/{id}', [MasterRateController::class, 'destroy'])->name('vehicles.destroy');

    //vehicle faqs routes
    Route::get('vehicle-faq', [VehicleFaqController::class, 'index'])->name('vehicles.faq.index');
    Route::get('vehicle-faq/create', [VehicleFaqController::class, 'create'])->name('vehicles.faq.create');
    Route::post('vehicle-faq/store', [VehicleFaqController::class, 'store'])->name('vehicles.faq.store');
    Route::get('vehicle-faq/edit/{id}', [VehicleFaqController::class, 'edit'])->name('vehicles.faq.edit');
    Route::post('vehicle-faq/update/{id}', [VehicleFaqController::class, 'update'])->name('vehicles.faq.update');
    Route::delete('vehicle-faq/destroy/{id}', [VehicleFaqController::class, 'destroy'])->name('vehicles.faq.destroy');

    //vehicle rules routes
    Route::get('vehicle-rules', [VehicleRuleController::class, 'index'])->name('vehicles.rule.index');
    Route::get('vehicle-rules/create', [VehicleRuleController::class, 'create'])->name('vehicles.rule.create');
    Route::post('vehicle-rules/store', [VehicleRuleController::class, 'store'])->name('vehicles.rule.store');
    Route::get('vehicle-rules/edit/{id}', [VehicleRuleController::class, 'edit'])->name('vehicles.rule.edit');
    Route::post('vehicle-rules/update/{id}', [VehicleRuleController::class, 'update'])->name('vehicles.rule.update');
    Route::delete('vehicle-rules/destroy/{id}', [VehicleRuleController::class, 'destroy'])->name('vehicles.rule.destroy');
});
