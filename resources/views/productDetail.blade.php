<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="stylesheet">

    <title>Product Detail</title>

</head>

<body>
    @include('partial.promotion')
    @include('partial.header')
    <!-- FRAME -->
    <nav aria-label="Breadcrumb" class="grid  justify-items-center">
        <ol class="flex overflow-hidden rounded-lg border border-gray-200 text-gray-600">
            <li class="flex items-center">
                <a href="/TokoKondangWeb/home-page/index.html"
                    class="flex h-10 items-center gap-1.5 bg-gray-100 px-4 transition hover:text-gray-900">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>

                    <span class="ms-1.5 text-xs font-medium"> Home </span>
                </a>
            </li>

            <li class="relative flex items-center">
                <span
                    class="absolute inset-y-0 -start-px h-10 w-4 bg-gray-100 [clip-path:_polygon(0_0,_0%_100%,_100%_50%)] rtl:rotate-180">
                </span>

                <a href="#"
                    class="flex h-10 items-center bg-white pe-4 ps-8 text-xs font-medium transition hover:text-gray-900">
                    Keranjang Belanja
                </a>
            </li>
        </ol>
    </nav>
    <!-- END FRAME -->
    <section>
        <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 sm:py-24 lg:px-8">
            <div class="max-w-3xl">
                <h2 class="text-3xl font-bold sm:text-4xl">

                </h2>
            </div>

            <div class="mt-8 grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-16">
                <div class="relative h-64 overflow-hidden sm:h-80 lg:h-full">
                    <img alt="" src="{{URL::asset("assets/img/1b.jpg")}}"
                        class="absolute inset-0 h-full w-full object-cover" />
                </div>

                <div class="lg:py-16">
                    <article class="space-y-4 text-gray-600">
                        <h2 class="product-title font-bold text-4xl"><b>Sweater American Original Dickies (L)</b></h2>
                        <p class="flex justify-left gap-0.5 text-green-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>

                        <p class="product-price text-orange-400 text-2xl"><b>Rp 99.000.00</b></p>
                        <p class="product-description">
                        <p text align="Justify">
                            Temukan gayamu dengan koleksi sweater kami yang trendi! Dari desain klasik hingga yang
                            paling modern, kami hadir dengan beragam pilihan warna dan gaya untuk memenuhi kebutuhanmu.
                            Belanja varsity favoritmu sekarang secara online dan jadilah pusat perhatian di mana pun
                            Anda berada!
                        </p>
                        <div>
                            <label for="Quantity" class="sr-only"> Quantity </label>

                            <div class="flex items-center gap-1">
                                <button type="button"
                                    class="size-10 leading-10 text-gray-600 transition hover:opacity-75">
                                    &minus;
                                </button>

                                <input type="number" id="Quantity" value="1"
                                    class="h-10 w-16 rounded border-gray-200 text-center [-moz-appearance:_textfield] sm:text-sm [&::-webkit-inner-spin-button]:m-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:m-0 [&::-webkit-outer-spin-button]:appearance-none" />

                                <button type="button"
                                    class="size-10 leading-10 text-gray-600 transition hover:opacity-75">
                                    &plus;
                                </button>
                            </div>
                        </div>
                        <span class="inline-flex overflow-hidden rounded-md border bg-white shadow-sm">
                            <button onclick="tambahPesanan()"
                                class="inline-block border-e px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50 focus:relative bg-gray-100">
                                Tambah Pesanan
                            </button>

                            <button class="inline-block px-4 py-2 text-gray-700 hover:bg-gray-50 focus:relative"
                                title="View Orders">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
                                </svg>
                            </button>
                        </span>
                        <!-- Bootstrap modal for the alert -->


                    </article>
                    <div class="modal fade" id="pesananBerhasilModal" tabindex="-1"
                        aria-labelledby="pesananBerhasilModalLabel" aria-hidden="true"
                        style="position: fixed; top: 50px; left: 50%; transform: translateX(-50%);">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header bg-success text-white">
                                    <h5 class="modal-title" id="pesananBerhasilModalLabel">Pesanan Berhasil Ditambahkan
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Pesanan Anda telah berhasil ditambahkan.
                                </div>
                                <div class="modal-footer">
                                    <button onclick="tutupModal()" type="button" id="tutupModal" class="btn btn-success"
                                        data-bs-dismiss="modal">Tutup</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- DESCRIPTION -->
    <div class="Description ml-20 mr-20  ">
        <h3><b>DESCRIPTION</b></h3>
        <div class="review-item">
            <p class="review-text">
            <p text align="Justify"> Sweater Casual Everyday Comfort pilihan yang pas untuk menemani di berbagai
                suasana, holiday, traveling dan tetap nyaman di gunakan sehari-hari.
                Dibuat dari bahan ringan berkualitas tinggi. Design yang mencerminkan suasana cerah dan ceria, sangat
                sempurna untuk penampilan santai, berbagai pilihan warna yang cocok di gunakan untuk berbagai
                kesempatan.
                Lengkapi T-Shirt dengan Jeans, Chinos, Outerwear dan berbagai Aksesoris untuk menciptakan gaya santai
                namun tetap modis. Tingkatkan kualitas koleksi pakaian kasual kamu dengan Erigo T-Shirt, pilih design
                dan warna kesukaan kamu dan nikmati gaya berpakaian yang luas biasa
            </p>
            <p><b>Rekomendasi Size</b></p>
            <p>Untuk Model Pria : Tinggi 185-186 cm, Berat 75 kg, Menggunakan Ukuran XL</p>
            <p>Untuk Model Wanita : Tinggi 168-170 cm, Berat 55 kg, Menggunakan Ukuran M</p>
            Detail </br>
            Cotton Combed 30s</br>
            Regular fit</br>
            Plastisol screen printing</br>
            Type : Work Jacket</br>
            Color : Cream</br>
            Material : Corduroy</br>
            Details : Embroidery front &back , Embroidery logo</p>

            <p>*Di ukur secara manual dengan toleransi setiap size 1-2cm</p>
            <p>*Detail size tersedia di display produk</p>
            <p class="review-author"></p>
        </div>
        <div class="review-item">

            <p class="review-text"></p>
            <p class="review-author"></p>
        </div>
    </div>
    <!--END DESCRIPTION -->
    @include('partial.testimoni')
    @include('partial.footer')
    <script>
        function tambahPesanan() {
            // Tampilkan modal alert
            $('#pesananBerhasilModal').modal('show');
        }

        // Fungsi untuk menutup modal ketika tombol "Tutup" ditekan
        function tutupModal() {

            $('#pesananBerhasilModal').modal('hide');
        }

    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.bundle.min.js"></script>

</body>

</html>