@extends('layouts.app')

@section('content')
<h1>Modules</h1>
  <table>
        <thead>
            <tr>
                <th>Name  &nbsp  &nbsp</th>
                <th>Description  &nbsp  &nbsp</th>
                <th>Coefficient  &nbsp  &nbsp</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
       @foreach($Modules as $Module)
    <tr>
        <td>{{ $Module->name }}  &nbsp </td>
        <td>{{ $Module->description }}</td>
        <td>{{ $Module->coefficient }}</td>
            <td>     
            <a href='/Modules/{{$Module->id}}/edit' class='btn btn-primary'>Edit</a></button>
            <form action='/Modules/{{$Module->id}}' method='POST' style='display:inline'>
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
