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

    <script async defer src="https://buttons.github.io/buttons.js"></script>

</head>

<body>
    <header class="fixed w-full">

        @include('include.nav')

    </header>

    <!-- jumbotron -->
    <section class="main-banner2 bg-center bg-no-repeat bg-zinc-500 bg-blend-multiply">
        <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">
                Pesan Tiket Di Ladaya</h1>
            <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">Kami Ladaya, semangat juang
                yang siap melayani Anda dengan penuh ketangguhan dan keuletan. Bersiaplah meraih kemenangan dalam setiap
                tantangan yang dihadapi.</p>
        </div>
    </section>



    <section class="bg-gray-50 dark:bg-gray-800">
        <h2 class="mt-4 text-3xl italic font-bold tracking-tight text-gray-900 dark:text-white text-center">Our Location
        </h2>
        <div class="max-w-screen-xl px-1 py-3 mx-auto space-y-12 lg:space-y-20 lg:py-24 lg:px-6 ">
            <div id="map" class="items-center lg:grid xl:gap-4">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.7256892571245!2d116.97584996475322!3d-0.39042739971514434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df66fbce31b02a9%3A0xe190ca1803f4f133!2sLadaya%20Tenggarong!5e0!3m2!1sen!2sid!4v1684991256745!5m2!1sen!2sid"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>


    <section class="bg-gray-50 dark:bg-gray-800">
        <div class="max-w-screen-xl px-4 py-8 mx-auto space-y-12 lg:space-y-20 lg:py-24 lg:px-6">
            <div class="items-center gap-8 lg:grid lg:grid-cols-2 xl:gap-16">


                @include('include.form')

            </div>
        </div>
    </section>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Daftar Tiket</h1>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-header">
                    <p class="kode">ID Tiket 1 = Balita</p>
                    <p class="kode">ID Tiket 2 = Remaja</p>
                    <p class="kode">ID Tiket 3 = Dewasa</p>

                </div>
                <h6 class="pl-4 pt-2">note: ini adalah daftar pembelian tiket</h6>
                <div class="modal-body" id="modal-body">
                    <div class="alert alert-danger d-none"></div>
                    <div class="alert alert-success d-none"></div>


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
