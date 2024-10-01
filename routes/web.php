<?php

use App\Http\Controllers\FinancialAccountController;
use App\Http\Controllers\CardBankAccountController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FinancialMovementController;
use App\Http\Controllers\FinancialPlanningController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// MANEIRA COMUM
// Route::get('/bankAccount',          [BankAccountController::class, 'index'])->middleware(['auth'])->name('bankAccount.index');

// MANEIRA AGRUPADA PELA CONTROLER
Route::controller(FinancialAccountController::class)->group(function(){
    Route::get('/financialAccount',                                 'index')->middleware(['auth'])->name('financialAccount.index');

    Route::get('/financialAccount/create',                          'create')->middleware(['auth'])->name('financialAccount.create');
    Route::get('/financialAccount/edit/{financialAccount}',         'edit')->middleware(['auth'])->name('financialAccount.edit');
    Route::post('/financialAccount/store',                          'store')->middleware(['auth'])->name('financialAccount.store');
    Route::put('/financialAccount/update/{financialAccount}',       'update')->middleware(['auth'])->name('financialAccount.update');
    Route::delete('/financialAccount/destroy/{financialAccount}',   'destroy')->middleware(['auth'])->name('financialAccount.destroy');
});

Route::controller(FinancialMovementController::class)->group(function(){
    Route::get('/financialMovement',                                'index')->middleware(['auth'])->name('financialMovement.index');
    Route::get('/financialMovement/create',                         'create')->middleware(['auth'])->name('financialMovement.create');
    Route::get('/financialMovement/store',                          'store')->middleware(['auth'])->name('financialMovement.store');
});

Route::controller(FinancialPlanningController::class)->group(function () {
    Route::get('/financialPlanning',                            'index')->middleware(['auth'])->name('financialPlanning.index');
    Route::get('/financialPlanning/create',                     'create')->middleware(['auth'])->name('financialPlanning.create');
    Route::post('/financialPlanning/store',                     'store')->middleware(['auth'])->name('financialPlanning.store');
    Route::delete('/financialPlanning/destroy/{idBankAccount}', 'destroy')->middleware(['auth'])->name('financialPlanning.destroy');
});

Route::controller(CategoryController::class)->group(function () {
    Route::get('/category',                                 'index')->middleware(['auth'])->name('category.index');
    Route::get('/category/create',                          'create')->middleware(['auth'])->name('category.create');
});

require __DIR__.'/auth.php';
