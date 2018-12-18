@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row user-profile">
            <div class="col-md-12 col-lg-8">
                    <form action="#" method="post">
                        <label class="mt-3" for="name">Username</label>
                        <input class="form-control ds-input" type="text" value="{{__('Current username')}}">

                        <label class="mt-3" for="email">E-mail</label>
                        <input class="form-control ds-input" type="email" value="{{__('Current Email')}}">

                        <label class="mt-3" for="bio">Biography</label>
                        <textarea class="form-control ds-input" name="bio" id="bio" cols="30" rows="7" placeholder="Tell people who you are!">{{__('Current biography')}}</textarea>

                        <input class="btn btn-primary mt-3" type="submit" value="Submit">
                    </form>
            </div>

            <form action="#" method="post" class="profile-img-form">
                <input type="file" name="image" id="image">
            </form>
            <div class="col-md-12 col-lg-4 profile-img-container">
                <p class="description">Image updates as soon as you choose an image. <span class="img-change">Click it to change!</span></p>
                <div>
                    <img class="profile-img" src="https://upload.wikimedia.org/wikipedia/commons/8/89/Portrait_Placeholder.png" alt="profile picture">
                    <div class="middle">
                        <div class="text">Change</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
