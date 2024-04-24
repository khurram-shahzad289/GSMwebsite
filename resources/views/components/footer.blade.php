<div class="bg-gradient-to-r from-red-500 via-pink-500 to-black">
    <div class="container-1 flex justify-center  gap-8 py-8">
        <div>
            <img class="w-[100px]" src="/images/logo.jpeg">
        </div>
        <div class="flex flex-col gap-2 px-8 py-4 rounded-lg bg-white text-gray-500">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('home') }}">Downloads</a>
        </div>
        <div class="flex flex-col gap-2 px-8 py-4 rounded-lg bg-white text-gray-500">
            @foreach($brand->getAllPolicyDocuments() as $document)
                <a target="{{$document->target}}" href="{{ $document->href }}">{{ $document->name }}</a>
            @endforeach
        </div>
        <div class="flex flex-col gap-2 px-8 py-4 rounded-lg bg-white text-gray-500">
            <a href="{{route('login')}}">{{__('Login')}}</a>
            <a href="{{route('register')}}">{{__('Register')}}</a>
            <a href="{{route('about_us')}}">{{__('About Us')}}</a>
            <a href="{{route('contact_us')}}">{{__('Contact Us')}}</a>

        </div>
    </div>

</div>
<div class="bg-gray-600">
<div class="container-1 flex justify-between items-center text-white py-6">
    <div class="flex flex-col gap-2">
        <p class="font-bold">{{__('Copyright © 2024 GSM All Rights Reserved.')}}</p>
        <p>{{ __('Powered By Real Easy Store ( khurram and shakir  )') }}</p>
    </div>
    <div class="flex justify-center items-center gap-4">
        <p>Visa</p>
        <p>Master</p>
        <p>Paypal</p>
    </div>
</div>

</div>
