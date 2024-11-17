<x-layout>
        <nav  class="navbar font-Custom   text-white  fixed">
            <div class="navbar-start ">
            <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                >
                    <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M4 6h16M4 12h8m-8 6h16"
                    />
                </svg>
                </div>
                <ul  tabindex="0"class=" menu menu-sm dropdown-content bg-gray-800 text-white rounded-box z-[1] mt-3 w-52 p-2 shadow font-custom "
                >
                <li><a href="../index.html">Home</a></li>   
                <li><a href="./pages/about.html">About Us</a></li>
                <li><a href="./pages/units.html">Our Units</a></li>   
                </ul>
            </div>
            <a class="btn btn-ghost text-xl">StayHehe</a>
            </div>
            <button class="navbar-end px-10">
                @if (Route::has('login'))
                <nav class="-mx-3 flex flex-1 justify-end">
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                        >
                            Dashboard
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                        >
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                            >
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
            </button>
    </nav>
        <div class="hero justify-start min-h-screen " style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('./img/etienne-beauregard-riverin-B0aCvAVSX8E-unsplash.png');"
        <div class="hero-content text-left ">
            <div class="max-w-md font-Custom text-white px-10 mx-10 pt-20 ">
            <h1 class="mb-5 text-5xl font-bold ">Beautiful homes made for you</h1>
            <p class="mb-5">
                Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda
                excepturi exercitationem quasi. In deleniti eaque aut repudiandae et
                a id nisi.
            </p>
        </div>
        </div>
</x-layout>