<div class="w-[30%] mx-auto">
    <div class="flex gap-4">
        <p>What you want to create folder or file</p>
        <button wire:click="folder"
            @class([
                'bg-red-500' => $selectType==="folder"
            ])
        >
            Folder
        </button>
        <button wire:click="file"
            @class([
                      'bg-red-500' => $selectType==="file"
                   ])
        >
            File
        </button>


    </div>
    @if(isset($selectType))
        @if($selectType==="folder")
            <form wire:submit.prevent="createFolder"
                  class="flex flex-col py-4 gap-4"
            >

                <input type="text" wire:model="name" placeholder="File Name">
                <input type="text" wire:model="description" placeholder="Description">
                <select wire:model="parentId">
                    <option value="">Select Parent</option>
                    @if($files)
                        @foreach($files as $file)
                            <option value="{{ $file->id }}">{{ $file->name }}</option>
                        @endforeach
                    @endif
                </select>
                <button type="submit">Create Folder</button>
            </form>
        @elseif($selectType==="file")
            <form wire:submit.prevent="createFile"
                  class="flex flex-col py-4 gap-4"
            >

                <input type="text" wire:model="name" placeholder="File Name">
                <input type="text" wire:model="description" placeholder="Description">
                <input type="text" wire:model="fileSize" placeholder="File Size">
                <input type="text" wire:model="link" placeholder="File Link">
                <div class="flex gap-3">
                    <label for="featured">Featured</label>
                    <input id="featured" type="checkbox" wire:model="featured">
                </div>

                <select wire:model="parentIdFile">
                    <option value="">Select Parent</option>
                    @if($files)
                        @foreach($files as $file)
                            <option value="{{ $file->id }}">{{ $file->name }}</option>
                        @endforeach
                    @endif
                </select>
                <button type="submit">Create File</button>
            </form>
        @endif
    @endif


</div>
