<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Admin;
use App\Models\User;
use DB;
use App\Http\Requests;
use validator;

class ProjectsController extends Controller
{



    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show']]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // DB::select('select * from projects where id = ?', [1]);
        $projects = Project::orderBy('created_at','desc')->paginate(10);
        // $projects = DB::select('SELECT * FROM projects');
        // $projects = Project::all();
        // return view('projects.index')-> with('projects', $projects);
        // $projects = DB::table('projects')->select('*')->get();
        return view("projects.index", ["projects" => $projects]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request , [
            'title' => 'required',
            'owner' => 'required',
            'abstract' => 'required',
            'department' => 'required',
            'domain' => 'required',
            'accademic_year' => 'required',
            'supervisor' => 'required',
            'pdf_version' => 'required|nullable'
        ]);

        //uplaoding pdf_version file

        if($request->hasFile('pdf_version')){
            // Get filename with the extension
            $filenameWithExt = $request->file('pdf_version' )->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just Ext
            $extension = $request->file('pdf_version' )->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename. '_'.time().'.'.$extension;
            //upload image
            $path = $request->file('pdf_version')->storeAs('public/pdf_files/',$fileNameToStore);
        }
        else{
            $fileNameToStore = 'nofile.pdf';
        }


        $project = new Project();
        $project->title = $request->input('title');
        $project->abstract = $request->input('abstract');
        $project->owner = $request->input('owner');
        $project->accademic_year = $request->input('accademic_year');
        $project->department = $request->input('department');
        $project->domain = $request->input('domain');
        $project->supervisor = $request->input('supervisor');
        $project->pdf_version = $fileNameToStore;
        $project->user_id = auth()->User()->id;
        $project->save();

        return redirect ('/projects')->with('success', 'Project added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //diaplaying project

        $project = Project::find($id);
        return view ('projects.show')->with('project', $project);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $project = Project::find($id);

        //check for the correct users

        if(auth()->user()->id != $project->user_id){
            return redirect ('/projects')->with('error','unauthorized page');
        }
        return view ('projects.edit')->with('project',$project);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request , [
            'title' => 'required',
            'owner' => 'required',
            'abstract' => 'required',
            'department' => 'required',
            'domain' => 'required',
            'accademic_year' => 'required',
            'supervisor' => 'required',
            'pdf_version' => 'required|nullable'
        ]);

        //uplaoding pdf_version file

        if($request->hasFile('pdf_version')){
            // Get filename with the extension
            $filenameWithExt = $request->file('pdf_version' )->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just Ext
            $extension = $request->file('pdf_version' )->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename. '_'.time().'.'.$extension;
            //upload pdf
            $path = $request->file('pdf_version')->storeAs('public/pdf_files/',$fileNameToStore);
        }

        //updating project information

        $project = Project::find($id);

        $project->title = $request->input('title');
        $project->abstract = $request->input('abstract');
        $project->owner = $request->input('owner');
        $project->accademic_year = $request->input('accademic_year');
        $project->department = $request->input('department');
        $project->domain = $request->input('domain');
        $project->supervisor = $request->input('supervisor');
        if($request->hasFile('pdf_version')){
        // $project->pdf_version =$fileNameToStore;
        }
        $project->save();

        return redirect ('/projects')->with('success', 'Project updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        //Deleting project controller
        $project = project::find($id);

        $project->delete();
        return redirect('/projects')->with('success','project deleted successfully');
    }
}
