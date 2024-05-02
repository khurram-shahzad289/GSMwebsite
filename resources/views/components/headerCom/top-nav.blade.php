<div class="w-full bg-gray-300 py-3">
    <div class="container-1 flex justify-between items-center ">
        <div id="left" class="flex gap-5  items-center">
            <a href="">
                <img src="/images/icons/facebook.svg">
            </a>
            <div class="vertical-line"></div>
            <a href="">
                <img src="/images/icons/insta.svg">
            </a>
            <div class="vertical-line"></div>
            <a href="">
                <img src="/images/icons/youtube.svg">
            </a>

        </div>

        @if (Route::has('login'))
            <div id="right" class="flex gap-5">
                @auth
                    <a href="{{ route('home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-indigo-500">Home</a>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-indigo-500">Logout</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="flex gap-2">
                        <img src="/images/icons/lock.svg">
                        <p>Login</p>
                    </a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="flex gap-2">
                            <img src="/images/icons/register.svg">
                            <p>Register</p>
                        </a>
                    @endif
                @endauth
            </div>
        @endif

    </div>

</div>
