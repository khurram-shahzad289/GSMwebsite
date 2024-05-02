<div class="flex items-left gap-4">
    @foreach($navElements as $element)
        <button class="test-3xl font-semibold text-gray-500" wire:click="recursive({{ json_encode($element)  }})">
            {{ $element['name'] }}
        </button>
    @endforeach
</div>
