<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('admin.roles.index',compact('roles'));
    }

   
    public function create()
    {
        return view('admin.roles.create');
    }


    public function store(Request $request)
    {
        
        $validated = $request->validate([
            'name' => 'required|string|min:3',
        ]);

        
        Role::create([
            'name' => $validated['name'],
            'guard_name' => 'web',
        ]);

        
        return redirect()->route('admin.roles.index')->with('success', 'Role added successfully');
    }

    public function edit($id)
    {
        $role = Role::find($id);

        return view('admin.roles.edit',compact('role'));
    }

    public function update(Request $request,$id)
    {
       $validated = $request->validate([
            'name' => 'required|string|min:3',
        ]);

        $role = Role::find($id);

        $role->update([
            'name' => $validated['name'],
        ]);


        return redirect()->route('admin.roles.index')->with('success', 'Role updated successfully');


    }


}
