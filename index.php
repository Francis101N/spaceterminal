<?php
// header("Refresh:6; url=home");

// Database connection
$host = 'localhost';
$db = 'spaceterminal';
$user = 'spaceterminal';
$pass = 'SPACEterminal1972$$$';

try {
  $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  die("DB Connection failed: " . $e->getMessage());
}

// Generate AES token
function generateAESToken($data)
{
  $secret_key = "my_secret_key_123456";
  $secret_iv = "my_secret_iv_123456";

  $key = hash('sha256', $secret_key);
  $iv = substr(hash('sha256', $secret_iv), 0, 16);

  return base64_encode(openssl_encrypt($data, "AES-256-CBC", $key, 0, $iv));
}

// Get IP address
function getUserIP()
{
  if (!empty($_SERVER['HTTP_CLIENT_IP']))
    return $_SERVER['HTTP_CLIENT_IP'];
  if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    return explode(',', $_SERVER['HTTP_X_FORWARDED_FOR'])[0];
  return $_SERVER['REMOTE_ADDR'];
}

// Get Operating System
function getUserOS()
{
  $userAgent = $_SERVER['HTTP_USER_AGENT'];
  $osArray = [
    '/windows nt 10/i' => 'Windows 10',
    '/windows nt 6.3/i' => 'Windows 8.1',
    '/windows nt 6.2/i' => 'Windows 8',
    '/windows nt 6.1/i' => 'Windows 7',
    '/macintosh|mac os x/i' => 'Mac OS X',
    '/linux/i' => 'Linux',
    '/iphone/i' => 'iPhone',
    '/android/i' => 'Android',
    '/ipad/i' => 'iPad'
  ];
  foreach ($osArray as $regex => $value) {
    if (preg_match($regex, $userAgent))
      return $value;
  }
  return "Unknown OS";
}

// Get Browser
function getUserBrowser()
{
  $userAgent = $_SERVER['HTTP_USER_AGENT'];
  $browsers = [
    '/msie/i' => 'Internet Explorer',
    '/firefox/i' => 'Firefox',
    '/chrome/i' => 'Chrome',
    '/safari/i' => 'Safari',
    '/edge/i' => 'Edge',
    '/opera/i' => 'Opera',
    '/mobile/i' => 'Mobile Browser'
  ];
  foreach ($browsers as $regex => $value) {
    if (preg_match($regex, $userAgent))
      return $value;
  }
  return "Unknown Browser";
}

// Get Location using ip-api
function getLocationData($ip)
{
  $url = "http://ip-api.com/json/{$ip}?fields=status,country,regionName,city,query";
  $response = @file_get_contents($url);
  if ($response) {
    $data = json_decode($response, true);
    if ($data['status'] === 'success') {
      return [
        'ip' => $data['query'],
        'country' => $data['country'],
        'region' => $data['regionName'],
        'city' => $data['city']
      ];
    }
  }
  return [
    'ip' => $ip,
    'country' => 'Unknown',
    'region' => 'Unknown',
    'city' => 'Unknown'
  ];
}

// Gather all info
$ip = getUserIP();
$os = getUserOS();
$browser = getUserBrowser();
$location = getLocationData($ip);
$country = $location['country'];
$region = $location['region'];
$city = $location['city'];

// Check if IP exists
$stmt = $pdo->prepare("SELECT COUNT(*) FROM visitors WHERE ip_address = ?");
$stmt->execute([$ip]);
$count = $stmt->fetchColumn();

