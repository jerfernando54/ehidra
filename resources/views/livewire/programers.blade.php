@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <h1 style="font-size: 2em;"><b>eHidra Programmers List</b></h1>
        <div x-data="{info_open:false}">
            <a @click.prevent="info_open = true" class="btn btn-secondary" type="button" href="#">New Programmer</a>
            <div x-show="info_open">
                <p>
                <strong> You can generate programmer data automatically with the command artisan db: seed</strong>
                </p>
                <p>
                    <i>Note: this information is shown using Apline.Js</i> 
                </p>
                <a @click.prevent="info_open = false" class="btn btn-secondary" type="button" href="#">hide information</a>
            </div>
            
        </div>
        <div class="flex mb-4">
        
        <livewire:programers searchable="name, rol, ciudad, pais" exportable />
        </div>
        </div>
    </div>
</div>

@endsection
