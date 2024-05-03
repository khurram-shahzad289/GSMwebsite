<div class="flex gap-6 justify-center items-center py-10">
    @foreach($folders as $folder)
            <a href="{{ route( $route , ['folder' => $folder->getFolderId()]) }}" class="flex justify-center items-center gap-2">
                <img class="w-[100px]" src="/images/icons/folder.svg">
                {{ $folder->getFolderName() }}
            </a>
    @endforeach
</div>
