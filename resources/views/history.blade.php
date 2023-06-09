<x-home-layout>
    <div class="flex w-full min-h-screen h-max bg-kuning pt-20 text-gray-500">

        <div class="grid pl-24 pr-24 w-full h-max">
            <div class="inline-flex gap-px rounded-md shadow-sm place-content-center mt-10 mb-10">
                <form method="post" action="{{route('history')}}">
                    @csrf
                    <button type="submit" class="px-8 py-4 text-xl font-medium text-gray-900 bg-white border border-gray-200 rounded-l-lg hover:bg-gray-100 focus:z-10 focus:ring-1 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                        <a>Semua</a>
                    </button>
                </form>

                <form method="post" action="{{ route('history.filter') }}">
                    @csrf
                    <input type="hidden" name="status" value="process">
                    <button type="submit" class="px-8 py-4 text-xl font-medium text-gray-900 bg-white border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-1 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                        <a>Diproses</a>
                    </button>
                </form>

                <form method="post" action="{{ route('history.filter') }}">
                    @csrf
                    <input type="hidden" name="status" value="done">
                    <button type="submit" class="px-8 py-4 text-xl font-medium text-gray-900 bg-white border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-1 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                        <a>Selesai</a>
                    </button>
                </form>

                <form method="post" action="{{ route('history.filter') }}">
                    @csrf
                    <input type="hidden" name="status" value="cancel">
                    <button type="submit" class="px-8 py-4 text-xl font-medium text-gray-900 bg-white border border-gray-200 rounded-r-md hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-1 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                        <a>Dibatalkan</a>
                    </button>
                </form>
            </div>
            @if ($transaksi && count($transaksi) > 0)
            @foreach ($transaksi as $item)
            <div class="grid justify-items-center pb-4 pt-4">
                <div class="grid w-10/12 min-h-fit h-60 bg-white rounded-xl p-6 drop-shadow-lg">
                    <div class="relative">
                        <div class="absolute top-0 left-0 font-bold text-xl ">
                            <a class="text-green-500">{{$item->invoice}}</a>
                        </div>
                        <div class="absolute top-0 right-0">
                            <div class=" flex">
                                <a class="tracking-[.10em]">Tanggal & waktu: {{$item->tanggal}}</a>
                                @if ($item->status == 'done')
                                <div class="ml-4 text-white bg-green-500 w-fit h-fit font-medium rounded-sm text-sm text-center p-0.5 dark:bg-green-400">
                                    Berhasil
                                </div>
                                @elseif ($item->status == 'process')
                                <div class="ml-4 text-white bg-orange-400 w-fit h-fit font-medium rounded-sm text-sm text-center p-0.5 dark:bg-orange-300">
                                    Diproses
                                </div>
                                @else
                                <div class="ml-4 text-white bg-red-700 w-fit h-fit font-medium rounded-sm text-sm text-center p-0.5 dark:bg-red-600">
                                    Dibatalkan
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="mt-10">
                        <div class="grid pl-5 w-full h-fit text-md">
                            <a class="text-bold">Alamat Pengiriman</a>
                            {{$item->alamat}}
                            <br><br>
                            <a class="text-bold">Penerima</a>
                            {{$user->name}}
                            <br>
                            {{$user->no_hp}}
                        </div>
                    </div>
                    <div class="relative">
                        <div class="absolute bottom-0 right-0">
                            {{-- modal --}}
                            <button data-modal-target="staticModal{{$loop->index}}" data-modal-toggle="staticModal{{$loop->index}}" type="button">
                                <a class="font-bold text-green-600 dark:text-green-500 pr-6">Lihat Detail Transaksi</a>
                            </button>


                            <a href="{{route('produk')}}"><button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-lg px-10 py-3 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Beli Lagi</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main modal -->
            <div id="staticModal{{$loop->index}}" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-2xl max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <!-- Modal header -->
                        <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                Detail Transaksi
                            </h3>
                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="staticModal{{$loop->index}}">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-4 grid">
                            <div class="flex w-full">
                                <div class="grid pl-5 w-2/4 h-fit text-lg">
                                    <a class="text-bold">Invoice</a>
                                    <a class="text-green-500 text-bold text-xl">{{$item->invoice}}</a>
                                    <br>
                                    <a class="text-bold">Status</a>
                                    {{$item->status}}
                                    <br><br>
                                    <a class="text-bold">Tanggal Transaksi</a>
                                    {{$item->tanggal}}
                                    <br><br>
                                    <a class="text-bold">Alamat Pengiriman</a>
                                    {{$item->alamat}}
                                    <br><br>
                                    
                                </div>
                                <div class="grid pl-3 mr-5 w-2/4 h-fit text-lg">
                                    <a class="text-bold">Penerima</a>
                                    {{$user->name}}
                                    <br>
                                    {{$user->no_hp}}
                                    <br><br>
                                    <a class="text-bold">Metode Pembayaran</a>
                                    {{$item->metode_pembayaran}}
                                    <br><br>
                                    <a class="text-bold">Total Harga</a>
                                    Rp {{$item->total - 6000}} + Rp 6000 (ongkir)
                                     <br>
                                    = Rp {{$item->total}}
                                    <br>
                                </div>
                            </div>
                            <hr class="h-px w-full mx-auto my-8 bg-gray-400 border-0 dark:bg-gray-700">
                            <div class="produk">
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">
                                Detail Produk
                                </h3>
                                @foreach ($item->keranjang as $items)
                                <div class="pl-5 pr-5 pb-4">
                                    <div class="flex w-full border-2 drop-shadow-sm h-fit bg-white rounded-lg p-5">
                                        <figcaption class="space-x-3">
                                            <img class="w-30 h-30 rounded-2" src="{{ asset('img/HealthyBox.svg') }}" alt="profile picture">
                                        </figcaption>   
                                        <div class="grid pl-3 w-full ">
                                            <a class="text-xl text-bold">{{$items->produk->nama}}</a>
                                            <a class="text-sm text-bold">Total : Rp {{$items->produk->harga}} x {{$items->jumlah}}(barang) = Rp {{$items->total_harga}}</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- Modal footer -->
                        <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                            @if ($item->status == 'done')
                                    <button data-modal-hide="staticModal{{$loop->index}}" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cetak Nota Transaksi</button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            oops tidak ada transaksi sesuai filter
            @endif
        </div>
    </div>
</x-home-layout>