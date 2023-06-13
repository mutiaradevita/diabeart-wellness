<x-home-layout>
  @auth
  @if ($Keranjang && count($Keranjang) > 0)
      
  <div class="flex w-full min-h-screen h-max bg-kuning pt-14 pl-24 pr-24">
      <div class="w-7/12 mt-10 ml-10">
          <div class="font-bebas text-4xl text-white pb-12">
              KERANJANG
          </div>

          @foreach ($Keranjang as $item)
          <div class="flex items-center pb-4">
              <div class="flex w-full h-fit bg-white rounded-2xl p-5">
                  <figcaption class="flex items-center space-x-3">
                      <img src="{{asset('storage/'. $item->produk->gambar)}}" class="w-32 h-28 rounded-lg" alt="profile picture">
                  </figcaption>   
                  <div class="grid p-3 w-10/12">
                      <a class="text-xl content-center">Nama : {{$item->produk->nama}}</a>
                      <a class="text-bold">Harga : Rp {{$item->produk->harga}}</a>
                      <a class="text-bold">Jumlah: {{$item->jumlah}}</a>
                      <div class="relative">
                        <div class="absolute text-xs w-fit bottom-0 right-0">
                          {{$item->catatan}}
                        </div>
                      </div>
                  </div>
              </div>
              <button class="hapus bg-white ml-2 p-3 rounded-2xl" data-id="{{ $item->id }}" onclick="refreshPage()">
                  <img src="{{asset('img/Bin.png')}}" alt="Hapus" />
              </button>
          </div>
          @endforeach

      </div>

      <div class="w-fit min-h-80 h-fit mt-32  bg-white sticky top-24 ml-12 rounded-2xl p-2">
          <div class="p-3 text-center text-2xl">
              Ringkasan Belanja
          </div>
          <div class="flex">
              <div class="pl-10 pr-10 pt-3 whitespace-nowrap">
                  <a>Total harga</a>
              </div>
              <div class="pl-10 pr-10 pt-3">
              @foreach ($Keranjang as $item)
                <a class="tes">Rp {{$item->total_harga}} ({{$item->jumlah}} barang)</a>
                <br>
              @endforeach
                <br>
                <a class="text-bold">Ongkir</a><br>
                <a class="">Rp 6000</a>
                <div class="pt-2 text-bold">
                  <hr class="w-56 h-px my-8 bg-black border-0 dark:bg-white">
                  <a class="tes3">Rp {{$totalSemua + 6000}}</a>
                </div>               
              </div>
          </div>
          <div class="grid place-items-center mt-10">
              <a href="{{route('checkout')}}"><button type="button" class="text-white bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:focus:ring-yellow-900">Checkout</button></a>
          </div>
      </div>
  </div>
  @else
    <div class="grid w-full min-h-screen h-max bg-kuning pt-20 pl-24 pr-24 place-items-center place-content-center font-bebas text-4xl text-gray-500">
      <a>Wah, keranjang kamu masih kosong nih!</a>
      <a>ayo belanja sekarang!</a>
    </div>
  @endif
  @else
  <div class="grid w-full min-h-screen h-max bg-kuning pt-14 pl-24 pr-24 place-items-center place-content-center font-bebas text-4xl">
      <a>hey, sebelum mengakses menu keranjang, kamu harus login dulu ya!</a>
      <a>ayo login sekarang dan nikmati layanan kami</a>
      <br><br>
      <a href="{{ route('login') }}"><button type="button" class="text-black bg-white hover:bg-white-200 focus:ring-4 focus:ring-blue-300 font-large rounded-lg text-2xl px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 w-96">login</button></a>
  </div>
  @endauth
</x-home-layout>

<script>  
  const deleteButtons = document.getElementsByClassName('hapus');

  function refreshPage() {
    location.reload(); // Memuat ulang halaman saat fungsi dipanggil
  }

  for (let i = 0; i < deleteButtons.length; i++) {
    deleteButtons[i].addEventListener('click', function() {
      const item = this.parentNode;
      let itemId = $(this).data('id');
      let token   = $("meta[name='csrf-token']").attr("content");
      $.ajax({

        url: `/keranjang/${itemId}`,
        type: "DELETE",
        cache: false,
        data: {
          "_token": token
        },
        success:function(response){ 
          item.remove();
        }
      });
      
    });
  }
</script>
