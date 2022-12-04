<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product') }}
        </h2>
    </x-slot>

    <div class="container max-w-7xl mx-auto mt-8">
        <div class="mb-4">
            <h1 class="font-serif text-3xl font-bold underline decoration-gray-400"> Data Product</h1>
            <div class="flex justify-end">
            <button class="px-4 py-2 rounded-md bg-sky-500 text-sky-100 hover:bg-sky-600"><a href="{{ route('product.create') }}">Create Product</a></button>
            </div>
        </div>

    @if($message = Session::get('success'))
    <div class="alert alert-success mt-3" role="alert">
        {{ $message }}
    </div>
    @endif

        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
            <div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
                <table class="min-w-full">
                <thead>
                    <tr>
                    <th
                        class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                        Id Jam</th>
                    <th
                        class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                        Product Name</th>
                    <th
                        class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                        Merk</th>
                    <th
                        class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                        Harga</th>
                    <th
                        class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                        Tahun Rilis</th>
                    <th
                        class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                        Stok</th>
                    <th
                        class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                        Id Penjual</th>
                    <th
                        class="px-6 py-3 text-sm text-left text-gray-500 border-b border-gray-200 bg-gray-50" colspan="2">
                        Action</th>
                    </tr>
                </thead>

                <tbody class="bg-white">
                    @foreach ($datas as $data)
                    <tr>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                        <div class="flex items-center">
                            {{ $data->id_jam }}
                        </div>

                    </td>

                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                        <div class="text-sm leading-5 text-gray-900">{{ $data->product_name }}
                        </div>
                    </td>

                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                        <p>{{ $data->merk }}</p>
                    </td>

                    <td class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                        <span>{{ $data->harga }}</span>
                    </td>

                    <td class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                        <span>{{ $data->thn_rilis }}</span>
                    </td>

                    <td class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                        <span>{{ $data->stok }}</span>
                    </td>

                    <td class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                        <span>{{ $data->id_penjual }}</span>
                    </td>

                    <td class="text-sm font-medium leading-5 text-center whitespace-no-wrap border-b border-gray-200 ">
                        <a href="{{ route('product.edit', $data->id_jam) }}" class="text-indigo-600 hover:text-indigo-900">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                        </a>

                    </td>
                    <td class="text-sm font-medium leading-5 whitespace-no-wrap border-b border-gray-200 ">
                        <a href="{{ route('product.delete', $data->id_jam) }}"><svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-600 hover:text-red-800"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg></a>

                    </td>
                    </tr>
                    @endforeach

                </tbody>
                </table>
            </div>
            </div>
        </div>
        </div>

</x-app-layout>
