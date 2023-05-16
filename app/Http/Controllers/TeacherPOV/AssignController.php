<?php

namespace App\Http\Controllers\TeacherPOV;

use Illuminate\Http\Request;
use App\Models\Classe;
use App\Models\Classing;
use App\Models\User;
use App\Http\Controllers\Controller;

class AssignController extends Controller
{
    /**
     * Display a listing of the resource.rkhkjrg
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $classes = Classe::all();
        $users = User::all();
        return view('teacher.Add.Assign', compact('users','classes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $class_user = Classing::create([
            'user_id' => $request->input('user_id'),
            'classe_id' => $request->input('classe_id'),
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
