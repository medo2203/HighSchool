@extends('layouts.app')

@section('content')

    <table>
        <thead>
            <tr>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
       @foreach($Classes as $Class)
    <tr>
        <td>{{ $Class->NameClass }}</td>
         <td>     
                       <form action='/Classes/{{$Class->id}}' method='POST' style='display:inline'>
                         @csrf
                        @method('DELETE')
                        <button type="submit" class='btn btn-danger'>Remove</button>       
                       </form>
                     
                    </td>
    </tr>
@endforeach
        </tbody>
    </table>
@endsection
