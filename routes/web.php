<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/', [PageController::class, 'dashboard'])->name('/');
Route::get('/students_table', [PageController::class, 'students_table'])->name('students_table');
Route::get('/teachers_table', [PageController::class, 'teachers_table'])->name('teachers_table');
Route::get('/staffes_table', [PageController::class, 'staffes_table'])->name('staffes_table');
Route::get('/subjects_table', [PageController::class, 'subjects_table'])->name('subjects_table');
Route::get('/subject_materials_table', [PageController::class, 'subject_materials_table'])->name('subject_materials_table');
Route::get('/student_result_table', [PageController::class, 'student_result_table'])->name('student_result_table');
Route::get('/benefit_table', [PageController::class, 'benefit_table'])->name('benefit_table');
Route::get('/billing_table', [PageController::class, 'billing_table'])->name('billing_table');
// Create forms
Route::get('/create_student', [PageController::class, 'create_student'])->name('create_student');
Route::get('/create_teacher', [PageController::class, 'create_teacher'])->name('create_teacher');
Route::get('/create_staff', [PageController::class, 'create_staff'])->name('create_staff');
Route::get('/create_subject', [PageController::class, 'create_subject'])->name('create_subject');
Route::get('/create_subject_materials', [PageController::class, 'create_subject_materials'])->name('create_subject_materials');
Route::get('/create_sutudent_result', [PageController::class, 'create_sutudent_result'])->name('create_sutudent_result');
Route::get('/save_billing', [PageController::class, 'save_billing'])->name('save_billing');