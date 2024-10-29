{{--<x-shared.current-tenant />--}}
<!-- menu -->
@props(['absolute' =>  true, 'profile'])

<header @class([
    "absolute" => $absolute,
    "top-0 py-4 bg-transparent w-full",
    ])>
    <div class="container mx-auto bg-white shadow flex items-center justify-between w-full rounded-full px-6 py-2">
        <div class="flex gap-4">
            <a href="/" class="flex items-center">
                <img src="{{ asset('/logo.jpg') }}" alt="aaaaa"
                     class="logo-image max-h-[60px]"/>
                <h1 class="bg-gradient-to-r from-purple-600 via-green-500 to-orange-50 inline-block text-transparent bg-clip-text font-bold text-2xl">{{ config('app.name') }}</h1>
            </a>
        </div>
        @if(isset($profile))
            <div class="flex justify-center items-center">
                <a href="/{{$profile->slug }}/search"><x-heroicon-o-magnifying-glass class="size-6 inline hover:text-primary"/></a>
                <div class="desktop ml-2">Xin chào, <span class="font-semibold text-primary">{{ $profile->name }}</span></div>
                @if(isset($profile->image))
                    <img src="{{ asset('/storage/' . $profile->image)}}" alt="add" class="rounded-full w-12 h-12 ml-2">
                @else
                    <x-heroicon-o-user-circle class="size-10 inline"/>
                @endif

            </div>

        @endif
{{--            @guest--}}

{{--            @else--}}
{{--            <button type="button" class="flex items-center gap-1 text-gray-700">--}}
{{--                <div>Xin chào, <span class="font-semibold">{{ auth()->user()->name }}</span></div>--}}
{{--            </button>--}}
{{--            @endguest--}}
    </div>

</header>

