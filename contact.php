<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us | Space Terminal</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.5.1/css/all.min.css">
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<style>
    .space {
        display: flex;
        justify-content: space-around;
    }
</style>

<body>
    <?php include 'inc/header.php'; ?>

    <section class="relative bg-cover bg-center h-[500px]" style="background-image: url('assets/images/hero-bg.jpg');">
        <!-- Gradient Overlay -->
        <div class="absolute inset-0 bg-gradient-to-r from-black/60 to-black/30"></div>

        <div class="relative max-w-7xl mx-auto h-full flex flex-col justify-center items-center text-center px-6">
            <!-- Hero Content -->
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">Contact Us</h2>
            <p class="text-white text-base md:text-lg max-w-2xl">
                Curious about the tank storage solutions Space Terminal can offer for your fluids? Get in touch with
                us our experienced team is ready to answer your questions and provide personalized advice.

                <!-- Highlight Line -->
            <div class="w-24 h-1 bg-yellow-400 mt-6"></div>
        </div>
    </section>

    <!-- Include AOS CSS in your <head> -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <section class="contact-us py-16 bg-gray-50">
        <div class="max-w-5xl mx-auto px-6 space-y-12">

            <!-- Header -->
            <div class="text-center" data-aos="fade-down" data-aos-duration="1000">
                <h2 class="text-3xl md:text-4xl font-bold text-[#0d314d]">___ The Industry Leaders</h2>
                <p class="text-gray-700 text-lg mt-2">With Experience and a Professional Workforce</p>
            </div>

            <!-- Contact Info -->
            <div class="space-y-6">
                <!-- Location 1 -->
                <div class="flex flex-col sm:flex-row sm:items-center sm:gap-4 gap-2 bg-white p-4 rounded-lg shadow-md"
                    data-aos="fade-right" data-aos-duration="1000">
                    <i class="fa fa-home text-2xl text-[#0d314d] flex-shrink-0"></i>
                    <div>
                        <h5 class="font-semibold text-gray-900">59M2+8HJ - Al Soudah - Fujairah</h5>
                        <p class="text-gray-600">United Arab Emirates</p>
                    </div>
                </div>

                <!-- Location 2 -->
                <div class="flex flex-col sm:flex-row sm:items-center sm:gap-4 gap-2 bg-white p-4 rounded-lg shadow-md"
                    data-aos="fade-right" data-aos-duration="1200">
                    <i class="fa fa-home text-2xl text-[#0d314d] flex-shrink-0"></i>
                    <div>
                        <h5 class="font-semibold text-gray-900">Oude Maasweg 2B, 3197 KJ Botlek</h5>
                        <p class="text-gray-600">Rotterdam, Netherlands</p>
                    </div>
                </div>

                <!-- Location 3 -->
                <div class="flex flex-col sm:flex-row sm:items-center sm:gap-4 gap-2 bg-white p-4 rounded-lg shadow-md"
                    data-aos="fade-right" data-aos-duration="1400">
                    <i class="fa fa-home text-2xl text-[#0d314d] flex-shrink-0"></i>
                    <div>
                        <h5 class="font-semibold text-gray-900">455-499 Turin, Houston</h5>
                        <p class="text-gray-600">TX 77017 USA</p>
                    </div>
                </div>

                <!-- Email -->
                <div class="flex flex-col sm:flex-row sm:items-center sm:gap-4 gap-2 bg-white p-4 rounded-lg shadow-md"
                    data-aos="fade-right" data-aos-duration="1600">
                    <i class="fa fa-envelope text-2xl text-[#0d314d] flex-shrink-0"></i>
                    <div>
                        <h5 class="font-semibold text-gray-900">info@southernlogisticsllc.com</h5>
                        <p class="text-gray-600">Email us your query</p>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="bg-white shadow-lg rounded-lg p-8 max-w-3xl mx-auto" data-aos="fade-up"
                data-aos-duration="1000">
                <h3 class="text-2xl font-bold text-[#0d314d] mb-6 text-center">Send Us a Message</h3>
                <form action="email.php" method="post" class="space-y-4">
                    <input type="text" name="name" placeholder="Enter your Name" required
                        class="w-full border border-gray-300 rounded-md p-3 focus:ring-2 focus:ring-[#0d314d] focus:outline-none">
                    <input type="email" name="email" placeholder="Enter Email Address" required
                        class="w-full border border-gray-300 rounded-md p-3 focus:ring-2 focus:ring-[#0d314d] focus:outline-none">
                    <input type="text" name="subject" placeholder="Enter your Subject" required
                        class="w-full border border-gray-300 rounded-md p-3 focus:ring-2 focus:ring-[#0d314d] focus:outline-none">
                    <textarea name="message" rows="6" placeholder="Message" required
                        class="w-full border border-gray-300 rounded-md p-3 focus:ring-2 focus:ring-[#0d314d] focus:outline-none"></textarea>
                    <button type="submit"
                        class="w-full bg-[#0d314d] text-white font-bold py-3 rounded-md hover:bg-[#13406b] transition-colors duration-300">
                        Send Message
                    </button>
                </form>
            </div>

        </div>
    </section>

    <section class="location p-5">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3580.6687542570717!2d-81.71577682522566!3d26.17491529140871!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88dae29f55b43f59%3A0x24535b41cd5a45a0!2s5278%20Golden%20Gate%20Pkwy%2C%20Naples%2C%20FL%2034116%2C%20USA!5e0!3m2!1sen!2sng!4v1690572551329!5m2!1sen!2sng"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>

    </section><br><br>

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
<!-- Include AOS JS before closing </body> -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        once: true, // animate only once when scrolling
        easing: 'ease-out-cubic',
        duration: 1000
    });
</script>

</html>