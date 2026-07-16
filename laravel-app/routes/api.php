<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ConsultantTestController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::match(['get', 'post'],'update-package-status', [UserController::class, 'update_package_status']);
Route::match(['get', 'post'],'get-user-details', [UserController::class, 'get_user_details']);
Route::match(['get', 'post'],'get-profile-qa', [ConsultantTestController::class, 'get_profile_qa']);
Route::match(['get', 'post'],'register', [UserController::class, 'register']);