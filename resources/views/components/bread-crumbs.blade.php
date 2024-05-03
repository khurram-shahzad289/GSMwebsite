<nav {{$attributes}}>
    <ul class="flex  space-x-4 text-slate-500">
        <li>
            <a href="/">Home</a>
        </li>

        @foreach($getNavElements as $element)
            <li>→</li>
            <li>
                <a href="{{ route('folders.show', ['folder' => $element->getFolderId()]) }}">
                    {{$element->getFolderName()}}
                </a>
            </li>
        @endforeach

    </ul>
</nav>
