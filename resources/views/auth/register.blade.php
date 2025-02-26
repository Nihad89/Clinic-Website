<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title style: >Register</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,700">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Raleway:400,700');

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
            background: linear-gradient(90deg, #C7C5F4, #cfe7ff);
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .screen {
            background: linear-gradient(90deg, #5D54A4, #7bb2eb);
            position: relative;
            height: 600px;
            width: 360px;
            box-shadow: 0px 0px 24px #5C5696;
        }

        .screen__content {
            z-index: 1;
            position: relative;
            height: 100%;
        }

        .screen__background {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 0;
            -webkit-clip-path: inset(0 0 0 0);
            clip-path: inset(0 0 0 0);
        }

        .screen__background__shape {
            transform: rotate(45deg);
            position: absolute;
        }

        .screen__background__shape1 {
            height: 520px;
            width: 520px;
            background: #FFF;
            top: -50px;
            right: 120px;
            border-radius: 0 72px 0 0;
        }

        .screen__background__shape2 {
            height: 220px;
            width: 220px;
            background: #6C63AC;
            top: -172px;
            right: 0;
            border-radius: 32px;
        }

        .screen__background__shape3 {
            height: 540px;
            width: 190px;
            background: linear-gradient(270deg, #5D54A4, #7bb2eb);
            top: -24px;
            right: 0;
            border-radius: 32px;
        }

        .screen__background__shape4 {
            height: 400px;
            width: 200px;
            background: #7E7BB9;
            top: 420px;
            right: 50px;
            border-radius: 60px;
        }

        .register {
            width: 320px;
            padding: 30px;
            padding-top: 156px;
        }

        .register__field {
            padding: 20px 0px;
            position: relative;
        }

        .register__icon {
            position: absolute;
            top: 30px;
            color: #7875B5;
        }

        .register__input {
            border: none;
            border-bottom: 2px solid #D1D1D4;
            background: none;
            padding: 10px;
            padding-left: 24px;
            font-weight: 700;
            width: 75%;
            transition: .2s;
        }

        .register__input:active,
        .register__input:focus,
        .register__input:hover {
            outline: none;
            border-bottom-color: #6A679E;
        }

        .register__submit {
            background: #fff;
            font-size: 14px;
            margin-top: 30px;
            padding: 16px 20px;
            border-radius: 26px;
            border: 1px solid #D4D3E8;
            text-transform: uppercase;
            font-weight: 700;
            display: flex;
            align-items: center;
            width: 100%;
            color: #4C489D;
            box-shadow: 0px 2px 2px #5C5696;
            cursor: pointer;
            transition: .2s;
        }

        .register__submit:active,
        .register__submit:focus,
        .register__submit:hover {
            border-color: #6A679E;
            outline: none;
        }

        .button__icon {
            font-size: 24px;
            margin-left: auto;
            color: #7875B5;
        }

        .social-login {
            position: absolute;
            height: 140px;
            width: 160px;
            text-align: center;
            bottom: 0px;
            right: 0px;
            color: #fff;
        }

        .social-icons {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .social-login__icon {
            padding: 20px 10px;
            color: #fff;
            text-decoration: none;
            text-shadow: 0px 0px 8px #7875B5;
        }

        .social-login__icon:hover {
            transform: scale(1.5);
        }
    </style>
</head>
<body>
<div class="container">
    <div class="screen">
        <div class="screen__content">
            <h2 class="register__field" style="text-align: left; padding: 20px 10px" >{{ __('SIGN UP') }}</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="register__field">
                    <i class="register__icon fa fa-user"></i>
                    <input id="name" class="register__input" type="text" name="name" :value="old('name')" placeholder="{{ __('Name') }}" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="custom-error" />
                </div>

                <div class="register__field">
                    <i class="register__icon fa fa-envelope"></i>
                    <input id="email" class="register__input" type="email" name="email" :value="old('email')" placeholder="{{ __('Email') }}" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="custom-error" />
                </div>

                <div class="register__field">
                    <i class="register__icon fa fa-lock"></i>
                    <input id="password" class="register__input" type="password" name="password" placeholder="{{ __('Password') }}" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="custom-error" />
                </div>

                <div class="register__field">
                    <i class="register__icon fa fa-lock"></i>
                    <input id="password_confirmation" class="register__input" type="password" name="password_confirmation" placeholder="{{ __('Confirm Password') }}" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="custom-error" />
                </div>

                <div class="flex items-center justify-between"style="text-align: right; padding: 20px 10px" >
                    <a class="text-sm text-white hover:text-gray-200 focus:outline-none focus:ring focus:ring-indigo-500" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <button type="submit" class="register__submit">
                        {{ __('Register') }}
                        <i class="button__icon fa fa-user-plus"></i>
                    </button>
                </div>
            </form>
        </div>
        <div class="screen__background">
            <div class="screen__background__shape screen__background__shape1"></div>
            <div class="screen__background__shape screen__background__shape2"></div>
            <div class="screen__background__shape screen__background__shape3"></div>
            <div class="screen__background__shape screen__background__shape4"></div>
        </div>
    </div>
</div>
</body>
</html>
