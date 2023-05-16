@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Student Register Form') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{route('Assign.store')}}">
                            @csrf
                            <div class="d-flex justify-content-center flex-column align-items-center">
                                <div class="col-md-6 mb-2">
                                    <select name="user_id" class="form-select">
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}">
                                                {{ $user->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <select name="classe_id" class="form-select">
                                        @foreach ($classes as $class)
                                            <option value="{{ $class->id }}">
                                                {{ $class->NameClass }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-success">
                                            {{ __('Register Student') }}
                                        </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
