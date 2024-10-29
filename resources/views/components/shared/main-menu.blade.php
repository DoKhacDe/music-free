<nav x-data="{
    navigationMenuOpen: false,
    navigationMenu: '',
    navigationMenuCloseDelay: 200,
    navigationMenuCloseTimeout: null,
    navigationMenuLeave() {
        let that = this;
        this.navigationMenuCloseTimeout = setTimeout(() => {
            that.navigationMenuClose();
        }, this.navigationMenuCloseDelay);
    },
    navigationMenuReposition(navElement) {
        this.navigationMenuClearCloseTimeout();
        this.$refs.navigationDropdown.style.left = navElement.offsetLeft + 'px';
        this.$refs.navigationDropdown.style.marginLeft = (navElement.offsetWidth / 2) + 'px';
    },
    navigationMenuClearCloseTimeout() {
        clearTimeout(this.navigationMenuCloseTimeout);
    },
    navigationMenuClose() {
        this.navigationMenuOpen = false;
        this.navigationMenu = '';
    }
}" class="relative z-10 w-auto">
    <div class="relative hidden lg:block">
        <ul
            class="flex items-center justify-center flex-1 p-1 space-x-1 list-none rounded-md text-neutral-700 group border-neutral-200/80">
            <!-- list products -->
            <li>
                <button
                    x-bind:class="{
                        'bg-neutral-100': navigationMenu == 'buy-products',
                        'hover:bg-neutral-100': navigationMenu != 'buy-products'

                    }"
                    x-on:mouseover="navigationMenuOpen=true; navigationMenuReposition($el); navigationMenu='buy-products'"
                    x-on:mouseleave="navigationMenuLeave()"
                    class="inline-flex items-center justify-center h-10 px-4 py-2 font-semibold transition-colors rounded-md hover:text-neutral-900 focus:outline-none disabled:opacity-50 disabled:pointer-events-none bg-background hover:bg-neutral-100 group w-max">
                    <span>Mua bảo hiểm</span>
                    <svg :class="{ '-rotate-180': navigationMenuOpen == true && navigationMenu == 'learn-more' }"
                        class="relative top-[1px] ml-1 h-3 w-3 ease-out duration-300" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" aria-hidden="true">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </button>
            </li>

            <!-- Bao Viet products -->
            <li>
                <button
                    x-bind:class="{ 'bg-neutral-100': navigationMenu=='bao-viet', 'hover:bg-neutral-100': navigationMenu!='bao-viet' }"
                    x-on:mouseover="navigationMenuOpen=true; navigationMenuReposition($el); navigationMenu='bao-viet'"
                    x-on:mouseleave="navigationMenuLeave()"
                    class="inline-flex items-center justify-center h-10 px-4 py-2 font-semibold transition-colors rounded-md hover:text-neutral-900 focus:outline-none disabled:opacity-50 disabled:pointer-events-none group w-max">
                    <span>Bảo hiểm Bảo Việt</span>
                    <svg :class="{ '-rotate-180': navigationMenuOpen == true && navigationMenu == 'getting-started' }"
                        class="relative top-[1px] ml-1 h-3 w-3 ease-out duration-300" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" aria-hidden="true">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </button>
            </li>
            @if(!App::isProduction())
            <li>
                <a
                    href="{{ route('insurances.care') }}"
                    x-bind:class="{
                        'bg-neutral-100': navigationMenu == 'buy-products',
                        'hover:bg-neutral-100': navigationMenu != 'buy-products'

                    }"
                    class="inline-flex items-center justify-center h-10 px-4 py-2 font-semibold transition-colors rounded-md hover:text-neutral-900 focus:outline-none disabled:opacity-50 disabled:pointer-events-none group w-max">
                    <span>Bảo hiểm sức khỏe Insurlink Care</span>
                </a>
            </li>
            @endif
        </ul>
    </div>
    <div
        x-cloak
        x-ref="navigationDropdown"
        x-show="navigationMenuOpen"
        x-transition:enter="transition ease-out duration-100"
        x-transition:enter-start="opacity-0 scale-90"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-100"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-90"
        x-on:mouseover="navigationMenuClearCloseTimeout()"
        x-on:mouseleave="navigationMenuLeave()"
        class="absolute top-0 pt-3 duration-200 ease-out -translate-x-1/2  translate-y-11"
        >

        <div
            class="flex justify-center w-auto h-auto overflow-hidden bg-white border rounded-md shadow-sm border-neutral-200/70">

            <div x-show="navigationMenu == 'bao-viet'"
                class="flex items-stretch justify-center w-full p-2 gap-x-3">
                <div class="min-w-64 w-full">
                    <x-link href="{{ route('bao-viet.motorcycleCtpl') }}" x-on:click="navigationMenuClose()" class="block px-3.5 py-3  rounded hover:bg-neutral-100">
                        <span class="block mb-1 font-medium text-black">Trách nhiệm dân sự xe máy</span>
                    </x-link>
                    <x-link href="{{ route('bao-viet.autoCtpl') }}" x-on:click="navigationMenuClose()" class="block px-3.5 py-3  rounded hover:bg-neutral-100">
                        <span class="block mb-1 font-medium text-black">Trách nhiệm dân sự ô tô</span>
                    </x-link>
                    <x-link href="{{ route('bao-viet.travel') }}" x-on:click="navigationMenuClose()" class="block px-3.5 py-3  rounded hover:bg-neutral-100">
                        <span class="block mb-1 font-medium text-black">Du lịch quốc tế</span>
                    </x-link>
                    <x-link href="{{ route('bao-viet.accidentPage') }}" x-on:click="navigationMenuClose()" class="block px-3.5 py-3  rounded hover:bg-neutral-100">
                        <span class="block mb-1 font-medium text-black">Bảo hiểm tai nạn con người</span>
                    </x-link>
                    <x-link href="{{ route('bao-viet.cancerPage') }}" x-on:click="navigationMenuClose()" class="block px-3.5 py-3  rounded hover:bg-neutral-100">
                        <span class="block mb-1 font-medium text-black">Bảo hiểm bệnh ung thư</span>
                    </x-link>
                    <x-link href="{{ route('bao-viet.health') }}" x-on:click="navigationMenuClose()"
                            class="block px-3.5 py-3  rounded hover:bg-neutral-100">
                        <span class="block mb-1 font-medium text-black">Bảo Việt An Gia</span>
                    </x-link>
                </div>
            </div>

            <div x-show="navigationMenu == 'buy-products'" class="flex items-stretch justify-center w-full p-2">
                <div class="min-w-64 w-full">
                    <x-link href="{{ route('insurances.motorcycleCtpl')}}" x-on:click="navigationMenuClose()"
                        class="block px-3.5 py-3 rounded hover:bg-neutral-100">
                        <span class="block mb-1 font-medium text-black">Trách nhiệm dân sự xe máy</span>
                    </x-link>
                    <x-link href="{{ route('insurances.autoCtpl') }}" x-on:click="navigationMenuClose()"
                        class="block px-3.5 py-3  rounded hover:bg-neutral-100">
                        <span class="block mb-1 font-medium text-black">Trách nhiệm dân sự ô tô</span>
                    </x-link>
                    <x-link href="{{ route('insurances.travel') }}" x-on:click="navigationMenuClose()"
                        class="block px-3.5 py-3  rounded hover:bg-neutral-100">
                        <span class="block mb-1 font-medium text-black">Du lịch quốc tế</span>
                    </x-link>
                    <x-link href="{{ route('insurances.accident') }}" x-on:click="navigationMenuClose()"
                       class="block px-3.5 py-3  rounded hover:bg-neutral-100">
                        <span class="block mb-1 font-medium text-black">Bảo hiểm tai nạn 24/7</span>
                    </x-link>
                    <x-link href="{{ route('insurances.flightDelay') }}" x-on:click="navigationMenuClose()"
                        class="block px-3.5 py-3  rounded hover:bg-neutral-100">
                        <span class="block mb-1 font-medium text-black">Bảo hiểm trễ chuyến bay</span>
                    </x-link>
{{--                    <x-link href="{{ route('insurances.health') }}" x-on:click="navigationMenuClose()"--}}
{{--                            class="block px-3.5 py-3  rounded hover:bg-neutral-100">--}}
{{--                        <span class="block mb-1 font-medium text-black">Bảo hiểm sức khỏe toàn diện</span>--}}
{{--                    </x-link>--}}
                    @if(!App::isProduction())
                        <x-link href="{{ route('insurances.care') }}" x-on:click="navigationMenuClose()"
                                class="block px-3.5 py-3  rounded hover:bg-neutral-100">
                            <span class="block mb-1 font-medium text-black">Bảo hiểm sức khỏe Insurlink Care</span>
                        </x-link>
                    @endif
                </div>
            </div>

        </div>
    </div>
</nav>
