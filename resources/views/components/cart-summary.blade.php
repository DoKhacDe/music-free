<div class="lg:sticky top-2">
    <div class="w-full bg-primary-100 rounded-lg md:max-w-[400px]">
        <header class="w-full uppercase text-center px-4 py-4 text-primary font-semibold">
            Thông tin đơn hàng
        </header>

        <div class="p-4 rounded-b-lg">
            <x-cart-line label="Nhà cung cấp" :value="$options['insurer']"/>
            <x-cart-line class="mt-2" label="Thời hạn bảo hiểm" value="1 năm"/>
            <x-cart-line class="mt-2" label="Hiệu lực bảo hiểm từ"
                         :value="\Carbon\Carbon::parse($options['start_date'])->format('d/m/Y')"/>
            <x-cart-line class="mt-2" label="Số người được bảo hiểm"
                         :value="str_pad($options['number_of_people'], 2, '0', STR_PAD_LEFT)"/>

            @foreach($insureds as $key => $item)
                @php
                    $dobAge = '';
                    if(isset($item['dob']) && !empty($item['dob'])) {
                        $dob = \Carbon\Carbon::parse($item['dob'])->format('d/m/Y');
                        $age = \Carbon\Carbon::parse($item['dob'])->age;
                        $dobAge = $dob . ' | ' . $age . ' tuổi';
                    }

                    $product = \App\Models\Product::where('id', $item['product_id'])->first();
                @endphp
                <div class="p-2 rounded-lg border border-gray-300 mt-2">
                    <div>
                        @if($options['number_of_people'] > 1)
                            <x-cart-line :label="'NĐBH ' . $key + 1"
                                         :value="$item['name'] ?? ''"/>
                        @else
                            <x-cart-line label="NĐBH"
                                         :value="$item['name'] ?? ''"/>
                        @endif
                    </div>
                    <div class="mt-2">
                        <x-cart-line label="Ngày sinh"
                                     :value="$dobAge"/>
                    </div>
                    <div class="mt-2">
                        <x-cart-line label="Gói bảo hiểm"
                                     :value="isset($product) && $product->name ? $product->name : ''"/>
                    </div>
{{--                    <div class="mt-2">--}}
{{--                        <div class="flex items-center justify-between">--}}
{{--                            <div class="text-sm">Phí bảo hiểm</div>--}}
{{--                            <div--}}
{{--                                class="font-medium text-primary">{{ isset($item['price']) ? number_format($item['price'], 0, ',', '.') : 0 }}--}}
{{--                                đ--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            @endforeach
            <div class="border-t border-gray-300 mt-4">
                <div class="flex items-center justify-between py-2">
                    <div class="text-md font-semibold text-primary">Tổng phí thanh toán</div>
                    <div
                        class="font-semibold text-primary text-lg">{{ isset($totalPrice) && isset($product) ? number_format($totalPrice, 0, ',', '.') : 0 }}
                        đ
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
