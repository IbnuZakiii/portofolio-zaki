<?php
// routes/web.php
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PortfolioController::class, 'index'])->name('home');
Route::post('/contact', [PortfolioController::class, 'contactStore'])->name('contact.store');
Route::get('/certificates', [App\Http\Controllers\CertificateController::class, 'index'])->name('certificates');