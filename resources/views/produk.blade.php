<x-home-layout>
    <div class="grid w-full bg-kuning h-[200vh]">
        <h1 class="absolute font-bebas text-white top-[100px] text-[70px] justify-self-center tracking-[.20em]">Pilihan Makanan Sehat</h1>
        <h3 class="absolute font-bebas text-oranyet top-[200px] text-[40px] justify-self-center tracking-[.20em]">Healthy Lifestyle Meal Plan</h3>
        <div class="relative w-fit h-fit mx-auto grid grid-cols-4 gap-y-14 gap-x-14 top-[290px]">
            @foreach($produk as $Produk)
            <a href="{{route('detail', $Produk->nama)}}" class="mt-6">
                <div class="grid bg-gray-100 w-[300px] h-[370px] hover:bg-gray-200 shadow-lg rounded-2xl duration-500 hover:scale-105 hover:shadow-2xl">
                    <img src="{{$Produk->gambar}}" alt="produk" class="object-cover h-60 rounded-t-2xl">
                    <div class="px-6 py-3">
                        @foreach($Produk->kategori as $p)
                        <span class="text-gray-400 text-xs">{{$p->nama_kategori ?? 'None'}} </span>
                        @endforeach
                        <p class="text-lg font-bold text-black truncate block capitalize">{{$Produk->nama}}</p>
                        <div class="flex items-center">
                            <p class="text-lg font-semibold text-black cursor-auto my-3">Rp {{$Produk->harga}}</p>
                            <del>
                                <p class="text-sm text-gray-600 cursor-auto ml-2">Rp 1000000</p>
                            </del>
                            <div class="ml-auto"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                                    <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                </svg></div>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>

</x-home-layout>