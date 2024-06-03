<section data-aos="fade-right" data-aos-duration="2000">
    <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
        <header class="text-center">
            <h2 class="text-xl font-bold text-orange-500 sm:text-3xl">Product Collection</h2>
        </header>
        <div class="relative overflow-hidden">
            <div class="overflow-hidden">
                <ul class="mt-8 flex transition-transform duration-500 ease-in-out" id="productSlider">
                    @foreach ($products as $product)
                                        <li class="w-1/4 flex-shrink-0 p-2">
                                            <a href="{{ route('productDetail', ['id_product' => $product->id_product]) }}"
                                                class="group block overflow-hidden rounded-md">
                                                @php
                                                    $imagePath = file_exists(public_path($product->image_product)) ? $product->image_product : 'assets/img/default.jpg';
                                                @endphp
                                                <img src="{{ asset($imagePath) }}" alt="{{ $product->name_product }}"
                                                    class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[350px]" />
                                            </a>
                                          
                                        </li>
                    @endforeach
                    @foreach ($products as $product) <!-- Duplicate items for infinity effect -->
                                        <li class="w-1/4 flex-shrink-0 p-2">
                                            <a href="{{ route('productDetail', ['id_product' => $product->id_product]) }}"
                                                class="group block overflow-hidden rounded-md">
                                                @php
                                                    $imagePath = file_exists(public_path($product->image_product)) ? $product->image_product : 'assets/img/default.jpg';
                                                @endphp
                                                <img src="{{ asset($imagePath) }}" alt="{{ $product->name_product }}"
                                                    class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[350px]" />
                                            </a>
                                          
                                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const slider = document.getElementById('productSlider');
        const items = slider.querySelectorAll('li');
        const itemCount = items.length / 2; // Since items are duplicated
        const itemsPerPage = 4;
        let currentIndex = 0;

        function showItem(index) {
            const offset = -index * (100 / itemsPerPage);
            slider.style.transition = 'transform 0.5s ease-in-out';
            slider.style.transform = `translateX(${offset}%)`;
        }

        function nextItem() {
            currentIndex++;
            showItem(currentIndex);
            if (currentIndex >= itemCount) {
                setTimeout(() => {
                    slider.style.transition = 'none';
                    currentIndex = 0;
                    showItem(currentIndex);
                }, 500); // Match the duration in showItem
            }
        }

        setInterval(nextItem, 2000); // Geser otomatis setiap 3 detik
    });
</script>