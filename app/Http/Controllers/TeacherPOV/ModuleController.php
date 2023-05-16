<?php

namespace App\Http\Controllers\TeacherPOV;

use App\Models\Module;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Modules=Module::all();
        return view('teacher.List.Modules',compact('Modules'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teacher.Add.AddModule');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name=$request->input('name');
        $description=$request->input('description');
        $coefficient=$request->input('coefficient');
        Module::create([
            'name'=>$name,
            'description'=>$description,
            'coefficient'=>$coefficient 
        ]);
        return redirect('/Modules');
    }

    /**
     * Display the specified resource.
     */
    public function show(Module $module)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $Module=Module::find($id);
        return view('teacher.Edit.EditModule',compact('Module'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $Module=Module::find($id);
        $Module->name=$request->input("name");
        $Module->description=$request->input("description");
        $Module->coefficient=$request->input("coefficient");
        $Module->save();
        return redirect('Modules');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $Module=Module::find($id);
        if($Module){
            $Module->delete();
            return redirect('/Modules')->with('success','Module deleted hamdeulilah');
        }
        else{
            return redirect('/Modules')->with('error','Aslan orili lmodule ad');
        }
    }
      public function Manage()
    {
        return view('teacher.Manage.ManageModules');
    }
}
