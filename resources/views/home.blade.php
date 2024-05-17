<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ini bukan laravel</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <body>
        @include('partial.promotion')
        @include('partial.header')
        <header>
        <div class="mx-auto max-w-screen-xl px-4 py-6 sm:px-4 sm:py-8 lg:px-6">
          <div class="sm:flex sm:items-center sm:justify-between">
            <div class="text-center sm:text-left">
              <h1 class="text-2xl font-bold text-gray-900 sm:text-3xl">Selamat datang di toko kondang , {{Auth::user()->name}}</h1
      
              <p class="mt-1.5 text-sm text-gray-500">Betabur diskon besar besaran setiap hari 🎉</p>
            </div>
      
        </header>
        <!-- About us -->
    <section>
        <div class="mx-auto max-w-screen-xl px-4 py-12 sm:px-6 sm:py-12 lg:px-8">
          <div class="mt-8 grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-16">
            <div class="slideshow-container relative h-64 overflow-hidden sm:h-80 lg:h-full">
            <video class="rounded-lg" src="{{URL::asset("assets/vidio_1.mp4")}}" controls autoplay muted loop ></video> 
            </div>
            <div class="lg:py-16">
              <article class="space-y-4 text-gray-600">
                <h2 class="flex justify-center text-orange-500 font-bold text-xl">Toko Kondang</h2>
                <p>
                  Selamat datang di Toko Kondang, destinasi utama untuk pencinta barang bekas berkualitas! 
                  Kami adalah rumah bagi koleksi unik dan beragam barang thrift yang memikat hati Anda. 
                  Dari pakaian vintage yang klasik hingga perabotan rumah tangga yang elegan,
                  kami menyediakan pilihan yang tak tertandingi dengan harga yang terjangkau. 
                  Temukan barang-barang yang mencerminkan gaya dan karakter Anda di Toko Kondang!
                </p>
                <p>
                  Bergabunglah dengan kami di Toko Kondang, 
                  di mana setiap pembelian bercerita dan setiap kunjungan terasa seperti petualangan mencari harta karun.
                </p>
              </article>
            </div>
          </div>
        </div>
      </section>
      
    <!-- End About us -->
      <!-- Product Collection -->
      <section>
        <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
          <header class="text-center">
            <h2 class="text-xl font-bold text-orange-500 sm:text-3xl">Product Collection</h2>
          </header>
          <ul class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
            <li>
              <a href="#" class="group block overflow-hidden rounded-md" >
                <img
                  src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                  alt=""
                  class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[350px]"
                />
              </a>
            </li>
            <li>
                <a href="#" class="group block overflow-hidden rounded-md" >
                  <img
                    src="https://images.unsplash.com/photo-1529374255404-311a2a4f1fd9?q=80&w=2938&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt=""
                    class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[350px]"
                  />
                </a>
              </li>
              <li>
                <a href="#" class="group block overflow-hidden rounded-md" >
                  <img
                    src="https://images.unsplash.com/photo-1620799140408-edc6dcb6d633?q=80&w=2872&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt=""
                    class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[350px]"
                  />
                </a>
              </li>
              <li>
                <a href="#" class="group block overflow-hidden rounded-md" >
                  <img
                    src="https://images.unsplash.com/photo-1633966887768-64f9a867bdba?q=80&w=2903&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt=""
                    class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[350px]"
                  />
                </a>
              </li>
          </ul>
          <footer class="text-center">
            <h2 class="text-xl font-semibold text-black mt-12 sm:text-3xl"><a href="{{ route('product') }}">Find Out More</a></h2>
          </footer>
        </div>
      </section>
    <!-- End Product Collection -->

    <!-- About Us -->
    <section id="about">
        <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 sm:py-12 lg:px-8 ">  
          <div class="mt-8 grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-16">
            <div class="slideshow-container relative h-64 overflow-hidden sm:h-80 lg:h-full">
              <img src="https://images.unsplash.com/photo-1472851294608-062f824d29cc?q=80&w=2304&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="slide fade rounded-lg" />
              <img src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="slide fade rounded-lg" />
              <img src="https://images.unsplash.com/photo-1528698827591-e19ccd7bc23d?q=80&w=2952&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="slide fade rounded-lg " />
          </div>
            <div class="lg:py-16">
              <article class="space-y-4 text-gray-600">
                <h2 class="flex  justify-center text-orange-500 font-bold text-xl">About Our Company</h2>
                <p>
                  Kami,Toko Kondang berkomitmen untuk memberikan pengalaman berbelanja yang tak terlupakan kepada pelanggan kami. 
                  Sebagai toko thrift terkemuka, kami tidak hanya menawarkan barang-barang berkualitas tinggi dengan harga terjangkau,
                  tetapi juga mempersembahkan konsep berbelanja yang berkelanjutan. Dengan memilih barang-barang bekas, 
                  kami mendukung gerakan untuk mengurangi limbah dan menjaga lingkungan. Kami bangga akan keberagaman koleksi kami, 
                  mulai dari pakaian vintage yang langka hingga perabotan rumah tangga yang unik. 
                </p>
      
                <p>
                Kami percaya bahwa setiap barang memiliki cerita, 
                dan kami berharap dapat membantu Anda menemukan barang yang sesuai dengan gaya dan karakter Anda. 
                </p>
              </article>
            </div>
          </div>
        </div>
      </section>
    <!-- End About Us -->

    @include('partial.testimoni')

    <script src="{{asset('assets/js/main.js') }}"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        @include('partial.footer')
    </body>
</html>
