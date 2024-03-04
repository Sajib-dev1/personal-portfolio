<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MyworkController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceModelController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//frontend part
Route::get('/',[FrontendController::class,'index'])->name('index');

//Dashboard part
Route::get('/dashboard',[HomeController::class,'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//Admin part
Route::middleware('auth')->group(function () {
    Route::get('/profile', [AdminController::class, 'profile'])->name('profile');
    Route::post('/admin/profile/update', [AdminController::class, 'admin_profile_update'])->name('admin.profile.update');
    Route::post('/admin/logo/update', [AdminController::class, 'admin_logo_update'])->name('admin.logo.update');
});

//services part
Route::middleware('auth')->group(function () {
    Route::get('/services', [ServiceController::class, 'services'])->name('services');
    Route::post('/service/store', [ServiceController::class, 'service_store'])->name('service.store');
    Route::post('/getservicestatus', [ServiceController::class, 'getservicestatus']);
    Route::get('/service/edit/{id}', [ServiceController::class, 'service_edit'])->name('service.edit');
    Route::post('/service/update/{id}', [ServiceController::class, 'service_update'])->name('service.update');
    Route::get('/service/delete/{id}', [ServiceController::class, 'service_delete'])->name('service.delete');
});

//service Model part
Route::middleware('auth')->group(function () {
    Route::get('/model/service', [ServiceModelController::class, 'model_service'])->name('model.service');
    Route::post('/model/service/store', [ServiceModelController::class, 'model_service_store'])->name('model.service.store');
    Route::get('/service/list', [ServiceModelController::class, 'service_list'])->name('service.list');
    Route::post('/service/list/store', [ServiceModelController::class, 'service_list_store'])->name('service.list.store');
    Route::get('/model/service/delete/{id}', [ServiceModelController::class, 'model_service_delete'])->name('model.service.delete');
    Route::get('/service/list/edit/{id}', [ServiceModelController::class, 'service_list_edit'])->name('service.list.edit');
    Route::post('/service/list/update/{id}', [ServiceModelController::class, 'service_list_update'])->name('service.list.update');
    Route::get('/service/list/delete/{id}', [ServiceModelController::class, 'service_list_delete'])->name('service.list.delete');
});

//service Model part
Route::middleware('auth')->group(function () {
    Route::get('/mywork', [MyworkController::class, 'mywork'])->name('mywork');
    Route::post('/mywork/update/{id}', [MyworkController::class, 'mywork_update'])->name('mywork.update');
});

//service Model part
Route::middleware('auth')->group(function () {
    Route::post('/contact', [ContactController::class, 'contact'])->name('contact');
    Route::get('/contact/info', [ContactController::class, 'contact_info'])->name('contact.info');
    Route::get('/contact/delete/{id}', [ContactController::class, 'contact_delete'])->name('contact.delete');
});










