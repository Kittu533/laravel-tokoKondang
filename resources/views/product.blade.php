<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./kondang.css" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Toko Kondang</title>
  
</head>

<body>
  @include('partial.promotion')
  @include('partial.header')
  <!-- main content -->



  <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
    <header>
      <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">
        Product Collection
      </h2>

      <p class="mt-4 max-w-md text-gray-500">
        Find your style for less at our store, the place to find unique and
        affordable thrifted clothes!
      </p>
    </header>
  </div>
  <div class="container mx-auto px-4">
    <div class="grid grid-cols-1sm:grid-cols-2 lg:grid-cols-4 gap-4">
        @foreach ($products as $product)
        <div class="product-frame border border-gray-300 p-4">
            <a href="{{ route('productDetail', ['id_product' => $product->id_product]) }}"
               class="group block overflow-hidden">
                @php
                    $imagePath = file_exists(public_path($product->image_product)) ? $product->image_product : 'assets/img/default.jpg';
                @endphp
                <img src="{{ asset($imagePath) }}" alt="{{ $product->name_product }}"
                     class="h-auto w-full object-cover transition duration-500 group-hover:scale-105"
                     data-image-url="{{ asset($imagePath) }}">
                <div class="relative bg-white pt-3">
                    <h3 class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4">
                        {{ $product->name_product }}
                    </h3>
                    <p class="mt-2">
                        <span class="sr-only">Regular Price</span>
                        <span class="tracking-wider text-gray-900">Rp{{ number_format($product->price_product, 0, ',', '.') }}</span>
                    </p>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
<!--
  Heads up! 👋

  This component comes with some `rtl` classes. Please remove them if they are not needed in your project.
-->

<ol class="flex justify-center gap-1 text-xs font-medium">
  <li>
    <a
      href="#"
      class="inline-flex size-8 items-center justify-center rounded border border-gray-100 bg-white text-gray-900 rtl:rotate-180"
    >
      <span class="sr-only">Prev Page</span>
      <svg
        xmlns="http://www.w3.org/2000/svg"
        class="h-3 w-3"
        viewBox="0 0 20 20"
        fill="currentColor"
      >
        <path
          fill-rule="evenodd"
          d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
          clip-rule="evenodd"
        />
      </svg>
    </a>
  </li>

  <li>
    <a
      href="#"
      class="block size-8 rounded border border-gray-100 bg-white text-center leading-8 text-gray-900"
    >
      1
    </a>
  </li>

  <li class="block size-8 rounded border-blue-600 bg-blue-600 text-center leading-8 text-white">
    2
  </li>

  <li>
    <a
      href="#"
      class="block size-8 rounded border border-gray-100 bg-white text-center leading-8 text-gray-900"
    >
      3
    </a>
  </li>

  <li>
    <a
      href="#"
      class="block size-8 rounded border border-gray-100 bg-white text-center leading-8 text-gray-900"
    >
      4
    </a>
  </li>

  <li>
    <a
      href="#"
      class="inline-flex size-8 items-center justify-center rounded border border-gray-100 bg-white text-gray-900 rtl:rotate-180"
    >
      <span class="sr-only">Next Page</span>
      <svg
        xmlns="http://www.w3.org/2000/svg"
        class="h-3 w-3"
        viewBox="0 0 20 20"
        fill="currentColor"
      >
        <path
          fill-rule="evenodd"
          d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
          clip-rule="evenodd"
        />
      </svg>
    </a>
  </li>
</ol>
  <!-- End main content -->
  @include('partial.footer')
</body>

</html>
  