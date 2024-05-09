@props([
    'inputCLass' => 'rounded-lg'
])


<div x-data="{ expanded: false }" class="flex flex-col justify-center items-center">
    <button
        @click="expanded = !expanded"
        x-text="expanded ? 'cancel' : 'Create New Package'"
        class="text-white bg-blue-600 rounded-lg hover:bg-blue-300 px-3 py-2"
    ></button>
    <div x-show="expanded" class="border-1 p-6" x-collapse>
        @if($created)
            <p class="text-center">Package is been created successfully!</p>
        @else
            <form wire:submit.prevent="submit"
                  class="flex flex-col gap-2"
            >
                <input
                    class="{{ $inputCLass }}"
                    placeholder="Package Name"
                    type="text"
                    wire:model="name"
                >
                <input
                    class="{{ $inputCLass }}"
                    placeholder="Price"
                    type="text"
                    wire:model="price"
                >
                <input
                    class="{{ $inputCLass }}"
                    placeholder="BandWidth"
                    type="text"
                    wire:model="bandwidth"
                >
                <input
                    class="{{ $inputCLass }}"
                    placeholder="Every"
                    type="text"
                    wire:model="every"
                >
                <input
                    class="{{ $inputCLass }}"
                    placeholder="Total IPS"
                    type="text"
                    wire:model="totalips"
                >
                <button type="submit"
                        class="px-3 py-2 bg-blue-900 text-white rounded-lg"
                >
                    Create Package
                </button>
            </form>
        @endif

    </div>
</div>
