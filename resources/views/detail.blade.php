<x-home-layout>
    <div class="grid w-full bg-kuning h-[150vh]">
        <div class="my-24 mx-40">
            <h1 class="font-bebas text-white text-[50px] tracking-[.20em]">Product / {{$detail->nama ?? 'None'}}</h1>
            <hr class="h-2 bg-white">
            <div class="flex my-10">
                <img src="{{$detail->gambar}}" alt="produk" class="object-cover h-[500px] w-[500px] rounded-2xl">
                <div class="flex flex-col ml-10">
                    <div>
                        <h1 class="font-bebas text-white text-[60px] tracking-[.20em]">{{$detail->nama}}</h1>
                        <p class="font-bebas text-black text-[20px] tracking-[.20em]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ante nibh, ornare ut volutpat quis, fermentum eget neque. Sed eget maximus libero.</p>
                        <p class="mt-6">rating</p>
                    </div>
                    <hr class="h-1 bg-oranye mt-3">
                    <div class="grid grid-cols-2">
                        <div class="grid grid-rows-2">
                            <p class="mt-3">quantity</p>
                            <p class="mt-4 mb-2">tombol</p>
                        </div>
                        <p class="justify-self-end self-center">tambahkan catatan</p>
                    </div>
                    <hr class="h-1 bg-oranye">
                    <div class="grow"></div>
                    <div class="grid grid-cols-2">
                        <p class="font-bebas text-black text-[25px] tracking-[.20em] self-center">Rp {{$detail->harga}}</p>
                        <button type="button" class="place-self-end focus:outline-none text-sm text-white bg-oranye hover:bg-red-800 focus:ring-4 focus:ring-red-300 rounded-md text-xl px-5 py-2.5 font-bebas tracking-[.20em]">Add to cart</button>
                    </div>
                </div>
            </div>
            <hr class="h-2 bg-white">
            <h1 class="font-bebas text-white text-[50px] tracking-[.20em] mt-2">Detail Gizi</h1>
        </div>
    </div>

</x-home-layout>