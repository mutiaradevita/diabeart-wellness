@php
use Carbon\Carbon;
@endphp
<x-home-layout>
    <div class="flex w-full min-h-screen h-max bg-kuning pt-20 pl-24 pr-24">
        <div class="w-7/12 mt-10 ml-10">
            <div class="font-bebas text-4xl text-white pb-12">
                Checkout
            </div>

            <div class="font-bebas text-2xl text-white">
                Alamat Pengiriman
            </div>
            <hr class="w-full h-px my-5 bg-gray-200 border-0 dark:bg-gray-700">

            <div class="font-sans text-xl text-gray-500">
                <a>{{$user->name}}</a><br>
                <a>{{$user->no_hp}}</a><br>
                <span class="alamat-user">{{$user->alamat}}</span><br>
            </div>
            <hr class="w-full h-px my-5 bg-gray-200 border-0 dark:bg-gray-700">

            <div class="pt-4 pb-6">
                <button data-modal-target="address-modal" data-modal-toggle="address-modal" type="button" class="text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-800 dark:bg-white dark:border-gray-700 dark:text-gray-900 dark:hover:bg-gray-200 mr-2 mb-2">
                    Ganti Alamat
                </button>

                <!-- Main modal -->
                <div id="address-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative w-full max-w-md max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="address-modal">
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                            <div class="px-6 py-6 lg:px-8">
                                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Isi alamat</h3>
                                <form class="space-y-6" action="#" method="POST">
                                    <div>
                                        <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Masukkan Alamat</label>
                                        <input type="text" name="alamat" id="alamat" placeholder="{{$user->alamat}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                                    </div>
                                    <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" data-modal-hide="address-modal">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="font-bebas text-2xl text-white">
                Rincian Pembelian
            </div>

            @foreach ($Keranjang as $item)
            <div class="flex items-center pb-4">
                <div class="flex w-10/12 h-fit bg-white rounded-2xl p-5">
                    <figcaption class="flex items-center space-x-3">
                        <img src="{{asset('storage/'. $item->produk->gambar)}}" class="w-36 h-28 rounded-lg" alt="profile picture">
                    </figcaption>
                    <div class="grid p-3 w-full">
                        <a class="text-xl content-center">Nama : {{$item->produk->nama}}</a>
                        <a class="text-bold">Harga : {{$item->produk->harga}}</a>
                        <a class="text-bold">Jumlah: {{$item->jumlah}}</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

        <div class="w-3/12 min-h-80 h-fit mt-32  bg-white sticky top-24 ml-12 rounded-2xl p-2">
            <div class="p-3 text-center text-2xl">
                Total Pembayaran
            </div>
            <div class="flex">
                <div class="pl-10 pr-10 pt-3">
                    <div class="grid pt-2 text-bold">
                        <hr class="w-64 h-px my-8 bg-black border-0 dark:bg-white">
                        <a class="text-center">Rp {{$totalSemua + 6000}}</a>
                        <hr class="w-64 h-px my-8 bg-black border-0 dark:bg-white">
                    </div>
                </div>
            </div>

            <form method="post" action="{{ route('transaksi.create') }}">
                @csrf
                <input type="hidden" name="tanggal" value="{{ Carbon::now()->format('Y-m-d H:i:s') }}">
                <input type="hidden" name="metode_pembayaran" value="tunai">
                @foreach ($Keranjang as $item)
                <input type="hidden" name="keranjang[]" value="{{$item->id}}">
                @endforeach
                <input type="hidden" id="alamat-user" name="alamat" value="{{$user->alamat}}">
                <input type="hidden" name="status" value="process">
                <input type="hidden" name="total" value="{{$totalSemua + 6000}}">
                <div class="grid place-items-center mt-10">
                    <button type="submit" class="text-white bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:focus:ring-yellow-900">Proses</button>
                </div>
            </form>
        </div>
    </div>
</x-home-layout>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("address-modal").addEventListener("submit", function(event) {
            event.preventDefault();

            // Proses form dan ambil nilai input
            var addressLine1 = document.getElementById("alamat").value;

            // Update konten HTML dengan nilai input
            document.getElementsByClassName("alamat-user")[0].textContent = addressLine1;

            var inputElement = document.getElementById('alamat-user');
            inputElement.value = addressLine1;
        });
    });
</script>