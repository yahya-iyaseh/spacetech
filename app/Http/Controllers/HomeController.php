<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Project;
use Illuminate\Http\Request;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class HomeController extends Controller
{
    public function home()
    {
        // $locale = LaravelLocalization::getCurrentLocaleDirection();
        $projects = Project::latest()->get();
        $employees = Employee::where('active', 1)->get();
        return view('welcome', [
            'projects' => $projects,
            'employees' => $employees,
        ]);
    }
}
