<div class="text-gray-500 sm:text-lg dark:text-gray-400">
    <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white">Buruan Pesan
        Tiketnya
        Sekarang!</h2>
    <p class="mb-8 font-light lg:text-xl">Nikmati Healing Dengan Memandang Indahnya Suasana Di Ladaya
    </p>
    <ul role="list" class="pt-8 space-y-5 border-t border-gray-200 my-7 dark:border-gray-700">
        <li class="flex space-x-3">
            <svg class="flex-shrink-0 w-5 h-5 text-purple-500 dark:text-purple-400" fill="currentColor"
                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                    clip-rule="evenodd"></path>
            </svg>
            <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">Pemandangan</span>
        </li>
        <li class="flex space-x-3">
            <svg class="flex-shrink-0 w-5 h-5 text-purple-500 dark:text-purple-400" fill="currentColor"
                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                    clip-rule="evenodd"></path>
            </svg>
            <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">Background
                Foto</span>
        </li>
        <li class="flex space-x-3">
            <svg class="flex-shrink-0 w-5 h-5 text-purple-500 dark:text-purple-400" fill="currentColor"
                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                    clip-rule="evenodd"></path>
            </svg>
            <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">Jajanan</span>
        </li>
    </ul>
    <p class="mb-8 font-light lg:text-xl">Kami Tunggu Ke Hadiran Anda Di Ladaya,Terima Kasih</p>
</div>

<div
    class="p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700 frm-pesen">

    <form action="{{ route('pesans') }}" method="POST" enctype="multipart/form-data">

        @csrf
        <h3 class="text-3xl italic text-center mb-3 font-medium text-gray-900 dark:text-white">Pesan
            Sekarang</h3>


        <x-input name="email_pelanggan" type="email" label="Email" placeholder="Masukkan Email Anda" />

        <div class="grid md:grid-cols-2 md:gap-6">

            <x-input name="nama_pelanggan" label="Nama" placeholder="Masukkan Nama Anda" />


            <div class="relative z-0 w-full mb-3 group">
                <label for="tiket_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tiket</label>
                <select id="tiket_id" name="tiket_id"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="" disabled selected>Pilih Tiket</option>
                    @foreach ($tiket as $pesan)
                    <option value="{{ $pesan->id }}">{{ $pesan->nama }}</option>
                    @endforeach
                </select>

            </div>

        </div>

        <div class="grid md:grid-cols-2 md:gap-6">
            <div class="relative z-0 w-full mb-3 group">

                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor HP</label>

                <input type="number" id="email" name="hp_pelanggan"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Masukkan No Handphone Anda" required>


            </div>



            <x-input name="kuantiti" label="Jumlah Tiket" type="number" placeholder="Masukkan Jumlah Tiket Anda" />


            <div class="relative z-0 w-full mb-3 group">


                <label for="bank_id"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pembayaran</label>
                <select id="bank_id" name="bank_id"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="" disabled selected>Pilih Bank</option>
                    @foreach ($payment as $pesan)
                    <option value="{{ $pesan->id }}">{{ $pesan->nama }}</option>
                    @endforeach
                </select>

            </div>

        </div>
        @if ($message = Session::get('sukses'))
        <div class="alert alert-success alert-block">

            <strong>{{ $message }}</strong>
        </div>
        @endif
        <button type="submit"
            class="w-full text-white bg-blue-700 mb-2 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>

        <a href='#'
            class="block text-white bg-purple-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 tombol-edit cek">
            Cek Informasi Tiket & Pembelian Tiket Anda
        </a>

    </form>

</div>
