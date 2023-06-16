@extends('dashboard.header')

@section('title', 'Admin')

@section('main-content')

<div class="p-4 border-1 rounded-lg mt-14 bg-white">
    <div class="relative overflow-x-auto">
        <div class="pb-4 bg-white dark:bg-gray-900">
            <label for="table-search" class="sr-only">Search</label>
            <div class="relative mt-1">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <form action="{{ route('kategori.index') }}" method="get">
                    <input class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="search" name="nama_kategori" value="{{ Request::get('search') }}" placeholder="Search for items" aria-label="Search">
                    <label for="table-search" class="sr-only">Search</label>
                </form>
            </div>
        </div>
    </div>
    <div class="float-right my-2">
        <form class="d-flex" action="{{ url('kategori') }}" method="get">
            <a class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900 justify-content-end" href="{{ route('kategori.create') }}">ADD CATEGORY</a>
        </form>
    </div>
</div>
<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-3">
                ID
            </th>
            <th scope="col" class="px-6 py-3">
                Nama Kategori
            </th>
            <th scope="col" class="px-6 py-3">
                Action
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($kategori as $Kategori)
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{ $Kategori->id }}
            </th>
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{ $Kategori->nama_kategori }}
            </th>
            <td class="px-6 py-4">
                <form action="{{ route('kategori.destroy',$Kategori->id) }}" method="POST">
                    <a class="font-medium text-blue-600 dark:text-red-500 hover:underline" href="{{ route('kategori.edit', $Kategori->id) }}">Edit</a>
                    <a class="font-medium text-green-600 dark:text-red-500 hover:underline" href="{{ route('kategori.show', $Kategori->id) }}">Show</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{$kategori->links()}}
</div>
</div>
@endsection