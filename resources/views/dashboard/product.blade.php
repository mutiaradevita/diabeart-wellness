@extends('dashboard.header')

@section('title', 'Admin')

@section('main-content')

<div class="p-4 border-1 rounded-lg mt-14 bg-white">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <div class="pb-4 bg-white dark:bg-gray-900">
            <label for="table-search" class="sr-only">Search</label>
            <div class="relative mt-1">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <input type="text" id="table-search" class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for items">
            </div>
            <div class="py-2">
                <button data-modal-target="authentication-modal1" data-modal-toggle="authentication-modal1" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900 justify-content-end" type="button">
                    Add Produk
                </button>
            </div>
        </div>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama Produk
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Gambar
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Deskripsi
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Harga
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Komposisi
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Karbo
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Protein
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Kalori
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Serat
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produk as $produk)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $produk->id }}
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $produk->nama }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $produk->gambar }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $produk->deskripsi }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $produk->harga }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $produk->komposisi }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $produk->karbo }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $produk->protein }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $produk->kalori }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $produk->serat }}
                    </td>
                    <td class="px-6 py-4">
                        <button data-modal-target="authentication-modal2" data-modal-toggle="authentication-modal1" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900 justify-content-end" type="button">
                            Edit
                        </button>
                        <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<div id="authentication-modal1" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <form method="post" action="{{ route('product.store') }}" class="relative w-full max-w-md max-h-full">
        @csrf
        @method('POST')
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-hide="authentication-modal1">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900">Masukkan Data Produk</h3>
                <div>
                    <input type="text" name="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-oranye focus:border-oranye block w-full p-2.5 mb-4" placeholder="Nama Produk">
                </div>
                <div>
                    <input type="text" name="gambar" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-oranye focus:border-oranye block w-full p-2.5 mb-4" placeholder="Gambar">
                </div>
                <div>
                    <input type="text" name="deskripsi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-oranye focus:border-oranye block w-full p-2.5 mb-4" placeholder="Deskripsi">
                </div>
                <div>
                    <input type="text" name="harga" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-oranye focus:border-oranye block w-full p-2.5 mb-4" placeholder="Harga">
                </div>
                <div>
                    <input type="text" name="komposisi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-oranye focus:border-oranye block w-full p-2.5 mb-4" placeholder="Komposisi">
                </div>
                <div>
                    <input type="text" name="karbo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-oranye focus:border-oranye block w-full p-2.5 mb-4" placeholder="Karbo">
                </div>
                <div>
                    <input type="text" name="protein" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-oranye focus:border-oranye block w-full p-2.5 mb-4" placeholder="Protein">
                </div>
                <div>
                    <input type="text" name="kalori" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-oranye focus:border-oranye block w-full p-2.5 mb-4" placeholder="Kalori">
                </div>
                <div>
                    <input type="text" name="serat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-oranye focus:border-oranye block w-full p-2.5 mb-4" placeholder="Serat">
                </div>
                <button type="submit" class="w-full text-white bg-oranye hover:bg-oranyet focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" data-modal-hide="authentication-modal1">Simpan</button>
            </div>
        </div>
    </form>
</div>
<div id="authentication-modal2" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <form method="post" action="{{ route('product.update', $produk->) }}" class="relative w-full max-w-md max-h-full">
        @csrf
        @method('POST')
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-hide="authentication-modal2">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900">Masukkan Data Produk</h3>
                <div>
                    <input type="text" name="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-oranye focus:border-oranye block w-full p-2.5 mb-4" placeholder="Nama sss">
                </div>
                <div>
                    <input type="text" name="gambar" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-oranye focus:border-oranye block w-full p-2.5 mb-4" placeholder="Gambar">
                </div>
                <div>
                    <input type="text" name="deskripsi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-oranye focus:border-oranye block w-full p-2.5 mb-4" placeholder="Deskripsi">
                </div>
                <div>
                    <input type="text" name="harga" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-oranye focus:border-oranye block w-full p-2.5 mb-4" placeholder="Harga">
                </div>
                <div>
                    <input type="text" name="komposisi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-oranye focus:border-oranye block w-full p-2.5 mb-4" placeholder="Komposisi">
                </div>
                <div>
                    <input type="text" name="karbo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-oranye focus:border-oranye block w-full p-2.5 mb-4" placeholder="Karbo">
                </div>
                <div>
                    <input type="text" name="protein" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-oranye focus:border-oranye block w-full p-2.5 mb-4" placeholder="Protein">
                </div>
                <div>
                    <input type="text" name="kalori" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-oranye focus:border-oranye block w-full p-2.5 mb-4" placeholder="Kalori">
                </div>
                <div>
                    <input type="text" name="serat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-oranye focus:border-oranye block w-full p-2.5 mb-4" placeholder="Serat">
                </div>
                <button type="submit" class="w-full text-white bg-oranye hover:bg-oranyet focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" data-modal-hide="authentication-modal2">Simpan</button>
            </div>
        </div>
    </form>
</div>

@endsection