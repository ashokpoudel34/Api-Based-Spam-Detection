<?php

use App\Models\ApiKey;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiKeyController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $apiKey = ApiKey::where('user_id', Auth::id())->first();
    return view('dashboard', [
        'apiKey' => $apiKey ? $apiKey->key : 'No API Key available. Please generate one.',
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/api-keys', [ApiKeyController::class, 'index'])->name('api_keys.index');
    Route::post('/api-keys', [ApiKeyController::class, 'create'])->name('api_keys.create');
    Route::delete('/api-keys/{id}', [ApiKeyController::class, 'revoke'])->name('api_keys.revoke');
});



require __DIR__.'/auth.php';
