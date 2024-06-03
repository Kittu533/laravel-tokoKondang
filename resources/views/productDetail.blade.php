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

    <!-- Breadcrumb Navigation -->
    <nav aria-label="Breadcrumb" class="grid justify-items-center my-4">
        <ol class="flex overflow-hidden rounded-lg border border-gray-200 text-gray-600">
            <li class="flex items-center">
                <a href="/TokoKondangWeb/home-page/index.html"
                    class="flex h-10 items-center gap-1.5 bg-gray-100 px-4 transition hover:text-gray-900">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    <span class="ms-1.5 text-xs font-medium">Home</span>
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
    <!-- End Breadcrumb Navigation -->

    <!-- Product Details Section -->
    <section>
        <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 sm:py-24 lg:px-8">
            <div class="max-w-3xl">
                <h2 class="text-3xl font-bold sm:text-4xl"></h2>
            </div>

            <div class="mt-8 grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-16">
                <div class="relative h-64 overflow-hidden sm:h-80 lg:h-full">
                    <img alt="{{ $product->name_product }}" src="{{ asset($product->image_product) }}"
                        class="absolute inset-0 h-full w-full object-cover" />
                </div>

                <div class="lg:py-16">
                    <article class="space-y-4 text-gray-600">
                        <h2 class="product-title font-bold text-4xl"><b>{{ $product->name_product }}</b></h2>
                        <p class="flex justify-left gap-0.5 text-green-500">
                            @for ($i = 0; $i < 5; $i++)
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            @endfor
                        </p>

                        <p class="product-price text-orange-400 text-2xl"><b>Rp
                                {{ number_format($product->price_product, 0, ',', '.') }}</b></p>
                        <p class="product-stock text-gray-600 text-xl">
                            <b>Stok: {{ $product->stock_product }}</b>
                        </p>
                        <p class="product-description">
                            {{ $product->description }}
                        </p>
                        <p class="product-description">
                            {{ $product->description_product }}
                        </p>
                        <!-- Quantity Control -->
                        <div>
                            <label for="Quantity" class="sr-only">Quantity</label>
                            <div class="flex items-center gap-1">
                                <button type="button" id="kurangiBtn"
                                    class="size-10 leading-10 text-gray-600 transition hover:opacity-75">
                                    &minus;
                                </button>
                                <input type="number" id="Quantity" name="quantity" value="1"
                                    class="h-10 w-16 rounded border-gray-200 text-center sm:text-sm" />
                                <button type="button" id="tambahBtn"
                                    class="size-10 leading-10 text-gray-600 transition hover:opacity-75">
                                    &plus;
                                </button>
                            </div>
                        </div>

                        <!-- Add to Cart Button -->
                        <form action="{{ route('cart.add') }}" method="POST">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product->id_product }}">
                            <input type="hidden" name="quantity" id="hiddenQuantity" value="1">
                            <button type="submit"
                                class="inline-block border-e px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50 focus:relative bg-gray-100">
                                Tambah Pesanan
                            </button>
                        </form>


                        <!-- Bootstrap Modal for the Alert -->
                        <div class="modal fade" id="pesananBerhasilModal" tabindex="-1"
                            aria-labelledby="pesananBerhasilModalLabel" aria-hidden="true"
                            style="position: fixed; top: 50px; left: 50%; transform: translateX(-50%);">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header bg-success text-white">
                                        <h5 class="modal-title" id="pesananBerhasilModalLabel">Pesanan Berhasil
                                            Ditambahkan
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Pesanan Anda telah berhasil ditambahkan.
                                    </div>
                                    <div class="modal-footer">
                                        <button onclick="tutupModal()" type="button" id="tutupModal"
                                            class="btn btn-success" data-bs-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </article>
                </div>
            </div>
        </div>
    </section>
    <!-- End Product Details Section -->

    <!-- Buatkan sayas menngenai diskripsi produvt -->
    
  
    <div>
          @include('partial.sliderProduct')
    </div>
    @include('partial.footer')

    @if(session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var modal = new bootstrap.Modal(document.getElementById('pesananBerhasilModal'));
                modal.show();
            });
        </script>
    @endif


    <script>
        function tutupModal() {
            $('#pesananBerhasilModal').modal('hide');
        }

        document.getElementById("kurangiBtn").addEventListener("click", function () {
            var quantityInput = document.getElementById("Quantity");
            var hiddenQuantity = document.getElementById("hiddenQuantity");
            var currentValue = parseInt(quantityInput.value);
            if (currentValue > 1) {
                quantityInput.value = currentValue - 1;
                hiddenQuantity.value = quantityInput.value;
            }
        });

        document.getElementById("tambahBtn").addEventListener("click", function () {
            var quantityInput = document.getElementById("Quantity");
            var hiddenQuantity = document.getElementById("hiddenQuantity");
            var currentValue = parseInt(quantityInput.value);
            quantityInput.value = currentValue + 1;
            hiddenQuantity.value = quantityInput.value;
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.bundle.min.js"></script>
</body>

</html>