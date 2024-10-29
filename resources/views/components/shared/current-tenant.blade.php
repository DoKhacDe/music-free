@if (\Illuminate\Support\Facades\App::isLocal())
    <div class="w-full text-white bg-rose-500 text-sm fixed z-50">Current tenant: {{ tenant()?->name ?? '--'  }} </div>
@endif
