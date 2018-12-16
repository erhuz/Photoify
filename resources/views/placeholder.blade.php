@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Placeholder</div>

                <div class="card-body">

                    <h2>Action</h2>
                    <p>{{Route::currentRouteAction()}}</p>

                    <h2>Name</h2>
                    <p>{{Route::currentRouteName()}}</p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
