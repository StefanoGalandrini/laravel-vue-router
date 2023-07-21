<?php

use App\Http\Controllers\Api\DrinkController;
use App\Http\Controllers\Api\LeadController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('drinks', [DrinkController::class, 'index'])->name('api.drinks.index');
Route::get('drinks/{drink}', [DrinkController::class, 'show'])->name('api.drinks.show');

// Route for sending emails
Route::post('leads/', [LeadController::class, 'store'])->name('api.leads.store');
