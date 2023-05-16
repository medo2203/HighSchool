@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-header">{{ __('Notes Registering') }}</div>

                    <div class="card-body">
                        <form method="POST" action='/Modules'>
                            @csrf
                            <div class="mb-3 d-flex justify-content-center align-items-center ">
                                <label for="name"
                                    class="form-label text-md-end m-2">{{ __('Select classe') }}</label>
                                <div class="m-2 col-6">
                                    <select name="classToshow" class="form-select ">
                                        <option value="" selected disabled>select a module</option>
                                        @foreach ($classes as $classe)
                                        <option value="{{ $classe->id }}">{{ $classe->NameClass }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="m-2">
                                    <button class="btn btn-outline-success">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
