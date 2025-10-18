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

    {{-- Alphine JS --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> 
</head>
<body 
    x-data="{ sidebarOpen: false }" 
    class="bg-[#F9FAFB] text-gray-900 min-h-screen flex m-0 p-0"
>
    <!-- Sidebar -->
    @if (Auth::user()->role_id == 1)
        <x-new-components.admin-sidebar />
    @else
        <x-new-components.user-sidebar />
    @endif
    

    <!-- Main Content -->
    <main class="flex-1 flex flex-col overflow-y-auto">
        <!-- Header -->
        <header class="bg-white shadow-sm py-5 px-4 lg:px-10 md:px-10 flex items-center justify-between sticky top-0 z-10">
            <div class="flex items-center gap-3">
                <!-- Burger Button (Visible on Mobile/Tablet only) -->
                <button 
                    @click="sidebarOpen = !sidebarOpen" 
                    class="lg:hidden text-[#0B1A3F] fw-bold"
                >
                {{-- class="lg:hidden bg-[#0B1A3F] text-white p-2 rounded-md focus:outline-none" --}}
                    <i class="ri-menu-line text-xl"></i>
                </button>
                
                <h2 class="text-lg md:text-xl font-semibold text-[#6B7280] font-[Poppins]">
                    @yield('header')
                </h2>
            </div>
        </header>

        <!-- Page Content -->
        <div class="flex-1 bg-[#F3F4F6] min-h-screen overflow-auto">
            @yield('content')
        </div>
    </main>
</body>

</html>