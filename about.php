<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Space Terminal</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.5.1/css/all.min.css">
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<!-- Tailwind Animations -->
<style>
    @keyframes slide-in-left {
        0% {
            opacity: 0;
            transform: translateX(-50px);
        }

        100% {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes slide-in-bottom {
        0% {
            opacity: 0;
            transform: translateY(50px);
        }

        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-slide-in-left {
        animation: slide-in-left 1s ease-out forwards;
    }

    .animate-slide-in-bottom {
        animation: slide-in-bottom 1s ease-out forwards;
    }
</style>

<body>
    <?php include 'inc/header.php'; ?>

    <section class="relative bg-cover bg-center h-[500px]" style="background-image: url('assets/images/hero-bg.jpg');">
        <!-- Gradient Overlay -->
        <div class="absolute inset-0 bg-gradient-to-r from-black/60 to-black/30"></div>

        <div class="relative max-w-7xl mx-auto h-full flex flex-col justify-center items-center text-center px-6">
            <!-- Hero Content -->
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">About Us</h2>
            <p class="text-white text-base md:text-lg max-w-2xl">
                Since 2007, Space Terminal and Tank Oil Storage have been part of Hametha. Like this established family
                business, we are a mid-sized company dedicated to being responsive, reliable, and committed to
                excellence.
            </p>

            <!-- Highlight Line -->
            <div class="w-24 h-1 bg-yellow-400 mt-6"></div>
        </div>
    </section>

    <section class="about-section py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6 flex flex-col lg:flex-row lg:items-center gap-12">

            <!-- Text Content -->
            <div class="about-content lg:w-1/2 opacity-0 translate-x-[-50px]">
                <h3 class="text-3xl md:text-4xl font-bold text-[#0d314d] mb-6">About Space Terminal</h3>
                <p class="text-gray-700 mb-4">
                    Space Terminal is strategically located in Florida. Our international distribution center provides
                    direct access to the open sea and the European hinterland, offering a unique advantage for producing
                    and distributing both finished and intermediate products, including LPG, gasoline, diesel, and
                    kerosene. Florida serves as a key hub for petrochemical activities and is a major engine of the
                    European energy sector.
                </p>
                <p class="text-gray-700">
                    Space Terminal’s tank farm operations span Florida Port, Houston Port, Novorossiysk Port, Qingdao
                    Port, and several other strategic locations worldwide. Our management team handles all essential
                    documentation for oil companies regarding the storage and handling of their products. Our tank farms
                    are primarily above ground, with some underground facilities, ensuring efficient transfers into
                    heavy-duty oil tankers and pipelines. We also provide extensive industrial infrastructure for
                    storing oil and petroleum products prior to transportation to end users or other storage facilities.
                </p>
            </div>

            <!-- Images -->
            <div class="images-wrapper lg:w-1/2 flex flex-col gap-6 opacity-0 translate-y-10">
                <img src="assets/images/tf1.jpg" alt="Image 1"
                    class="rounded-lg shadow-lg hover:-translate-y-2 transition-transform duration-300">
                <img src="assets/images/tf2.jpg" alt="Image 2"
                    class="rounded-lg shadow-lg hover:-translate-y-2 transition-transform duration-300">
            </div>

        </div>
    </section>

    <!-- Back to Top Button -->
    <a href="#" id="back-to-top"
        class="fixed bottom-8 right-8 bg-yellow-500 hover:bg-yellow-400 text-white p-4 rounded-full shadow-lg flex items-center justify-center animate-bounce-up z-50 transition-colors duration-300">
        <!-- Up Arrow Icon -->
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
            stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
        </svg>
    </a>

    <!-- Tailwind Custom Animation in style -->
    <style>
        @keyframes bounceUp {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        .animate-bounce-up {
            animation: bounceUp 1s infinite ease-in-out;
        }
    </style>



    <?php include 'inc/footer.php'; ?>

</body>

<!-- Intersection Observer Script -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const options = { threshold: 0.3 };
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const textDiv = entry.target.querySelector('.about-content');
                    const imageDiv = entry.target.querySelector('.images-wrapper');
                    textDiv.classList.add('animate-slide-in-left');
                    imageDiv.classList.add('animate-slide-in-bottom');
                    observer.unobserve(entry.target); // Trigger once
                }
            });
        }, options);

        observer.observe(document.querySelector('.about-section'));
    });
</script>

</html>