<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services | Space Terminal</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.5.1/css/all.min.css">
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>

    <?php include 'inc/header.php'; ?>

    <section class="relative bg-cover bg-center h-[500px]" style="background-image: url('assets/images/hero-bg.jpg');">
        <!-- Gradient Overlay -->
        <div class="absolute inset-0 bg-gradient-to-r from-black/60 to-black/30"></div>

        <div class="relative max-w-7xl mx-auto h-full flex flex-col justify-center items-center text-center px-6">
            <!-- Hero Content -->
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">Services</h2>
            <p class="text-white text-base md:text-lg max-w-2xl">
                Customized storage solutions also include services designed entirely around your needs. What specialized
                services are available to you in Rotterdam and Houston?
            </p>

            <!-- Highlight Line -->
            <div class="w-24 h-1 bg-yellow-400 mt-6"></div>
        </div>
    </section>

    <section class="services-section py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">

            <!-- Section Heading -->
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-[#0d314d] mb-2">Our Services</h2>
                <p class="text-gray-700 text-lg">Providing tailored solutions for petroleum storage, transport, and
                    analysis</p>
            </div>

            <!-- Services Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Service 1 -->
                <div
                    class="service-block bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition-shadow duration-300 flex flex-col">
                    <img src="assets/images/ser1.jpg" alt="Service 1" class="w-full h-48 object-cover">
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-semibold mb-3 text-[#0d314d]">STORAGE OF PETROLEUM PRODUCTS</h3>
                        <p class="text-gray-600 mb-4 flex-1 text-sm md:text-base">
                            Taking oil products for storage, we ensure the safety of the quality of the product.
                            Individual fuel storage tanks prevent mixing, preserve quality, and enable operational
                            release of petroleum products.
                        </p>
                        <a href="../Contact Us/index.html"
                            class="mt-auto inline-block bg-[#0d314d] text-white font-semibold text-center py-2 px-4 rounded hover:bg-[#1a557f] transition-colors duration-300">
                            Learn More
                        </a>
                    </div>
                </div>

                <!-- Service 2 -->
                <div
                    class="service-block bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition-shadow duration-300 flex flex-col">
                    <img src="assets/images/ser2.jpeg" alt="Service 2" class="w-full h-48 object-cover">
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-semibold mb-3 text-[#0d314d]">LABORATORY ANALYSIS OF PETROLEUM PRODUCTS
                        </h3>
                        <p class="text-gray-600 mb-4 flex-1 text-sm md:text-base">
                            Quality control is impossible without accurate analysis. Our lab quickly analyzes stored and
                            dispensed petroleum products, ensuring top quality.
                        </p>
                        <a href="../Contact Us/index.html"
                            class="mt-auto inline-block bg-[#0d314d] text-white font-semibold text-center py-2 px-4 rounded hover:bg-[#1a557f] transition-colors duration-300">
                            Learn More
                        </a>
                    </div>
                </div>

                <!-- Service 3 -->
                <div
                    class="service-block bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition-shadow duration-300 flex flex-col">
                    <img src="assets/images/ser3.jpg" alt="Service 3" class="w-full h-48 object-cover">
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-semibold mb-3 text-[#0d314d]">LEASING OF TANKS</h3>
                        <p class="text-gray-600 mb-4 flex-1 text-sm md:text-base">
                            Tanks with a total volume of 100,000 m³, equipped with safety systems and commercial
                            accounting for remote monitoring of product volume, density, and overflow.
                        </p>
                        <a href="../Contact Us/index.html"
                            class="mt-auto inline-block bg-[#0d314d] text-white font-semibold text-center py-2 px-4 rounded hover:bg-[#1a557f] transition-colors duration-300">
                            Learn More
                        </a>
                    </div>
                </div>

                <!-- Service 4 -->
                <div
                    class="service-block bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition-shadow duration-300 flex flex-col">
                    <img src="assets/images/ser4.jpg" alt="Service 4" class="w-full h-48 object-cover">
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-semibold mb-3 text-[#0d314d]">SHIPPING OF PETROLEUM PRODUCTS BY FLEET
                        </h3>
                        <p class="text-gray-600 mb-4 flex-1 text-sm md:text-base">
                            Operates 31 vessels including self-propelled, non-self-propelled vessels, push tugs, and oil
                            pumping stations for efficient transportation.
                        </p>
                        <a href="../Contact Us/index.html"
                            class="mt-auto inline-block bg-[#0d314d] text-white font-semibold text-center py-2 px-4 rounded hover:bg-[#1a557f] transition-colors duration-300">
                            Learn More
                        </a>
                    </div>
                </div>

                <!-- Service 5 -->
                <div
                    class="service-block bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition-shadow duration-300 flex flex-col">
                    <img src="assets/images/ser5.jpg" alt="Service 5" class="w-full h-48 object-cover">
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-semibold mb-3 text-[#0d314d]">SHIPPING OF PETROLEUM PRODUCTS BY RAILWAY
                            TRANSPORT</h3>
                        <p class="text-gray-600 mb-4 flex-1 text-sm md:text-base">
                            Organized transport by rail according to US and international standards, ensuring complete
                            safety of petroleum products.
                        </p>
                        <a href="../Contact Us/index.html"
                            class="mt-auto inline-block bg-[#0d314d] text-white font-semibold text-center py-2 px-4 rounded hover:bg-[#1a557f] transition-colors duration-300">
                            Learn More
                        </a>
                    </div>
                </div>

                <!-- Service 6 -->
                <div
                    class="service-block bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition-shadow duration-300 flex flex-col">
                    <img src="assets/images/ser6.jpg" alt="Service 6" class="w-full h-48 object-cover">
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-semibold mb-3 text-[#0d314d]">SHIPPING OF PETROLEUM PRODUCTS BY MOTOR
                            TRANSPORT</h3>
                        <p class="text-gray-600 mb-4 flex-1 text-sm md:text-base">
                            Road transport of petroleum products according to US and international regulations, ensuring
                            safety and comfort for our clients.
                        </p>
                        <a href="../Contact Us/index.html"
                            class="mt-auto inline-block bg-[#0d314d] text-white font-semibold text-center py-2 px-4 rounded hover:bg-[#1a557f] transition-colors duration-300">
                            Learn More
                        </a>
                    </div>
                </div>

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
<script src="https://cdn.tailwindcss.com"></script>

</html>