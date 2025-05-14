@extends('layouts/blankLayout')

@section('page-script')
    <script src="{{ asset('assets/js/form-basic-inputs.js') }}"></script>
@endsection

@section('content')
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <title>Register</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
            integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
            crossorigin="anonymous" referrerpolicy="no-referrer">
    </head>

    <body>
        <div class="register">
            <h1>Sign-Up</h1>
            @if (Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('success') }}
                </div>
            @endif

            <form action="{{ route('register') }}" method="POST">
                @csrf
                <label for="username">
                    <i class="fas fa-user"></i>
                </label>
                <input type="text" class="form-control" name="name" placeholder="name" id="name" required>
                <label for="email">
                    <i class=" fas fa-envelope"></i>
                </label>
                <input type="email" name="email" class="form-control" placeholder="email" id="email" required>
                <label for="password">
                    <i class="fas fa-lock"></i>
                </label>
                <input type="password" class="form-control" name="password" placeholder="password" id="password" required>
                <p class="text-dark">Sudah Punya Akun? <a class="bs-light-border-subtle" href="{{ route('login') }}">Log
                        In</a></p>
                <input type="submit" value="Sign-Up">
            </form>
        </div>
    </body>

    </html>
@endsection

<style>
    * {
        box-sizing: border-box;
        font-family: -apple-system, BlinkMacSystemFont, "segoe ui", roboto, oxygen, ubuntu, cantarell, "fira sans", "droid sans", "helvetica neue", Arial, sans-serif;
        font-size: 16px;
    }

    body {
        background-color: #435165;
        margin: 0;
    }

    .register {
        width: 400px;
        background-color: #ffffff;
        box-shadow: 0 0 9px 0 rgba(0, 0, 0, 0.3);
        margin: 100px auto;
    }

    .register h1 {
        text-align: center;
        color: #5b6574;
        font-size: 24px;
        padding: 20px 0 20px 0;
        border-bottom: 1px solid #dee0e4;
    }

    .register form {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        padding-top: 20px;
    }

    .register form label {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 50px;
        height: 50px;
        background-color: #3274d6;
        color: #ffffff;
    }

    .register form input[type="password"],
    .register form input[type="text"],
    .register form input[type="email"] {
        width: 310px;
        height: 50px;
        border: 1px solid #dee0e4;
        margin-bottom: 20px;
        padding: 0 15px;
    }

    .register form input[type="submit"] {
        width: 100%;
        padding: 15px;
        margin-top: 20px;
        background-color: #3274d6;
        border: 0;
        cursor: pointer;
        font-weight: bold;
        color: #ffffff;
        transition: background-color 0.2s;
    }

    .register form input[type="submit"]:hover {
        background-color: #2868c7;
        transition: background-color 0.2s;
    }
</style>
