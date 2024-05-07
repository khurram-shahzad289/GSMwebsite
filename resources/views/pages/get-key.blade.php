@extends('layouts.app')
<div class="flex justify-center items-center h-[100vh]">
    <div class="w-[330px] mx-auto border rounded-lg py-4">
        <div class="flex justify-center items-center">
            <img class="h-[226px] rounded-t-xl" src="/images/logo.jpeg">
        </div>
        <div class="flex flex-col justify-center items-center gap-3">
            <div>
                <h1 class="text-gray-800 text-xl font-bold text-center">HALABTECH<br> PASSWORD CHECKER</h1>
                <p class="text-sm text-center text-gray-500">Enter your email and the file name.</p>
            </div>
            <form class="flex flex-col gap-3">
                <input type="email" class="rounded text-sm" placeholder="Email">
                <input type="text" class="rounded text-sm" placeholder="FileName">
                <button class="bg-red-400 text-white rounded">Check</button>
            </form>
        </div>
    </div>
</div>


@section('content')

@endsection
