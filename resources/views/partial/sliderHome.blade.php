<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Carousel</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .carousel-container {
            position: relative;
            width: 100%;
            height: 60vh;
            overflow: hidden;
        }

        .carousel-inner {
            display: flex;
            transition: transform 1s ease-in-out;
            width: 100%;
            height: 100%;
        }

        .carousel-item {
            min-width: 100%;
            height: 100%;
            transition: transform 1s ease-in-out;
        }

        .carousel-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .carousel-button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            padding: 1rem;
            cursor: pointer;
            z-index: 10;
        }

        .carousel-button.left {
            left: 1rem;
        }

        .carousel-button.right {
            right: 1rem;
        }
    </style>
</head>

<body class="bg-gray-100 flex items-center justify-center h-screen">

    <div id="imageCarousel" class="carousel-container">
        <div class="carousel-inner">
            <div class="carousel-item">
                <img src="{{ asset('assets/img/1s.png') }}" alt="Image 1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/img/2s.png') }}" alt="Image 2">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/img/4s.png') }}" alt="Image 3">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/img/5s.png') }}" alt="Image 4">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/img/3s.png') }}" alt="Image 5">
            </div>
            <!-- Clone first item for infinite loop -->
            <div class="carousel-item">
                <img src="{{ asset('assets/img/1s.png') }}" alt="Image 1">
            </div>
        </div>

        <div class="carousel-button left" id="prevButton">Prev</div>
        <div class="carousel-button right" id="nextButton">Next</div>
    </div>

    <script>
        const carouselInner = document.querySelector('.carousel-inner');
        const carouselItems = document.querySelectorAll('.carousel-item');
        let currentIndex = 0;
        const totalItems = carouselItems.length;

        function showItem(index) {
            const offset = -index * 100;
            carouselInner.style.transform = `translateX(${offset}%)`;

            // Reset to the first item if we reach the clone
            if (index === totalItems - 1) {
                setTimeout(() => {
                    carouselInner.style.transition = 'none';
                    currentIndex = 0;
                    carouselInner.style.transform = `translateX(0)`;
                    setTimeout(() => {
                        carouselInner.style.transition = 'transform 1s ease-in-out';
                    }, 50);
                }, 1000); // Wait for the transition to end
            }
        }

        function nextItem() {
            currentIndex = (currentIndex + 1) % totalItems;
            showItem(currentIndex);
        }

        function prevItem() {
            currentIndex = (currentIndex - 1 + totalItems) % totalItems;
            showItem(currentIndex);
        }

        document.getElementById('nextButton').addEventListener('click', nextItem);
        document.getElementById('prevButton').addEventListener('click', prevItem);

        setInterval(nextItem, 2000);
    </script>

</body>

</html>