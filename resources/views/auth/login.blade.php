<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.shared/title-meta', ['title' => "Login"])

    @include('layouts.shared/head-css')

    <link rel="stylesheet" href="{{ asset('/assets/css/styles.css') }}">

</head>

<body>

<div class=" from-rose-100 to-teal-100 dark:from-gray-700 dark:via-gray-900 dark:to-black">


    <div class="h-screen w-screen flex justify-center items-center">

        <div class="2xl:w-1/4 lg:w-1/3 md:w-1/2 w-full">
            <div class="card overflow-hidden sm:rounded-md rounded-none">
                <div class="p-6 back-color">
                    <a href="{{ route('any', 'index') }}" class="logo-gobierno mb-8">
                        <img class="logo" src="/images/logo.png" alt="">
                    </a>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2"
                                   for="LoggingEmailAddress">Nombre del Usuario:</label>
                            <input id="LoggingEmailAddress" class="form-input" type="text"
                                   placeholder="Enter your email" value="user" name="user_name" id="user_name" required>
                        </div>

                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2"
                                   for="loggingPassword">Contraseña: </label>
                            <input id="loggingPassword" class="form-input" type="password"
                                   placeholder="Enter your password" value="password" name="password" id="password" required>
                        </div>

                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center">
                                <input type="checkbox" class="form-checkbox rounded" id="checkbox-signin">
                                <label class="ms-2" for="checkbox-signin">Remember me</label>
                            </div>

                        </div>

                        <div class="flex justify-center mb-6">
                            <button class="btn w-full text-white bg-primary"> Log In</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

</div>

</body>

</html>
