<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="canonical" href="https://https://demo.themesberg.com/landwind/" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ladaya - Pesan Tiket Online</title>

    @include('include.meta')

    <!-- Favicon -->

    @include('include.favicon')

    <!-- Css -->

    @include('include.css')

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

    <script async defer src="https://buttons.github.io/buttons.js"></script>

</head>

<body>
    <header class="fixed w-full">

        @include('include.nav')

    </header>

    <section class="main-banner4 bg-center bg-no-repeat bg-zinc-500 bg-blend-multiply">
        <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">
                Galeri Ladaya</h1>
            <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">Dibuka untuk umum sejak bulan
                juni 2015, seminggu setelah terselenggaranya ‘Lanjong Art Festival’ berskala internasional dan menandai
                perjalanan Ladaya sebagai sebuah ruang publik yang berorientasi pada alam dan kesenian sebagai identitas
                untuk membawa nilai kebermanfaatan bagi khalayak banyak.</p>
        </div>
    </section>

    <div id="custom-controls-gallery" class="carousel relative w-full p-6" data-carousel="slide">
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
            @foreach ($posts as $post)
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('storage/' . $post->gambar) }}"
                    class="absolute rounded block  h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 gambar-car"
                    alt="">
            </div>
            @endforeach
        </div>
        <div class="flex justify-center items-center pt-4">
            <button type="button"
                class="flex justify-center items-center mr-4 h-full cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="text-gray-400 hover:text-gray-900 dark:hover:text-white group-focus:text-gray-900 dark:group-focus:text-white">
                    <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="flex justify-center items-center h-full cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="text-gray-400 hover:text-gray-900 dark:hover:text-white group-focus:text-gray-900 dark:group-focus:text-white">
                    <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
    </div>

    <div class="flex justify-center p-4 page-item">
        <div class="grid grid-cols-5 gap-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            @foreach ($posts as $post)

            <div>
                <a href="{{ asset('storage/' . $post->gambar) }}" data-fancybox="gallery"><img
                        class="h-48 w-56 rounded-lg" src="{{ asset('storage/' . $post->gambar) }}" alt=""></a>
            </div>

            @endforeach


        </div>
    </div>

    @include('include.script')

    @include('include.footer')


    <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
</body>

</html>
    