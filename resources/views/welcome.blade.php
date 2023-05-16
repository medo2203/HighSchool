@extends('layouts.app')

@section('content')

  @if(Auth::user() && Auth::user()->isTeacher)
    <h1>
      Welcome Teacher 
    </h1>
    <a href='/ManageStudents' class='btn btn-primary'>Manage Student</a>
    <a href='/ManageClasses' class='btn btn-primary'>Manage Classes</a>    
    <a href='/ManageModules' class='btn btn-primary'>Manage Modules</a>    
    <a href='/ManageNotes' class='btn btn-primary'>Manage Notes</a>    
  @elseif(Auth::user() && !Auth::user()->isTeacher)
    <h1>
      Welcome Student 
    </h1>
     <a href='/Classmates' class='btn btn-primary'>View Classmates</a>    
     <a href='/StudentModules' class='btn btn-primary'>View Modules</a>    
  @else
    <h1>
      Welcome Guest 
    </h1>
  @endif

@endsection