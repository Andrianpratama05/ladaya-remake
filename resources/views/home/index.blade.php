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



</head>

<body>
    <header class="fixed w-full">

        @include('include.nav')

    </header>

    @include('include.main-banner')

    <section class="bg-gray-50 dark:bg-gray-800">
        <div class="max-w-screen-xl px-4 py-8 mx-auto lg:py-16 lg:px-6">
            <div class="max-w-screen-sm mx-auto text-center">
                <h2 class="mb-4 text-3xl font-extrabold leading-tight tracking-tight text-gray-900 dark:text-white">
                    Pesan Tiket Sekarang!</h2>
                <p class="mb-6 font-light text-gray-500 dark:text-gray-400 md:text-lg">Lihat Selengkapnya....</p>
                <a href="{{ route('pesan') }}"
                    class="text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 focus:outline-none dark:focus:ring-purple-800">Pesan
                    Sekarang</a>
            </div>
        </div>
    </section>

    @include('include.script')

    @include('include.footer')


</body>

</html>