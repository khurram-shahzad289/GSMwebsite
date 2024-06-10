<nav {{$attributes}}>
    <ul class="flex space-x-4 justify-center text-slate-500 border-b-2">
            <li class="border-r-2 border-l-2 py-2 px-3">
                <a href="/">Home</a>
            </li>

            @foreach($getNavElements as $element)

                <li class="border-r-2 pr-3 py-2">
                    <a href="{{ route('folders.show', ['folder' => $element->getFolderId()]) }}">
                        {{$element->getFolderName()}}
                    </a>
                </li>
            @endforeach


    </ul>
</nav>
