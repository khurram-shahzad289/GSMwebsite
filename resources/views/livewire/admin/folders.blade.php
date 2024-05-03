<div class="">
    <div class="flex justify-center items-center gap-4 py-6">
        <p>What you want to create folder or file</p>
        <button wire:click="folder"
            @class([
                'bg-red-500 px-4 py-2 rounded-lg',
                'font-bold text-white' => $selectType==="folder"
            ])
        >
            Folder
        </button>
        <button wire:click="file"
            @class([
                    'bg-red-500 px-4 py-2 rounded-lg',
                    'font-bold text-white' => $selectType==="file"
                   ])
        >
            File
        </button>


    </div>
    @if($created)
        <p class="text-center">you file or folder is been created successfully! </p>
    @else
        @if(isset($selectType))
            @if($selectType==="folder")
                <form wire:submit.prevent="createFolder"
                      class="flex flex-col py-4 gap-4"
                >
                    <input type="text" wire:model="name" placeholder="File Name">
                    <input type="text" wire:model="description" placeholder="Description">
                    <button class="bg-blue-300 rounded-lg px-4 py-2" type="submit">Create Folder</button>
                </form>
            @elseif($selectType==="file" && !is_null($parentId))
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

                    <button class="bg-blue-300 rounded-lg px-4 py-2" type="submit">Create File</button>
                </form>
            @endif
        @endif
    @endif



</div>
