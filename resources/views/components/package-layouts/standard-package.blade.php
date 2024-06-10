<div id="package" class="flex flex-col gap-2 w-[300px]">
    <div id="title" class="w-full bg-[#383c56] text-white text-center font-bold text-xl py-1.5">{{ $package->getName() }}</div>
    <div id="price" class="text-[#9c2b2b] text-xl font-bold text-center py-2">{{ $package->getPrice() }}USD</div>
    <hr>
    <div class="text-xs flex flex-col gap-2">
        <div id="period">
            <div class="pl-4 flex gap-6 py-2">
                <p class="text-gray-800 font-semibold">Period</p>
                <p class="text-gray-500">1 Months</p>
            </div>
        </div>
        <hr>
        <div id="band-width">
            <div class="pl-4 flex gap-6 py-2">
                <p class="text-gray-800 font-semibold">Bandwidth</p>
                <p class="text-gray-500">{{ $package->getBandwidth() }}</p>
            </div>
        </div>
        <hr>
        <div id="usage">
            <div class="pl-4 flex gap-6 py-2">
                <p class="text-gray-800 font-semibold">Usage</p>
                <p class="text-white bg-green-600 rounded px-2 text-xs flex justify-center items-center">All Files</p>
            </div>
        </div>
        <hr>
        <div id="extra">
            <div class="pl-4 flex gap-6 py-2">
                <p class="text-gray-800 font-semibold">Extra</p>
                <p class="text-gray-500">13.00 GB / 7 Files</p>
            </div>
        </div>
        <hr>
        <div id="every">
            <div class="pl-4 flex gap-6 py-2">
                <p class="text-gray-800 font-semibold">Every</p>
                <p class="text-gray-500">{{ $package->getEvery() }}days</p>
            </div>
        </div>
        <hr>
        <div id="feature">
            <div class="pl-4 flex gap-6 py-2">
                <p class="text-gray-800 font-semibold">Usage</p>
                <p class="text-white bg-[#f39c12] rounded px-2">Non-Featured Files</p>
            </div>
        </div>
        <hr>
        <div id="fair">
            <div class="pl-4 flex gap-6 py-2">
                <p class="text-gray-800 font-semibold">Fair Usage</p>
                <p class="text-gray-500">13.00 GB / 7 Files</p>
            </div>
        </div>
        <hr>
        <div id="ip">
            <div class="pl-4 flex gap-6 py-2">
                <p class="text-gray-800 font-semibold">IP</p>
                <p class="text-gray-500">{{ $package->getTotalips() }} /Month</p>
            </div>
        </div>
        <hr>
    </div>

    <div id="buy-now" class="bg-gray-200 p-3">
        <button wire:click="packageSelected({{ $package->getId() }})" class="rounded font-bold py-2 w-full bg-[#9c2b2b] text-white">
            BUY NOW
        </button>
    </div>
</div>
