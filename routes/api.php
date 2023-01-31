<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::apiResource('product', \App\Http\Controllers\API\ProductController::class);
Route::apiResource('category', \App\Http\Controllers\API\CategoryController::class);
Route::apiResource('advertisment', \App\Http\Controllers\API\AdvertismentController::class);
Route::apiResource('business', \App\Http\Controllers\API\BusinessController::class);
Route::apiResource('comment', \App\Http\Controllers\API\CommentController::class);
Route::apiResource('customer', \App\Http\Controllers\API\CustomerController::class);
Route::apiResource('feedback', \App\Http\Controllers\API\FeedbackController::class);
Route::apiResource('partner', \App\Http\Controllers\API\PartnerController::class);
Route::apiResource('style', \App\Http\Controllers\API\StyleController::class);
Route::apiResource('order', \App\Http\Controllers\API\OrderController::class);