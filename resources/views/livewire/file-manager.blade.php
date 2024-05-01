<div class="flex items-center flex-col gap-8">
    <x-folders-nav :navElements="$navElements"/>
    <div class="flex justify-center items-center gap-8">

    @foreach($folders as $file)
{{--        {{ dd($folders) }}--}}
            @if(isset($file['link']))
                <div class="flex justify-center items-center gap-2">
                    <img class="w-[100px] bg-gray-200" src="/images/icons/file.png">
                    {{ $file['name'] }}
                </div>
            @else
{{--                {{ dd(json_encode($file->getFolderChildren())) }}--}}
                <button class="py-10 text-2xl"
                        wire:click="recursive({{ json_encode($file)  }})">

                    <div class="flex justify-center items-center gap-2">
                        <img class="w-[100px]" src="/images/icons/folder.svg">
                        {{ $file['name'] }}
                    </div>
                </button>
            @endif
        @endforeach
    </div>
    @if($noFiles)
        <p>Folder is empty</p>
    @endif

</div>
<script>
    function recursiveData()
</script>
