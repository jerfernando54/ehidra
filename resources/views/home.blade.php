@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <h1 style="font-size: 2em;"><b>eHidra Users List</b></h1>
        <div class="flex mb-4">
            <livewire:usersehidra searchable="name, email" />
        </div>
        </div>
    </div>
</div>

@endsection
