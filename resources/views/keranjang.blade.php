<x-home-layout>
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
            <a class="">hhhhhhhhhhhhh</a>
        </div>
    </div>
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
