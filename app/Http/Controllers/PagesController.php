<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use DB;
use App\Http\Requests;

class PagesController extends Controller
{
    public function index(){
        $title ='Welcome to CSEARCHIVE';
        return view ('pages.index');
    }
public function about(){
    return view ('pages.about');
}
public function service(){
    return view ('pages.service');
}
public function test(){
    return view ('pages.iindex');
}
public function project(){
$projects = Project::orderBy('created_at','desc')->paginate(10);
return view("projects.index", ["projects" => $projects]);
}

}
