@php
 $folders = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15];
  @endphp
<div class="flex flex-wrap gap-6 container-1 mt-20">
    @foreach($folders as $folder)
        <a href="" class="flex gap-2 justify-center items-center">
            <img class="w-[100px]" src="/images/icons/folder.svg">
            <p>Folder {{ $folder }}</p>
        </a>

    @endforeach
</div>
