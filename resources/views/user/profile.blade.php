@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row user-profile">
        <div class="col">
            @if ($errors->any())

            @foreach ($errors->all() as $error)

            <div class="row">
                <div class="col alert alert-danger">
                    {{$error}}
                </div>
            </div>
            @endforeach
            @endif
            <div class="row">
                <div class="col">
                    <h2>Account information</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <form action="#{{-- Api? --}}" method="POST">
                        @csrf

                        <label class="mt-3" for="name">Username</label>
                        <input class="form-control ds-input" type="text" value="{{ Auth::user()->name }}">

                        <label class="mt-3" for="email">E-mail</label>
                        <input class="form-control ds-input" type="email" value="{{ Auth::user()->email }}">

                        <label class="mt-3" for="bio">Biography</label>
                        <textarea class="form-control ds-input" name="bio" id="bio" cols="30" rows="7" placeholder="Tell people who you are!">{{ Auth::user()->bio }}</textarea>

                        <input class="btn btn-primary mt-3" type="submit" value="Save">
                    </form>
                </div>

                <form action="/avatar" method="POST" enctype="multipart/form-data" class="profile-img-form">
                    @csrf
                    <input type="file" name="avatar" id="image" accept="image/x-png,image/gif,image/jpeg">
                </form>

                <div class="col-md-12 col-lg-4 profile-img-container">
                    <p class="description">Image updates as soon as you choose an image. <span class="img-change">Click it to change!</span></p>

                    {{-- <pre>
                        @php
                            dd(Storage::url(Auth::User()->avatar));
                        @endphp
                    </pre> --}}

                    <div class="inner-profile-img-container" style="background-image:
                    @if (Auth::User()->avatar === null)
                    url('https://upload.wikimedia.org/wikipedia/commons/8/89/Portrait_Placeholder.png')
                    @else
                    url('{{ Storage::url(Auth::User()->avatar) }}')
                    @endif
                    ">
                    <div class="middle">
                        <div class="text">Change</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="row user-profile mt-4 section-2">
    <div class="col-md-12 col-lg-4 mt-4 manage-posts">
        <div class="row">
            <div class="col">
                <h2>Other</h2>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <a href="{{ route('new post') }}" class="btn btn-primary btn-block">{{__('Create new post')}}</a>
                <a href="{{ route('my posts') }}" class="btn btn-primary btn-block">{{__('Manage my posts')}}</a>
                <a href="{{-- link / action --}}" class="btn btn-danger btn-block">{{__('Delete account')}}</a>
            </div>
        </div>
    </div>

    <div class="col-md-12 col-lg-8 mt-4">
        <div class="row">
            <div class="col">
                <h2>Reset password</h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form action="#" method="POST">
                    @csrf

                    <label class="mt-3" for="password">Password</label>
                    <input class="form-control ds-input" type="password" name="password" id="password">

                    <label class="mt-3" for="c_password">Confirm password</label>
                    <input class="form-control ds-input" type="password" name="c_password" id="c_password">

                    <input class="btn btn-primary mt-3" type="submit" value="Save">
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
