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

        <div class="flex flex-col justify-center items-center">
            <div class="container-1 flex flex-col justify-center items-center my-16">
                <h1 class="text-gary font-semibold text-2xl">Best Prices on The Market</h1>
                <p class="text-gray text-center">Don't miss the chance. Get your download package now and start downloading files today</p>
            </div>
            <div id="package" class="flex flex-col gap-2 w-[300px]">
                <div id="title" class="w-full bg-[#383c56] text-white text-center font-bold text-xl py-1.5">Bronze</div>
                <div id="price" class="text-[#9c2b2b] text-xl font-bold text-center py-2">9.99USD</div>
                <hr>
                <div class="text-xs flex flex-col gap-2">
                    <div id="period">
                        <div class="pl-4 flex gap-6 py-2">
                            <p class="text-gray-800 font-semibold">Period</p>
                            <p class="text-gray-500">1 Months</p>
                        </div>
                    </div>
                    <hr>
                    <div id="band-width">
                        <div class="pl-4 flex gap-6 py-2">
                            <p class="text-gray-800 font-semibold">Bandwidth</p>
                            <p class="text-gray-500">60.00 GB / 100 Files</p>
                        </div>
                    </div>
                    <hr>
                    <div id="usage">
                        <div class="pl-4 flex gap-6 py-2">
                            <p class="text-gray-800 font-semibold">Usage</p>
                            <p class="text-white bg-green-600 rounded px-2 text-xs flex justify-center items-center">All Files</p>
                        </div>
                    </div>
                    <hr>
                    <div id="extra">
                        <div class="pl-4 flex gap-6 py-2">
                            <p class="text-gray-800 font-semibold">Extra</p>
                            <p class="text-gray-500">13.00 GB / 7 Files</p>
                        </div>
                    </div>
                    <hr>
                    <div id="every">
                        <div class="pl-4 flex gap-6 py-2">
                            <p class="text-gray-800 font-semibold">Every</p>
                            <p class="text-gray-500">1days</p>
                        </div>
                    </div>
                    <hr>
                    <div id="feature">
                        <div class="pl-4 flex gap-6 py-2">
                            <p class="text-gray-800 font-semibold">Usage</p>
                            <p class="text-white bg-[#f39c12] rounded px-2">Non-Featured Files</p>
                        </div>
                    </div>
                    <hr>
                    <div id="fair">
                        <div class="pl-4 flex gap-6 py-2">
                            <p class="text-gray-800 font-semibold">Fair Usage</p>
                            <p class="text-gray-500">13.00 GB / 7 Files</p>
                        </div>
                    </div>
                    <hr>
                    <div id="ip">
                        <div class="pl-4 flex gap-6 py-2">
                            <p class="text-gray-800 font-semibold">IP</p>
                            <p class="text-gray-500">10 /Month</p>
                        </div>
                    </div>
                    <hr>
                </div>

                <div id="buy-now" class="bg-gray-200 p-3">
                    <button class="rounded font-bold py-2 w-full bg-[#9c2b2b] text-white">
                        BUY NOW
                    </button>
                </div>
            </div>
        </div>


    <x-footer/>
    </div>
@endsection
