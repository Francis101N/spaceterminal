<header class="bg-secondary text-sm">
    <div
      class="max-w-7xl mx-auto px-6 py-2 flex flex-col md:flex-row items-center justify-center md:space-x-6 space-y-2 md:space-y-0">

      <!-- Flags -->
      <div class="flex items-center justify-center space-x-3 w-full md:w-auto">
        <img src="assets/images/us-flag.png" alt="United States" class="w-5 h-4 object-cover">
        <img src="assets/images/uk-flag.png" alt="United Kingdom" class="w-5 h-4 object-cover">
        <img src="assets/images/germany.png" alt="Germany" class="w-5 h-4 object-cover">
        <img src="assets/images/canada.png" alt="Canada" class="w-5 h-4 object-cover">
      </div>

      <!-- Email -->
      <div class="flex items-center justify-center space-x-2 text-black font-bold w-full md:w-auto">
        <!-- Email Icon -->
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-black font-semibold" fill="none" viewBox="0 0 24 24"
          stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M3 8l9 6 9-6M4 6h16a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V8a2 2 0 012-2z" />
        </svg>

        <a href="mailto:spaceterminal@gmail.com" class="hover:underline">
          Email: spaceterminal@gmail.com
        </a>
      </div>

    </div>
  </header>

  <nav class="bg-white shadow sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6">
      <div class="flex justify-between items-center h-16">

        <!-- Logo -->
        <div class="flex items-center space-x-2">
          <img src="assets/images/logo-removebg-preview.png" alt="Space Terminal Logo" class="h-28 w-44">
        </div>

        <!-- Desktop Menu -->
        <div class="hidden md:flex items-center space-x-8 font-bold text-gray-700">
          <a href="index" class="hover:text-primary">Home</a>
          <a href="about" class="hover:text-primary">About Us</a>
          <a href="services" class="hover:text-primary">Our Services</a>
          <a href="terminals" class="hover:text-primary">Terminals</a>
          <a href="contact" class="hover:text-primary">Contact Us</a>
        </div>

        <!-- Mobile Menu Button -->
        <div class="md:hidden">
          <button id="menu-btn" class="text-gray-700 focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>

      </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-white border-t">
      <div class="flex flex-col items-center py-4 space-y-4 font-medium text-gray-700">
        <a href="index" class="hover:text-primary">Home</a>
        <a href="about" class="hover:text-primary">About Us</a>
        <a href="services" class="hover:text-primary">Our Services</a>
        <a href="terminals" class="hover:text-primary">Terminals</a>
        <a href="contact" class="hover:text-primary">Contact Us</a>
      </div>
    </div>
  </nav>