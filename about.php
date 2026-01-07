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
                <img src="assets/images/tf5.jpg" alt="Image 1"
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

    <section class="py-16 bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

                <!-- Text Content -->
                <div class="opacity-0 translate-x-[-40px] transition-all duration-700 ease-out" data-animate>
                    <h3 class="text-2xl md:text-3xl font-bold text-gray-800 mb-4">
                        Our Logistics Strategy
                    </h3>

                    <p class="text-gray-600 leading-relaxed mb-4">
                        At Southern Logistics, we aim to lead independent petroleum storage and logistics by developing
                        and acquiring strategic assets that form a strong global network of hydrocarbon and chemical
                        terminals.
                    </p>

                    <p class="text-gray-600 leading-relaxed">
                        Our tank farm operations span major global ports, featuring above-ground and underground storage
                        systems designed for efficient discharge into pipelines and heavy-duty tankers, ensuring safe
                        and reliable product handling.
                    </p>
                </div>

                <!-- Image -->
                <div class="opacity-0 translate-x-[40px] transition-all duration-700 ease-out" data-animate>
                    <img src="assets/images/tm4.jpg" alt="Logistics Operations"
                        class="w-full h-auto rounded-xl shadow-lg object-cover" />
                </div>

            </div>
        </div>
    </section>

    <section class="py-16">
        <div class="max-w-7xl mx-auto px-6">
            <!-- Section Heading -->
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-black mb-2">Why Choose Us</h2>
                <h3 class="text-xl md:text-2xl text-black">Six Reasons For People Choosing Us</h3>
            </div>

            <!-- Cards Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Card 1 -->
                <div
                    class="group p-6 rounded-lg shadow text-center transition-all duration-300 transform hover:-translate-y-2 hover:bg-[#1a557f]">
                    <i class="fas fa-subway text-3xl text-[#0d314d] mb-4 group-hover:text-white"></i>
                    <h4 class="text-xl font-semibold mb-2 text-gray-900 group-hover:text-white">RAIL NETWORK</h4>
                    <p class="text-gray-600 text-sm md:text-base group-hover:text-white">
                        Linked to the North American rail network for distribution throughout the United States, Canada,
                        and Mexico
                    </p>
                </div>

                <!-- Card 2 -->
                <div
                    class="group p-6 rounded-lg shadow text-center transition-all duration-300 transform hover:-translate-y-2 hover:bg-[#1a557f]">
                    <i class="fas fa-train text-3xl text-[#0d314d] mb-4 group-hover:text-white"></i>
                    <h4 class="text-xl font-semibold mb-2 text-gray-900 group-hover:text-white">STEEL RAIL</h4>
                    <p class="text-gray-600 text-sm md:text-base group-hover:text-white">
                        Multiple stainless steel rail header systems enabling the loading and unloading of up to 110
                        rail cars on
                        eight tracks
                    </p>
                </div>

                <!-- Card 3 -->
                <div
                    class="group p-6 rounded-lg shadow text-center transition-all duration-300 transform hover:-translate-y-2 hover:bg-[#1a557f]">
                    <i class="fas fa-ship text-3xl text-[#0d314d] mb-4 group-hover:text-white"></i>
                    <h4 class="text-xl font-semibold mb-2 text-gray-900 group-hover:text-white">DIRECT TRANSFER</h4>
                    <p class="text-gray-600 text-sm md:text-base group-hover:text-white">
                        Direct transfer from rail cars to ships or barges, at rates up to 500 cbm (3,500 bbls) per hour
                    </p>
                </div>

                <!-- Card 4 -->
                <div
                    class="group p-6 rounded-lg shadow text-center transition-all duration-300 transform hover:-translate-y-2 hover:bg-[#1a557f]">
                    <i class="fas fa-truck text-3xl text-[#0d314d] mb-4 group-hover:text-white"></i>
                    <h4 class="text-xl font-semibold mb-2 text-gray-900 group-hover:text-white">TRUCK STATION</h4>
                    <p class="text-gray-600 text-sm md:text-base group-hover:text-white">
                        14 truck stations with multiple load-on-scale racks located throughout the terminal
                    </p>
                </div>

                <!-- Card 5 -->
                <div
                    class="group p-6 rounded-lg shadow text-center transition-all duration-300 transform hover:-translate-y-2 hover:bg-[#1a557f]">
                    <i class="fas fa-house text-3xl text-[#0d314d] mb-4 group-hover:text-white"></i>
                    <h4 class="text-xl font-semibold mb-2 text-gray-900 group-hover:text-white">AUTOMATED SCALE SYSTEM
                    </h4>
                    <p class="text-gray-600 text-sm md:text-base group-hover:text-white">
                        Automated scale system controls truck loading process through computerized control features
                    </p>
                </div>

                <!-- Card 6 -->
                <div
                    class="group p-6 rounded-lg shadow text-center transition-all duration-300 transform hover:-translate-y-2 hover:bg-[#1a557f]">
                    <i class="fas fa-exchange-alt text-3xl text-[#0d314d] mb-4 group-hover:text-white"></i>
                    <h4 class="text-xl font-semibold mb-2 text-gray-900 group-hover:text-white">TRANS-LOADING SERVICES
                    </h4>
                    <p class="text-gray-600 text-sm md:text-base group-hover:text-white">
                        Trans-loading services through stainless steel transfer system.
                    </p>
                </div>

            </div>

        </div>
    </section>

    <section class="py-16 bg-gray-50 overflow-hidden">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

                <!-- Text Content -->
                <div class="opacity-0 translate-x-[-40px] transition-all duration-700 ease-out" data-animate>
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-4">
                        Our History
                    </h2>

                    <p class="text-gray-600 mb-4 leading-relaxed">
                        We are committed to delivering comfortable, efficient, and mutually beneficial services to our
                        clients worldwide.
                        <span class="font-semibold">(RSIN 862349126)</span>
                    </p>

                    <p class="text-gray-800 font-semibold mb-3 uppercase tracking-wide">
                        We Are Multipurpose
                    </p>

                    <p class="text-gray-600 leading-relaxed">
                        Southern Logistics operates a multipurpose terminal network, strategically registered and
                        located in Florida, Netherlands.
                        Our services include loading, unloading, transshipment, blending, heating, storage, and handling
                        of petroleum products,
                        supported by large-capacity tank systems and advanced operational controls.
                    </p>
                </div>

                <!-- Image -->
                <div class="opacity-0 translate-x-[40px] transition-all duration-700 ease-out" data-animate>
                    <img src="assets/images/history.jpg" alt="Southern Logistics History"
                        class="w-full h-auto rounded-xl shadow-lg object-cover" />
                </div>

            </div>
        </div>
    </section>



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

<script>
    const animatedElements = document.querySelectorAll('[data-animate]');

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.remove('opacity-0', 'translate-x-[-40px]', 'translate-x-[40px]');
                    entry.target.classList.add('opacity-100', 'translate-x-0');
                }
            });
        },
        { threshold: 0.2 }
    );

    animatedElements.forEach(el => observer.observe(el));
</script>


</html>