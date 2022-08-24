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
                    <!--
                        <x-jet-button wire:click="login()"> 
                        {{ __('Login') }}
                        </x-jet-button>
                        @foreach($topNavLinks as $item)
                        <a href="{{ url('/'.$item->slug) }}">
                            <li class="cursor-pointer px-4 py-2 hover:bg-gray-800">{{ $item->label }}</li>
                        </a>
                    @endforeach
                    -->
                    @if(Auth::check())
                    <a href="{{ route('dashboard') }}" class="btn bg-black hover:bg-yellow-500 hover:text-black p-2 rounded-md"><li>Dashboard</li></a>
                    @else
                    <a href="{{ route('login') }}" class="btn bg-black hover:bg-yellow-500 hover:text-black p-2 rounded-md"><li>Login</li></a>
                    @endif
                </ul>
            </div>
        </nav>
        <div class="sm:flex sm:min-h-screen">
            <aside class="bg-gray-900 text-gray-700 divide-y divide-gray-300 divide-dashed sm:w-4/12 md:w-3/12 lg:w-2-12">

                {{-- Desktop Web View--}}
                <ul class="hidden text-gray-200 sm:block sm:text-left">
                    @foreach($sidebarLinks as $item)
                        <a href="{{ url('/'.$item->slug) }}">
                            <li class="cursor-pointer px-4 py-2 hover:bg-gray-800">{{ $item->label }}</li>
                        </a>
                    @endforeach
                </ul>

                {{-- Mobile Web View--}}
                <div :class="show ? 'block' : 'hidden'" class="pb-3 divide-y divide-gray-800 block sm:hidden">
                    <ul class="text-gray-200 text-xs">
                        @foreach($sidebarLinks as $item)
                            <a href="{{ url('/'.$item->slug) }}">
                                <li class="cursor-pointer px-4 py-2 hover:bg-gray-800">{{ $item->label }}</li>
                            </a>
                        @endforeach
                    </ul>

                    {{-- Top Navigation Mobile Web View --}}
                    <ul class="text-gray-200 text-xs">
                        @if(Auth::check())
                        <a href="{{ route('dashboard') }}"><li class="cursor-pointer px-4 py-2 hover:bg-gray-800">Dashboard</li></a>
                        @else
                        <a href="{{ route('login') }}"><li class="cursor-pointer px-4 py-2 hover:bg-gray-800">Login</li></a>
                        @endif
                        <!--
                            @foreach($topNavLinks as $item)
                            <a href="{{ url('/'.$item->slug) }}">
                                <li class="cursor-pointer px-4 py-2 hover:bg-gray-800">{{ $item->label }}</li>
                            </a>
                        @endforeach
                        -->
                    </ul>
                </div>
            </aside>
            <main class="bg-gray-100 p-12 min-h-screen sm:w-8/12 md:w-9/12 lg:w-10/12">
            <section class="divide-y text-gray-900">
                
                <h1 class="text-3x1 font-bold">{{ $title }}</h1>
                <div class="mt-5 text-sm">{!! $content !!}</div>
                <article>
                    @foreach($tableHarga as $item)
                        <div class="mt-4">
                            <h1 class="mt-2 mb-2 font-xl font-bold">Paket Pembuatan Web</h1>
                            <table>
                                <tr>
                                    <td><h2>{{ $item->package_name }}</h2></td>
                                </tr>
                                <tr>
                                    <td><p>{{ $item->price }}</p></td>
                                </tr>
                                <tr>
                                    <td><p>{{ $item->renewal_fee }}</p></td>
                                </tr>
                            </table>
                        </div>
                    @endforeach
                    <h1 class="mt-2 mb-2 font-xl font-bold">Review Pelanggan</h1>
                    @foreach($tableTesti as $item)
                    <div class="inline-flex w-full">
                        <div class="inline mt-4 p-2 card rounded-xl shadow-sm bg-white w-4/12 text-center">
                            <h2 class="font-md font-serif font-semibold">{{ $item->name }}</h2>
                            <p class="italic">" {{ $item->review }} "</p>
                            <p>{{ $item->via }}</p>
                            <p>{{ $item->website }}</p>
                        </div>
                    </div>
                    @endforeach
                </article>
                
            </section>
        </main>
        </div>

    {{-- Modal Form Login --}}
    <x-jet-dialog-modal wire:model="modalFormVisible" class="">
            <x-slot name="title" class="text-center font-sans text-lg font-semibold">
                {{ __('Masuk') }}
            </x-slot>

            <x-slot name="content">
                <x-jet-secondary-button class="ml-3 inline-flex" wire:click="" wire:loading.attr="disabled">
                    {{ __('Masuk dengan facebook') }}
                </x-jet-secondary-button>
                <x-jet-secondary-button class="ml-3" wire:click="" wire:loading.attr="disabled">
                    {{ __('Masuk dengan google') }}
                </x-jet-secondary-button>
                <h3 class="text-center font-sans text-sm font-medium">Atau dengan email</h3>
                <div class="mt-4">
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required placeholder="Masukan Email" />
                </div>
                <div class="mt-4">
                    <x-jet-label for="password" value="{{ __('Password') }}" />
                    <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" placeholder="Kata Sandi" />
                </div>
            </x-slot>

            <x-slot name="footer">
                <x-jet-button class="ml-3" wire:click="" wire:loading.attr="disabled">
                    {{ __('Masuk') }}
                </x-jet-danger-button>
            </x-slot>
    </x-jet-dialog-modal>
</div>


