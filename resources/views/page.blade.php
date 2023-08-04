<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="canonical" href="https://https://demo.themesberg.com/landwind/" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Ladaya - Pesan Tiket Online</title>

    @include('include.meta')

    <!-- Favicon -->

    @include('include.favicon')

    <!-- CSS -->

    @include('include.css')



</head>

<body>
    <header class="fixed w-full">


        @include('include.nav')

    </header>

    <!-- Jumbotron -->
    <section class="main-banner3 bg-center bg-no-repeat bg-zinc-500 bg-blend-multiply">
        <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">
                Tentang Kami</h1>
            <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">Ladang Budaya adalah ruang
                ekonomi kreatif yang berada di propinsi
                Kalimantan Timur, Kabupaten Kutaikartanegara. Berdiri di atas lahan seluas
                12 hektar, buah karya seniman bernama Ab Asmarandana</p>
        </div>
    </section>
    <!-- End -->

    <!-- Page -->


    <h2 class="mt-4 text-3xl italic font-bold tracking-tight text-gray-900 dark:text-white text-center">Page</h2>

    <div class="flex justify-center p-4 page-item">
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">

            @foreach ($posts as $post)
            <div role="status" class="max-w-sm p-4 border border-gray-200 rounded md:p-6 dark:border-gray-700">
                <div class="flex items-center justify-center rounded dark:bg-gray-700">
                    <img class="h-48 w-full object-cover rounded" src="{{ asset('storage/' . $post->gambar) }}" alt="">
                </div>
                <div class="my-2 text-xl font-semibold italic">
                    <h4>{{ $post->judul }}</h4>
                </div>

                <p class="mb-3 text-gray-700 dark:text-gray-400 overflow-ellipsis overflow-hidden ">{{
                    strip_tags(Str::limit($post->konten)) }}</p>

                <a href='#' data-id="{{ $post->id }}"
                    class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 tombol-edit">
                    Klik info lebih lengkap
                </a>


            </div>
            @endforeach

        </div>
    </div>


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Isi Berita</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-danger d-none"></div>
                    <div class="alert alert-success d-none"></div>

                    <div class="mb-3">
                        <h2 class="text-2xl font-bold" id="judul"></h2>
                    </div>
                    <div class="mb-3">
                        <div id="konten"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary tombol-simpan" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    @include('include.script')


    @include('include.footer')




    <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
</body>

</html>
    