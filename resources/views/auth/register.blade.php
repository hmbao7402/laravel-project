<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Click Us - Đăng ký</title>
    <script src="https://kit.fontawesome.com/4b2db38072.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- style -->
    <link rel="stylesheet" href="{{url('homePage\css/style.css')}}">
    <link rel="stylesheet" href="{{url('css/app.css')}}">
    <link rel="stylesheet" href="{{url('product-list/css/styles.css')}}">
    <link rel="stylesheet" href="{{url('header/css/styles.css')}}">
    <link rel="stylesheet" href="{{url('footer/css/styles.css')}}">
    <style>
        .loginbody {
            background-image: url('https://mdbootstrap.com/img/Photos/Others/images/76.jpg');
        }
    </style>
</head>

<body>
    <div class="loginbody">
        @include('header.header')

        <div class="form-group">
            <div class="loginbody">
                <x-guest-layout>
                    <x-auth-card>
                        <x-slot name="logo">

                        </x-slot>
                        <div class="d-flex align-items-center justify-content-center">
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        </div>
                        <div class="d-flex align-items-center justify-content-center">
                            <!-- Validation Errors -->


                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <!-- Name -->
                                <div>
                                    <x-label for="name" :value="__('Name')" />

                                    <x-input id="name" class="mt-1" type="text" name="name" :value="old('name')" required autofocus />
                                </div>

                                <!-- Email Address -->
                                <div class="mt-4">
                                    <x-label for="email" :value="__('Email')" />

                                    <x-input id="email" class="mt-1 " type="email" name="email" :value="old('email')" required />
                                </div>

                                <!-- Password -->
                                <div class="mt-4">
                                    <x-label for="password" :value="__('Password')" />

                                    <x-input id="password" class="block mt-1 " type="password" name="password" required autocomplete="new-password" />
                                </div>

                                <!-- Confirm Password -->
                                <div class="mt-4">
                                    <x-label for="password_confirmation" :value="__('Confirm Password')" />

                                    <x-input id="password_confirmation" class="mt-1" type="password" name="password_confirmation" required />
                                </div>

                                <div class="flex items-center justify-end mt-4">
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                        {{ __('Bạn đã có tài khoản?') }}
                                    </a>

                                    <x-button class="ml-4">
                                        {{ __('Đăng ký') }}
                                    </x-button>
                                </div>
                            </form>
                        </div>
                    </x-auth-card>
                </x-guest-layout>
            </div>

        </div>
        @include('footer.footer')
    </div>
</body>

</html>