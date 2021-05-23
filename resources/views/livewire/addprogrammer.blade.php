@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('New Programmer') }}</div>

                <div class="card-body">
                    <p>
                    You can generate programmer data automatically with the command artisan db: seed
                    </p>
                    <a class="btn btn-secondary" type="button" href="{{url('/programers')}}">go back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
