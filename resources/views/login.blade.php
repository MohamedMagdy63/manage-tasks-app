@extends('layout')
@section('title','Manage Tasks Login')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='{{asset("import/assets/fonts/material-icon/css/material-design-iconic-font.min.css")}}'>
    <link href='{{asset("import/assets/css/register-style.css")}}' rel="stylesheet">
</head>
<body>
    <section class="sign-in">
        <div class="container">
            <div class="nt-5">
            </div>
            <div class="signin-content">
                <div class="signin-image">
                    <figure><img src='{{asset("import/assets/img/signin-image.jpg")}}' alt="sing up image"></figure>
                    <a href="signup" class="signup-image-link">Create an account</a>
                </div>

                <div class="signin-form">
                    <h2 class="form-title">Login</h2>
                    <form method="POST" action="{{route('login.post')}}" class="register-form" id="login-form">
                        @if(Session::has('success'))
                            <div class="alert alert-success">{{Session::get('success')}}</div>
                        @endif

                        @if(Session::has('fail'))
                            <div class="alert alert-danger">{{Session::get('fail')}}</div>
                        @endif

                        @csrf
                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-email"></i></label>
                            <input type="text" name="email" id="email" placeholder="Your Email"/>
                            <span class="text-danger">@error('email'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="password" id="password" placeholder="Password"/>
                            <span class="text-danger">@error('password'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
@endsection
