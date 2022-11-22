<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Http\Requests\StoreadminRequest;
use App\Http\Requests\UpdateadminRequest;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $admins = admin::orderBy('created_at','desc');
        return view('admins.index')-> with(['admins'=> $admins]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admins.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreadminRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreadminRequest $request)
    {
         //
                $this->validate($request , [
                    'firstname' => 'required',
                    'email' => 'required',
                    'lastname' => 'required',
                    'phone' => 'required',
                    'gender' => 'required',
                    'department' => 'required',
                ]);


        $admin = new admin();
        $admin->fisrtname = $request->input('fisrtname');
        $admin->lastname = $request->input('lastname');
        $admin->email = $request->input('email');
        $admin->gender = $request->input('gender');
        $admin->phone = $request->input('phone');
        $admin->department = $request->input('department');
        $admin->save();

        return redirect ('/admins')->with('success', 'admin added successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(admin $admin)
    {
        //

        $admin = admin::find($id);
        return view ('admins.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateadminRequest  $request
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateadminRequest $request, admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(admin $admin)
    {
        //
    }

    //creating roles and permissions to be used in our project

    public function addroles(){


        //roles to the users of the project

        $admin_role = Role::create(['name' => 'admin']);
        $lecture_role = Role::create(['name' => 'lecturer']);
        //permissions of the project

        Permission::create(['name' =>'create_lecturers']);
        Permission::create(['name'=>'view_lecturers',]);
        Permission::create(['name'=>'update_lectures']);
        Permission::create(['name'=>'remove_lecturers']);
        Permission::create(['name'=>'insert_projects']);
        Permission::create(['name'=>'view_projects']);
        Permission::create(['name'=>'edit_projects']);
        Permission::create(['name'=> 'remove_projects']);

        //assining permissions to the roles

        //admin role

        $admin_role->givePermissionTo(['create_lecturers', 
            'view_lecturers',
            'update_lectures',
            'remove_lecturers',
            'insert_projects',
            'view_projects',
            'edit_projects',
            'remove_projects']);

        //lecturer role

        $lecture_role->givePermissionTo( [
            'insert_projects',
            'view_projects',
            'edit_projects']);

    }
}
