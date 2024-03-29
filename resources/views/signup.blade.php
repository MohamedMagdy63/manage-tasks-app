@extends('layout')
@section('title','Manage Tasks Registeration')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Custom styles for this template-->
    <link rel="stylesheet" href='{{asset("import/assets/fonts/material-icon/css/material-design-iconic-font.min.css")}}'>
    <link href='{{asset("import/assets/css/register-style.css" )}}' rel="stylesheet">
</head>

<body class="bg-gradient-primary">

 <!-- Sign up form -->    
    <section class="signup">
        <div class="container">
            <div class="nt-5">
                @if($errors->any())
                    <div class="col-12">
                        @foreach($errors->all() as $errors)
                            <div class="alert alert-danger">{{$errors}}</div>
                        @endforeach
                    </div>
                @endif

                @if(session()->has('error'))
                    <div class="alert alert-danger">{{session('error')}}</div>
                @endif

                @if(session()->has('success'))
                    <div class="alert alert-success">{{session('success')}}</div>
                @endif
            </div>
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">Sign up</h2>
                    <form method="POST" action="{{route('signup.post')}}" class="register-form" id="register-form">
                        @csrf    
                        <div class="form-group">
                            <label for="First name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="first_name" id="first_name" placeholder="Your First Name"/>
                        </div>
                        <div class="form-group">
                        <label for="Last name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="last_name" id="last_name" placeholder="Your Last Name"/>
                        </div>
                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-email"></i></label>
                            <input type="email" name="email" id="email" placeholder="Your Email"/>
                        </div>
                        <div class="form-group">
                            <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="password" id="password" maxlength="12" minlength="8" placeholder="Password"/>
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                        </div>
                    </form>
                </div>
                <div class="signup-image">
                    <figure><img src='{{asset("import/assets/img/signup-image.jpg")}}' alt="sing up image"></figure>
                    <a href="login" class="signup-image-link">I am already member</a>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
@endsection