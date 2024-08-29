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
use App\Http\Controllers\Api\V1\Staff\Meetings\MeetingsController;
use App\Http\Controllers\Api\V1\Staff\FlagTribute\FlagTributeController;
use App\Http\Controllers\Api\V1\Staff\SummaryPoints\SummaryPointsController;
use App\Http\Controllers\Api\V1\Staff\Audits\AuditsController;

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
    Route::post('user/login/pairing', [UserController::class, 'loginByEmailPairToken']);

    Route::group(['middleware' => ['auth:sanctum']], function () { 
        Route::post('logout', [AuthController::class, 'logout']);

        //Library Activities
        // Route::put('lib_activities/{id}', [LibActivitiesController::class, 'update']);
        Route::apiResource('lib_activities', LibActivitiesController::class );

        //Library Directory
        Route::get('lib_directory/search', [LibDirectoryController::class, 'getDirectoryByTerm']);
        Route::apiResource('lib_directory', LibDirectoryController::class );

        //Directory
        Route::post('directory/{id}/update', [DirectoryController::class, 'update']);
        Route::apiResource('directory', DirectoryController::class );
        
        //Activities
        Route::get('activity/search/{lib_activity_id}', [ActivitiesController::class, 'getActivityByTerm']);
        Route::apiResource('activities', ActivitiesController::class );
        
        //Attendance
        Route::get('attendance/activity/{id}', [AttendanceController::class, 'getAttendanceByActivity']);
        Route::apiResource('attendance', AttendanceController::class );
        
        //Library Installation and installation
        Route::get('installation/points', [InstallationController::class, 'points']);
        Route::get('lib_installation/search', [Lib_installationController::class, 'getInstallationByTerm']);
        Route::apiResource('lib_installation', Lib_installationController::class );
        Route::apiResource('installation', InstallationController::class );
        
        // Users

        Route::get('user/members', [UserController::class, 'getMembers']);
        Route::get('user/officers', [UserController::class, 'getOfficers']);
        Route::get('user/petitioners', [UserController::class, 'getPetitioners']);
        Route::get('user/search', [UserController::class, 'getUserByTerm']);
        Route::get('user/email/{email_address}', [UserController::class, 'getUserByEmail']);
        Route::put('user', [UserController::class, 'update']);
        Route::delete('user', [UserController::class, 'destroy']);
        Route::delete('user/{id}', [UserController::class, 'destroyById']);
        Route::apiResource('user', UserController::class);

        // Meetings
        Route::get('meeting/stated-meeting/points', [MeetingsController::class, 'getStatedMeeting']);
        Route::get('meeting/special-meeting/points', [MeetingsController::class, 'getSpecialMeeting']);
        
        //FlagTribute
        Route::get('/flag-tribute/points', [FlagTributeController::class, 'pointsRank'] );
        Route::apiResource('flag-tribute', FlagTributeController::class );
        
        //Overall Summary Points
        Route::get('overall-summary/points', [SummaryPointsController::class, 'index']);
     
        //audits
        Route::get('audits', [ AuditsController::class, 'index']);
    });
    
});