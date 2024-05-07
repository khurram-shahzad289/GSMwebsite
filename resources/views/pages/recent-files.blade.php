@extends('layouts.app')

@section('content')

    <div>
        <x-header/>
        <x-navigation/>
        <div class="bg-gray-600 py-8 flex flex-col gap-2">
            <x-slider
                text="A5460 U7 Hard Reset (Factory Reset) [By Download Mode] OS14 [A5460ZCS7BXD1].tar.md5"
                icon="/images/icons/nav/recent.svg"
                heading="Recent Files"
            />
            <x-slider
                text="A5460 U7 Hard Reset (Factory Reset) [By Download Mode] OS14 [A5460ZCS7BXD1].tar.md5"
                icon="/images/icons/nav/recent.svg"
                heading="top Files"
            />

        </div>


    <div class="container-1 flex flex-col justify-center items-center my-16">
        <h1 class="text-gary font-semibold text-2xl">Latest files</h1>
        <p class="text-gray text-center">Here is a list of our latest 100 files, don't forget to get your best subscription this gives you most benefits</p>
    </div>
    <div id="r-file" class="border rounded-xl p-4 flex justify-between container-1 w-[90%] my-8">
        <div class="flex gap-4">
            <img class="bg-gray-400 rounded-2xl w-[100px]" src="/images/icons/file.png">
            <div class="flex flex-col gap-4">
                <p id="heading">
                    SM-A156M Remove Logo Bootloader One Click</p>
                <div class="flex text-xs gap-2 text-white">
                    <p class="bg-red-500 rounded px-2">New</p>
                    <p class="bg-blue-500 rounded px-2">Featured</p>
                </div>
                <div class="flex gap-3 text-xs">
                    <div class="font-semibold text-red-600">A156M Remove Logo Bootloader One Click</div>
                    <div>|</div>
                    <div class="text-gray-500"> Date: 07-05-2024 </div>
                    <div>|</div>
                    <div class="text-gray-500">Size: 240.00 MB</div>
                </div>
                {{--            <div>--}}
                {{--                rating--}}
                {{--            </div>--}}
            </div>
        </div>

        <div class="flex justify-end items-end">
            <a class="bg-[#9c2b2b] rounded-lg px-4 py-2 text-white">Download</a>
        </div>
    </div>
    <x-footer/>

@endsection
