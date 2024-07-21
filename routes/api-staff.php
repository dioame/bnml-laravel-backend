<?php

// use App\Http\Controllers\Api\V1\Staff\Product\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\Staff\Auth\AuthController;
use App\Http\Controllers\Api\V1\Staff\Users\UserController;
use App\Http\Controllers\Api\V1\Staff\Lib_activities\LibActivitiesController;
use App\Http\Controllers\Api\V1\Staff\Lib_directory\LibDirectoryController;
use App\Http\Controllers\Api\V1\Staff\Directory\DirectoryController;
use App\Http\Controllers\Api\V1\Staff\Activities\ActivitiesController;
use App\Http\Controllers\Api\V1\Staff\Lib_installation\Lib_installationController;
use App\Http\Controllers\Api\V1\Staff\Installation\InstallationController;
use App\Http\Controllers\Api\V1\Staff\Attendance\AttendanceController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::prefix('staff')->group(function () {

    Route::post('login', [AuthController::class, 'login']);
    Route::post('user/login/{email_address}/{pair_token}', [UserController::class, 'loginByEmailPairToken']);

    Route::group(['middleware' => ['auth:sanctum']], function () { 
        Route::post('logout', [AuthController::class, 'logout']);

        //Library Activities
        // Route::put('lib_activities/{id}', [LibActivitiesController::class, 'update']);
        Route::apiResource('lib_activities', LibActivitiesController::class );

        //Library Directory
        Route::apiResource('lib_directory', LibDirectoryController::class );

        //Directory
        Route::post('directory/{id}/update', [DirectoryController::class, 'update']);
        Route::apiResource('directory', DirectoryController::class );
        
        //Activities
        Route::apiResource('activities', ActivitiesController::class );
        
        //Attendance
        Route::apiResource('attendance', AttendanceController::class );
        
        //Library Installation and installation
        Route::apiResource('lib_installation', Lib_installationController::class );
        Route::apiResource('installation', InstallationController::class );
        
        // Users
        Route::get('user/email/{email_address}', [UserController::class, 'getUserByEmail']);
        Route::put('user', [UserController::class, 'update']);
        Route::delete('user', [UserController::class, 'destroy']);
        Route::apiResource('user', UserController::class);
     
        
    });
    
});