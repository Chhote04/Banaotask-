@extends('front.master')
@section('content')
    <section class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h1>Welcome to Task 1</h1>
            </div>
        </div>
    </section>


    <section class="profile-authentication-area ptb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="login-form">
                        <h2>Login</h2>
                        <form action="login_verification" method="post">
                            @csrf
                            <div class="form-group">
                                <label>email</label>
                                <input type="text" name="email" class="form-control" placeholder="Email">

                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Password">
                            </div>
                            <span>
                                @error('password')
                                    <b>
                                        {{$message}}
                                    </b>
                                @enderror
                            </span>
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6 col-sm-6 remember-me-wrap">

                                </div>

                            </div>
                            <button class="btn btn-primary" type="submit">Log In</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="register-form">
                        @if (Session::has('error'))
                        <div class="alert alert-sm alert-danger alert-block" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                            <strong>{!! session('error') !!}</strong>
                        </div>
                    @endif
                        <h2>Register</h2>
                        <form action="{{ url('/user_insert') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name"  class="form-control" placeholder="Name">
                            </div>
                            <span>
                                @error('name')
                                    <b>
                                        {{$message}}
                                    </b>
                                @enderror
                            </span>
                            <p class="description">The Name should be Latters only.</p>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Password">
                            </div>
                            <span>
                                @error('password')
                                    <b>
                                        {{$message}}
                                    </b>
                                @enderror
                            </span>
                            <p class="description">The password should be at least eight characters long.</p>
                            <button class="btn btn-primary" type="submit">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
