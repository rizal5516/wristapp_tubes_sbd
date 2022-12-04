<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Product') }}
    </h2>
</x-slot>

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
        @foreach($errors->all() as $error)

            <li>{{ $error }}</li>

        @endforeach
        </ul>
    </div>
@endif

<div>
    <div class="flex flex-col items-center min-h-screen pt-6 bg-gray-100 sm:justify-center sm:pt-0">
        <div class="w-full px-16 py-20 mt-6 overflow-hidden bg-white rounded-lg lg:max-w-4xl">
        <div class="mb-4">
            <h1 class="font-serif text-3xl font-bold underline decoration-gray-400">
            Create Product
            </h1>
        </div>

        <div class="w-full px-6 py-4 bg-white rounded shadow-md ring-1 ring-gray-900/10">
            <form method="post" action="{{ route('product.store') }}">
                @csrf
            <!-- Title -->
            {{-- <div>
                <label class="block text-sm font-bold text-gray-700" for="title">
                ID Jam
                </label>

                <input
                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                type="text" id="id_jam" name="id_jam" />
            </div> --}}

            <div class="mt-5">
                <label class="block text-sm font-bold text-gray-700" for="title">
                Product Name
                </label>

                <input
                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                type="text" id="product_name" name="product_name" />
            </div>

            <div class="mt-5">
                <label class="block text-sm font-bold text-gray-700" for="title">
                Merk
                </label>

                <input
                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                type="text" id="merk" name="merk" />
            </div>

            <div class="mt-5">
                <label class="block text-sm font-bold text-gray-700" for="title">
                Harga
                </label>

                <input
                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                type="text" id="harga" name="harga" />
            </div>

            <div class="mt-5">
                <label class="block text-sm font-bold text-gray-700" for="title">
                Tahun Rilis
                </label>

                <input
                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                type="text" id="thn_rilis" name="thn_rilis" />
            </div>

            <div class="mt-5">
                <label class="block text-sm font-bold text-gray-700" for="title">
                Stok
                </label>

                <input
                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                type="text" id="stok" name="stok" />
            </div>

            <div class="mt-5">
                <label class="block text-sm font-bold text-gray-700" for="title">
                Id_Penjual
                </label>

                <input
                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                type="text" id="id_penjual" name="id_penjual" />
            </div>

            <div class="flex items-center justify-start mt-4 gap-x-2">
                <button type="submit"
                class="px-6 py-2 text-sm font-semibold rounded-md shadow-md text-sky-100 bg-sky-500 hover:bg-sky-700 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300">
                Save
                </button>
                <button type="submit"
                class="px-6 py-2 text-sm font-semibold text-gray-100 bg-gray-400 rounded-md shadow-md hover:bg-gray-600 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300">
                <a href="{{ route('product.index') }}">Cancel</a>
                </button>
            </div>
            </form>
        </div>
        </div>
    </div>
    </div>

</x-app-layout>
