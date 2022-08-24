<div class="divide-y divide-gray-800" x-data="{ show:false }">
        <nav class="flex items-center bg-gray-900 px-3 py-2 shadow-lg">
            <div>
                <button @click="show =! show" class="bock h-8 mr-3 text-gray-400 items-center hover:text-gray-200 focus:text-gray-200 focus:outline-none">
                    <svg class="w-8 fill-current" viewBox="0 0 24 24">
                    <path x-show="!show" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                    <svg x-show="show" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                    </svg>
                </button>
            </div>
            <div class="h-12 w-full flex items-center">
                <a href="{{ url('/') }}" class="w-full">
                    <img class="h-12" src="{{ url('/img/Bumble_logo.svg') }}"/>
                </a>
            </div>
            <div class="flex justify-end sm:w-8/12">
                {{-- Top Navigation --}}
                <ul class="hidden sm:flex sm:text-left text-gray-200 text-xs">
                    @if(Auth::check())
                    <a href="{{ route('dashboard') }}" class="btn bg-black hover:bg-yellow-500 hover:text-black p-2 rounded-md"><li>Dashboard</li></a>
                    @else
                    <a href="{{ route('login') }}" class="btn bg-black hover:bg-yellow-500 hover:text-black p-2 rounded-md"><li>Login</li></a>
                    @endif
                </ul>
            </div>
        </nav>
        <div class="sm:flex sm:min-h-screen">
            <aside :class="show ? 'block' : 'hidden'" class="bg-gray-900 text-gray-700 divide-y divide-gray-300 divide-dashed sm:w-4/12 md:w-3/12 lg:w-2-12">

                {{-- Mobile Web View--}}
                <div :class="show ? 'block' : 'hidden'" class="pb-3 divide-y divide-gray-800 block sm:hidden">
                    {{-- Top Navigation Mobile Web View --}}
                    <ul class="text-gray-200 text-xs">
                        @if(Auth::check())
                        <a href="{{ route('dashboard') }}"><li class="cursor-pointer px-4 py-2 hover:bg-gray-800">Dashboard</li></a>
                        @else
                        <a href="{{ route('login') }}"><li class="cursor-pointer px-4 py-2 hover:bg-gray-800">Login</li></a>
                        @endif

                    </ul>
                </div>
            </aside>
            <main class="bg-gray-100 p-12 min-h-screen sm:w-full md:w-full lg:w-full">
                <section class="divide-y text-gray-900">
                    <article>
                        <div class="mt-5 text-xl font-sans font-bold text-center">Halaman tidak ditemukan,sayang sekali :(</div>
                        <h1 class="text-8xl font-sans font-bold text-white">404</h1>
                        <div class="mt-5 text-sm text-center"><a href="{{ URL::previous() }}" class="btn p-3 rounded-md w-full bg-[#FF3087] text-[#EEEFF2]">Kembali</a></div>
                    </article>
                </section>
            </main>
        </div>
</div>
