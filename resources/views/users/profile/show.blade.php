@extends('layouts.app')

@section('title', 'Profile')

@section('header', 'Profile')
@section('content')
    <div class="w-full h-[40%] bg-cover bg-center relative"
        style="background-image: url('{{ asset('assets/images/profile-header1.png') }}');">

        <div class="w-full px-10 absolute top-[-15%] translate-y-1/2">
            <div class="bg-[#F9FAFB] w-full h-[400px] mx-auto shadow-lg rounded-lg p-6">
                {{-- Content goes here --}}
            </div>
        </div>
    </div>
@endsection

