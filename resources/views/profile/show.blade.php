@extends('layouts.app')

@section('title', 'Profile')

@section('header', 'Profile')

@section('account-active', 'bg-[#0F2250] text-blue-300')

@section('content')
    <div class="w-full h-[40%] bg-cover bg-bottom relative"
        style="background-image: url('{{ asset('assets/images/profile-header-simple1.png') }}');">
        <div class="w-full px-10 absolute translate-y-1/2">
            <div class="bg-[#F9FAFB] w-full mx-auto shadow-lg rounded-lg p-6">
                <form class="w-full p-4">
                    <div class="grid grid-cols-3 gap-6">
                        <div class="space-y-4">
                            <div>
                                <label for="first-name" class="block text-[14px] text-[#6B7280] mb-2" style="font-family: 'Inter', sans-serif;">
                                    First Name
                                </label>
                                <input type="text" id="first-name" name="first_name"
                                    class="w-full p-3 bg-[#F3F4F6] rounded-md focus:outline-none focus:ring-2 focus:ring-blue-300"
                                    style="font-family: 'Inter', sans-serif;">
                            </div>

                            <div>
                                <label for="phone" class="block text-[14px] text-[#6B7280] mb-2" style="font-family: 'Inter', sans-serif;">
                                    Phone Number
                                </label>
                                <input type="text" id="phone" name="phone"
                                    class="w-full p-3 bg-[#F3F4F6] rounded-md focus:outline-none focus:ring-2 focus:ring-blue-300"
                                    style="font-family: 'Inter', sans-serif;">
                            </div>

                            <div>
                                <label for="state-country" class="block text-[14px] text-[#6B7280] mb-2" style="font-family: 'Inter', sans-serif;">
                                    State / Country
                                </label>
                                <input type="text" id="state-country" name="state_country"
                                    class="w-full p-3 bg-[#F3F4F6] rounded-md focus:outline-none focus:ring-2 focus:ring-blue-300"
                                    style="font-family: 'Inter', sans-serif;">
                            </div>

                            <div>
                                <label for="email" class="block text-[14px] text-[#6B7280] mb-2" style="font-family: 'Inter', sans-serif;">
                                    Email Address
                                </label>
                                <input type="email" id="email" name="email"
                                    class="w-full p-3 bg-[#F3F4F6] rounded-md focus:outline-none focus:ring-2 focus:ring-blue-300"
                                    style="font-family: 'Inter', sans-serif;">
                            </div>
                        </div>

                        <div class="space-y-4">
                            <div>
                                <label for="last-name" class="block text-[14px] text-[#6B7280] mb-2" style="font-family: 'Inter', sans-serif;">
                                    Last Name
                                </label>
                                <input type="text" id="last-name" name="last_name"
                                    class="w-full p-3 bg-[#F3F4F6] rounded-md focus:outline-none focus:ring-2 focus:ring-blue-300"
                                    style="font-family: 'Inter', sans-serif;">
                            </div>

                            <div class="relative">
                                <label for="gender" class="block text-[14px] text-[#6B7280] mb-2" style="font-family: 'Inter', sans-serif;">
                                    Gender
                                </label>
                                <select id="gender" name="gender"
                                    class="appearance-none w-full p-3 bg-[#F3F4F6] rounded-md focus:outline-none focus:ring-2 focus:ring-blue-300 pr-10 text-[14px]"
                                    style="font-family: 'Inter', sans-serif;">
                                    <option value="">Select</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
                                <i class="ri-arrow-down-s-line absolute right-3 top-[41px] text-gray-500 pointer-events-none"></i>
                            </div>

                            <div>
                                <label for="city" class="block text-[14px] text-[#6B7280] mb-2" style="font-family: 'Inter', sans-serif;">
                                    City
                                </label>
                                <input type="text" id="city" name="city"
                                    class="w-full p-3 bg-[#F3F4F6] rounded-md focus:outline-none focus:ring-2 focus:ring-blue-300"
                                    style="font-family: 'Inter', sans-serif;">
                            </div>

                            <div>
                                <label for="password" class="block text-[14px] text-[#6B7280] mb-2" style="font-family: 'Inter', sans-serif;">
                                    Password
                                </label>
                                <input type="password" id="password" name="password"
                                    class="w-full p-3 bg-[#F3F4F6] rounded-md focus:outline-none focus:ring-2 focus:ring-blue-300"
                                    style="font-family: 'Inter', sans-serif;">
                            </div>
                        </div>

                       <div class="flex flex-col items-center justify-between">
                            <div class="flex-grow flex items-center justify-center">
                                <div class="relative w-32 h-32">
                                    <div class="absolute inset-0 rounded-full bg-[#DBEAFE] flex items-center justify-center overflow-hidden">
                                        <i class="ri-image-line text-[#1E40AF] text-3xl"></i>
                                    </div>

                                    <label for="profile_image"
                                        class="absolute w-10 h-10 bottom-0 right-0 bg-blue-500 rounded-full pt-[.3em] text-center border-3 border-[#F9FAFB] cursor-pointer">
                                        <i class="ri-pencil-line text-white text-[16px]"></i>
                                    </label>

                                    <input type="file" name="profile_image" id="profile_image" class="hidden">
                                </div>
                            </div>

                            <button type="submit"
                                class="w-full py-3 mb-1 bg-[#3B82F6] text-[#F9FAFB] text-[14px] font-medium rounded-md hover:bg-[#1E40AF] transition duration-200"
                                style="font-family: 'Inter', sans-serif;">
                                Update
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
@endsection


