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
                            <p class="mt-3 font-bebas text-black text-[20px] tracking-[.20em]">quantity</p>
                            <div class="flex flex-rows mb-3">
                                <button class="kurang mr-3">
                                    <img src="{{asset('img/Minus.png')}}" alt="Kurangi" />
                                </button>
                                <span class="quantity text-lg pt-1">1</span>
                                <button class="tambah ml-3">
                                    <img src="{{asset('img/Plus.png')}}" alt="Tambah" />
                                </button>
                            </div>
                        </div>
                        <p class="justify-self-end self-center">tambahkan catatan</p>
                    </div>
                    <hr class="h-1 bg-oranye">
                    <div class="grow"></div>
                    <div class="grid grid-cols-2">
                        <p class="font-bebas text-black text-[25px] tracking-[.20em] self-center">Rp {{$detail->harga}}</p>
                        <form action="{{ route('storeProduk', ['harga' => $detail->harga, 'idproduk' => $detail->id, 'iduser' => Auth::check() ? Auth::user()->id : 0])  }}" method="POST" class="place-self-end">
                            @csrf
                            @method('POST')
                            <input type="hidden" id="data" name="jumlah" value="1">
                            @if(Auth::check())
                            <button type="submit" class="focus:outline-none text-sm text-white bg-oranye hover:bg-red-800 focus:ring-4 focus:ring-red-300 rounded-md text-xl px-5 py-2.5 font-bebas tracking-[.20em]">
                                Add to cart
                            </button>
                            @else
                            <p class="mt-3 font-bebas text-oranye text-[15px] tracking-[.20em]">Anda harus Login</p>
                            <button type="button" class="focus:outline-none text-sm text-white bg-oranye hover:bg-red-800 focus:ring-4 focus:ring-red-300 rounded-md text-xl px-5 py-2.5 font-bebas tracking-[.20em] cursor-not-allowed">
                                Add to cart
                            </button>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
            <hr class="h-2 bg-white">
            <h1 class="font-bebas text-white text-[50px] tracking-[.20em] mt-2">Detail Gizi</h1>
            <div class="grid grid-cols-6 mt-5">
                <div class="grid grid-rows-2 col-span-2">
                    <p class="font-bebas text-black text-[20px] tracking-[.20em] mb-4">Komposisi :</p>
                    <p class="font-bebas text-black text-[20px] tracking-[.20em]">- {{$detail->komposisi ?? '-'}}</p>
                </div>
                <div class="grid grid-rows-2">
                    <p class="font-bebas text-black text-[20px] tracking-[.20em] mb-4">Karbo :</p>
                    <p class="font-bebas text-black text-[20px] tracking-[.20em]">- {{$detail->karbo ?? '-'}}</p>
                </div>
                <div class="grid grid-rows-2">
                    <p class="font-bebas text-black text-[20px] tracking-[.20em] mb-4">Protein :</p>
                    <p class="font-bebas text-black text-[20px] tracking-[.20em]">- {{$detail->protein ?? '-'}}</p>
                </div>
                <div class="grid grid-rows-2">
                    <p class="font-bebas text-black text-[20px] tracking-[.20em] mb-4">Lemak :</p>
                    <p class="font-bebas text-black text-[20px] tracking-[.20em]">- {{$detail->lemak ?? '-'}}</p>
                </div>
                <div class="grid grid-rows-2">
                    <p class="font-bebas text-black text-[20px] tracking-[.20em] mb-4">Serat :</p>
                    <p class="font-bebas text-black text-[20px] tracking-[.20em]">- {{$detail->serat ?? '-'}}</p>
                </div>
            </div>

        </div>
    </div>

</x-home-layout>

<script>
    const minusButtons = document.getElementsByClassName('kurang');
    const plusButtons = document.getElementsByClassName('tambah');
    const dataInput = document.getElementById('data');

    for (let i = 0; i < minusButtons.length; i++) {
        minusButtons[i].addEventListener('click', function() {
            const quantityElement = this.parentNode.querySelector('.quantity');
            let quantity = parseInt(quantityElement.textContent);
            if (quantity > 1) {
                quantity--;
                quantityElement.textContent = quantity;
                dataInput.value = quantity;
            }
        });
    }

    for (let i = 0; i < plusButtons.length; i++) {
        plusButtons[i].addEventListener('click', function() {
            const quantityElement = this.parentNode.querySelector('.quantity');
            let quantity = parseInt(quantityElement.textContent);
            quantity++;
            quantityElement.textContent = quantity;
            dataInput.value = quantity;
        });
    }
</script>