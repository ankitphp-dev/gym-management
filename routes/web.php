<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\OtherController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [IndexController::class, 'index']);
Route::get('/about-us', [OtherController::class, 'aboutUs']);
Route::get('/classes', [OtherController::class, 'classes']);
Route::get('/services', [OtherController::class, 'services']);
Route::get('/team', [OtherController::class, 'teams']);
Route::get('/contact', [OtherController::class, 'contact']);


// admin
Route::get('admin', [App\Http\Controllers\admin\AdminController::class, 'login']);
Route::post('admin/login', [App\Http\Controllers\admin\AdminController::class, 'adminLogin'])->name('admin.login');


Route::get('admin/profile', [App\Http\Controllers\admin\ProfileController::class, 'profile']);
Route::get('admin/profile/edit', [App\Http\Controllers\admin\ProfileController::class, 'edit']);

Route::get('admin/dashboard', [App\Http\Controllers\admin\DashboardController::class, 'dashboard']);
Route::get('admin/list', [App\Http\Controllers\admin\MemberListController::class, 'Member']);
Route::get('admin/members/add', [App\Http\Controllers\admin\MemberListController::class, 'Add']);

Route::get('admin/plan/list', [App\Http\Controllers\admin\MemberPlanController::class, 'list'])->name('plan.list');
Route::get('admin/plan/add', [App\Http\Controllers\admin\MemberPlanController::class, 'Add']);

Route::post('admin/plan/new', [App\Http\Controllers\admin\MemberPlanController::class, 'addNewPlan'])->name('admin.plan');
Route::get('/admin/plan/{id}', [App\Http\Controllers\admin\MemberPlanController::class, 'deletePlan'])->name('plan.delete');


Route::get('admin/trainer/list', [App\Http\Controllers\admin\TrainerController::class, 'list']);
Route::get('admin/trainer/add', [App\Http\Controllers\admin\TrainerController::class, 'Add']);

Route::get('admin/class/list', [App\Http\Controllers\admin\ClassController::class, 'list']);
Route::get('admin/class/add', [App\Http\Controllers\admin\ClassController::class, 'add']);


Route::get('admin/diet/list', [App\Http\Controllers\admin\DietController::class, 'list']);
Route::get('admin/diet/add',[App\Http\Controllers\admin\DietController::class, 'add']);

Route::get('admin/diet/list',[App\Http\Controllers\admin\DietController::class, 'list']);
Route::get('admin/diet/add', [App\Http\Controllers\admin\DietController::class, 'add']);

Route::post('admin/diet/addNew', [App\Http\Controllers\admin\DietController::class, 'addNewDiet'])->name('diets.new');




Route::get('admin/diet/workout',[App\Http\Controllers\admin\DietController::class, 'worklist'])->name('workout.list');
Route::get('admin/diet/addworkout', [App\Http\Controllers\admin\DietController::class, 'addwork']);
Route::post('/admin/diet/addNew', [App\Http\Controllers\admin\DietController::class, 'addNewWorkout'])->name('workout.new');
Route::get('/admin/diet/delete/{id}', [App\Http\Controllers\admin\DietController::class, 'deleteWorkout'])->name('delete.workout');

Route::get('admin/payments/list',[App\Http\Controllers\admin\PaymentController::class, 'payment']);
Route::get('admin/attendence/list', [App\Http\Controllers\admin\AttendenceController::class, 'attendence']);

// member
Route::get('member', [App\Http\Controllers\Member\LoginController::class, 'login']);
Route::get('member/dashboard', [App\Http\Controllers\Member\DashboardController::class, 'dash']);



// new




