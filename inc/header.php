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