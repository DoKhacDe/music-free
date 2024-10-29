<x-layouts.app>
    <div class="container mx-auto md:mt-12">
        <div class="md:px-12 px-4">
            <h1 class="text-3xl mb-6 text-primary text-center">Ai đang nghe?</h1>
            <div class="grid md:grid-cols-4 grid-cols-2 md:gap-8 gap-4">
                @foreach($customers as $customer)
                    <a class="customer-card" href="{{ '/' . $customer->slug }}">
                        <div class="bg-blue-500/20 flex items-center justify-center rounded-md transition-transform transform hover:scale-105 hover:shadow-lg">
                            <img src="{{ isset($customer->image) ? asset('/storage/' . $customer->image) : '/img/headphone.png'}}" alt="{{ $customer->name }}" class="rounded-md"/>
                        </div>
                        <div class="mt-2 text-center font-semibold text-secondary-900">{{ $customer->name }}</div>
                    </a>
                @endforeach
                    <a class="customer-card flex flex-col items-center" href="/backoffice/customers/create">
                        <div class="bg-blue-500/20 flex items-center justify-center rounded-md transition-transform transform hover:scale-105 hover:shadow-lg h-full w-full">
                            <img src="/img/add.png" alt="add" class="rounded-md w-24 h-24"> <!-- Thay đổi kích thước ở đây -->
                        </div>
                        <div class="mt-2 text-center font-medium text-gray-600">Thêm hồ sơ</div>
                    </a>
            </div>

            <div class="w-full flex justify-center mt-6">
                <x-primary-button as="a" href="/backoffice"
                                  class="flex items-center justify-center">Quản lý hồ sơ</x-primary-button>
            </div>
        </div>
    </div>
</x-layouts.app>
