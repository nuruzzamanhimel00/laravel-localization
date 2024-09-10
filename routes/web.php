<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LangController;

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
// Route::get('/', function () {
//     $locale = config('app.fallback_locale');
//     return redirect($locale);
// });

// Route::group(['prefix' => '{locale}', 'where' => ['locale' => '[a-zA-Z]{2}'], 'middleware' => 'web'], function () {
//     Route::get('', [LangController::class, 'index']);
//     Route::get('lang/change', [LangController::class, 'change'])->name('changeLang');
//     // Add other routes here
// });
Route::get('', [LangController::class, 'index']);
    Route::get('lang/change', [LangController::class, 'change'])->name('changeLang');

// Route::group(['prefix' => $prefix], function () {
//     // if (! in_array(session()->get('locale')?? 'en', ['en', 'bn', 'fr'])) {
//     //     abort(400);
//     // }
//     Route::get('', [LangController::class, 'index']);
//     Route::get('lang/change', [LangController::class, 'change'])->name('changeLang');

// });



