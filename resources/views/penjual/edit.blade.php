<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Penjual') }}
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
        Edit Data
        </h1>
    </div>

    <div class="w-full px-6 py-4 bg-white rounded shadow-md ring-1 ring-gray-900/10">
        <form method="post" action="{{ route('penjual.update', $data->id_penjual) }}">
            @csrf
        <!-- Title -->
        <div>
            <label class="block text-sm font-bold text-gray-700">
            Id_Penjual
            </label>

            <input
            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            type="text" name="id_penjual"  id="id_penjual" value="{{ $data->id_penjual }}" />
        </div>

        <div class="mt-5">
            <label class="block text-sm font-bold text-gray-700">
            Nama_Penjual
            </label>

            <input
            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            type="text" name="nama_penjual"  id="nama_penjual" value="{{ $data->nama_penjual }}" />
        </div>

        <div class="mt-5">
            <label class="block text-sm font-bold text-gray-700">
            No. Telpon
            </label>

            <input
            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            type="text" name="no_telp"   id="no_telp" value="{{ $data->no_telp }}" />
        </div>

        <div class="mt-5">
            <label class="block text-sm font-bold text-gray-700">
            Email
            </label>

            <input
            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            type="text" name="email"  id="email" value="{{ $data->email }}" />
        </div>

        <div class="flex items-center justify-start mt-4 gap-x-2">
            <button type="submit"
            class="px-6 py-2 text-sm font-semibold rounded-md shadow-md text-sky-100 bg-sky-500 hover:bg-sky-700 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300">
            Update
            </button>

            <button type="submit"
            class="px-6 py-2 text-sm font-semibold text-gray-100 bg-gray-400 rounded-md shadow-md hover:bg-gray-600 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300">
            <a href="{{ route('penjual.index') }}">Cancel</a>
            </button>
        </div>
        </form>
    </div>
    </div>
</div>
</div>

</x-app-layout>