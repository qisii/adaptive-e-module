<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }} | @yield('title')</title>

    {{-- tailwindcss --}}
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    {{-- external css --}}
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    {{-- Remix Icons --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.css" integrity="sha512-kJlvECunwXftkPwyvHbclArO8wszgBGisiLeuDFwNM8ws+wKIw0sv1os3ClWZOcrEB2eRXULYUsm8OVRGJKwGA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- DaisyUI --}}
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body 
    class="bg-cover bg-no-repeat bg-center text-gray-900 min-h-screen m-0 p-0"
    style="background-image: url('{{ asset('assets/images/bg-img.png') }}');"
>
    <nav class="bg-white shadow-sm py-4">
        <div class="w-[85%] mx-auto flex items-center justify-between">
            <div class="w-1/2">
                <h1 class="text-2xl font-bold text-blue-900" style="font-family: 'Poppins', sans-serif;">
                    {{ config('app.name') }}
                </h1>
            </div>

            @if (Route::has('login'))
                <div class="w-1/2 text-right flex justify-end items-center" style="font-family: 'Inter', sans-serif;">

                    <a href="#home" class="text-gray-700 hover:text-blue-700 transition-colors duration-200 mx-2">Home</a>
                    <a href="#about" class="text-gray-700 hover:text-blue-700 transition-colors duration-200 mx-2">About</a>

                    @auth
                        {{-- If user is logged in --}}
                        <a href="{{ url('/profile/show') }}"
                            class="px-6 py-3 border border-blue-800 text-blue-800 rounded-lg hover:bg-blue-50 transition duration-200 mx-2">
                            Dashboard
                        </a>
                    @else
                        {{-- If user is a guest --}}
                        <a href="{{ route('login') }}"
                            class="px-6 py-3 border border-blue-800 text-blue-800 rounded-lg hover:bg-blue-50 transition duration-200 mx-2">
                            Login
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="px-6 py-3 border border-blue-500 bg-gradient-to-r from-blue-500 to-blue-900 bg-[length:150%_150%] bg-left text-white rounded-lg transition-all duration-500 ease-in-out mx-2 hover:bg-right">
                                Get Started
                                <i class="ri-arrow-right-line ml-3"></i>
                            </a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </nav>

    <main class="">
        <div class="w-full mt-16 mx-auto">
            {{-- Page content here --}}
            @yield('content')
        </div>
    </main>
</body>
</html>