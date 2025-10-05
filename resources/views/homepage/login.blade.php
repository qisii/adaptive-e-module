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
                
                <img src="{{ asset('assets/images/stair.png') }}" alt="Periwinkle" 
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
                <form class="mt-20 px-28 w-full">
                    <h2 class="text-[28px] font-bold text-[#111827] text-center mb-10" style="font-family: 'Poppins', sans-serif;">
                        Login
                    </h2>


                    {{-- 
                        Is it possible to create like a toggleable Tabs?
                        I have 2 user role: Student and Teacher
                        Student has: username, password
                        Teacher has: email, password
                    --}}
                    <div class="mb-4">
                        <input type="text" 
                            name="username" 
                            placeholder="Username" 
                            class="w-full p-4 bg-[#F3F4F6] focus:outline-none focus:ring-2 focus:ring-blue-500"
                            style="font-family: 'Inter', sans-serif; border-radius: 42px">
                    </div>

                    <div class="mb-6">
                        <input type="password" 
                            name="password" 
                            placeholder="Password" 
                            class="w-full p-4 rounded-md bg-[#F3F4F6] focus:outline-none focus:ring-2 focus:ring-blue-500"
                            style="font-family: 'Inter', sans-serif; border-radius: 42px">
                    </div>

                    <button type="submit" 
                        class="w-full py-4 bg-[#1E40AF] text-[#F9FAFB] font-semibold rounded-md hover:bg-blue-900 transition duration-200"
                        style="font-family: 'Inter', sans-serif; border-radius: 42px">
                        Login
                    </button>

                    <p class="text-[14px] font-poppins text-[#6B7280] text-center mt-10" style="font-family: 'Poppins', sans-serif;">
                        Don't have an account? 
                        <a href="#" class="text-[#1E40AF] font-bold">Signup</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
@endsection
