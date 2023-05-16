<?php

namespace App\Http\Controllers\TeacherPOV;

use App\Models\User;
use App\Models\Classe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class StudentController extends Controller
{
    /**
     * Show the form for creating a new student.
     *
     * @return \Illuminate\Http\Response
     */
   protected function Index()
    {
        $students = DB::table('users')
                ->join('classings', 'classings.user_id', '=', 'users.id')  
                ->join('classes', 'classes.id', '=', 'classings.classe_id')
                ->where('users.isTeacher',false)
                ->select('users.*', 'classes.NameClass')
                ->get();
        // dd($students);
        return view('teacher.List.Students', compact('students'));  
    }

    /**
     * Store a newly created student in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function Student(Request $request)
    {
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'isTeacher' => false,
        ]);
    }

        protected function Show()
        {
        $classes = Classe::all();
        return view('teacher.Add.AddStudents',compact("classes"));
        
    }
        protected function Manage()
    {
        return view('teacher.Manage.ManageStudents');
        
    }
        protected function edit($id)
    {
        $student = User::find($id);
        $classes = Classe::all();
        return view('teacher.Edit.EditStudent', compact('student',"classes"));
   
    }
        protected function update(Request $request,$id)
    {
        $user = User::find($id);
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->password=Hash::make($request->input('password'));
        $user->save();
        $selected_class_id = $request->input('class');
        $user->classes()->sync([$selected_class_id]);
       return redirect('Students');
    }
       protected function destroy($id)
    {
        $student = User::find($id);
        if ($student) {
            $student->classes()->detach();
            $student->delete();
            return redirect('/Students')->with('success', 'Student deleted successfully');
        }
        else {
            return redirect('/Students')->with('error', 'Student not found');
        }
   
    }
    //     protected function showClass(Request $request){
    //     $Selected=intval($request->input("selectedclass"));
    //     $classid = DB::table('classes')
    //     ->select('id')
    //     ->where('NameClass', $Selected)
    //     ->first();
    //     $allclasses=DB::table('classes')
    //     ->select('classes.NameClass');
    //     $classes = Classe::find($classid->id);
    //     $users = DB::table('users')
    //     ->join('classe_user', 'classe_user.user_id', '=', 'users.id')
    //     ->join("classes",'classe_user.classe_id','=','classes.id')
    //     ->select('users.name','users.email','classes.NameClass','users.id')
    //     ->where('users.isTeacher', 0)
    //     ->where('classe_user.classe_id', '=', $classid->id)
    //     ->get();
    //     return view('teacher.List.Students', with('users'));  
    // }


}
