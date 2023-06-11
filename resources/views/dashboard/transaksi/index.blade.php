@extends('dashboard.header')

@section('title', 'Admin')

@section('main-content')
    <div class="p-4 border-1 rounded-lg mt-14 bg-white">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <form action="{{route('dashboard.transaksi')}}" method="get">
                <div class="flex pb-4 bg-white dark:bg-gray-900">
                    <label for="table-search" class="sr-only">Search</label>
                    <div class="relative mt-1">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input type="text" name="search" class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cari Berdasarkan Tanggal atau Status">
                    </div>
                    <button type="submit" class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        <span class="sr-only">Search</span>
                    </button>
                </div>
            </form>
            <table class="w-full text-md text-left text-gray-500 dark:text-gray-400">
                <thead class="text-sm text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Invoice
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tanggal Transaksi
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Total Harga
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Metode Pembayaran
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama Customer
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Alamat Customer
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transaksi as $item)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $item->id }}
                            </th>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <a href="{{ route('dashboard.transaksi.keranjang', ['invoice' => $item->invoice]) }}" class="text-green-500 hover:text-blue-500 hover:underline">{{ $item->invoice }}</a>
                            </th>
                            <td class="px-6 py-4">
                                {{ $item->tanggal }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->total }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->metode_pembayaran }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->user->name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->alamat }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->status }}
                            </td>
                            <td class="px-6 py-4 grid justify-items-center">
                                @if ($item->status == 'process')
                                    <form method="POST" action="{{ route('dashboard.transaksi.update', $item->id) }}">
                                        @method('PUT')
                                        @csrf
                                        <input type="hidden" name="status" value="done">
                                        <a class="font-medium text-white dark:white"><button type="submit" class="bg-green-400 hover:bg-green-500 p-2 m-1 rounded-md">Selesaikan</button></a>
                                    </form>
                                    <form method="POST" action="{{ route('dashboard.transaksi.update', $item->id) }}">
                                        @method('PUT')
                                        @csrf
                                        <input type="hidden" name="status" value="cancel">
                                        <a class="font-medium text-white dark:text-white"><button type="submit" class="bg-red-500 hover:bg-red-600 p-2 m-1 rounded-md">Batalkan</button></a>
                                    </form>
                                @elseif($item->status == 'cancel')
                                    <form action="{{route('dashboard.transaksi.destroy', $item->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a class="font-medium text-white dark:text-white"><button type="submit" class="bg-red-500 hover:bg-red-600 p-2 m-1 rounded-md">Hapus</button></a>
                                    </form>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @if(isset($transaksi))
                <div class="flex justify-center mt-10 mb-10">
                    @if($transaksi->currentPage() > 1)
                     <a href="{{ $transaksi->previousPageUrl() }}" class="inline-flex items-center px-4 py-2 mr-3 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                        <svg aria-hidden="true" class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd"></path></svg>
                        Previous
                    </a>
                @endif
                
                @if($transaksi->hasMorePages())
                    <a href="{{ $transaksi->nextPageUrl() }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                        Next
                        <svg aria-hidden="true" class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </a>
                @endif
                </div>
            @endif
           
            
        </div>

    </div>
@endsection