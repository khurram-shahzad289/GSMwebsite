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
            <livewire:select-package/>
        </div>


    <x-footer/>
    </div>
@endsection
