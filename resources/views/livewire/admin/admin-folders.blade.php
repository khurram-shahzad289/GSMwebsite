<div>
    @foreach($folders as $file)
        @if(isset($file['link']))
            <div class="flex justify-center items-center gap-2">
                <img class="w-[100px] bg-gray-200" src="/images/icons/file.png">
                {{ $file['name'] }}
            </div>
        @else
            <a href="{{ route('folders.show', ['folder' => $file['children']]) }}" class="flex justify-center items-center gap-2">
                    <img class="w-[100px]" src="/images/icons/folder.svg">
                    {{ $file['name'] }}
                </a>
            </button>
        @endif
    @endforeach
</div>
