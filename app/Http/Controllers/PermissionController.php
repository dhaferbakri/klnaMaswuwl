<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Permission;

class PermissionController extends Controller
{

    public function index()
    {
        $permissions = Permission::orderby('id','desc')->get();
        return view('permissions.index', compact('permissions'));
    }

    public function create()
    {
        return view('permissions.create');
    }

    public function store(Request $request)
    {
        $date = request()-> validate([
            'name' => 'required',
            'identity' => 'required',
            'phone' => 'required',
            'city' => 'required',
            'district' => 'required'

        ]);

        $permission = new Permission();
        $permission->name = request('name');
        $permission->identity = request('identity');
        $permission->phone = request('phone');
        $permission->city = request('city');
        $permission->district = request('district');

        $permission->save();


        return redirect('permissions');
    }

    public function show($id)
    {
        $permission =Permission::find($id);
        return view('permissions.show',compact('permission'));
    }

}
