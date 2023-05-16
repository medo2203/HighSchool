@extends('layouts.app')

@section('content')
<h1>Manage Students</h1>
<div>
    <a href='/AddStudents'  class='btn btn-success'>Add students</a>
    <a href="{{route('Assign.create')}}"  class='btn btn-primary' >Assign student to class</a>
    <a href="/Students"  class='btn btn-primary' >View Student list</a>
</div>
@endsection
