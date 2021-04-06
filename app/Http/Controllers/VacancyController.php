<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vacancy;

class VacancyController extends Controller
{
    function getVacanciesByCountry($country_id){

        $vacancies = Vacancy::where("country_id", $country_id)->get();
        return response()->json(["vacancies" => $vacancies]);

    }
}
