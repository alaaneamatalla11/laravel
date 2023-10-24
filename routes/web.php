<?php

use App\Models\Car;
use App\Models\tag;
use App\Models\post;
use App\Models\User;
use App\Models\Owner;
use App\Models\comment;
use App\Models\Student;
use App\Models\mechanic;
use App\Models\Deployment;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\tagController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\mechanicController;
use App\Http\Controllers\DeploymentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('users',[UserController::class,'index']); 
Route::get('country',[CountryController::class,'index']); 
Route::get('post',[postController::class,'index']); 
Route::get('mec',[mechanicController::class,'mec']); 
route::get('project',[ProjectController::class,'project']);
route::get('roles',[RoleController::class,'roles']);
route::get('users',[UserController::class,'users']);
route::get('comment',[CommentController::class,'comment']);
route::get('tag',[tagController::class,'tag']);
route::get('car',[CarController::class,'car']);
route::get('owner',[OwnerController::class,'owner']);
route::get('deployment',[DeploymentController::class,'deployment']);
route::get('customer',[CustomerController::class,'customer']);
route::get('order',[OrderController::class,'order']);
Route::resource('students', StudentController::class);


 








    



