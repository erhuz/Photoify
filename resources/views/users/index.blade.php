@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="#" method="get">
                <input type="text" name="search_query" id="search_query" class="form-control ds-input" placeholder="Search users...">
            </form>
        </div>
    </div>
    <div class="row justify-content-center profile-card-container mt-4">
        @for ($i = 0; $i < 21; $i++)
        <a class="col-xl-2 col-lg-3 col-md-4 col-sm-6 profile-card" href="{{__('yeah, sure')}}">
            <div class="profile-img">
                <div class="profile-img">
                    <img class="rounded-circle" src="https://upload.wikimedia.org/wikipedia/commons/8/89/Portrait_Placeholder.png" alt="User Photo">
                </div>
                <div class="profile-info">
                    <h3>Username</h3>
                </div>
            </div>
        </a>
        @endfor
    </div>
</div>
@endsection
