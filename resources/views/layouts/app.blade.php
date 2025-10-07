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

</head>
<body 
    class="bg-[#F9FAFB] text-gray-900 min-h-screen m-0 p-0 flex"
>
    <!-- Sidebar -->
    <aside class="fixed top-0 left-0 w-64 h-full bg-[#0B1A3F] text-white flex flex-col justify-between">
        <div class="py-6 px-2">
            <h1 class="text-xl text-center font-semibold mb-8" style="font-family: 'Poppins', sans-serif;">
                My Dashboard
            </h1>

            <!-- Profile picture -->
            <div class="flex justify-center mb-8">
                <div class="w-24 h-24 rounded-full bg-[#0F2250] flex items-center justify-center overflow-hidden">
                    <i class="ri-image-line text-[#E5E7EB] text-3xl"></i>
                </div>
            </div>

            <!-- Navigation -->
            <nav class="flex flex-col space-y-2" style="font-family: 'Inter', sans-serif;">
                {{-- 
                    <a href="{{ route('profile.show') }}" 
                    class="flex items-center gap-3 text-[14px] px-4 py-3 rounded-lg transition-all duration-200 
                            {{ request()->routeIs('profile.show') 
                                ? 'bg-[#0F2250] text-blue-300' 
                                : 'text-[#E5E7EB] hover:bg-[#0F2250] hover:text-blue-300 active:text-blue-300' }}">
                        <i class="ri-user-line text-[16px]"></i>
                        Account
                    </a>
                --}}
                <a href="{{ route('profile.show') }}" 
                class="flex items-center gap-3 text-[14px] px-4 py-3 rounded-lg transition-all duration-200 
                        text-[#E5E7EB] hover:bg-[#0F2250] hover:text-blue-300 @yield('account-active')">
                    <i class="ri-user-line text-[16px]"></i>
                    Account
                </a>

                <a href="{{ route('module.index') }}" 
                    class="flex items-center gap-3 text-[14px] px-4 py-3 rounded-lg transition-all duration-200 
                        text-[#E5E7EB] hover:bg-[#0F2250] hover:text-blue-300 @yield('dashboard-active')">
                    <i class="ri-folder-3-line text-[16px]"></i>
                    Modules
                </a>

                <a href="{{ route('grade.index') }}" 
                    class="flex items-center gap-3 text-[14px] px-4 py-3 rounded-lg transition-all duration-200 
                        text-[#E5E7EB] hover:bg-[#0F2250] hover:text-blue-300 @yield('grade-active')">
                    <i class="ri-table-line text-[16px]"></i>
                    Grades
                </a>

                <a href="{{ route('grade.index') }}" 
                    class="flex items-center gap-3 text-[14px] px-4 py-3 rounded-lg transition-all duration-200 
                        text-[#E5E7EB] hover:bg-[#0F2250] hover:text-blue-300 @yield('data-active')">
                    <i class="ri-table-line text-[16px]"></i>
                    Data
                </a>

                <a href="{{ route('grade.index') }}" 
                    class="flex items-center gap-3 text-[14px] px-4 py-3 rounded-lg transition-all duration-200 
                        text-[#E5E7EB] hover:bg-[#0F2250] hover:text-blue-300 @yield('analysis-active')">
                    <i class="ri-bar-chart-line"></i>
                    Analysis
                </a>

                <a href="{{ route('comment-suggestion.index') }}" 
                    class="flex items-center gap-3 text-[14px] px-4 py-3 rounded-lg transition-all duration-200 
                        text-[#E5E7EB] hover:bg-[#0F2250] hover:text-blue-300 @yield('comment-active')">
                    <i class="ri-chat-1-line text-[16px]"></i>
                    Comments & Suggestions
                </a>
            </nav>
        </div>

        <!-- Logout -->
        <div class="py-6 px-2 border-t border-blue-900">
            <a href="#"
                class="flex items-center gap-3 px-4 py-3 text-[14px] rounded-lg hover:bg-[#0F2250] hover:text-blue-300 active:text-blue-300 transition-all duration-200" style="font-family: 'Inter', sans-serif">
                <i class="ri-question-line"></i>
                Help
            </a>
            <a href="{{ route('register') }}"
                class="flex items-center gap-3 px-4 py-3 text-[14px] rounded-lg hover:bg-[#0F2250] hover:text-[#EF4444] active:text-blue-300 transition-all duration-200"
                style="font-family: 'Inter', sans-serif">
                <i class="ri-arrow-right-circle-line"></i>
                Logout
            </a>
        </div>
    </aside>

    <!-- Main content -->
    <main class="flex-1 flex flex-col ml-64 overflow-y-auto">
        <!-- Header -->
        <header class="bg-white shadow-sm py-6 px-8 flex items-center justify-between sticky top-0 z-10">
            <h2 class="text-xl font-semibold text-[#6B7280]" style="font-family: 'Poppins', sans-serif;">
                @yield('header')
            </h2>
        </header>

        <!-- Page Content -->
        <div class="flex-1 m-0">
            @yield('content')
        </div>
    </main>
</body>

</html>