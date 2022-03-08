

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('users.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin','middleware'=>['admin','auth'],'namespace'=>'admin'], function() {
    Route::get('dashboard', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin.deshboard');

    //permition 
    Route::get('/permition',[App\Http\Controllers\farmer\PermitionController::class, 'permition'])->name('permition.saller');
    Route::get('/permition/accept',[App\Http\Controllers\farmer\PermitionController::class, 'permition_Accept'])->name('permition');

    //Category Route here
    Route::get('category', [App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('category');
    Route::post('store/category', [App\Http\Controllers\Admin\CategoryController::class, 'store'])->name('store.category');

    
    // setting route here 
    Route::get('setting/', [App\Http\Controllers\Admin\SettingController::class, 'setting'])->name('setting');
    
    //slider
    Route::get('slider/', [App\Http\Controllers\Admin\SettingController::class, 'slider'])->name('slider');
 
});

//Farmer Spelieast Delete account 
Route::get('account/', [App\Http\Controllers\Admin\SettingController::class, 'deleteAccount'])->name('account');
Route::get('admin/delete/farmeraccount/{id}', [App\Http\Controllers\Admin\SettingController::class,'farmer_accont_delete']);

//Farmer delete account 
Route::get('useraccount/', [App\Http\Controllers\Admin\SettingController::class, 'userAccount'])->name('useraccount');
Route::get('admin/delete/useraccount/{id}', [App\Http\Controllers\Admin\SettingController::class,'user_accont_delete']);

// permition seller account route here  
Route::get('admin/permition/specialist/{id}', [App\Http\Controllers\Saller\PermitionController::class, 'accept_saller_account']);
Route::get('admin/delete/permition/specialist/{id}', [App\Http\Controllers\Saller\PermitionController::class, 'delete_saller_account']);

//slider update
Route::post('admin/update/slider/{id}', [App\Http\Controllers\Admin\SettingController::class, 'sliderupdate']);

// category edit delete Update route here 
Route::get('admin/edit/categoty/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('edit.categoty');
Route::post('admin/update/category/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'update']);
Route::get('admin/delete/categoty/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'delete']);


//settings update route here 
Route::post('admin/update/settings/{id}', [App\Http\Controllers\Admin\SettingController::class, 'updatesetting']);



Route::get('/registers', [App\Http\Controllers\User\FrontendController::class, 'register'])->name('register.open');
Route::get('user/logout', [App\Http\Controllers\User\FrontendController::class, 'logout'])->name('user.logout');


 
 Route::get('service/{id}', [App\Http\Controllers\User\FrontendController::class, 'GetServices']);
 Route::get('profile/details/{id}', [App\Http\Controllers\User\FrontendController::class, 'Getprofile_details']);
 


Route::group(['prefix' => 'user','middleware'=>['user','auth'],'namespace'=>'user'], function() {
    Route::get('dashboard',[App\Http\Controllers\User\UserController::class, 'index'])->name('user.deshboard');
    Route::get('/profile',[App\Http\Controllers\User\FrontendController::class, 'profile'])->name('profile');
    
});

Route::group(['prefix' => 'specialist','middleware'=>['specialist','auth'],'namespace'=>'specialist'], function() {
    Route::get('/dashboard',[App\Http\Controllers\farmer\SpecialistController::class, 'index'])->name('specialist.deshboard');
    
    Route::get('update/profile/', [App\Http\Controllers\farmer\SpecialistController::class, 'UpdateProfile'])->name('update.profile');
   
});
Route::post('specialist/update/{id}',[App\Http\Controllers\farmer\SpecialistController::class, 'Update']);


// store message 
Route::get('message/{id}', [App\Http\Controllers\User\FrontendController::class, 'Message']);
Route::post('/send/message/',[App\Http\Controllers\User\MessageController::class, 'sendmessage'])->name('store.message');
Route::get('/farmer/message/',[App\Http\Controllers\User\MessageController::class, 'farmermessage'])->name('farmer.message');
Route::get('farmer/sms/{id}', [App\Http\Controllers\User\MessageController::class, 'FarmerSpecialistMessage']);

//contact
Route::get('contact/',[App\Http\Controllers\User\FrontendController::class, 'contactPage'])->name('contact');

Route::get('gallery/',[App\Http\Controllers\User\FrontendController::class, 'galleryPage'])->name('gallery');





