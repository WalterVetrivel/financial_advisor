<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PlanningService;
use App\InsuranceService;

class MainController extends Controller
{
    public function home() {
        $planning_services = PlanningService::all();
        $insurance_services = InsuranceService::all();
        return view('home', compact('planning_services', 'insurance_services'));
    }
}
