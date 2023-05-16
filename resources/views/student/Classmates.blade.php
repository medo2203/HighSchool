@extends('layouts.app')

@section('content')
  <h1>Classmates List</h1>
   <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($classmates as $classmate)
                <tr>
                    <td>{{ $classmate->name }} &nbsp &nbsp</td> 
                    <td>{{ $classmate->email }}&nbsp &nbsp</td>
                  
       
            @endforeach
@endsection
