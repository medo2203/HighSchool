<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classe;
use Illuminate\Support\Facades\DB;

class TeacherNotesController extends Controller
{
    public function manage()
    {
        return view('teacher.Manage.ManageNotes');
    }
    public function filter($id)
    {
        $students = DB::table('users')
                ->join('classe_user')
                ->on('users.id', '=' , 'classe_user.user_id');
                // ->select('name')
        return view('teacher.Manage.ManageNotes');
    }
}
