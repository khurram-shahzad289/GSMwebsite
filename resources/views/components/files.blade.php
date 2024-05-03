@props([
    'files' => []
])
<div class="flex justify-center items-center gap-8">
    @foreach($files as $file)
        <div class="flex justify-center items-center gap-2">
            <img class="w-[100px] bg-gray-200" src="/images/icons/file.png">
            {{ $file->getFileName() }}
        </div>
    @endforeach
</div>
