<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./kondang.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
    />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Toko Kondang</title>
  </head>
<body>
    @include('partial.promotion')
    @include('partial.header')
    <!-- main content -->
    
    <!-- Ini Filtering -->

    <section>
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

        <div class="mt-8 sm:flex sm:items-center sm:justify-between">
          <div class="block sm:hidden">
            <button
              class="flex cursor-pointer items-center gap-2 border-b border-gray-400 pb-1 text-gray-900 transition hover:border-gray-600"
            >
              <span class="text-sm font-medium"> Filters & Sorting </span>

              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="size-4 rtl:rotate-180"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M8.25 4.5l7.5 7.5-7.5 7.5"
                />
              </svg>
            </button>
          </div>

          <div class="hidden sm:flex sm:gap-4">
            <div class="relative">
              <details class="group [&_summary::-webkit-details-marker]:hidden">
                <summary
                  class="flex cursor-pointer items-center gap-2 border-b border-gray-400 pb-1 text-gray-900 transition hover:border-gray-600"
                >
                  <span class="text-sm font-medium"> Availability </span>

                  <span class="transition group-open:-rotate-180">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="h-4 w-4"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M19.5 8.25l-7.5 7.5-7.5-7.5"
                      />
                    </svg>
                  </span>
                </summary>

                <div
                  class="z-50 group-open:absolute group-open:top-auto group-open:mt-2 ltr:group-open:start-0"
                >
                  <div class="w-96 rounded border border-gray-200 bg-white">
                    <header class="flex items-center justify-between p-4">
                      <span class="text-sm text-gray-700"> 0 Selected </span>

                      <button
                        type="button"
                        class="text-sm text-gray-900 underline underline-offset-4"
                      >
                        Reset
                      </button>
                    </header>

                    <ul class="space-y-1 border-t border-gray-200 p-4">
                      <li>
                        <label
                          for="FilterInStock"
                          class="inline-flex items-center gap-2"
                        >
                          <input
                            type="checkbox"
                            id="FilterInStock"
                            class="size-5 rounded border-gray-300"
                          />

                          <span class="text-sm font-medium text-gray-700">
                            In Stock (5+)
                          </span>
                        </label>
                      </li>

                      <li>
                        <label
                          for="FilterPreOrder"
                          class="inline-flex items-center gap-2"
                        >
                          <input
                            type="checkbox"
                            id="FilterPreOrder"
                            class="size-5 rounded border-gray-300"
                          />

                          <span class="text-sm font-medium text-gray-700">
                            Pre Order (3+)
                          </span>
                        </label>
                      </li>

                      <li>
                        <label
                          for="FilterOutOfStock"
                          class="inline-flex items-center gap-2"
                        >
                          <input
                            type="checkbox"
                            id="FilterOutOfStock"
                            class="size-5 rounded border-gray-300"
                          />

                          <span class="text-sm font-medium text-gray-700">
                            Out of Stock (10+)
                          </span>
                        </label>
                      </li>
                    </ul>
                  </div>
                </div>
              </details>
            </div>

            <div class="relative">
              <details class="group [&_summary::-webkit-details-marker]:hidden">
                <summary
                  class="flex cursor-pointer items-center gap-2 border-b border-gray-400 pb-1 text-gray-900 transition hover:border-gray-600"
                >
                  <span class="text-sm font-medium"> Size </span>

                  <span class="transition group-open:-rotate-180">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="h-4 w-4"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M19.5 8.25l-7.5 7.5-7.5-7.5"
                      />
                    </svg>
                  </span>
                </summary>

                <div
                  class="z-50 group-open:absolute group-open:top-auto group-open:mt-2 ltr:group-open:start-0"
                >
                  <div class="w-96 rounded border border-gray-200 bg-white">
                    <header class="flex items-center justify-between p-4">
                      <span class="text-sm text-gray-700"> 0 Selected </span>

                      <button
                        type="button"
                        class="text-sm text-gray-900 underline underline-offset-4"
                      >
                        Reset
                      </button>
                    </header>

                    <ul class="space-y-1 border-t border-gray-200 p-4">
                      <li>
                        <label
                          for="FilterSizeSmall"
                          class="inline-flex items-center gap-2"
                        >
                          <input
                            type="checkbox"
                            id="FilterSizeSmall"
                            class="size-5 rounded border-gray-300"
                          />

                          <span class="text-sm font-medium text-gray-700">
                            Small
                          </span>
                        </label>
                      </li>

                      <li>
                        <label
                          for="FilterSizeMedium"
                          class="inline-flex items-center gap-2"
                        >
                          <input
                            type="checkbox"
                            id="FilterSizeMedium"
                            class="size-5 rounded border-gray-300"
                          />

                          <span class="text-sm font-medium text-gray-700">
                            Medium
                          </span>
                        </label>
                      </li>

                      <li>
                        <label
                          for="FilterSizeLarge"
                          class="inline-flex items-center gap-2"
                        >
                          <input
                            type="checkbox"
                            id="FilterSizeLarge"
                            class="size-5 rounded border-gray-300"
                          />

                          <span class="text-sm font-medium text-gray-700">
                            Large
                          </span>
                        </label>
                      </li>
                    </ul>
                  </div>
                </div>
              </details>
            </div>

            <div class="relative">
              <details class="group [&_summary::-webkit-details-marker]:hidden">
                <summary
                  class="flex cursor-pointer items-center gap-2 border-b border-gray-400 pb-1 text-gray-900 transition hover:border-gray-600"
                >
                  <span class="text-sm font-medium"> Price </span>

                  <span class="transition group-open:-rotate-180">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="h-4 w-4"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M19.5 8.25l-7.5 7.5-7.5-7.5"
                      />
                    </svg>
                  </span>
                </summary>

                <div
                  class="z-50 group-open:absolute group-open:top-auto group-open:mt-2 ltr:group-open:start-0"
                >
                  <div class="w-96 rounded border border-gray-200 bg-white">
                    <header class="flex items-center justify-between p-4">
                      <span class="text-sm text-gray-700">
                        The highest price is Rp1.000.000
                      </span>

                      <button
                        type="button"
                        class="text-sm text-gray-900 underline underline-offset-4"
                      >
                        Reset
                      </button>
                    </header>

                    <div class="border-t border-gray-200 p-4">
                      <div class="flex justify-between gap-4">
                        <label
                          for="FilterPriceFrom"
                          class="flex items-center gap-2"
                        >
                          <span class="text-sm text-gray-600">Rp</span>

                          <input
                            type="number"
                            id="FilterPriceFrom"
                            placeholder="From"
                            class="w-full rounded-md border-gray-200 shadow-sm sm:text-sm"
                          />
                        </label>

                        <label
                          for="FilterPriceTo"
                          class="flex items-center gap-2"
                        >
                          <span class="text-sm text-gray-600">Rp</span>

                          <input
                            type="number"
                            id="FilterPriceTo"
                            placeholder="To"
                            class="w-full rounded-md border-gray-200 shadow-sm sm:text-sm"
                          />
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              </details>
            </div>
          </div>

          <div class="hidden sm:block">
            <label for="SortBy" class="sr-only">SortBy</label>

            <select id="SortBy" class="h-10 rounded border-gray-300 text-sm">
              <option>Sort By</option>
              <option value="Title, DESC">Title, DESC</option>
              <option value="Title, ASC">Title, ASC</option>
              <option value="Price, DESC">Price, DESC</option>
              <option value="Price, ASC">Price, ASC</option>
            </select>
          </div>
        </div>
      
        <ul class="mt-4 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
          <li>
            <div
              class="product-frame"
              style="border: 1px solid #ddd; padding: 10px"
            >
              <a
                href="{{ route('productDetail') }}"
                class="group block overflow-hidden pt-[100px] pb-[100px] sm:pt-[0px] sm:pb-[20px]"
              >
                <img
                src="{{URL::asset("assets/img/1a.jpg")}}"
                  alt=""
                  class="h-auto w-full object-cover transition duration-500 group-hover:scale-105"
                />

                <div class="relative bg-white pt-3">
                  <h3
                    class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4"
                  >
                    Hoodie
                  </h3>

                  <h3
                    class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4"
                  >
                    L
                  </h3>

                  <p class="mt-2">
                    <span class="sr-only"> Regular Price </span>

                    <span class="tracking-wider text-gray-900"> Rp75.000 </span>
                  </p>
                </div>
              </a>
            </div>
          </li>

          <li>
            <div
              class="product-frame"
              style="border: 1px solid #ddd; padding: 10px"
            >
              <a
                href="{{ route('productDetail') }}"
                class="group block overflow-hidden pt-[100px] pb-[100px] sm:pt-[0px] sm:pb-[20px]"
              >
              <img
              src="{{URL::asset("assets/img/1b.jpg")}}"
                alt=""
                class="h-auto w-full object-cover transition duration-500 group-hover:scale-105"
              />

              <div class="relative bg-white pt-3">
                <h3
                  class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4"
                >
                  Hoodie L
                </h3>

                <h3
                    class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4"
                  >
                    L
                  </h3>

                <p class="mt-2">
                  <span class="sr-only"> Regular Price </span>

                  <span class="tracking-wider text-gray-900"> Rp75.000 </span>
                </p>
              </div>
            </a>
          </li>

          <li>
            <div
              class="product-frame"
              style="border: 1px solid #ddd; padding: 10px"
            >
            <a
                href="{{ route('productDetail') }}"
                class="group block overflow-hidden pt-[100px] pb-[100px] sm:pt-[0px] sm:pb-[20px]"
              >
              <img
              src="{{URL::asset("assets/img/1d.jpg")}}"
                alt=""
                class="h-auto w-full object-cover transition duration-500 group-hover:scale-105"
              />

              <div class="relative bg-white pt-3">
                <h3
                  class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4"
                >
                  Hoodie 
                </h3>

                <h3
                    class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4"
                  >
                    L
                  </h3>

                <p class="mt-2">
                  <span class="sr-only"> Regular Price </span>

                  <span class="tracking-wider text-gray-900"> Rp75.000 </span>
                </p>
              </div>
            </a>
          </li>

          <li>
            <div
              class="product-frame"
              style="border: 1px solid #ddd; padding: 10px"
            >
            <a
                href="{{ route('productDetail') }}"
                class="group block overflow-hidden pt-[100px] pb-[100px] sm:pt-[0px] sm:pb-[20px]"
              >
              <img
              src="{{URL::asset("assets/img/1z.jpg")}}"
                alt=""
                class="h-auto w-full object-cover transition duration-500 group-hover:scale-105"
              />

              <div class="relative bg-white pt-3">
                <h3
                  class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4"
                >
                  Jacket 
                </h3>

                <h3
                    class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4"
                  >
                    L
                  </h3>

                <p class="mt-2">
                  <span class="sr-only"> Regular Price </span>

                  <span class="tracking-wider text-gray-900"> Rp100.000 </span>
                </p>
              </div>
            </a>
          </li>

          <li>
            <div
              class="product-frame"
              style="border: 1px solid #ddd; padding: 10px"
            >
            <a
                href="{{ route('productDetail') }}"
                class="group block overflow-hidden pt-[100px] pb-[100px] sm:pt-[0px] sm:pb-[20px]"
              >
              <img
              src="{{URL::asset("assets/img/2a.jpg")}}"
                alt=""
                class="h-auto w-full object-cover transition duration-500 group-hover:scale-105"
              />

              <div class="relative bg-white pt-3">
                <h3
                  class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4"
                >
                  T-Shirt 
                </h3>

                <h3
                    class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4"
                  >
                    L
                  </h3>

                <p class="mt-2">
                  <span class="sr-only"> Regular Price </span>

                  <span class="tracking-wider text-gray-900"> Rp50.000 </span>
                </p>
              </div>
            </a>
          </li>

          <li>
            <div
              class="product-frame"
              style="border: 1px solid #ddd; padding: 10px"
            >
            <a
                href="{{ route('productDetail') }}"
                class="group block overflow-hidden pt-[100px] pb-[100px] sm:pt-[0px] sm:pb-[20px]"
              >
              <img
              src="{{URL::asset("assets/img/7.jpg")}}"
                alt=""
                class="h-auto w-full object-cover transition duration-500 group-hover:scale-105"
              />

              <div class="relative bg-white pt-3">
                <h3
                  class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4"
                >
                  T-Shirt 
                </h3>

                <h3
                    class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4"
                  >
                    L
                  </h3>

                <p class="mt-2">
                  <span class="sr-only"> Regular Price </span>

                  <span class="tracking-wider text-gray-900"> Rp40.000 </span>
                </p>
              </div>
            </a>
          </li>

          <li>
            <div
              class="product-frame"
              style="border: 1px solid #ddd; padding: 10px"
            >
            <a
                href="{{ route('productDetail') }}"
                class="group block overflow-hidden pt-[100px] pb-[100px] sm:pt-[0px] sm:pb-[20px]"
              >
              <img
              src="{{URL::asset("assets/img/8.jpg")}}"
                alt=""
                class="h-auto w-full object-cover transition duration-500 group-hover:scale-105"
              />

              <div class="relative bg-white pt-3">
                <h3
                  class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4"
                >
                  T-Shirt 
                </h3>

                <h3
                    class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4"
                  >
                    L
                  </h3>

                <p class="mt-2">
                  <span class="sr-only"> Regular Price </span>

                  <span class="tracking-wider text-gray-900"> Rp50.000 </span>
                </p>
              </div>
            </a>
          </li>

          <li>
            <div
              class="product-frame"
              style="border: 1px solid #ddd; padding: 10px"
            >
            <a
                href="{{ route('productDetail') }}"
                class="group block overflow-hidden pt-[100px] pb-[100px] sm:pt-[0px] sm:pb-[20px]"
              >
              <img
              src="{{URL::asset("assets/img/9.jpg")}}"
                alt=""
                class="h-auto w-full object-cover transition duration-500 group-hover:scale-105"
              />

              <div class="relative bg-white pt-3">
                <h3
                  class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4"
                >
                  Shoes 
                </h3>

                <h3
                    class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4"
                  >
                    38-40
                  </h3>

                <p class="mt-2">
                  <span class="sr-only"> Regular Price </span>

                  <span class="tracking-wider text-gray-900"> Rp100.000 </span>
                </p>
              </div>
            </a>
          </li>
        </ul>
      </div>
    </section>
    <!-- End Filtering  -->

    <!-- Ini Page-->
    <div class="flex justify-center items-center gap-1">
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

      <div>
        <label for="PaginationPage" class="sr-only">Page</label>

        <input
          type="number"
          class="h-8 w-12 rounded border border-gray-100 bg-white p-0 text-center text-xs font-medium text-gray-900 [-moz-appearance:_textfield] [&::-webkit-inner-spin-button]:m-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:m-0 [&::-webkit-outer-spin-button]:appearance-none"
          min="1"
          value="1"
          id="PaginationPage"
        />
      </div>

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
    </div>
    <!-- End Page -->
    <!-- End main content -->
    @include('partial.footer')
</body>
</html>