<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Project;
use Illuminate\Http\Request;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class HomeController extends Controller
{
    public function home(){
        // $locale = LaravelLocalization::getCurrentLocaleDirection();
        $projects = Project::latest()->get();
        $employees = Employee::all();
        return view('welcome', [
            'projects' => $projects,
            'employees' => $employees,
        ]);
    }
}
