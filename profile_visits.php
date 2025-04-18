<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Profile_visits</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"/>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .orbit-container {
      position: relative;
      width: 48px;
      height: 48px;
    }
    .orbit-logo {
      border-radius: 9999px;
      border: 2px solid white;
      z-index: 10;
    }
    .orbit-ring {
      position: absolute;
      top: -8px;
      left: -8px;
      width: 64px;
      height: 64px;
      border-top: 2px solid white;
      border-radius: 50%;
      animation: rotateOrbit 2s linear infinite;
    }
    @keyframes rotateOrbit {
      from { transform: rotate(0deg); }
      to { transform: rotate(360deg); }
    }
    .tab-button.active {
      background-color: #166534;
      color: white;
    }
  </style>
</head>
<body class="bg-black text-white font-sans">

  <!-- Header -->
  <header class="flex justify-between items-center p-4 bg-gray-900 fixed top-0 w-full z-50 shadow-md">
    <div class="flex items-center gap-4">
      <div class="orbit-container">
        <div class="orbit-ring"></div>
        <img src="app_icon.png" alt="Logo" class="w-12 h-12 orbit-logo shadow-md"/>
      </div>
      <h1 class="text-3xl font-bold">
        <span class="text-gray-300">Startup.</span><span class="text-yellow-400">Guru</span>
      </h1>
    </div>
    <div class="flex gap-6 items-center">
      <i class="fa-solid fa-bell"></i>
      <i class="fa-solid fa-message"></i>
      <div class="w-8 h-8 bg-yellow-500 rounded-full flex items-center justify-center text-black font-bold">DK</div>
    </div>
  </header>

  <!-- Main Content -->
  <main class="max-w-5xl mx-auto px-6 py-32 space-y-10">

    <!-- Total Visits -->
    <section class="bg-white/10 p-6 rounded-2xl border border-white/20 shadow-lg text-center">
      <h2 class="text-2xl font-bold mb-2">Total Visitors</h2>
      <p class="text-5xl font-extrabold text-green-400">1,237</p>
      <p class="text-sm text-gray-400 mt-2">Since March 2024</p>
    </section>

    <!-- Recent Visitors Table -->
    <section class="bg-white/10 p-6 rounded-2xl border border-white/20 shadow-lg">
      <h2 class="text-2xl font-bold mb-4">Recent Visitors</h2>
      <div class="overflow-x-auto">
        <table class="w-full text-left table-auto">
          <thead>
            <tr class="text-gray-300 border-b border-white/20">
              <th class="pb-2">#</th>
              <th class="pb-2">Name</th>
              <th class="pb-2">Time</th>
              <th class="pb-2">Location</th>
              <th class="pb-2">Device</th>
            </tr>
          </thead>
          <tbody>
            <tr class="hover:bg-white/5 transition">
              <td>1</td>
              <td>Ravi Kumar</td>
              <td>Today, 9:35 PM</td>
              <td><span class="inline-flex items-center gap-1"><img src="https://flagcdn.com/w20/in.png" class="w-4 h-4"> India</span></td>
              <td><i class="fa-solid fa-mobile-screen"></i> Mobile</td>
            </tr>
            <tr class="hover:bg-white/5 transition">
              <td>2</td>
              <td>Anonymous</td>
              <td>Today, 7:14 PM</td>
              <td><span class="inline-flex items-center gap-1"><img src="https://flagcdn.com/w20/us.png" class="w-4 h-4"> USA</span></td>
              <td><i class="fa-solid fa-desktop"></i> Desktop</td>
            </tr>
            <tr class="hover:bg-white/5 transition">
              <td>3</td>
              <td>Sneha T.</td>
              <td>Yesterday, 10:45 PM</td>
              <td><span class="inline-flex items-center gap-1"><img src="https://flagcdn.com/w20/ca.png" class="w-4 h-4"> Canada</span></td>
              <td><i class="fa-solid fa-laptop"></i> Laptop</td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>


<!-- Visitors Graph (Placeholder for now) -->
<section class="bg-white/10 p-6 rounded-2xl border border-white/20 shadow-lg">
  <h2 class="text-2xl font-bold mb-4">Visitor Trend (Last 7 Days)</h2>
  <div class="h-40 flex items-end gap-4">
    <div class="bg-green-400 w-8 rounded-t-xl h-2/6"></div>
    <div class="bg-green-400 w-8 rounded-t-xl h-4/6"></div>
    <div class="bg-green-400 w-8 rounded-t-xl h-3/6"></div>
    <div class="bg-green-400 w-8 rounded-t-xl h-5/6"></div>
    <div class="bg-green-400 w-8 rounded-t-xl h-1/6"></div>
    <div class="bg-green-400 w-8 rounded-t-xl h-4/6"></div>
    <div class="bg-green-400 w-8 rounded-t-xl h-3/6"></div>
  </div>
  <div class="flex justify-between text-sm text-gray-400 mt-2">
    <span>Mon</span><span>Tue</span><span>Wed</span><span>Thu</span><span>Fri</span><span>Sat</span><span>Sun</span>
  </div>

  <!-- Top Countries -->
<section class=" mt-8 p-6 rounded-2xl border border-white/20 shadow-lg">
  <h2 class="text-2xl font-bold mb-4">Top Countries</h2>
  <ul class="space-y-2">
    <li class="flex justify-between items-center">
      <span><img src="https://flagcdn.com/w20/in.png" class="inline w-4 h-4 mr-1"> India</span>
      <span class="text-green-400 font-semibold">712 Visits</span>
    </li>
    <li class="flex justify-between items-center">
      <span><img src="https://flagcdn.com/w20/us.png" class="inline w-4 h-4 mr-1"> USA</span>
      <span class="text-green-400 font-semibold">308 Visits</span>
    </li>
    <li class="flex justify-between items-center">
      <span><img src="https://flagcdn.com/w20/ca.png" class="inline w-4 h-4 mr-1"> Canada</span>
      <span class="text-green-400 font-semibold">217 Visits</span>
    </li>
  </ul>
</section>

 

  </main>
</body>
</html>
