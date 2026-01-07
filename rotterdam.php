<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rotterdam | Space Terminal</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.5.1/css/all.min.css">
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<style>
    .terminal-slide {
        opacity: 0;
        transform: translateX(-80px);
        transition: opacity 1s ease, transform 1s ease;
    }

    .terminal-slide.show {
        opacity: 1;
        transform: translateX(0);
    }

    .services-slide {
        opacity: 0;
        transform: translateY(60px);
        transition: opacity 1s ease, transform 1s ease;
    }

    .services-slide.show {
        opacity: 1;
        transform: translateY(0);
    }
</style>

<body>
    <?php include 'inc/header.php'; ?>

    <section class="relative bg-cover bg-center h-[500px]" style="background-image: url('assets/images/hero-bg.jpg');">
        <!-- Gradient Overlay -->
        <div class="absolute inset-0 bg-gradient-to-r from-black/60 to-black/30"></div>

        <div class="relative max-w-7xl mx-auto h-full flex flex-col justify-center items-center text-center px-6">
            <!-- Hero Content -->
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">Terminals in Rotterdam </h2>
            <p class="text-white text-base md:text-lg max-w-2xl">
                We “SPACE TERMINAL LLC” Tank farm storage have premier service provider to the liquid bulk chemical
                industry for many years…
            </p>

            <!-- Highlight Line -->
            <div class="w-24 h-1 bg-yellow-400 mt-6"></div>
        </div>
    </section>

    <section class="py-20 bg-gray-50 overflow-hidden">
        <div class="max-w-7xl mx-auto px-6">

            <div class="terminal-slide flex flex-col lg:flex-row gap-12 items-center">

                <!-- Image -->
                <div class="w-full lg:w-1/2">
                    <img src="assets/images/tf3.jpg" alt="Terminal Rotterdam"
                        class="w-full h-[420px] object-cover rounded-xl shadow-xl">
                </div>

                <!-- Content -->
                <div class="w-full lg:w-1/2 space-y-5">
                    <h2 class="text-3xl md:text-4xl font-bold text-[#0d314d] uppercase">
                        Terminals in Rotterdam
                    </h2>

                    <p class="text-gray-700 leading-relaxed">
                        At <strong> <b>SPACE TERMINAL</b> LLC</strong> Tank farm storage and transportation services,
                        we take immense pride in providing top-notch terminals for fuel and energy products
                        to clients worldwide.
                    </p>

                    <p class="text-gray-700 leading-relaxed">
                        Our operations comply with international standards, supported by a
                        stringent safety management system audited annually by authorities.
                    </p>

                    <p class="text-gray-700 leading-relaxed">
                        Located in the Rotterdam port, our tank farms feature multi-purpose
                        distillation units with a total capacity exceeding
                        <strong>2,000,000 tons</strong>.
                    </p>

                    <p class="text-gray-700 leading-relaxed">
                        Parcel sizes range from 1,000 to 500,000 tons, offering flexibility
                        and efficient logistics management.
                    </p>

                    <a href="../Contact Us/index.html" class="inline-block mt-6 px-8 py-3 bg-[#0d314d] text-white rounded-lg font-semibold
          hover:bg-[#13406b] transition duration-300">
                        Contact Us
                    </a>
                </div>

            </div>

        </div>
    </section>

    <section class="location p-5">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9836.564011567032!2d4.134963265228138!3d51.949620132871125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c452b496b8fa23%3A0xa8437a4a2a91a73f!2sTeam%20Terminal%20BV!5e0!3m2!1sen!2sng!4v1690731281678!5m2!1sen!2sng"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <section class="py-15 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-6">

    <div class="services-slide bg-gray-50 rounded-2xl shadow-xl p-10">

      <h2 class="text-3xl md:text-4xl font-bold text-[#0d314d] mb-8">
        Insights
      </h2>

      <ul class="space-y-4">
        <li class="flex items-start gap-3">
          <span class="mt-1 w-2.5 h-2.5 bg-[#eab308] rounded-full flex-shrink-0"></span>
          <p class="text-gray-700 leading-relaxed">
            Linked to the North American rail network for distribution throughout the United States,
            Canada and Rotterdam
          </p>
        </li>

        <li class="flex items-start gap-3">
          <span class="mt-1 w-2.5 h-2.5 bg-[#eab308] rounded-full flex-shrink-0"></span>
          <p class="text-gray-700 leading-relaxed">
            Multiple stainless steel rail header systems enabling the loading and unloading
            of up to 110 rail cars on eight tracks
          </p>
        </li>

        <li class="flex items-start gap-3">
          <span class="mt-1 w-2.5 h-2.5 bg-[#eab308] rounded-full flex-shrink-0"></span>
          <p class="text-gray-700 leading-relaxed">
            Direct transfer from rail cars to ships or barges,
            at rates up to 500 cbm (3,500 bbls) per hour
          </p>
        </li>

        <li class="flex items-start gap-3">
          <span class="mt-1 w-2.5 h-2.5 bg-[#eab308] rounded-full flex-shrink-0"></span>
          <p class="text-gray-700 leading-relaxed">
            14 truck stations with multiple load-on-scale racks located throughout the terminal
          </p>
        </li>

        <li class="flex items-start gap-3">
          <span class="mt-1 w-2.5 h-2.5 bg-[#eab308] rounded-full flex-shrink-0"></span>
          <p class="text-gray-700 leading-relaxed">
            Automated scale system controls truck loading process
            through computerized control features
          </p>
        </li>

        <li class="flex items-start gap-3">
          <span class="mt-1 w-2.5 h-2.5 bg-[#eab308] rounded-full flex-shrink-0"></span>
          <p class="text-gray-700 leading-relaxed">
            Trans-loading services through stainless steel transfer system
          </p>
        </li>
      </ul>

    </div>

  </div>
</section>


    <section class="bg-gray-50 py-10">
        <div class="max-w-7xl mx-auto px-20">

            <h1 class="text-4xl font-bold text-[#0d314d] mb-4">
                Tank Terminals
            </h1>

            <p class="text-gray-700 mb-6">
                Location is everything in our business. Around the world, we connect the supply
                of and demand for vital products and resources. Our global network of terminals
                determines our service towards our customers.
            </p>
            <hr>
            <br>
            <p class="text-gray-700 mb-2">
                Below you will find an overview of Southern Logistic's global network of tank terminals.
            </p>

            <p class="text-yellow-700 font-semibold mb-2">
                Be aware of cybercrime and storage spoofing.
            </p>
            <br>

            <p><b>In the overview below, you can see which products can be stored at our terminals.</b></p>
            <p class="text-gray-700 mb-8">
                P = Petroleum, C = Chemicals, G = Gases, V = Vegetable Oils
            </p>

            <img src="assets/images/map.png" alt="Map" class="w-full rounded-lg shadow mb-10">

            <!-- TABLE -->
           <div class="overflow-x-auto bg-white shadow-lg rounded-xl">
  <table class="min-w-[1100px] w-full text-sm border-collapse">

    <!-- Table Head -->
    <thead class="bg-[#0d314d] text-white">
      <tr>
        <th class="px-4 py-3 text-left font-semibold">Location</th>
        <th class="px-4 py-3 font-semibold">Share</th>
        <th class="px-4 py-3 font-semibold">Capacity (cbm)</th>
        <th class="px-4 py-3 font-semibold">Petroleum</th>
        <th class="px-4 py-3 font-semibold">Chemicals</th>
        <th class="px-4 py-3 font-semibold">Gases</th>
        <th class="px-4 py-3 font-semibold">Vegoils</th>
      </tr>
    </thead>

    <!-- Table Body -->
    <tbody class="text-gray-700 divide-y">

      <tr class="hover:bg-gray-50">
        <td class="px-4 py-2">Brazil - Southern LLC Brazil - Alemoa Terminal</td>
        <td class="px-4 py-2">100.00%</td>
        <td class="px-4 py-2">276,820</td>
        <td>P</td><td>C</td><td>-</td><td>V</td>
      </tr>

      <tr class="hover:bg-gray-50">
        <td class="px-4 py-2">Brazil - Southern LLC Brazil - Aratu Terminal</td>
        <td>100.00%</td><td>108,130</td><td>P</td><td>C</td><td>-</td><td>V</td>
      </tr>

      <tr class="hover:bg-gray-50">
        <td class="px-4 py-2">Canada - Ridley Island Propane Export Terminal (RIPET)</td>
        <td>30.00%</td><td>96,000</td><td>-</td><td>-</td><td>G</td><td>-</td>
      </tr>

      <tr class="hover:bg-gray-50">
        <td class="px-4 py-2">Colombia - SPEC LNG</td>
        <td>49.00%</td><td>170,000</td><td>-</td><td>-</td><td>G</td><td>-</td>
      </tr>

      <tr class="hover:bg-gray-50">
        <td class="px-4 py-2">Colombia - Southern LLC Colombia - Barranquilla Terminal</td>
        <td>100.00%</td><td>46,521</td><td>P</td><td>C</td><td>-</td><td>V</td>
      </tr>

      <tr class="hover:bg-gray-50">
        <td class="px-4 py-2">Colombia - Southern LLC Colombia - Cartagena Terminal</td>
        <td>100.00%</td><td>26,629</td><td>P</td><td>C</td><td>-</td><td>V</td>
      </tr>

      <tr class="hover:bg-gray-50">
        <td class="px-4 py-2">UAE - LNG Terminal Fujariah</td>
        <td>60.00%</td><td>300,000</td><td>-</td><td>-</td><td>G</td><td>-</td>
      </tr>

      <tr class="hover:bg-gray-50">
        <td class="px-4 py-2">UAE - Southern LLC Fujariah - Fujariah Terminal</td>
        <td>100.00%</td><td>150,150</td><td>-</td><td>C</td><td>G</td><td>V</td>
      </tr>

      <tr class="hover:bg-gray-50">
        <td class="px-4 py-2">UAE - Southern LLC Fujariah - Dallas Terminal</td>
        <td>100.00%</td><td>25,900</td><td>-</td><td>C</td><td>G</td><td>V</td>
      </tr>

      <tr class="hover:bg-gray-50">
        <td class="px-4 py-2">Fujariah - Southern LLC Fujariah - Veracruz Terminal</td>
        <td>100.00%</td><td>213,100</td><td>-</td><td>C</td><td>-</td><td>V</td>
      </tr>

      <tr class="hover:bg-gray-50">
        <td class="px-4 py-2">Panama - Terminal Bahia Las Minas</td>
        <td>0.00%</td><td>519,543</td><td>P</td><td>-</td><td>-</td><td>-</td>
      </tr>

      <tr class="hover:bg-gray-50">
        <td class="px-4 py-2">Panama - Southern LLC Panama</td>
        <td>100.00%</td><td>375,341</td><td>P</td><td>-</td><td>-</td><td>-</td>
      </tr>

      <tr class="hover:bg-gray-50">
        <td class="px-4 py-2">USA - Southern LLC Freeport - UAE</td>
        <td>50.00%</td><td>101,009</td><td>-</td><td>C</td><td>-</td><td>-</td>
      </tr>

      <tr class="hover:bg-gray-50">
        <td class="px-4 py-2">USA - Southern LLC Moda Fujariah</td>
        <td>50.00%</td><td>46,260</td><td>-</td><td>C</td><td>-</td><td>-</td>
      </tr>

      <tr class="hover:bg-gray-50">
        <td class="px-4 py-2">USA - Southern LLC Plaquemine - Louisiana</td>
        <td>50.00%</td><td>300,120</td><td>P</td><td>C</td><td>-</td><td>-</td>
      </tr>

      <tr class="hover:bg-gray-50">
        <td class="px-4 py-2">USA - Southern LLC St. Charles - Louisiana</td>
        <td>50.00%</td><td>336,063</td><td>-</td><td>C</td><td>-</td><td>-</td>
      </tr>

      <tr class="hover:bg-gray-50">
        <td class="px-4 py-2">USA - Southern LLC Terminal Corpus Christi</td>
        <td>100.00%</td><td>143,840</td><td>P</td><td>C</td><td>-</td><td>-</td>
      </tr>

      <tr class="hover:bg-gray-50">
        <td class="px-4 py-2">USA - Southern LLC Terminal Deer Park (Fujariah)</td>
        <td>100.00%</td><td>1,282,512</td><td>P</td><td>C</td><td>-</td><td>-</td>
      </tr>

      <tr class="hover:bg-gray-50">
        <td class="px-4 py-2">USA - Southern LLC Terminal Long Beach</td>
        <td>100.00%</td><td>54,988</td><td>P</td><td>C</td><td>-</td><td>V</td>
      </tr>

      <tr class="hover:bg-gray-50">
        <td class="px-4 py-2">USA - Southern LLC Terminal Los Angeles</td>
        <td>100.00%</td><td>379,789</td><td>P</td><td>C</td><td>-</td><td>V</td>
      </tr>

      <tr class="hover:bg-gray-50">
        <td class="px-4 py-2">USA - Southern LLC Terminal Savannah</td>
        <td>100.00%</td><td>250,566</td><td>P</td><td>C</td><td>-</td><td>V</td>
      </tr>

      <tr class="hover:bg-gray-50">
        <td class="px-4 py-2">Venezuela - Southern LLC Venezuela - Puerto Cabello Terminal</td>
        <td>100.00%</td><td>124,960</td><td>-</td><td>C</td><td>-</td><td>V</td>
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


    <?php include 'inc/footer.php'; ?>

</body>


<script>
    document.addEventListener("DOMContentLoaded", () => {
        const slideEl = document.querySelector(".terminal-slide");

        const observer = new IntersectionObserver(
            ([entry]) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("show");
                }
            },
            { threshold: 0.2 }
        );

        observer.observe(slideEl);
    });

    document.addEventListener("DOMContentLoaded", () => {
        const serviceBox = document.querySelector(".services-slide");

        const observer = new IntersectionObserver(
            ([entry]) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("show");
                }
            },
            { threshold: 0.25 }
        );

        observer.observe(serviceBox);
    });
</script>

</html>