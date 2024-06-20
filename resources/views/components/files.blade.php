@props([
    'files' => [],
    'item' => 'text-white text-sm rounded px-3 w-fit',
])

<div class="flex flex-wrap justify-center items-center gap-8 mb-4">
    @foreach($files as $file)
        <div class="relative w-[250px] ">
            <div class="flex  items-center gap-2">
                <div class="relative">
                    <img class="w-[110px] rounded-xl bg-gray-200" src="/images/icons/file.png">
                    <div class="absolute top-0 -ml-2 flex flex-col gap-2">
                        <p class="bg-red-500 {{ $item }}">New</p>
                        <p class="bg-blue-500 {{ $item }}">Featured</p>
                        <p class="bg-green-500 {{ $item }}">29.0USD</p>
                    </div>
                </div>
                <p class="font-bold">{{ $file->getFileName() }}</p>
            </div>
            <div class="absolute bottom-0 flex justify-center items-center  rounded-lg border-2 -ml-2 gap-3 text-xs bg-white border">
                <div class="flex gap-2 py-1 pl-2">
                    <div>13-06-2024</div>
                    <div class="border border-gray-300 height-2"></div>
                    <div>6.43GB</div>
                </div>
                <div class="text-white bg-blue-900 py-1 px-6 rounded-r-lg text-sm font-bold">Buy</div>
            </div>
        </div>
    @endforeach
</div>
