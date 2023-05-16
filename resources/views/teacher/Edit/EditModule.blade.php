@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Module Edit Form') }}</div>

                <div class="card-body">
                    <form method="POST" action='/Modules/{{$Module->id}}'>
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __(' Module Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" placeholder="{{$Module->name}}" value="{{$Module->name}}"  required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="description" class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="description" placeholder="{{$Module->description}}" value="{{$Module->description}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="coefficient" class="col-md-4 col-form-label text-md-end">{{ __('Module Coefficient') }}</label>

                            <div class="col-md-6">
                                <input type="number" class="form-control" name="coefficient" placeholder="{{$Module->coefficient}}" value="{{$Module->coefficient}}">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Apply Changes') }}
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
