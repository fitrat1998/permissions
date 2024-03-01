<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Permission;


class PermissionController extends Controller
{
    public function index()
    {
        $permissions = Permission::all();

        return view('admin.permissions.index',compact('permissions'));
    }


    public function create()
    {
        return view('admin.permissions.create');
    }


    public function store(Request $request)
    {
        
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        
        Permission::create([
            'name' => $validated['name'],
        ]);

        
        return redirect()->route('admin.permissions.index')->with('success', 'Permission added successfully');
    }





}
