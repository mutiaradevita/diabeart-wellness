<x-home-layout>
  @auth
  <div class="flex w-full min-h-screen h-max bg-kuning pt-14 pl-24 pr-24">
      <div class="w-7/12 mt-10 ml-10">
          <div class="font-bebas text-4xl text-white">
              KERANJANG
          </div>
          <div class="flex items-center pb-4">
              <input id="select-all-checkbox" type="checkbox" value="" class="w-6 h-6 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="select-all-checkbox" class="ml-2 text-xl font-medium text-gray-900 dark:text-gray-300 pl-3">Pilih semua</label>
          </div>

          <div class="flex items-center pb-4">
              <input type="checkbox" value="" class="default-checkbox w-6 h-6 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <div class="flex w-full h-fit bg-white rounded-2xl p-5 ml-5">
                  <figcaption class="flex items-center space-x-3">
                      <img class="w-30 h-30 rounded-2" src="{{ asset('img/HealthyBox.svg') }}" alt="profile picture">
                  </figcaption>   
                  <div class="grid p-3 w-full">
                      <a class="text-xl content-center">Nama Barang</a>
                      <a class="text-bold">Rp 99999999999999</a>
                      <div class="grid justify-items-stretch ">
                          <div class="flex justify-self-end">
                          <button class="tambah pr-2">
                              <img src="{{asset('img/Plus.png')}}" alt="Tambah" />
                          </button>
                          <span class="quantity text-lg pt-1">1</span>
                          <button class="kurang pl-2">
                              <img src="{{asset('img/Minus.png')}}" alt="Kurangi" />
                          </button>
                      </div>
                      </div>
                  </div>
              </div>
              <button class="hapus bg-white ml-2 p-3 rounded-2xl">
                  <img src="{{asset('img/Bin.png')}}" alt="Hapus" />
              </button>
          </div>

      </div>

      <div class="w-3/12 h-80 mt-32  bg-white sticky top-24 ml-12 rounded-2xl">
          <div class="p-3 text-center text-2xl">
              Ringkasan Belanja
          </div>
          <div class="flex">
              <div class="pl-10 pr-10 pt-3">
                  <a class="tes">Total harga</a>
                  <br>
                  <a class="tes2">Ongkir</a>
                  <div class="pt-20 text-bold">
                      <a class="tes3">Total Harga</a>
                  </div>
              </div>
              <div class="pl-10 pr-10 pt-3">
                  <a class="tes">99999999999</a>
                  <br>
                  <a class="">99999999</a>
                  <div class="pt-20 text-bold">
                      <a class="tes3">99999999</a>
                  </div>
              </div>
          </div>
          <div class="grid place-items-center mt-10">
              <button type="button" class="text-white bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:focus:ring-yellow-900">Checkout</button>
          </div>
      </div>
  </div>
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
  const selectAllCheckbox = document.getElementById('select-all-checkbox');
  const itemCheckboxes = document.getElementsByClassName('default-checkbox');

  selectAllCheckbox.addEventListener('change', function() {
    for (let i = 0; i < itemCheckboxes.length; i++) {
      itemCheckboxes[i].checked = this.checked;
    }
  });

  for (let i = 0; i < itemCheckboxes.length; i++) {
    itemCheckboxes[i].addEventListener('change', function() {
      const allChecked = areAllCheckboxesChecked();
      selectAllCheckbox.checked = allChecked;
    });
  }

  function areAllCheckboxesChecked() {
    for (let i = 0; i < itemCheckboxes.length; i++) {
      if (!itemCheckboxes[i].checked) {
        return false;
      }
    }
    return true;
  }


  
  const minusButtons = document.getElementsByClassName('kurang');
  const plusButtons = document.getElementsByClassName('tambah');
  const quantityElements = document.getElementsByClassName('quantity');
  const deleteButtons = document.getElementsByClassName('hapus');

  for (let i = 0; i < minusButtons.length; i++) {
    minusButtons[i].addEventListener('click', function() {
      const quantityElement = this.parentNode.querySelector('.quantity');
      let quantity = parseInt(quantityElement.textContent);
      if (quantity > 1) {
        quantity--;
        quantityElement.textContent = quantity;
      }
    });
  }

  for (let i = 0; i < plusButtons.length; i++) {
    plusButtons[i].addEventListener('click', function() {
      const quantityElement = this.parentNode.querySelector('.quantity');
      let quantity = parseInt(quantityElement.textContent);
      quantity++;
      quantityElement.textContent = quantity;
    });
  }

  for (let i = 0; i < deleteButtons.length; i++) {
    deleteButtons[i].addEventListener('click', function() {
      const item = this.parentNode;
      item.remove();
    });
  }
</script>
