<?php

use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Mime\MessageConverter;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/






Route::get('/', [MessageController::class, 'index']);
Route::get('/messages/{message:id}', [MessageController::class, 'show']);
Route::get('/create', [MessageController::class, 'create']);
Route::post('/', [MessageController::class, 'store']);
Route::get('/dashboard', [MessageController::class, 'indexAdmin'])->middleware(['auth'])->name('dashboard');
Route::get('/dashboard/message/{message:id}/edit', [MessageController::class, 'editAdmin'])->middleware(['auth'])->name('adminEdit');
Route::get('/dashboard/message/{message:id}/delete', [MessageController::class, 'destroy'])->middleware(['auth']);


require __DIR__ . '/auth.php';
