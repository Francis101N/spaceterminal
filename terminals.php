<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terminals | Space Terminal</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.5.1/css/all.min.css">
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<style>
h1,h2,h3,h4,h5,h6, p{
    font-family: Inter;
    font-style: Inter;
  }
</style>
<body>
    <?php include 'inc/header.php'; ?>

    <section class="relative bg-cover bg-center h-[500px]" style="background-image: url('assets/images/hero-bg.jpg');">
        <!-- Gradient Overlay -->
        <div class="absolute inset-0 bg-gradient-to-r from-black/60 to-black/30"></div>

        <div class="relative max-w-7xl mx-auto h-full flex flex-col justify-center items-center text-center px-6">
            <!-- Hero Content -->
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">Terminals</h2>
            <p class="text-white text-base md:text-lg max-w-2xl">
                At Space Terminal LLC, our tank farm storage has been a leading service provider to the liquid bulk
                chemical industry for many years.
            </p>

            <!-- Highlight Line -->
            <div class="w-24 h-1 bg-yellow-400 mt-6"></div>
        </div>
    </section>

    <section class="terminals-section1 py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">

            <!-- Section Header -->
            <div class="text-center mb-8">
                <h1 class="text-4xl font-bold text-[#0d314d] mb-4">Tank Terminals</h1>
                <h3 class="text-gray-700 text-lg md:text-xl max-w-3xl mx-auto">
                    Location is everything in our business. Around the world, we connect the supply of and demand for
                    vital products and resources.
                    Our global network of terminals determines our service towards our customers. We have the expertise
                    to determine the right locations
                    to store the vital products of today and tomorrow.
                </h3>
            </div>

            <hr class="border-gray-300 mb-6">

            <div class="text-center mb-6 space-y-2 text-gray-700">
                <p>Below you will find an overview of Southern Logistic's global network of tank terminals.</p>
                <p>Be aware of cybercrime, storage spoofing.</p>
                <p>In the overview below, you can see which products can be stored at our terminals. P=petroleum
                    products; C=chemicals, G=gases, V=vegoils.</p>
            </div>

            <div class="mb-8">
                <img src="assets/images/map.png" alt="Global Terminals Map"
                    class="w-full rounded-lg shadow-lg object-cover">
            </div>

            <!-- Table Container -->
            <div class="overflow-x-auto bg-white rounded-lg shadow-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-[#0d314d] text-white">
                        <tr>
                            <th class="px-4 py-2 text-left text-sm font-medium">Location</th>
                            <th class="px-4 py-2 text-left text-sm font-medium">Share</th>
                            <th class="px-4 py-2 text-left text-sm font-medium">Capacity (cbm)</th>
                            <th class="px-4 py-2 text-left text-sm font-medium">Petroleum</th>
                            <th class="px-4 py-2 text-left text-sm font-medium">Chemicals</th>
                            <th class="px-4 py-2 text-left text-sm font-medium">Gases</th>
                            <th class="px-4 py-2 text-left text-sm font-medium">Vegoils</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-4 py-2 text-sm text-gray-800">Brazil - Southern LLC Brazil - Alemoa Terminal
                            </td>
                            <td class="px-4 py-2 text-sm text-gray-800">100.00%</td>
                            <td class="px-4 py-2 text-sm text-gray-800">276,820</td>
                            <td class="px-4 py-2 text-sm text-gray-800">P</td>
                            <td class="px-4 py-2 text-sm text-gray-800">C</td>
                            <td class="px-4 py-2 text-sm text-gray-800">-</td>
                            <td class="px-4 py-2 text-sm text-gray-800">V</td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-4 py-2 text-sm text-gray-800">Brazil - Southern LLC Brazil - Aratu Terminal
                            </td>
                            <td class="px-4 py-2 text-sm text-gray-800">100.00%</td>
                            <td class="px-4 py-2 text-sm text-gray-800">108,130</td>
                            <td class="px-4 py-2 text-sm text-gray-800">P</td>
                            <td class="px-4 py-2 text-sm text-gray-800">C</td>
                            <td class="px-4 py-2 text-sm text-gray-800">-</td>
                            <td class="px-4 py-2 text-sm text-gray-800">V</td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-4 py-2 text-sm text-gray-800">Canada - Ridley Island Propane Export Terminal
                                (RIPET)</td>
                            <td class="px-4 py-2 text-sm text-gray-800">30.00%</td>
                            <td class="px-4 py-2 text-sm text-gray-800">96,000</td>
                            <td class="px-4 py-2 text-sm text-gray-800">-</td>
                            <td class="px-4 py-2 text-sm text-gray-800">-</td>
                            <td class="px-4 py-2 text-sm text-gray-800">G</td>
                            <td class="px-4 py-2 text-sm text-gray-800">-</td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-4 py-2 text-sm text-gray-800">Fujirah - SPEC LNG</td>
                            <td class="px-4 py-2 text-sm text-gray-800">49.00%</td>
                            <td class="px-4 py-2 text-sm text-gray-800">170,000</td>
                            <td class="px-4 py-2 text-sm text-gray-800">-</td>
                            <td class="px-4 py-2 text-sm text-gray-800">-</td>
                            <td class="px-4 py-2 text-sm text-gray-800">G</td>
                            <td class="px-4 py-2 text-sm text-gray-800">-</td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-4 py-2 text-sm text-gray-800">Fujirah - Southern LLC Fujirah - Barranquilla
                                Terminal</td>
                            <td class="px-4 py-2 text-sm text-gray-800">100.00%</td>
                            <td class="px-4 py-2 text-sm text-gray-800">46,521</td>
                            <td class="px-4 py-2 text-sm text-gray-800">P</td>
                            <td class="px-4 py-2 text-sm text-gray-800">C</td>
                            <td class="px-4 py-2 text-sm text-gray-800">-</td>
                            <td class="px-4 py-2 text-sm text-gray-800">V</td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-4 py-2 text-sm text-gray-800">Fujirah - Southern LLC Fujirah - Cartagena
                                Terminal</td>
                            <td class="px-4 py-2 text-sm text-gray-800">100.00%</td>
                            <td class="px-4 py-2 text-sm text-gray-800">26,629</td>
                            <td class="px-4 py-2 text-sm text-gray-800">P</td>
                            <td class="px-4 py-2 text-sm text-gray-800">C</td>
                            <td class="px-4 py-2 text-sm text-gray-800">-</td>
                            <td class="px-4 py-2 text-sm text-gray-800">V</td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-4 py-2 text-sm text-gray-800">Texas - LNG Terminal Houston</td>
                            <td class="px-4 py-2 text-sm text-gray-800">60.00%</td>
                            <td class="px-4 py-2 text-sm text-gray-800">300,000</td>
                            <td class="px-4 py-2 text-sm text-gray-800">-</td>
                            <td class="px-4 py-2 text-sm text-gray-800">-</td>
                            <td class="px-4 py-2 text-sm text-gray-800">G</td>
                            <td class="px-4 py-2 text-sm text-gray-800">-</td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-4 py-2 text-sm text-gray-800">Texas - Southern LLC Houston - Houston Terminal
                            </td>
                            <td class="px-4 py-2 text-sm text-gray-800">100.00%</td>
                            <td class="px-4 py-2 text-sm text-gray-800">150,150</td>
                            <td class="px-4 py-2 text-sm text-gray-800">-</td>
                            <td class="px-4 py-2 text-sm text-gray-800">C</td>
                            <td class="px-4 py-2 text-sm text-gray-800">G</td>
                            <td class="px-4 py-2 text-sm text-gray-800">V</td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-4 py-2 text-sm text-gray-800">Texas - Southern LLC Houston - Dallas Terminal
                            </td>
                            <td class="px-4 py-2 text-sm text-gray-800">100.00%</td>
                            <td class="px-4 py-2 text-sm text-gray-800">25,900</td>
                            <td class="px-4 py-2 text-sm text-gray-800">-</td>
                            <td class="px-4 py-2 text-sm text-gray-800">C</td>
                            <td class="px-4 py-2 text-sm text-gray-800">G</td>
                            <td class="px-4 py-2 text-sm text-gray-800">V</td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-4 py-2 text-sm text-gray-800">Houston - Southern LLC Houston - Veracruz
                                Terminal</td>
                            <td class="px-4 py-2 text-sm text-gray-800">100.00%</td>
                            <td class="px-4 py-2 text-sm text-gray-800">213,100</td>
                            <td class="px-4 py-2 text-sm text-gray-800">-</td>
                            <td class="px-4 py-2 text-sm text-gray-800">C</td>
                            <td class="px-4 py-2 text-sm text-gray-800">-</td>
                            <td class="px-4 py-2 text-sm text-gray-800">V</td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-4 py-2 text-sm text-gray-800">Panama - Terminal Bahia Las Minas</td>
                            <td class="px-4 py-2 text-sm text-gray-800">0.00%</td>
                            <td class="px-4 py-2 text-sm text-gray-800">519,543</td>
                            <td class="px-4 py-2 text-sm text-gray-800">P</td>
                            <td class="px-4 py-2 text-sm text-gray-800">-</td>
                            <td class="px-4 py-2 text-sm text-gray-800">-</td>
                            <td class="px-4 py-2 text-sm text-gray-800">-</td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-4 py-2 text-sm text-gray-800">Panama - Southern LLC Panama</td>
                            <td class="px-4 py-2 text-sm text-gray-800">100.00%</td>
                            <td class="px-4 py-2 text-sm text-gray-800">375,341</td>
                            <td class="px-4 py-2 text-sm text-gray-800">P</td>
                            <td class="px-4 py-2 text-sm text-gray-800">-</td>
                            <td class="px-4 py-2 text-sm text-gray-800">-</td>
                            <td class="px-4 py-2 text-sm text-gray-800">-</td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-4 py-2 text-sm text-gray-800">USA - Southern LLC Freeport - Texas</td>
                            <td class="px-4 py-2 text-sm text-gray-800">50.00%</td>
                            <td class="px-4 py-2 text-sm text-gray-800">101,009</td>
                            <td class="px-4 py-2 text-sm text-gray-800">-</td>
                            <td class="px-4 py-2 text-sm text-gray-800">C</td>
                            <td class="px-4 py-2 text-sm text-gray-800">-</td>
                            <td class="px-4 py-2 text-sm text-gray-800">-</td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-4 py-2 text-sm text-gray-800">USA - Southern LLC Moda Houston</td>
                            <td class="px-4 py-2 text-sm text-gray-800">50.00%</td>
                            <td class="px-4 py-2 text-sm text-gray-800">46,260</td>
                            <td class="px-4 py-2 text-sm text-gray-800">-</td>
                            <td class="px-4 py-2 text-sm text-gray-800">C</td>
                            <td class="px-4 py-2 text-sm text-gray-800">-</td>
                            <td class="px-4 py-2 text-sm text-gray-800">-</td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-4 py-2 text-sm text-gray-800">USA - Southern LLC Plaquemine - Louisiana</td>
                            <td class="px-4 py-2 text-sm text-gray-800">50.00%</td>
                            <td class="px-4 py-2 text-sm text-gray-800">300,120</td>
                            <td class="px-4 py-2 text-sm text-gray-800">P</td>
                            <td class="px-4 py-2 text-sm text-gray-800">C</td>
                            <td class="px-4 py-2 text-sm text-gray-800">-</td>
                            <td class="px-4 py-2 text-sm text-gray-800">-</td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-4 py-2 text-sm text-gray-800">USA - Southern LLC St. Charles - Louisiana</td>
                            <td class="px-4 py-2 text-sm text-gray-800">50.00%</td>
                            <td class="px-4 py-2 text-sm text-gray-800">336,063</td>
                            <td class="px-4 py-2 text-sm text-gray-800">-</td>
                            <td class="px-4 py-2 text-sm text-gray-800">C</td>
                            <td class="px-4 py-2 text-sm text-gray-800">-</td>
                            <td class="px-4 py-2 text-sm text-gray-800">-</td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-4 py-2 text-sm text-gray-800">USA - Southern LLC Terminal Corpus Christi</td>
                            <td class="px-4 py-2 text-sm text-gray-800">100.00%</td>
                            <td class="px-4 py-2 text-sm text-gray-800">143,840</td>
                            <td class="px-4 py-2 text-sm text-gray-800">P</td>
                            <td class="px-4 py-2 text-sm text-gray-800">C</td>
                            <td class="px-4 py-2 text-sm text-gray-800">-</td>
                            <td class="px-4 py-2 text-sm text-gray-800">-</td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-4 py-2 text-sm text-gray-800">USA - Southern LLC Terminal Deer Park (Houston)
                            </td>
                            <td class="px-4 py-2 text-sm text-gray-800">100.00%</td>
                            <td class="px-4 py-2 text-sm text-gray-800">1,282,512</td>
                            <td class="px-4 py-2 text-sm text-gray-800">P</td>
                            <td class="px-4 py-2 text-sm text-gray-800">C</td>
                            <td class="px-4 py-2 text-sm text-gray-800">-</td>
                            <td class="px-4 py-2 text-sm text-gray-800">-</td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-4 py-2 text-sm text-gray-800">USA - Southern LLC Terminal Long Beach</td>
                            <td class="px-4 py-2 text-sm text-gray-800">100.00%</td>
                            <td class="px-4 py-2 text-sm text-gray-800">54,988</td>
                            <td class="px-4 py-2 text-sm text-gray-800">P</td>
                            <td class="px-4 py-2 text-sm text-gray-800">C</td>
                            <td class="px-4 py-2 text-sm text-gray-800">-</td>
                            <td class="px-4 py-2 text-sm text-gray-800">V</td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-4 py-2 text-sm text-gray-800">USA - Southern LLC Terminal Los Angeles</td>
                            <td class="px-4 py-2 text-sm text-gray-800">100.00%</td>
                            <td class="px-4 py-2 text-sm text-gray-800">379,789</td>
                            <td class="px-4 py-2 text-sm text-gray-800">P</td>
                            <td class="px-4 py-2 text-sm text-gray-800">C</td>
                            <td class="px-4 py-2 text-sm text-gray-800">-</td>
                            <td class="px-4 py-2 text-sm text-gray-800">V</td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-4 py-2 text-sm text-gray-800">USA - Southern LLC Terminal Savannah</td>
                            <td class="px-4 py-2 text-sm text-gray-800">100.00%</td>
                            <td class="px-4 py-2 text-sm text-gray-800">250,566</td>
                            <td class="px-4 py-2 text-sm text-gray-800">P</td>
                            <td class="px-4 py-2 text-sm text-gray-800">C</td>
                            <td class="px-4 py-2 text-sm text-gray-800">-</td>
                            <td class="px-4 py-2 text-sm text-gray-800">V</td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-4 py-2 text-sm text-gray-800">Venezuela - Southern LLC Venezuela - Puerto
                                Cabello Terminal</td>
                            <td class="px-4 py-2 text-sm text-gray-800">100.00%</td>
                            <td class="px-4 py-2 text-sm text-gray-800">124,960</td>
                            <td class="px-4 py-2 text-sm text-gray-800">-</td>
                            <td class="px-4 py-2 text-sm text-gray-800">C</td>
                            <td class="px-4 py-2 text-sm text-gray-800">-</td>
                            <td class="px-4 py-2 text-sm text-gray-800">V</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </section>

    <!-- Fixed CTA Button -->
    <a href="../Contact Us/index.html"
        class="fixed bottom-6 right-6 md:bottom-8 md:right-8 z-50 bg-yellow-500 hover:bg-yellow-600 text-white font-semibold px-5 py-3 rounded-full shadow-lg transition-all duration-300 flex items-center space-x-2">
        <span>For Port Access And Entrance Certificate</span>
        <i class="fas fa-arrow-right"></i>
    </a>

    <!-- Back to Top Button -->
    <!-- <a href="#" id="back-to-top"
        class="fixed bottom-8 right-8 bg-yellow-500 hover:bg-yellow-400 text-white p-4 rounded-full shadow-lg flex items-center justify-center animate-bounce-up z-50 transition-colors duration-300">
     
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
            stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
        </svg>
    </a> -->

    <!-- Tailwind Custom Animation in style -->
    <!-- <style>
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
    </style> -->



    <?php include 'inc/footer.php'; ?>


</body>

<script>
    const btn = document.getElementById('menu-btn');
    const menu = document.getElementById('mobile-menu');

    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });

    tailwind.config = {
        theme: {
            extend: {
                keyframes: {
                    float: {
                        '0%, 100%': { transform: 'translateY(0)' },
                        '50%': { transform: 'translateY(-6px)' },
                    },
                },
                animation: {
                    float: 'float 1s ease-in-out infinite',
                },
            },
        },
    }
</script>

</html>