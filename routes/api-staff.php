<?php

// use App\Http\Controllers\Api\V1\Staff\Product\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\Staff\Auth\AuthController;
use App\Http\Controllers\Api\V1\Staff\Users\UserController;
// use App\Http\Controllers\Api\V1\Staff\Challenge\ChallengeController;
// use App\Http\Controllers\Api\V1\Staff\Challenge\ChallengesPhotoController;
// use App\Http\Controllers\Api\V1\Staff\Settings\SettingsController;

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
    Route::group(['middleware' => ['auth:sanctum']], function () {
        Route::post('logout', [AuthController::class, 'logout']);

    //     // Challenges
    //     // for some reason when i use api resource the staff/challenges/{id} is not register on route list staff/challenges/{challenge} instead
    //     Route::get('challenges', [ChallengeController::class, 'index']);
    //     Route::post('challenges', [ChallengeController::class, 'store']);
    //     Route::delete('challenges/{id}', [ChallengeController::class, 'destroy']);
    //     Route::put('challenges/{id}', [ChallengeController::class, 'update']);
    //     Route::get('challenges/{id}', [ChallengeController::class, 'show']);
    //     Route::patch('challenges/{id}/undeletion', [ChallengeController::class, 'restore']);

    //     // Challenges Photo
    //     Route::post('challenge/photo', [ChallengesPhotoController::class, 'store']);
    //     // Route::put('challenge/{id}/photo', [ChallengesPhotoController::class, 'update']);
    //     Route::delete('challenge/{id}/photo', [ChallengesPhotoController::class, 'destroy']);
    //     // Route::apiResource('challenges', ChallengeController::class);

        // Users
        Route::get('user/email/{email_address}', [UserController::class, 'getUserByEmail']);
        Route::apiResource('user', UserController::class);
     
    //     Route::get('admin', [UserController::class, 'getAdmin']);
    //     Route::post('staff/users', [UserController::class, 'store']);
    //     Route::post('staff/users/{id}', [UserController::class, 'store']);
    //     Route::put('staff/users/{id}', [UserController::class, 'update']);
    //     Route::patch('users/{id}/undeletion', [UserController::class, 'restore']);

    //     //Settings
    //     Route::post('staff/settings', [SettingsController::class, 'store']);
    //     Route::apiResource('settings', SettingsController::class);
        
    });
    
});