if ($count == 0) {
  // Generate unique AES token for this visitor
  $token = generateAESToken($ip . time());

  // Insert new visitor
  $insert = $pdo->prepare("INSERT INTO visitors (ip_address, operating_system, country, `state/region`, city, browser, token) VALUES (?, ?, ?, ?, ?, ?, ?)");
  $insert->execute([$ip, $os, $country, $region, $city, $browser, $token]);

  // Send email notification
  require_once('./PHPMailer/PHPMailerAutoload.php');
  $mail = new PHPMailer(true);

  try {
    $mail->isSMTP();
    $mail->Host = 'mail.techbyfrancis.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'portfolio@techbyfrancis.com';
    $mail->Password = 'TECHbyfrancis101$$';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('portfolio@techbyfrancis.com', 'Space Terminal Notification');
    $mail->addAddress('francisnwankwo1972@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = 'New Unique Visitor Alert';
    $mail->Body = "
            <h3>New Unique Visitor</h3>
            <p><strong>IP Address:</strong> $ip</p>
            <p><strong>Operating System:</strong> $os</p>
            <p><strong>Browser:</strong> $browser</p>
            <p><strong>Country:</strong> $country</p>
            <p><strong>Region:</strong> $region</p>
            <p><strong>City:</strong> $city</p>
            <p><small>Time: " . date('Y-m-d H:i:s') . "</small></p>
        ";

    $mail->send();
  } catch (Exception $e) {
    // Handle email error silently
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home | Space Terminal</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.5.1/css/all.min.css">
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- AOS CSS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>
<style>
  h1,
  h2,
  h3,
  h4,
  h5,
  h6,
  p {
    font-family: Inter;
    font-style: Inter;
  }

  .tank-storage-section {
    padding: 80px 0;
    background: #f5f5f5;
  }

  .tank-storage-section .container {
    position: relative;
    max-width: 1200px;
    margin: 0 auto;
  }

  .image-wrapper {
    width: 100%;
  }

  .image-wrapper img {
    width: 100%;
    max-height: 600px;
    /* limits height */
    height: auto;
    /* maintain aspect ratio */
    object-fit: cover;
    /* fills container nicely without distortion */
    display: block;
  }

  /* Floating content */
  .floating-block {
    position: absolute;
    bottom: -70px;
    /* Pulls it up from below */
    left: 50%;
    transform: translateX(-50%);
    background: #ffffff;
    padding: 40px;
    max-width: 700px;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
  }

  .floating-block h2 {
    font-size: 35px;
    margin-bottom: 15px;
    font-weight: bolder;
    color: #0d314d;

  }

  .floating-block {
    font-size: 20px;
  }

  @media (max-width: 768px) {
    .floating-block {
      position: relative;
      bottom: 0;
      left: 0;
      transform: none;
      margin: 20px;
    }
  }
</style>

<body>

  <!-- Welcome Popup -->

  <?php include 'inc/header.php'; ?>

  <div id="welcomePopup"
    class="fixed inset-0 bg-black/50 flex items-center justify-center z-50 opacity-0 pointer-events-none transition-opacity duration-500">

    <!-- Popup Content -->
    <div class="bg-white shadow-1xl p-8 max-w-sm w-full text-center 
         rounded-2xl 
         transform -translate-y-10 opacity-0 transition-all duration-500">


      <!-- Logo -->
      <img src="assets/images/logo-removebg-preview.png" alt="Trust Vault Global Logo" class="mx-auto h-26 w-44 mb-3">

      <!-- Heading -->
      <h2 class="text-2xl md:text-3xl font-bold mb-2">
        <span class="text-black">Welcome to</span>
        <span class="text-yellow-500">SPACE TERMINAL</span>
      </h2>

      <!-- Description -->
      <p class="text-black mb-4">
        Your trusted partner in tank farm storage and global logistics solutions.
      </p>

      <!-- CTA Button -->
      <button id="closePopup"
        class="bg-yellow-500 hover:bg-yellow-400 text-white font-semibold px-6 py-2 rounded-full shadow-md inline-flex items-center justify-center transition-all duration-300 transform hover:scale-105">
        GET STARTED <i class="fa-solid fa-door-open ml-2"></i>
      </button>

    </div>
  </div>

  <!-- Tailwind + Custom Animation JS -->
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const popup = document.getElementById('welcomePopup');
      const content = popup.querySelector('div');
      const closeBtn = document.getElementById('closePopup');

      // Show popup with animation
      setTimeout(() => {
        popup.classList.remove('opacity-0', 'pointer-events-none');
        content.classList.remove('-translate-y-10', 'opacity-0');
        content.classList.add('translate-y-0', 'opacity-100');
      }, 500);

      // Close popup
      closeBtn.addEventListener('click', () => {
        content.classList.add('-translate-y-10', 'opacity-0');
        popup.classList.add('opacity-0', 'pointer-events-none');
      });
    });
  </script>

  <style>
    /* Optional: Smooth fade-in of backdrop */
    #welcomePopup {
      transition: opacity 0.5s ease;
    }
  </style>


  <main class="relative h-[85vh] flex items-center justify-center text-center overflow-hidden">

    <!-- Background Video -->
    <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover">
      <source src="assets/images/tff.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>

    <!-- Dark Overlay -->
    <div class="absolute inset-0 bg-black bg-opacity-60"></div>

    <!-- Content -->
    <div class="relative z-10 max-w-4xl px-6 text-white">
      <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-4">
        DISCOVER SPACE TERMINAL
      </h1>

      <h3 class="text-lg md:text-xl mb-8 text-gray-200">
        Your trusted partner in tank farm storage and global logistics solutions.
      </h3>

      <a href="#"
        class="inline-block bg-[#0d314d] hover:bg-[#0a273d] text-white font-semibold px-8 py-3 rounded transition duration-300">
        Get a Quote
      </a>

    </div>

  </main>

  <section class="flex flex-col sm:flex-row justify-center items-center gap-4 sm:gap-6 py-8 bg-gray-100">

    <a href="#" class="bg-[#0a273d] text-white font-semibold px-6 py-3 rounded text-center
            hover:animate-float transition duration-300 w-full sm:w-auto">
      Tank Storage
    </a>

    <a href="#" class="bg-[#0a273d] text-white font-semibold px-6 py-3 rounded text-center
            hover:animate-float transition duration-300 w-full sm:w-auto">
      Innovation
    </a>

    <a href="#" class="bg-[#0a273d] text-white font-semibold px-6 py-3 rounded text-center
            hover:animate-float transition duration-300 w-full sm:w-auto">
      Sustainability
    </a>

  </section>


  <section class="bg-gray-50 py-16">
    <div class="max-w-7xl mx-auto px-6 flex flex-col lg:flex-row items-center gap-12">

      <!-- Text Content -->
      <div class="lg:w-1/2" data-aos="fade-right">
        <h1 class="text-3xl md:text-4xl font-bold mb-6 text-gray-900">
          About SPACE TERMINAL
        </h1>

        <p class="text-gray-700 text-base md:text-lg leading-relaxed">
          Space Terminal is strategically located in Florida. Its international distribution center offers direct access
          to the open sea and the European hinterland, providing a unique advantage for producing and distributing
          finished and intermediate products such as LPG, gasoline, diesel, and kerosene. Florida serves as a hub for
          petrochemical activities and is a key driver of the Dutch economy.
        </p>

        <p class="text-gray-700 text-base md:text-lg leading-relaxed mt-4">
          Space Terminal’s tank farm storage operations span Florida Port, Houston Port, Novorossiysk Port, Qingdao
          Port, and many other global locations. Our management team oversees all essential documentation for oil
          companies regarding the storage and handling of their products.
        </p>

        <p class="text-gray-700 text-base md:text-lg leading-relaxed mt-4">
          Our tank farms are primarily above ground, with some underground facilities, enabling efficient discharges
          into heavy-duty oil tankers and pipelines. We provide extensive industrial infrastructure for storing oil and
          petroleum products before they are transported to end users or moved to other storage facilities.
        </p>
      </div>

      <!-- Image Content -->
      <div class="lg:w-1/2 flex justify-center" data-aos="fade-up">
        <img src="assets/images/banner-wallpaper.jpg" alt="Space Terminal"
          class="w-full h-auto rounded shadow-lg object-cover">
      </div>

    </div>
  </section>

  <article class="flex flex-wrap justify-between max-w-7xl mx-auto px-6 py-12 gap-6">
    <!-- Item 1 -->
    <div
      class="bg-[#0a273d] text-white rounded-lg p-8 flex flex-col items-center flex-1 min-w-[180px] hover:animate-float transition-all duration-300">
      <p class="text-3xl font-bold counter" data-target="150">0</p>
      <p class="text-sm mt-2 text-center">TANK STORAGE</p>
    </div>

    <!-- Item 2 -->
    <div
      class="bg-[#0a273d] text-white rounded-lg p-8 flex flex-col items-center flex-1 min-w-[180px] hover:animate-float transition-all duration-300">
      <p class="text-3xl font-bold counter" data-target="5000">0</p>
      <p class="text-sm mt-2 text-center">MT 12 BARGE CARGO TANKS</p>
    </div>

    <!-- Item 3 -->
    <div
      class="bg-[#0a273d] text-white rounded-lg p-8 flex flex-col items-center flex-1 min-w-[180px] hover:animate-float transition-all duration-300">
      <p class="text-3xl font-bold counter" data-target="100000">0</p>
      <p class="text-sm mt-2 text-center">TANK SIZE FROM 2,000 to 100,000</p>
    </div>

    <!-- Item 4 -->
    <div
      class="bg-[#0a273d] text-white rounded-lg p-8 flex flex-col items-center flex-1 min-w-[180px] hover:animate-float transition-all duration-300">
      <p class="text-3xl font-bold counter" data-target="3960423">0</p>
      <p class="text-sm mt-2 text-center">CAPACITY</p>
    </div>
  </article>

  <section class="bg-gray-50 py-16">
    <div class="max-w-7xl mx-auto px-6 flex flex-col lg:flex-row items-center gap-12">

      <!-- Text Content -->
      <div class="lg:w-1/2">
        <h1 class="text-3xl md:text-4xl font-bold mb-4 text-gray-900">OUR SERVICES</h1>
        <p class="text-gray-700 text-base md:text-lg leading-relaxed mb-8">
          A full-service tank farm and logistics company based in the United States
        </p>

        <h1 class="text-2xl md:text-3xl font-bold mb-4 text-gray-900">ADDITIONAL SERVICES</h1>
        <p class="text-gray-700 text-base md:text-lg leading-relaxed mb-4">What we do</p>

        <p class="text-gray-700 text-base md:text-lg leading-relaxed">
          Space Terminal is highly qualified in everything we do, with a clear vision to be a global leader in tank
          storage and logistics. Customer satisfaction is our top priority, and we guarantee <strong>100% commitment and
            quality storage services</strong>.

          We also specialize in the acquisition, storage, and shipping of oil and gas products, as well as
          high-technology tools, equipment, and heavy engineering solutions. You can rely on us for a hassle-free
          experience with all your tank storage and logistics needs.

          Our major hubs are strategically located along key shipping routes, where suppliers and customers converge,
          and where efficient supply chain management is critical.

          At Space Terminal, our goal is to be the leader in independent petroleum storage and logistics by developing
          and acquiring strategic assets to create a global network of hydrocarbon and chemical terminals. We are
          actively acquiring and developing key locations worldwide, enabling us to efficiently handle domestic and
          international distribution for our clients.
        </p>
      </div>

      <!-- Image Content -->
      <div class="lg:w-1/2 flex justify-center items-center">
        <img src="assets/images/fee2a84c8b4387ccb6179452f281fae3.jpg" alt="Tank Farm"
          class="w-full h-auto rounded shadow-lg object-cover">
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
            Linked to the North American rail network for distribution throughout the United States, Canada, and Mexico
          </p>
        </div>

        <!-- Card 2 -->
        <div
          class="group p-6 rounded-lg shadow text-center transition-all duration-300 transform hover:-translate-y-2 hover:bg-[#1a557f]">
          <i class="fas fa-train text-3xl text-[#0d314d] mb-4 group-hover:text-white"></i>
          <h4 class="text-xl font-semibold mb-2 text-gray-900 group-hover:text-white">STEEL RAIL</h4>
          <p class="text-gray-600 text-sm md:text-base group-hover:text-white">
            Multiple stainless steel rail header systems enabling the loading and unloading of up to 110 rail cars on
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
          <h4 class="text-xl font-semibold mb-2 text-gray-900 group-hover:text-white">AUTOMATED SCALE SYSTEM</h4>
          <p class="text-gray-600 text-sm md:text-base group-hover:text-white">
            Automated scale system controls truck loading process through computerized control features
          </p>
        </div>

        <!-- Card 6 -->
        <div
          class="group p-6 rounded-lg shadow text-center transition-all duration-300 transform hover:-translate-y-2 hover:bg-[#1a557f]">
          <i class="fas fa-exchange-alt text-3xl text-[#0d314d] mb-4 group-hover:text-white"></i>
          <h4 class="text-xl font-semibold mb-2 text-gray-900 group-hover:text-white">TRANS-LOADING SERVICES</h4>
          <p class="text-gray-600 text-sm md:text-base group-hover:text-white">
            Trans-loading services through stainless steel transfer system.
          </p>
        </div>

      </div>

    </div>
  </section>

  <section class="tank-storage-section">
    <div class="container">
      <div class="image-wrapper">
        <img src="assets/images/home-map.jpg" alt="Tank Storage Image" class="w-full max-h-[600px] object-cover block">
      </div>

      <div class="floating-block">
        <h2>Tank storage in the ARA region</h2>
        <p>
          Space Terminal provides customized solutions for storing your liquids. With tanks available in nearly any
          size, we ensure the ideal storage option for your needs. Our terminals in Rotterdam and Houston are easily
          accessible by ship, truck, and rail.
        </p>
      </div>
    </div>
  </section>


  <br><br>
  <section class="terminals-section py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">

      <!-- Terminals Text -->
      <div class="mb-12 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4" style="color: #0d314d;">
          THREE TERMINALS
        </h2>
        <p class="text-gray-700 text-base md:text-lg max-w-3xl mx-auto">
          Space Terminal operates two terminals in Rotterdam and one in Houston.
          Strategically positioned, the Rotterdam terminals serve the European market,
          offering storage solutions for biofuels, chemicals, base oils & lubricants,
          and marine fuels. The Houston terminal focuses exclusively on chemical products.
        </p>
      </div>


      <!-- Terminals Images -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

        <!-- Terminal 1 -->
        <div class="relative group overflow-hidden rounded-lg shadow-lg">
          <img src="assets/images/tm1.jpg" alt="Terminal in Rotterdam 1"
            class="w-full h-64 object-cover transition-transform duration-300 group-hover:scale-105">
          <a href="Rotterdam"
            class="absolute bottom-4 left-1/2 transform -translate-x-1/2 bg-[#0d314d] text-white font-semibold px-6 py-2 rounded-lg hover:bg-[#1a557f] transition duration-300">
            Terminal 1
          </a>
        </div>

        <!-- Terminal 2 -->
        <div class="relative group overflow-hidden rounded-lg shadow-lg">
          <img src="assets/images/tm2.jpg" alt="Terminal in Rotterdam 2"
            class="w-full h-64 object-cover transition-transform duration-300 group-hover:scale-105">
          <a href="Houston"
            class="absolute bottom-4 left-1/2 transform -translate-x-1/2 bg-[#0d314d] text-white font-semibold px-6 py-2 rounded-lg hover:bg-[#1a557f] transition duration-300">
            Terminal 2
          </a>
        </div>

        <!-- Terminal 3 -->
        <div class="relative group overflow-hidden rounded-lg shadow-lg">
          <img src="assets/images/tm3.jpg" alt="Terminal in Houston"
            class="w-full h-64 object-cover transition-transform duration-300 group-hover:scale-105">
          <a href="Fujairah"
            class="absolute bottom-4 left-1/2 transform -translate-x-1/2 bg-[#0d314d] text-white font-semibold px-6 py-2 rounded-lg hover:bg-[#1a557f] transition duration-300">
            Terminal 3
          </a>
        </div>

      </div>
    </div>
  </section>

  <section class="newsletter-section py-16 bg-gray-100">
    <div class="max-w-3xl mx-auto px-6 text-center">

      <!-- Heading -->
      <h2 class="text-3xl md:text-4xl font-bold mb-4 text-[#0d314d]">
        Subscribe to our Newsletter
      </h2>
      <p class="text-gray-700 text-base md:text-lg mb-8">
        Stay updated with our latest news and offers!
      </p>

      <!-- Form -->
      <form class="flex flex-col sm:flex-row justify-center items-center gap-4" action="proc_subscribe.php"
        method="post">
        <input type="email" name="email" placeholder="Enter your email address" required
          class="w-full sm:w-auto flex-1 px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#0d314d] focus:border-[#0d314d]">
        <button type="submit"
          class="px-6 py-3 bg-[#0d314d] text-white font-semibold rounded-lg hover:bg-[#1a557f] transition duration-300">
          Subscribe
        </button>
      </form>

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

<!-- AOS JS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 1000, // animation duration in ms
    once: true,     // animate only once on scroll
  });
</script>

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

<script>
  const counters = document.querySelectorAll('.counter');

  const options = {
    root: null,
    rootMargin: '0px',
    threshold: 0.5 // trigger when 50% of the section is visible
  };

  const startCounting = (entry) => {
    const counter = entry.target;
    const target = +counter.getAttribute('data-target');
    let duration = 10000; // 10 seconds
    let intervalTime = 50;
    let iterations = duration / intervalTime;
    let count = 0;

    const interval = setInterval(() => {
      let randomNumber = Math.floor(Math.random() * target);
      counter.textContent = randomNumber.toLocaleString();

      count++;
      if (count >= iterations) {
        clearInterval(interval);
        counter.textContent = target.toLocaleString();
      }
    }, intervalTime);
  };

  // Intersection Observer
  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        startCounting(entry);
        observer.unobserve(entry.target); // animate only once
      }
    });
  }, options);

  // Observe each counter
  counters.forEach(counter => observer.observe(counter));
</script>

<script>
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