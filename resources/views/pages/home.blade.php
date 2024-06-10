@props([
    'folderEmpty' => false,
    'folders' => [],
    'files' => [],
    'route' => 'folders.show',
    'check' => true
    ])

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
        {{--        <livewire:folders/>--}}
        {{--        <livewire:file-manager/>--}}
        <div>
            @if(empty($folders))
                @if(!$folderEmpty)
                    <div>
                        <x-bread-crumbs class="mb-4"
                                        :parentId="!empty($files) ? $files[0]->getFileParentId() : null"
                        />
                    </div>
                @endif

            @else
                <div>
                    <x-bread-crumbs class="mb-4"
                                    :parentId="!empty($folders) ? $folders[0]->getFolderParentId() : null"
                    />
                </div>
            @endif

            @if($folderEmpty)
                <div >
                    <x-bread-crumbs class="mb-4"
                                    :parentId="$currentFolder->getFolderId()"
                    />
                </div>
                <p class="text-center">folder is empty</p>
            @else

                <x-home-folders :folders="$folders" :files="$files" :route="$route"/>
                <x-files :files="$files"/>
            @endif
        </div>

        <x-footer/>

    </div>
@endsection
