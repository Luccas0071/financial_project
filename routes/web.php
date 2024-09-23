<?php

use App\Http\Controllers\FinancialInstitutionController;
use App\Http\Controllers\CardBankAccountController;
use App\Http\Controllers\CategoryController;
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
// Route::get('/bankAccount/create',   [BankAccountController::class, 'create'])->middleware(['auth'])->name('bankAccount.create');
// Route::post('/bankAccount/store',    [BankAccountController::class, 'store'])->middleware(['auth'])->name('bankAccount.store');

// MANEIRA AGRUPADA PELA CONTROLER
Route::controller(FinancialInstitutionController::class)->group(function(){
    Route::get('/financialInstitution',                                     'index')->middleware(['auth'])->name('financialInstitution.index');
    Route::get('/financialInstitution/create',                              'create')->middleware(['auth'])->name('financialInstitution.create');
    Route::get('/financialInstitution/edit/{financialInstitution}',         'edit')->middleware(['auth'])->name('financialInstitution.edit');
    Route::post('/financialInstitution/store',                              'store')->middleware(['auth'])->name('financialInstitution.store');
    Route::put('/financialInstitution/update/{financialInstitution}',       'update')->middleware(['auth'])->name('financialInstitution.update');
    Route::delete('/financialInstitution/destroy/{financialInstitution}',   'destroy')->middleware(['auth'])->name('financialInstitution.destroy');
});

Route::controller(TransactionController::class)->group(function(){
    Route::get('/transaction',                              'index')->middleware(['auth'])->name('transaction.index');
    Route::get('/transaction/create',                       'create')->middleware(['auth'])->name('transaction.create');
});

Route::controller(CardBankAccountController::class)->group(function () {
    Route::get('/cardBankAccount',                          'index')->middleware(['auth'])->name('cardBankAccount.index');
    Route::get('/cardBankAccount/create',                   'create')->middleware(['auth'])->name('cardBankAccount.create');
    Route::post('/cardBankAccount/store',                   'store')->middleware(['auth'])->name('cardBankAccount.store');
    Route::delete('/cardBankAccount/destroy/{idBankAccount}', 'destroy')->middleware(['auth'])->name('cardBankAccount.destroy');
});


Route::get('/category',         [CategoryController::class, 'index'])->middleware(['auth'])->name('category.index');
Route::get('/category/create',  [CategoryController::class, 'create'])->middleware(['auth'])->name('category.create');

require __DIR__.'/auth.php';
