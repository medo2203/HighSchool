<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Classe;

class StudentPOVController extends Controller
{
       protected function index()
    {
        $student = User::findOrFail(auth()->id());
        $classes = $student->classes;
        dd($classes);
        $classmates = User::whereHas('classes', function ($query) use ($classes) {
            $query->whereIn('classe_id', $classes->pluck('id'));
        })->where('id', '!=', $student->id)->get();

    return view('student.Classmates', compact('classmates'));
    }

    protected function show(){
        // 
    }
}
