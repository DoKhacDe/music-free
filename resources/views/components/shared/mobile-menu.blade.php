<div class="fixed z-50 top-0 left-0 h-screen p-4 overflow-hidden w-full lg:hidden" style="display: none" x-show="menuOpen">
        <div class="w-full h-full relative p-6 bg-white rounded-2xl">
            <button type="button" class="absolute top-0 right-0 mt-4 mr-4" x-on:click="menuOpen = false">
                <x-heroicon-c-x-mark class="size-6"/>
            </button>

            <ul class="mt-6 px-4 font-medium flex flex-col gap-6">
                <li>
                    <a href="#" class="text-lg font-semibold">Trang chủ</a>
                </li>
                <li>
                    <a href="#" class="text-lg font-semibold">Sản phẩm</a>
                    <ul class="mt-4 pl-4 flex flex-col gap-4">
                        <li>
                            <a href="{{ route('insurances.motorcycleCtpl') }}">Trách nhiệm dân sự xe máy</a>
                        </li>
                        <li>
                            <a href="{{ route('insurances.autoCtpl')  }}">Trách nhiệm dân sự ô tô</a>
                        </li>
                        <li>
                            <a href="{{ route('insurances.travel') }}">Du lịch quốc tế</a>
                        </li>
                        <li>
                            <a href="{{ route('insurances.flightDelay') }}">Bảo hiểm trễ chuyến bay</a>
                        </li>
                        @if(!App::isProduction())
                        <li>
                            <a href="{{ route('insurances.care') }}">Bảo hiểm sức khỏe Insurlink Care</a>
                        </li>
                        @endif
                    </ul>
                </li>
                <li>
                    <a href="#"  class="text-lg font-semibold">Bảo hiểm Bảo Việt</a>
                    <ul class="mt-4 pl-4 flex flex-col gap-4">
                        <li>
                            <a href="{{ route('bao-viet.motorcycleCtpl') }}">Trách nhiệm dân sự xe máy</a>
                        </li>
                        <li>
                            <a href="{{ route('bao-viet.autoCtpl') }}">Trách nhiệm dân sự ô tô</a>
                        </li>
                        <li>
                            <a href="{{ route('bao-viet.travel') }}">Du lịch quốc tế</a>
                        </li>
                        <li>
                            <a href="{{ route('bao-viet.accidentPage') }}">Bảo hiểm tai nạn con người</a>
                        </li>
                        <li>
                            <a href="{{ route('bao-viet.cancerPage') }}">Bảo hiểm bệnh ung thư</a>
                        </li>
                        <li>
                            <a href="{{ route('bao-viet.health') }}">Bảo Việt An Gia</a>
                        </li>
                    </ul>
                </li>
                @if(!App::isProduction())
                <li>
                    <a href="{{ route('insurances.care') }}" class="text-lg font-semibold">Bảo hiểm sức khỏe Insurlink Care</a>
                </li>
                @endif
            </ul>
        </div>
    </div>
