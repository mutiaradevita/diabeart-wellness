<x-home-layout>
    <div class="flex justify-center w-full bg-kuning min-h-screen h-max">
        <div class="flex flex-col mt-24">
            <h1 class="font-bebas text-white text-[70px] tracking-[.20em] mx-auto">Kategori makanan</h1>
            <h3 class="font-bebas text-oranyet text-[40px] tracking-[.20em] mx-auto">Food category</h3>
            <div id="default-carousel" class="relative w-[1165px] h-[380px] justify-self-center mt-16" data-carousel="slide">
                <div class="relative overflow-hidden rounded-lg h-96">
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://images.foxtv.com/static.fox5atlanta.com/www.fox5atlanta.com/content/uploads/2019/09/1280/720/92738b3d-pizzahut_1457959339671_1001378_ver1.0_640_360.png?ve=1&tl=1" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://www.jasongarfield.com/wp-content/uploads/2018/10/S1EP3_NO-TEXT.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://i0.wp.com/bwretailworld.businessworld.in/wp-content/uploads/2023/05/Untitled-design-21.png?fit=1280%2C720&ssl=1" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://www.tulipmag.com/wp-content/uploads/2020/02/Hyderabadi-Chicken-Biryani-by-Shabana-Akbany-1280x720.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://static.zoomnews.com/thumb/msid-98948642,imgsize-1528913,width-1280,height-720/98948642.jpg?tr=w-230,h-150,fo-auto" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                </div>
                <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
                </div>
                <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
            <div class="relative w-fit h-fit grid grid-cols-4 gap-y-6 gap-x-10 my-20 mx-auto">
                @foreach($kategori as $Kategori)
                <a href="{{route('produk_kategori',$Kategori->nama_kategori)}}" class="mt-6">
                    <div class="grid bg-gray-100 w-[250px] h-[350px] hover:bg-gray-200 shadow-lg rounded-2xl duration-500 hover:scale-105 hover:shadow-2xl">
                        <img src="{{asset('storage/'. $Kategori->gambar)}}" alt="kategori" class="justify-self-center bg-white rounded-full w-[170px] h-[170px] mt-10">
                        <div class="grid">
                            <p class="justify-self-center text-lg font-bold text-black truncate block capitalize">{{$Kategori->nama_kategori}}</p>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
</x-home-layout>


<!-- Modal toggle -->