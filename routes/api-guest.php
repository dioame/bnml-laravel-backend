<?php

// use App\Http\Controllers\Api\V1\Staff\Product\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\V1\Guest\Signup\SignupController;
use App\Http\Controllers\Api\V1\Guest\Users\UserController;
use App\Http\Controllers\Api\V1\Guest\Auth\AuthController;
// use App\Http\Controllers\Api\V1\Guest\Challenges\ChallengesController;
// use App\Http\Controllers\Api\V1\Guest\Join\JoinController;
// use App\Http\Controllers\Api\V1\Guest\Location\LocationController;
// use App\Http\Controllers\Api\V1\Guest\Challenges\JoinedChallengesController;
// use App\Http\Controllers\Api\V1\Guest\Points\PointsController;
// use App\Http\Controllers\Api\V1\Guest\Activity\ActivityController;
// use App\Http\Controllers\Api\V1\Guest\Bike\BikeController;


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
Route::prefix('guest')->group(function () {

    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/signup', [SignupController::class, 'store']);
    // Route::apiResource('challenges',ChallengesController::class);

   
    
    // Route::post('forgot-password', [AuthController::class, 'forgot_password']);
    // Route::post('verify-otp/reset-password', [AuthController::class, 'otp_reset_password']);
    // Route::group(['middleware' => ['otp_confirmed_reset_password']], function () {
    //     Route::post('/reset-password', [AuthController::class, 'reset_password']);
    // });



    // Route::group(['middleware' => ['auth:sanctum']], function () {
    //     Route::post('login/otp', [AuthController::class, 'otp'])->name('api.guest.otp');
    //     Route::get('login/otp/new-request', [AuthController::class, 'request_otp'])->name('api.guest.request_otp');
    // });

    

    // Route::group(['middleware' => ['auth:sanctum', 'otp_confirmed']], function () {
    Route::group(['middleware' => ['auth:sanctum']], function () {
        //User
        Route::apiResource('user', UserController::class);


        Route::post('logout', [AuthController::class, 'logout']);
    //     Route::post('join', [JoinController::class, 'store']);

    //     Route::apiResource('user_details', UserController::class);
    //     Route::get('address', [UserController::class, 'getAddress']);
    //     //User Photo for Signup
    //     Route::put('user/photo', [UserController::class, 'editPhoto']);
    //     Route::post('user/photo', [SignupController::class, 'store_photo']);
        
    //     //Bike (Vehicle)
    //     Route::put('user/bikes/{id}', [BikeController::class, 'update_bike']); 
    //     Route::get('user/bikes/images', [BikeController::class, 'show_images_bike']); 
    //     Route::apiResource('user/bikes', BikeController::class); 
    //     Route::get('user/bikes/images/{id}', [BikeController::class, 'show_images_id']); 
    //     Route::post('user/bikes/images/{id}', [BikeController::class, 'store_images_id']); 
        

    //     //Challenges
    //     Route::apiResource('/challenges/{id}/points', LocationController::class);
    //     Route::get('challenges/{id}/rankings', [ChallengesController::class, 'getRangkings']);
    //     Route::get('challenges/{id}/activities', [ChallengesController::class, 'getActivities']);

    //     //Activity
    //     Route::apiResource('activities', ActivityController::class);
    //     Route::get('activities/points', [ActivityController::class, 'show']);
    //     Route::post('activities', [ActivityController::class, 'store']);

    //     //points
    //     Route::apiResource('points/{activity_id}/', PointsController::class);

    });
    
});

