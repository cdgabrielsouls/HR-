<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\EmployeeOnboardingController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');

/* EMPLOYEES */
Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index');
Route::get('/employees/create', [EmployeeController::class, 'create'])->name('employees.create');
Route::post('/employees', [EmployeeController::class, 'store'])->name('employees.store');
Route::get('/employees/{id}', [EmployeeController::class, 'show'])->name('employees.show');
Route::put('/employees/{employee}', [EmployeeController::class, 'update'])->name('employees.update');
Route::delete('/employees/{id}', [EmployeeController::class, 'destroy'])->name('employees.destroy');

/* DEPARTMENTS */
Route::get('/departments', [DepartmentController::class, 'index'])->name('departments.index');
Route::get('/departments/{slug}', [DepartmentController::class, 'show'])->name('departments.show');


Route::get('/departments', [DepartmentController::class, 'index'])
    ->name('departments.index');

Route::get('/departments/{department}', [DepartmentController::class, 'show'])
    ->name('departments.show');
Route::prefix('onboarding')->group(function () {

    Route::get('/step1', [EmployeeOnboardingController::class, 'step1'])
        ->name('onboarding.step1');

    Route::get('/step2', [EmployeeOnboardingController::class, 'step2'])
        ->name('onboarding.step2');

    Route::get('/step3', [EmployeeOnboardingController::class, 'step3'])
        ->name('onboarding.step3');

    Route::get('/step4', [EmployeeOnboardingController::class, 'step4'])
        ->name('onboarding.step4');

    Route::get('/success', [EmployeeOnboardingController::class, 'success'])
        ->name('onboarding.success');

        Route::post('/step1', [EmployeeOnboardingController::class, 'storeStep1'])
    ->name('onboarding.storeStep1');

    Route::post('/step2', [EmployeeOnboardingController::class, 'storeStep2'])
    ->name('onboarding.storeStep2');

    Route::post('/step3', [EmployeeOnboardingController::class, 'storeStep3'])
    ->name('onboarding.storeStep3');
    
    Route::post('/onboarding/step4', 
    [EmployeeOnboardingController::class, 'storeStep4']
)->name('onboarding.storeStep4');

Route::get('/onboarding/step4',
    [EmployeeOnboardingController::class, 'step4']
)->name('onboarding.step4');
});

Route::get('/onboarding/success', 
[EmployeeOnboardingController::class, 'success'])
->name('onboarding.success');


Route::get('/signin', function () {
    return view('auth.signin');
});

Route::get('/signin', function () {
    return view('auth.signin');
})->name('signin');

Route::post('/signin', [AuthController::class, 'login'])
    ->name('signin.post');



    Route::middleware('employee.auth')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

    Route::get('/employees', [EmployeeController::class, 'index'])
        ->name('employees.index');

    Route::get('/departments', [DepartmentController::class, 'index'])
        ->name('departments.index');

    // all onboarding routes
});

Route::get('/logout', [AuthController::class, 'logout'])
    ->name('logout');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');