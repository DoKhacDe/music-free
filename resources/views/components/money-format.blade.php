@props(['amount', 'currency' => 'vnd'])

<span {{ $attributes }}>{{ money($amount, $currency)->formatLocale() }}</span>
