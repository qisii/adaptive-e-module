@extends('layouts.app')

@section('title', 'Profile')

@section('header', 'Profile')

@section('account-active', 'bg-[#0F2250] text-blue-300')

@section('content')
    <div class="w-full h-[40%] bg-cover bg-bottom relative"
        style="background-image: url('{{ asset('assets/images/profile-header-simple1.png') }}');">
        <div class="w-full px-4 lg:px-10 md:px-10 absolute translate-y-[10%] lg:translate-y-[35%] md:translate-y-[50%]">
            <div class="bg-[#F9FAFB] w-full mx-auto shadow-lg rounded-lg p-0 pt-6 lg:p-6 md:p-6 mb-6 lg:mb-0">
                <form action="{{ route('profile.update') }}" method="post" class="w-full px-6 pt-6 pb-3" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')

                    {{-- Use 1 column on mobile, 3 columns on md/lg --}}
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        
                        {{-- Left Column --}}
                        <div class="space-y-4 order-2 md:order-1">
                            <div class="mb-5">
                                <label for="first-name" class="block text-[14px] text-[#6B7280] mb-2"
                                    style="font-family: 'Inter', sans-serif;">First Name</label>
                                <input type="text" id="first-name" name="first_name"
                                    class="w-full p-3 bg-[#F3F4F6] text-[14px] rounded-md 
                                        focus:outline-none focus:ring-2 focus:ring-blue-300"
                                    style="font-family: 'Inter', sans-serif;"
                                    value="{{ old('first_name', $user->first_name) }}">
                            </div>

                            <div class="mb-5">
                                <label for="last-name" class="block text-[14px] text-[#6B7280] mb-2"
                                    style="font-family: 'Inter', sans-serif;">Last Name</label>
                                <input type="text" id="last-name" name="last_name"
                                    class="w-full p-3 bg-[#F3F4F6] text-[14px] rounded-md 
                                        focus:outline-none focus:ring-2 focus:ring-blue-300"
                                    style="font-family: 'Inter', sans-serif;"
                                    value="{{ old('last_name', $user->last_name) }}">
                            </div>

                            <div class="mb-5">
                                <label for="phone-number" class="block text-[14px] text-[#6B7280] mb-2"
                                    style="font-family: 'Inter', sans-serif;">Phone Number</label>
                                <input type="text" id="phone-number" name="phone_number"
                                    class="w-full p-3 bg-[#F3F4F6] text-[14px] rounded-md 
                                        focus:outline-none focus:ring-2 focus:ring-blue-300"
                                    style="font-family: 'Inter', sans-serif;"
                                    value="{{ old('phone_number', $user->phone_number) }}">
                            </div>

                            <div class="relative mb-5">
                                <label for="gender" class="block text-[14px] text-[#6B7280] mb-2"
                                    style="font-family: 'Inter', sans-serif;">Gender</label>
                                <select id="gender" name="gender"
                                    class="appearance-none w-full p-3 bg-[#F3F4F6] rounded-md 
                                        focus:outline-none focus:ring-2 focus:ring-blue-300 pr-10 text-[14px]"
                                    style="font-family: 'Inter', sans-serif;">
                                    <option value="">Select</option>
                                    <option value="male" @selected($user->gender === 'male')>Male</option>
                                    <option value="female" @selected($user->gender === 'female')>Female</option>
                                    <option value="other" @selected($user->gender === 'other')>Other</option>
                                </select>
                                <i class="ri-arrow-down-s-line absolute right-3 top-[41px] text-gray-500 pointer-events-none"></i>
                            </div>
                        </div>

                        {{-- Right Column --}}
                        <div class="space-y-4 order-3 md:order-2">
                            <div class="mb-5">
                                <label for="city" class="block text-[14px] text-[#6B7280] mb-2"
                                    style="font-family: 'Inter', sans-serif;">City</label>
                                <input type="text" id="city" name="city"
                                    class="w-full p-3 bg-[#F3F4F6] text-[14px] rounded-md 
                                        focus:outline-none focus:ring-2 focus:ring-blue-300"
                                    style="font-family: 'Inter', sans-serif;"
                                    value="{{ old('city', $user->city) }}">
                            </div>

                            <div class="mb-5">
                                <label for="state-country" class="block text-[14px] text-[#6B7280] mb-2"
                                    style="font-family: 'Inter', sans-serif;">State / Country</label>
                                <input type="text" id="state-country" name="state_country"
                                    class="w-full p-3 bg-[#F3F4F6] text-[14px] rounded-md 
                                        focus:outline-none focus:ring-2 focus:ring-blue-300"
                                    style="font-family: 'Inter', sans-serif;"
                                    value="{{ old('state_country', $user->state_country) }}">
                            </div>

                            <div class="mb-5">
                                <label for="username" class="block text-[14px] text-[#6B7280] mb-2 font-bold"
                                    style="font-family: 'Inter', sans-serif;">Username</label>
                                <input type="text" id="username" name="username"
                                    class="w-full p-3 bg-[#F3F4F6] text-[14px] font-bold rounded-md 
                                        focus:outline-none focus:ring-2 focus:ring-blue-300"
                                    style="font-family: 'Inter', sans-serif;"
                                    value="{{ old('username', $user->username) }}">
                            </div>

                            <div class="mb-10 md:mb-5 lg:mb-5 relative">
                                <label for="password" class="block text-[14px] text-[#6B7280] mb-2"
                                    style="font-family: 'Inter', sans-serif;">Password</label>

                                <div class="relative">
                                    <input type="password" id="password" name="password"
                                        class="w-full p-3 bg-[#F3F4F6] text-[14px] rounded-md 
                                            focus:outline-none focus:ring-2 focus:ring-blue-300 
                                            {{ session('password') ? 'border border-red-500' : '' }}"
                                        style="font-family: 'Inter', sans-serif;"
                                        placeholder="{{ empty($user->password) 
                                            ? 'Please enter a password' 
                                            : 'Enter new password (leave blank to keep current)' }}">

                                    @if (session('password'))
                                        <span
                                            class="absolute left-0 top-full mt-1 text-red-500 text-[12px] whitespace-nowrap"
                                            style="font-family: 'Inter', sans-serif;">
                                            {{ session('password') }}
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="mb-4">
                                <button type="submit"
                                    class="w-full py-3 bg-[#3B82F6] text-[#F9FAFB] text-[14px] font-medium rounded-md 
                                        hover:bg-[#1E40AF] transition duration-200 block lg:hidden md:hidden"
                                    style="font-family: 'Inter', sans-serif;">
                                    Update
                                </button>
                            </div>
                        </div>

                        {{-- Profile Image + Submit Button --}}
                        <div class="flex flex-col items-center justify-between order-1 md:order-3">
                            <div 
                                x-data="{ preview: null }" 
                                class="flex-grow flex flex-col items-center justify-center mb-6 md:mb-0"
                            >
                                <div class="relative w-32 h-32">
                                    <!-- Image Preview (when user selects a file) -->
                                    <template x-if="preview">
                                        <img 
                                            :src="preview" 
                                            alt="Preview" 
                                            class="absolute inset-0 w-full h-full object-cover rounded-full border-4 border-[#DBEAFE]"
                                        >
                                    </template>

                                    <!-- Existing Avatar or Default Icon (shown when no preview yet) -->
                                    <template x-if="!preview">
                                        <div>
                                            @if ($user->avatar)
                                                <div class="absolute inset-0 rounded-full overflow-hidden">
                                                    <img 
                                                        src="{{ asset('storage/avatars/' . $user->avatar) }}" 
                                                        alt="User Avatar" 
                                                        class="w-full h-full object-cover rounded-full border-4 border-[#DBEAFE]"
                                                    >
                                                </div>
                                            @else
                                                <div class="absolute inset-0 rounded-full bg-[#DBEAFE] flex items-center justify-center overflow-hidden">
                                                    <i class="ri-image-line text-[#1E40AF] text-3xl"></i>
                                                </div>
                                            @endif
                                        </div>
                                    </template>

                                    <!-- Pencil/Edit Button -->
                                    <label 
                                        for="avatar"
                                        class="absolute w-10 h-10 bottom-0 right-0 bg-blue-500 rounded-full pt-[.3em] text-center border-3 border-[#F9FAFB] cursor-pointer hover:bg-blue-600 transition"
                                    >
                                        <i class="ri-pencil-line text-white text-[16px]"></i>
                                    </label>

                                    <!-- File Input with Alpine Preview -->
                                    <input 
                                        type="file" 
                                        name="avatar" 
                                        id="avatar" 
                                        class="hidden" 
                                        accept="image/*"
                                        @change="preview = URL.createObjectURL($event.target.files[0])"
                                    >
                                </div>
                                {{-- <form action="{{ route('admin.profile.avatar.destroy') }}" method="post" class="mt-3">
                                    @csrf
                                    @method('DELETE')
                                    
                                    <button 
                                        type="submit" 
                                        class="px-4 py-1 text-[10px] mt-2 bg-red-500 text-white rounded-md hover:bg-red-600 transition"
                                        style="font-family: 'Inter', sans-serif;"
                                    >
                                        Remove Image
                                    </button>
                                </form> --}}
                            </div>

                            <button type="submit"
                                class="w-full py-3 mb-5 bg-[#3B82F6] text-[#F9FAFB] text-[14px] font-medium rounded-md 
                                    hover:bg-[#1E40AF] transition duration-200 hidden lg:block md:block"
                                style="font-family: 'Inter', sans-serif;">
                                Update
                            </button>
                        </div>
                    </div>
                </form>
                {{-- <div class="" style="">
                    <form action="{{ route('admin.profile.avatar.destroy') }}" method="post"
                        class="">
                        @csrf
                        @method('DELETE')

                        <button 
                            type="submit"
                            class="px-4 py-1 text-[10px] bg-red-500 text-white rounded-md hover:bg-red-600 transition shadow-md"
                            style="font-family: 'Inter', sans-serif;">
                            Remove Image
                        </button>
                    </form>
                </div> --}}
            </div>
        </div>
    </div>
    
@endsection


