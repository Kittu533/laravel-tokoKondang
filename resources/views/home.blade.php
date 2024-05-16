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
            <h2 class="text-xl font-semibold text-black mt-12 sm:text-3xl"><a href="/TokoKondangWeb/halaman-belanja/Index.html">Find Out More</a></h2>
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

    <!-- Testimonial -->
    <section class="bg-white">
        <div class="mx-auto max-w-screen-xl px-4 py-12 sm:px-6 lg:px-8 lg:py-16">
          <h2 class="text-center text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl">
            Read trusted reviews from our customers
          </h2>
      
          <div class="mt-8 grid grid-cols-1 gap-4 md:grid-cols-3 md:gap-8">
            <blockquote class="rounded-lg bg-gray-50 p-6 shadow-sm sm:p-8">
              <div class="flex items-center gap-4">
                <img
                  alt=""
                  src="https://awsimages.detik.net.id/community/media/visual/2024/03/19/nagita-slavina_43.png?w=600&q=90"
                  class="size-14 rounded-full object-cover"
                />
      
                <div>
                  <div class="flex justify-center gap-0.5 text-green-500">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="h-5 w-5"
                      viewBox="0 0 20 20"
                      fill="currentColor"
                    >
                      <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                      />
                    </svg>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="h-5 w-5"
                      viewBox="0 0 20 20"
                      fill="currentColor"
                    >
                      <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                      />
                    </svg>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="h-5 w-5"
                      viewBox="0 0 20 20"
                      fill="currentColor"
                    >
                      <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                      />
                    </svg>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="h-5 w-5"
                      viewBox="0 0 20 20"
                      fill="currentColor"
                    >
                      <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                      />
                    </svg>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="h-5 w-5"
                      viewBox="0 0 20 20"
                      fill="currentColor"
                    >
                      <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                      />
                    </svg>
                  </div>
      
                  <p class="mt-0.5 text-lg font-medium text-gray-900">Nagita Slavina</p>
                </div>
              </div>
      
              <p class="mt-4 text-gray-700">
                Saya sangat senang berbelanja di Toko Kondang! 
                Mereka memiliki koleksi pakaian vintage yang luar biasa, dengan berbagai pilihan yang mengagumkan. 
                Selain itu, layanan pelanggan mereka juga sangat ramah dan membantu. 
                Saya pasti akan kembali lagi untuk menemukan lebih banyak harta karun vintage!
              </p>
            </blockquote>
      
            <blockquote class="rounded-lg bg-gray-50 p-6 shadow-sm sm:p-8">
              <div class="flex items-center gap-4">
                <img
                  alt=""
                  src="https://cdn.antaranews.com/cache/1200x800/2023/05/05/collage-2023-05-05T101923.163.jpg"
                  class="size-14 rounded-full object-cover"
                />
      
                <div>
                  <div class="flex justify-center gap-0.5 text-green-500">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="h-5 w-5"
                      viewBox="0 0 20 20"
                      fill="currentColor"
                    >
                      <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                      />
                    </svg>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="h-5 w-5"
                      viewBox="0 0 20 20"
                      fill="currentColor"
                    >
                      <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                      />
                    </svg>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="h-5 w-5"
                      viewBox="0 0 20 20"
                      fill="currentColor"
                    >
                      <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                      />
                    </svg>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="h-5 w-5"
                      viewBox="0 0 20 20"
                      fill="currentColor"
                    >
                      <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                      />
                    </svg>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="h-5 w-5"
                      viewBox="0 0 20 20"
                      fill="currentColor"
                    >
                      <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                      />
                    </svg>
                  </div>
      
                  <p class="mt-0.5 text-lg font-medium text-gray-900">Raisya</p>
                </div>
              </div>
      
              <p class="mt-4 text-gray-700">
                Saya sangat mendukung konsep thrift dan keberlanjutan, dan Toko Kondang Thrift adalah tempat yang sempurna untuk berbelanja dengan nilai-nilai tersebut.
                Mereka memiliki koleksi pakaian yang bagus dengan banyak pilihan barang bekas berkualitas tinggi. 
                Saya senang bisa membeli pakaian yang sudah digunakan sebelumnya dengan harga yang terjangkau, 
                sambil juga membantu mengurangi limbah tekstil.
              </p>
            </blockquote>
      
            <blockquote class="rounded-lg bg-gray-50 p-6 shadow-sm sm:p-8">
              <div class="flex items-center gap-4">
                <img
                  alt=""
                  src="https://images.unsplash.com/photo-1595152772835-219674b2a8a6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
                  class="size-14 rounded-full object-cover"
                />
      
                <div>
                  <div class="flex justify-center gap-0.5 text-green-500">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="h-5 w-5"
                      viewBox="0 0 20 20"
                      fill="currentColor"
                    >
                      <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                      />
                    </svg>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="h-5 w-5"
                      viewBox="0 0 20 20"
                      fill="currentColor"
                    >
                      <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                      />
                    </svg>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="h-5 w-5"
                      viewBox="0 0 20 20"
                      fill="currentColor"
                    >
                      <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                      />
                    </svg>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="h-5 w-5"
                      viewBox="0 0 20 20"
                      fill="currentColor"
                    >
                      <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                      />
                    </svg>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="h-5 w-5"
                      viewBox="0 0 20 20"
                      fill="currentColor"
                    >
                      <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                      />
                    </svg>
                  </div>
      
                  <p class="mt-0.5 text-lg font-medium text-gray-900">Atmaja</p>
                </div>
              </div>
      
              <p class="mt-4 text-gray-700">
                Sebagai seorang pemburu deal, Toko Kondang Thrift adalah surga bagi saya. 
                Saya selalu menemukan barang-barang berkualitas di sini dengan harga yang sangat terjangkau. 
                Baru-baru ini, saya berhasil mendapatkan beberapa pakaian dan aksesori yang luar biasa dengan diskon besar. 
                Layanan pelanggan mereka juga luar biasa; stafnya ramah dan membantu. 
                Saya pasti akan kembali lagi untuk mencari lebih banyak penawaran!
              </p>
            </blockquote>
          </div>
        </div>
      </section>
    <!-- End Testimonial -->
    <script src="{{asset('assets/js/main.js') }}"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        @include('partial.footer')
    </body>
</html>
