<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\FilesController;

/*
 * All route names are prefixed with 'admin.'.
 */
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('files', [FilesController::class, 'index'])->name('files');
Route::post('fileUpload', [FilesController::class, 'fileUpload'])->name('fileUpload');
