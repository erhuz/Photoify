@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center post-card-container">

        <div class="col-md-10 col-lg-4 side-menu">
            <div class="card">

                <a href="{{ route('profile') }}">
                    <div class="card-header">
                        <div class="profile-picture-container">
                            <img class="profile-picture rounded-circle" src="https://upload.wikimedia.org/wikipedia/commons/8/89/Portrait_Placeholder.png" alt="{{ Auth::user()->name }}">
                        </div>
                        <h5>{{ Auth::user()->name }}</h5>
                    </div>
                </a>

                <div class="card-body">
                    <a class="btn btn-primary btn-block" href="{{ route('my posts') }}">My posts</a>
                    <a class="btn btn-primary btn-block" href="{{ route('new post') }}">New post</a>
                    <a class="btn btn-primary btn-block" href="#">Something else</a>
                </div>

            </div>
        </div>

        <div class="col-md-10 col-lg-6">
            @for ($i = 1; $i < 20; $i++)
            <div class="row post">
                <div class="col">
                    <div class="card">

                        <div class="card-header">
                            <div class="profile-picture-container">
                                <img class="profile-picture rounded-circle" src="https://upload.wikimedia.org/wikipedia/commons/8/89/Portrait_Placeholder.png" alt="">
                            </div>
                            <h5 class="card-title"><a href="{{__('User link')}}">{{__('Username')}}</a></h5>
                        </div>

                        <a class="card-image" href="#{{__('Post page')}}">
                            <img class="" src="https://via.placeholder.com/{{mt_rand(5,20) * 100}}x{{mt_rand(5,20) * 100}}"
                            alt="Card image cap">
                        </a>

                        <div class="card-body">
                            <div class="card-text">
                                <p>Some quick example text to build on the card title and make up the bulk of the
                                    card's content.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                @endfor
            </div>
        </div>
    </div>
    @endsection
