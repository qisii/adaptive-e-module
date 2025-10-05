<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }} | Welcome</title>

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
    
</head>
<body class="bg-[#F9FAFB] min-h-screen m-0 p-0 relative">
    <nav class="bg-transparent py-10 absolute top-0 left-0 w-full z-50">
        <div class="w-full flex justify-center items-center" style="font-family: 'Poppins', sans-serif;">
            <a href="{{ route('login') }}" class="text-[#111827] font-bold mx-6 hover:text-blue-700 transition-colors duration-200">
                Login
            </a>
            <a href="{{ route('register') }}" class="text-[#111827] font-bold mx-6 hover:text-blue-700 transition-colors duration-200 underline underline-offset-10">
                Signup
            </a>
        </div>
    </nav>

    <main class="">
        <div class="w-full mx-auto">
            <div class="w-full h-[60vh] bg-[#A0C4F5]"></div>
            <div class="w-full h-[40vh] flex flex-col justify-center items-center">
                <h1 class="text-[#111827] font-bold text-[40px]" style="font-family: 'Poppins', sans-serif;">
                    Welcome to Our Site!
                </h1>
                <p class="text-[#6B7280] font-semibold text-[14px] mt-2 text-center" style="font-family: 'Poppins', sans-serif;">
                    We’re glad you’re here! To get started, please let us know who you are by logging in or signing up.
                </p>
            </div>
        </div>
    </main>
</body>

</html>