<footer style="background: linear-gradient(46.3deg, #111111 6.66%, #2F2A53 97.65%);"
        class="text-white">
    @if (is_central())
        <div class="container px-4 mx-auto pt-20">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:flex gap-12 lg:gap-10 py-10">
                <div class="basis-1/4 -mt-20">
                    <div class="mb-6">
                        <img src="{{ asset('/img/logo-white.png') }}" alt="logo" class="max-w-[230px]" loading="lazy">
                    </div>
                    <p class="text-sm">
                        {{ site()->name() }} - Bảo hiểm trực tuyến vượt trội, tạo nên sự khác biệt và sự chăm sóc tận
                        tâm. Hãy trải nghiệm và cảm nhận sự khác biệt tại {{ site()->name() }}!<br>
                        Một sản phẩm của IBAOHIEM - Bảo hiểm trực tuyến.
                    </p>
                </div>
                <div class="basis-1/4">
                    <div class="mb-6">
                        <div class="mb-0 font-bold text-base">Về Insurlink</div>
                    </div>
                    <ul class="space-y-4 text-sm">
                        @if($pages && count($pages) > 0)
                                @foreach($pages as $page)
                                    <li><a href="{{ route('pages.show', ['page' => $page->slug]) }}">{{$page->name}}</a></li>
                                @endforeach
                        @endif
                        <li>
                            <x-install-app/>
                        </li>
                    </ul>
                </div>
                <div class="basis-1/4">
                    <div class="mb-6">
                        <div class="mb-0 font-bold text-base">Sản phẩm</div>
                    </div>
                    <ul class="space-y-4 text-sm">
                        <li><a href="{{ route('insurances.autoCtpl') }}">Bảo hiểm TNDS Ô tô</a></li>
                        <li><a href="{{ route('insurances.motorcycleCtpl') }}">Bảo hiểm TNDS Xe máy</a></li>
                        <li><a href="{{ route('insurances.travel') }}">Bảo hiểm du lịch</a></li>
                        <li><a href="{{ route('insurances.accident') }}">Bảo hiểm tai nạn 24/7</a></li>
                        <li><a href="{{ route('insurances.flightDelay') }}">Bảo hiểm trễ chuyến bay</a></li>
{{--                        <li><a href="{{ route('insurances.health') }}">Bảo hiểm sức khoẻ toàn diện</a></li>--}}
                        @if(!App::isProduction())
                        <li><a href="{{ route('insurances.care') }}">Bảo hiểm sức khoẻ Insurlink Care</a></li>
                        @endif
                    </ul>

                </div>
                <div class="basis-1/4">
                    <div class="mb-6">
                        <div class="mb-0 font-bold text-base">Thông tin liên hệ</div>
                    </div>
                    <ul class="space-y-2 text-sm">
                        <li>CÔNG TY TNHH DỊCH VỤ BẢO HIỂM TRỰC TUYẾN IBAOHIEM</li>
                        <li>Mã số thuế: {{ config('insurlink.company.tax_code') }}</li>
                        <li>Địa chỉ: {{ config('insurlink.company.address') }}</li>
                        <li>Hotline: <a href="tel:{{ config('insurlink.customer_support.hotline') }}" class="text-white">
                                {{ \Illuminate\Support\Number::formatPhone(config('insurlink.customer_support.hotline')) }}
                            </a></li>
                        <li>Tel: <a href="tel:{{ config('insurlink.customer_support.phone') }}" class="text-white">
                                {{ Number::formatPhone(config('insurlink.customer_support.phone')) }}
                            </a></li>
                        <li>Email: <a href="mailto:partner@insurlink.vn" class="text-white">partner@insurlink.vn</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    @endif

    @if (is_central())
        <div class="copyright text-neutral-400 py-4 text-sm text-center border-t border-neutral-900">
            {{ '@'.date('Y') }} Bản quyền thuộc về INSURLINK - IBAOHIEM
        </div>
    @endif
</footer>
