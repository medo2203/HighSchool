@extends('layouts.app')

@section('content')
    <h1>Students</h1>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Class &nbsp &nbsp</th> 
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->name }} &nbsp &nbsp</td> 
                    <td>{{ $student->email }}&nbsp &nbsp</td>
                    <td>{{  $student->NameClass}}</td> 
                    <td>     
                        <a href='/Students/{{$student->id}}/edit' class='btn btn-primary'>Edit</a></button>
                       <form action='/Students/{{$student->id}}' method='POST' style='display:inline'>
                         @csrf
                        @method('DELETE')
                        <button type="submit" class='btn btn-danger'>Delete</button>       
                       </form>
                     
                    </td>
                </tr>
       
            @endforeach
        </tbody>
    </table>
@endsection
