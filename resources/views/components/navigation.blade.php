<div class="flex justify-center items-center gap-8 bg-red-600 py-4">
    @foreach($navElements as $element)
        <a
            class="flex gap-2 justify-center items-center text-white font-bold"
            href="{{ $element->getUrl() }}">
            <img class="w-[30px]" src="{{ '/images/icons/nav/'.$element->getIcon() }}">
            <p>{{ $element->gettext() }}</p>
        </a>
    @endforeach
</div>
