<div class="flex justify-between">


    <form class="flex justify-center items-center gap-1">
        <input
            class="rounded-lg"
            type="text"
            placeholder="Search for ..."
        />
        <select
            class="rounded-lg"
        >
            <option>Website</option>
            <option>Downloads</option>
        </select>
        <button class="rounded-lg px-4 py-3 bg-red-500">
            <img src="/images/icons/search.svg">
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
