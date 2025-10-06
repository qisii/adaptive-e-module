@extends('layouts.auth')

@section('title', 'Login')

@section('image')
    <img src="{{ asset('assets/images/login-img.png') }}" 
        alt="Login" 
        class="absolute bottom-[-14%] left-[26%] transform -translate-x-1/2 w-[400px] z-0">
@endsection

@section('content')
    <div class="w-full flex min-h-[80vh] relative">
        <div class="w-1/2 flex justify-center items-center relative">
            <div class="w-[90%] h-full rounded-lg p-6 relative overflow-hidden">
                
                <img src="{{ asset('assets/images/stair.png') }}" alt="Stair" 
                    class="absolute top-[10%] left-[10%] w-[120px]">
                
                <img src="{{ asset('assets/images/periwrinkle.png') }}" alt="Periwinkle" 
                    class="absolute top-[20%] left-[70%] w-[120px]">
                
                <img src="{{ asset('assets/images/star.png') }}" alt="Star" 
                    class="absolute top-[70%] right-[10%] w-[80px]">

                <img src="{{ asset('assets/images/star.png') }}" alt="Star" 
                    class="absolute top-[85%] right-[10%] w-[20px]">

                <img src="{{ asset('assets/images/Tube.png') }}" alt="Tube" 
                    class="absolute top-[85%] right-[75%] w-[80px]">
            </div>
        </div>
        
        <div class="w-1/2 flex justify-center items-center">
            <div class="w-[90%] h-full rounded-lg p-6">
                <form class="mt-10 px-28 w-full" x-data="{ role: 'student' }" @keyup.enter="$el.querySelector('button[type=submit]').click()">
                    <h2 class="text-[28px] font-bold text-[#111827] text-center mb-10" style="font-family: 'Poppins', sans-serif;">
                        Login
                    </h2>

                    <!-- Tabs -->
                    <div class="flex justify-center mb-5 space-x-10" style="font-family: 'Poppins', sans-serif;">
                        <button type="button"
                            class="text-[16px] font-semibold pb-2 transition-all duration-200 border-b-3"
                            :class="role === 'student' ? 'border-[#1E40AF] text-[#1E40AF]' : 'border-transparent text-[#6B7280]'"
                            @click="role = 'student'">
                            Student
                        </button>
                        <button type="button"
                            class="text-[16px] font-semibold pb-2 transition-all duration-200 border-b-3"
                            :class="role === 'teacher' ? 'border-[#1E40AF] text-[#1E40AF]' : 'border-transparent text-[#6B7280]'"
                            @click="role = 'teacher'">
                            Teacher
                        </button>
                    </div>

                    <div class="relative overflow-hidden mb-0 h-[130px] md:h-[150px]">
                        <!-- Student panel (absolute so it doesn't affect layout) -->
                        <div
                        x-show="role === 'student'"
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 translate-y-2"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 -translate-y-2"
                        class="absolute inset-0 flex flex-col justify-center px-0"
                        >
                            <div class="mb-4">
                                <input type="text"
                                    name="username"
                                    placeholder="Username"
                                    class="w-full p-4 bg-[#F3F4F6] focus:outline-none focus:ring-2 focus:ring-blue-500"
                                    style="font-family: 'Inter', sans-serif; border-radius: 42px">
                            </div>

                            <div class="mb-4">
                                <input type="password"
                                    name="password"
                                    placeholder="Password"
                                    class="w-full p-4 bg-[#F3F4F6] focus:outline-none focus:ring-2 focus:ring-blue-500"
                                    style="font-family: 'Inter', sans-serif; border-radius: 42px">
                            </div>
                        </div>

                        <!-- Teacher panel -->
                        <div
                        x-show="role === 'teacher'"
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 translate-y-2"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 -translate-y-2"
                        class="absolute inset-0 flex flex-col justify-center px-0"
                        >
                            <div class="mb-4">
                                <input type="email"
                                    name="email"
                                    placeholder="Email"
                                    class="w-full p-4 bg-[#F3F4F6] focus:outline-none focus:ring-2 focus:ring-blue-500"
                                    style="font-family: 'Inter', sans-serif; border-radius: 42px">
                            </div>

                            <div class="mb-4">
                                <input type="password"
                                    name="password"
                                    placeholder="Password"
                                    class="w-full p-4 bg-[#F3F4F6] focus:outline-none focus:ring-2 focus:ring-blue-500"
                                    style="font-family: 'Inter', sans-serif; border-radius: 42px">
                            </div>
                        </div>
                    </div>

                    <!-- Submit -->
                    <button type="submit"
                            class="w-full py-4 bg-[#1E40AF] text-[#F9FAFB] font-semibold rounded-md hover:bg-blue-900 transition duration-200"
                            style="font-family: 'Inter', sans-serif; border-radius: 42px">
                        Login
                    </button>

                    
                    <!-- Google icon (only for Teacher) -->
                    <div 
                        x-show="role === 'teacher'" 
                        x-transition:enter="transition ease-out duration-500"
                        x-transition:enter-start="opacity-0 translate-y-2"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-300"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 translate-y-2"
                        class="mt-4 flex justify-center"
                    >
                        <div class="w-10 h-10 bg-[#DBEAFE] rounded-full flex items-center justify-center">
                            <i class="ri-google-fill text-[#3B82F6] text-[20px]"></i>
                        </div>
                    </div>

                    <p 
                        class="text-[14px] font-poppins text-[#6B7280] text-center mt-4 transition-all duration-500 ease-in-out transform"
                        :class="role === 'teacher' ? 'translate-y-0' : 'translate-y-0'"
                        style="font-family: 'Poppins', sans-serif;"
                    >
                        Don't have an account? 
                        <a href="{{ route('register') }}" class="text-[#1E40AF] font-bold">Signup</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
@endsection
