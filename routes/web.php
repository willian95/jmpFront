<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VacancyController;
use App\Http\Controllers\ApplianceController;

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

Route::view('/carreers', "carreers");

Route::view('/contact', "contact");

Route::view('/services', "services");

Route::view('/resources', "resources");

Route::get("/vacancies/{country_id}", [VacancyController::class, "getVacanciesByCountry"]);

Route::post("/appliance/store", [ApplianceController::class, "storeAppliance"]);