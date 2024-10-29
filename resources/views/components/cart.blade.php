@props([
    'lines' => [],
    'subtotal' => null
])

<div {{ $attributes->class(['w-full bg-primary-100 rounded-lg']) }}>
    <header class="w-full uppercase text-center px-4 py-4 text-primary font-semibold">
        Thông tin đơn hàng
    </header>

    <div class="p-4 rounded-b-lg">
        <!-- line item meta -->
        <div class="mb-4 flex flex-col gap-2 text-sm">
            @foreach($lines as $label => $value)
                <x-cart-line :label="$label" :value="$value"/>
            @endforeach
        </div>

        <!-- total -->
        <div class="pt-4 flex items-center justify-between border-t">
            <div>Tổng phí thanh toán</div>
            <div class="font-bold text-lg">{{ money($subtotal, 'vnd')->formatLocale() }}</div>
        </div>
    </div>
</div>
