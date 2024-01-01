<?php

use App\Http\Controllers\admin\AdminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Only Admins can access this route its an abstract from "web"
| route
|
|
*/

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::resource('dashboard', AdminController::class)->only('index');
});
