@props([
    'folderEmpty' => false,
    'folders' => [],
    'files' => [],
    'route' => 'folders.admin',
    'parentId' => !empty($folders) ? $folders[0]->getFolderParentId() : null
])

@extends('layouts.app')

@section('content')
    <div class="flex">
        <x-admin.side-bar/>
        <div class="w-full ml-8 flex flex-col justify-start items-start">
            <livewire:admin.folders :parentId="$parentId"/>
            @if($folderEmpty)
                <p class="text-center">folder is empty</p>
            @else
                <x-home-folders :folders="$folders" :files="$files" :route="$route"/>
                <x-files :files="$files"/>
            @endif
        </div>




    </div>

@endsection
