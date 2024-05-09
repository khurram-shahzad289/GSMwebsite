@extends('layouts.app')

@section('content')
    <div class="flex">
        <x-admin.side-bar/>
        <div class="mx-auto py-10 ">
            <livewire:create-package/>
            <livewire:update-delete-package/>
        </div>


    </div>

@endsection
