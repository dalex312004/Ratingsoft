<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\Homecontroller;
use App\Http\Controllers\Admin\RoleController;


Route::get('',[Homecontroller::class, 'index'] );

Route::resource('roles',RoleController::class)->names('admin.roles') ;

