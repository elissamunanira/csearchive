<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\User;

class DashboardController extends Controller
{
    public function index(){
        $projects = Project::all();
        return view('dashboard.index')->with('project', $projects);
    }

}
