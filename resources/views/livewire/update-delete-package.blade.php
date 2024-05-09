@props([
'inputCLass' => 'rounded-lg'
])
<div class="mt-20">
    <p class="py-4">Delete and update packages</p>
    <table>
        <thead>
        <tr>
            <th>{{ __('Name') }}</th>
            <th>{{ __('Price') }}</th>
            <th>{{ __('Bandwidth') }}</th>
            <th>{{ __('Every') }}</th>
            <th>{{ __('IPS') }}</th>
            <th>{{ __('Upd/Del') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach($packages as $package)
            <tr>
                <td>{{ $package->getName() }}</td>
                <td>{{ $package->getPrice() }}</td>
                <td>{{ $package->getBandwidth() }}</td>
                <td>{{ $package->getEvery() }}</td>
                <td>{{ $package->getTotalips() }}</td>
                <td>
                    <div class="flex gap-2">
                        <button wire:click="updatePackage({{ $package->getId() }})"
                                class="bg-blue-500 text-white rounded-lg px-2 py-1">Update
                        </button>
                        <button wire:click="deletePackage({{ $package->getId() }})"
                                class="bg-red-500 text-white rounded-lg px-2 py-1">Delete
                        </button>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@if($delete)
    <p>Package is been deleted Successfully!</p>
@endif
    <div x-data="{ expanded: @entangle('openUpdate') }" class="flex flex-col justify-center items-center">

        <div x-show="expanded" class="border-1 p-6" x-collapse>


            @if($createdUpdate)
                <p class="text-center">Package is been updated successfully!</p>
            @else

                <form
                      class="flex flex-col gap-2"
                >
                    <input
                        class="{{ $inputCLass }}"
                        placeholder="Package Name"
                        type="text"
                        wire:model="nameUpdate"
                    >
                    <input
                        class="{{ $inputCLass }}"
                        placeholder="Price"
                        type="text"
                        wire:model="priceUpdate"
                    >
                    <input
                        class="{{ $inputCLass }}"
                        placeholder="BandWidth"
                        type="text"
                        wire:model="bandwidthUpdate"
                    >
                    <input
                        class="{{ $inputCLass }}"
                        placeholder="Every"
                        type="text"
                        wire:model="everyUpdate"
                    >
                    <input
                        class="{{ $inputCLass }}"
                        placeholder="Total IPS"
                        type="text"
                        wire:model="totalipsUpdate"
                    >
                    <div class="flex justify-center items-center gap-2">
                        <button
                            @click="expanded = !expanded"
                            x-text="expanded ? 'cancel' : 'update Folder'"
                            class="text-white bg-blue-600 rounded-lg hover:bg-blue-300 px-3 py-2"
                        ></button>
                        <button
                                wire:click="submitUpdate"
                                class="px-3 py-2 bg-blue-900 text-white rounded-lg"
                        >
                            Update Folder
                        </button>
                    </div>

                </form>
            @endif

        </div>
    </div>


</div>
