@extends('layouts.app')

@section('content')
<h1>Manage Notes</h1>
<div>
    <a href='{{route('Notes.create')}}'  class='btn btn-success'>Add students</a>
    <a href="{{route('Notes.index')}}"  class='btn btn-primary' >View Student list</a>
</div>
@endsection