<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

use App\Http\Controllers\JourneyController;
Route::get("/journeys/{vehicle}", [JourneyController::class, 'elso_feladat'])->missing(function() {
    return response()->json("A megadott járművel nem érhető el utazási ajánlat.", 404);
});

Route::post("/journey", [JourneyController::class, 'masodik_feladat']);


Route::delete("/journey/{journey}", [JourneyController::class, 'harmadik_feladat'])->missing(function() {
    return response()->json("Az ajánlat nem létezik.", 404);
});