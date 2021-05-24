<?php

use App\Http\Controllers\App\Roles\RoleController;
use App\Http\Controllers\App\Users\UserController;
use App\Http\Controllers\App\Users\AppUserController;
use App\Http\Controllers\App\Users\UserRoleController;
use App\Http\Controllers\App\Users\UserSocialLinkController;
use App\Http\Controllers\App\Auth\AuthenticateUserController;
use App\Http\Controllers\App\Notification\NotificationController;
use App\Http\Controllers\App\Settings\ReCaptchaSettingController;

Route::get('/user/registration', [AuthenticateUserController::class, 'registerView']);
Route::get('/reset/password', [AuthenticateUserController::class, 'resetPasswordView']);
Route::view('/my-profile', 'user.profile');
Route::view('/users-and-roles', 'user-roles.user-roles')->name('user-role.list');

//User
Route::resource('user-list', UserController::class);

// update user name
Route::post('/update-user-name/{id}', [UserController::class, 'updateUserName']);

// role
Route::get('users/{role}', [RoleController::class, 'getUsersByRole']);

// user
Route::get('all-users', [UserController::class, 'getUsers']);

//users
Route::get('get/users', [AppUserController::class, 'index']);

// role_user
Route::post('attach-user/{role}', [UserRoleController::class, 'store']);
// Route::delete('attach-user/{id}',[UserRoleController::class,'destroy']);

// Sample Pages Routes
Route::view('/blank-page', 'sample-pages.sample');

// roles
Route::get('all-roles', [RoleController::class, 'getAllRoles']);

// ALl Notifications page
Route::get('/all-notifications', [NotificationController::class, 'view']);

Route::get('login-user', [AuthenticateUserController::class, 'show'])
    ->name('user.login-user');

Route::post('change-social-link', [UserSocialLinkController::class, 'update'])
    ->name('user.change-social-link');

//get captcha
Route::get('/get-re-captcha-setting', [ReCaptchaSettingController::class, 'getReCaptchaSettings'])
    ->name('re-captcha-settings.get');
