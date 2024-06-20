<div class="flex flex-col items-center md:flex-row md:justify-between">


    <form class="flex  flex-col md:flex-row justify-center items-center gap-1 min-w-[300px]">
        <input
            class="rounded-lg w-full"
            type="text"
            placeholder="Search for ..."
        />
        <select
            class="rounded-lg w-full"
        >
            <option>Website</option>
            <option>Downloads</option>
        </select>
        <button class="rounded-lg w-full md:w-fit px-4 py-3 bg-red-500">
            <img class="min-w-[15px]" src="/images/icons/search.svg">
        </button>
    </form>
    <div id="basket" class="relative">
        @if($package)
            <a href="{{ route('shopping_cart') }}" class="absolute left-1/2 bg-red-500 rounded-full w-fit px-2 text-white">
                1
            </a>
        @endif

        <img class="w-[100px]" src="/images/icons/cart.svg">
    </div>
</div>
