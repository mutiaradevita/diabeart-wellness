<x-guest-layout>
    <div class="grid h-auto bg-kuning w-screen overflow-y-auto">
        <div class="mt-32 tracking-[.45em]">
            <h1 class="text-[55px] text-oranye font-bebas px-5">ABOUT US</h1>
        </div>
        <div>
            <p class="text-base font-montserrat px-5 text-justify">Kami memahami betapa sulitnya untuk mencari makanan yang
                aman untuk dikonsumsi bagi penderita jantung dan diabetes. Selain itu, tentu penting bagi mereka untuk
                menyesuaikan konsumsi makanan guna mencegah dampak yang lebih parah dari penyakit yang ada.</p>
            {{-- <p class="text-white text-[30px] mx-[30px] lg:mx-[130px] xl:mx-[140px] leading-loose mt-8 font-bebas">Sign up and discover a great amount of new apportunities!</p> --}}
            <p class="text-base font-montserrat px-5 text-justify">Oleh karena itu, Diabeart Wellness hadir sebagai solusi
                terbaik, sebagai platform penyedia menu makanan sehat bagi penderita penyakit jantung dan diabetes. Kami
                hadir dengan menawarkan beragam menu makanan sehat yang terbuat dari bahan-bahan alami dan
                diformulasikan secara khusus dengan takaran gizi yang telah disesuaikan — B2SA (Beragam, Bergizi, Sehat,
                dan Aman).</p>
            <hr class="my-6 border-black sm:mx-auto dark:border-black lg:my-8 w-5/6 bg-black" />
        </div>
        <div>
            <h1 class="text-[55px] text-oranye font-bebas px-5">The Beggining of Diabeart Wellness</h1>
        </div>
        <div class="px-5">
            <ol class="relative border-l border-black dark:border-black">
                <li class="mb-10 ml-4">
                    <div
                        class="absolute w-3 h-3 bg-hijau rounded-full mt-1.5 -left-1.5 border border-hijau dark:border-hijau dark:bg-hijau">
                    </div>
                    <p class="mb-4 text-base font-montserrat text-gray-500 dark:text-gray-400">Adanya permasalahan tentang
                        kasus penyakit jantung dan diabetes yang memperparah kondisi kesehatan penderitanya hingga
                        menyebabkan kematian.</p>
                </li>
                <li class="mb-10 ml-4">
                    <div
                        class="absolute w-3 h-3 bg-hijau rounded-full mt-1.5 -left-1.5 border border-hijau dark:border-hijau dark:bg-hijau">
                    </div>
                    <p class="text-base font-montserrat text-gray-500 dark:text-gray-400">Timbul keinginan untuk memberikan
                        solusi yang dapat membantu mengurangi dampak kesehatan menurun akibat dari penyakit jantung dan
                        diabetes.</p>
                </li>
                <li class="mb-10 ml-4">
                    <div
                        class="absolute w-3 h-3 bg-hijau rounded-full mt-1.5 -left-1.5 border border-hijau dark:border-hijau dark:bg-hijau">
                    </div>
                    <p class="text-base font-montserrat text-gray-500 dark:text-gray-400">Adanya client penyedia jasa
                        catering makanan yang menjual makanan dengan konsep yang sejalan dengan ide kami, yakni menjual
                        makanan sehat dengan menu yang gizinya sudah disesuaikan untuk penderita penyakit jantung dan
                        diabetes.</p>
                </li>
                <li class="mb-10 ml-4">
                    <div
                        class="absolute w-3 h-3 bg-hijau rounded-full mt-1.5 -left-1.5 border border-hijau dark:border-hijau dark:bg-hijau">
                    </div>
                    <p class="text-base font-montserrat text-gray-500 dark:text-gray-400">Research dan Pengembangan Ide.</p>
                </li>
                <li class="mb-10 ml-4">
                    <div
                        class="absolute w-3 h-3 bg-hijau rounded-full mt-1.5 -left-1.5 border border-hijau dark:border-hijau dark:bg-hijau">
                    </div>
                    <p class="text-base font-semibold text-gray-500 dark:text-gray-400">Hadir ‘Diabeart Wellness’.</p>
                </li>
            </ol>
            <hr class="my-6 border-black sm:mx-auto dark:border-black lg:my-8 w-5/6 bg-black" />
        </div>
        <div>
            <h1 class="text-[55px] text-oranye font-bebas px-5">TUJUAN KAMI</h1>
        </div>
        <p class="text-base font-bold text-gray-500 dark:text-gray-400 px-5">Membantu para penderita penyakit jantung dan diabetes untuk mengatur makanan yang dikonsumsi.</p>
        <div class="w-80 h-[218px] bg-[url('../../public/img/about1.png')] bg-cover mt-10 p-2 rounded-r-3xl font-bebas text-3xl tracking-[.10em] ">
        </div>
        <p class="text-base font-bold text-gray-500 dark:text-gray-400 px-5 pt-5">Menyediakan beragam menu makanan sehat untuk membantu mengatur pola makan dari penderita penyakit jantung dan diabetes.</p>
        <div class="w-80 h-[218px] bg-[url('../../public/img/about2.png')] bg-cover mt-10 p-2 rounded-r-3xl font-bebas text-3xl tracking-[.10em] "></div>
            <p class="text-base font-bold text-gray-500 dark:text-gray-400 px-5 pt-5">Kunjungi outlet kami dan rasakan pengalaman membeli secara langsung.</p>
            <div class="w-80 h-[218px] bg-[url('../../public/img/about3.png')] bg-cover mt-10 p-2 rounded-r-3xl font-bebas text-3xl tracking-[.10em] mb-10">
        </div>
    </div>

    {{-- Contact Us Page --}}
    <div class="grid h-screen bg-oranye place-items-center text-center w-screen sticky top-0">
        <div class="grid">
            <img src="{{ asset('img/logo.png') }}" alt="Diabeart logo"
                class="absolute w-[18rem] pt-2 justify-self-center">
                    <div class="mt-2 tracking-[.45em]">
            <h1 class="text-[55px] text-kuning font-bebas px-5">CONTACT US</h1>
        </div>
            {{-- <h1 class="absolute top-[260px] md:top-[240px] lg:top-[230px] xl:top-[255px] text-[45px] lg:text-[55px] xl:text-[55px] font-medium justify-self-center font-bebas text-oranye tracking-wide">WELCOME BACK</h1> --}}
        </div>

        <div class="grid pt-0">
            <button type="button"
                class="text-abu bg-[#FFFFFF] hover:bg-[#FFFFFF]/90 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-medium rounded-lg text-sm px-20 py-2.5 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55 mr-2 mb-2">
                <svg class="w-5 h-5 mr-2 -ml-1" aria-hidden="true" focusable="false" data-prefix="fab"
                    data-icon="facebook-f" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path fill="black"
                        d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z">
                    </path>
                </svg>
                Whatapps
            </button>
            <button type="button"
                class="text-abu bg-[#FFFFFF] hover:bg-[#FFFFFF]/90 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-medium rounded-lg text-sm px-20 py-2.5 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55 mr-2 mb-2">
                <svg class="w-5 h-5 mr-2 -ml-1" aria-hidden="true" focusable="false" data-prefix="fab"
                    data-icon="facebook-f" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path fill="black"
                        d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z">
                    </path>
                </svg>
                Instagram
            </button>
            <button type="button"
                class="text-abu bg-[#FFFFFF] hover:bg-[#FFFFFF]/90 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-medium rounded-lg text-sm px-20 py-2.5 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55 mr-2 mb-2">
                <svg class="w-5 h-5 mr-2 -ml-1" aria-hidden="true" focusable="false" data-prefix="fab"
                    data-icon="facebook-f" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                    <path fill="black"
                        d="M279.1 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.4 0 225.4 0c-73.22 0-121.1 44.38-121.1 124.7v70.62H22.89V288h81.39v224h100.2V288z">
                    </path>
                </svg>
                Facebook
            </button>
            <button type="button"
                class="text-abu bg-[#FFFFFF] hover:bg-[#FFFFFF]/90 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-medium rounded-lg text-sm px-20 py-2.5 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55 mr-2 mb-2">
                <svg class="w-5 h-5 mr-2 -ml-1" aria-hidden="true" focusable="false" data-prefix="fab"
                    data-icon="facebook-f" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path fill="black"
                        d="M7 11v2.4h3.97c-.16 1.029-1.2 3.02-3.97 3.02-2.39 0-4.34-1.979-4.34-4.42 0-2.44 1.95-4.42 4.34-4.42 1.36 0 2.27.58 2.79 1.08l1.9-1.83c-1.22-1.14-2.8-1.83-4.69-1.83-3.87 0-7 3.13-7 7s3.13 7 7 7c4.04 0 6.721-2.84 6.721-6.84 0-.46-.051-.81-.111-1.16h-6.61zm0 0 17 2h-3v3h-2v-3h-3v-2h3v-3h2v3h3v2z"
                        fill-rule="evenodd" clip-rule="evenodd"></path>
                </svg>
                Email
            </button>
        </div>
    </div>
</x-guest-layout>
