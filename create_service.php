<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Startup support website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        from {
          transform: rotate(0deg);
        }
        to {
          transform: rotate(360deg);
        }
      }
    </style>
</head>
<body class ="bg-black text-white">



  
  <!-- //*********************************************************** 1st section ******************************************************** -->

  <header class="flex justify-between items-center p-4 bg-gray-900 text-white fixed top-0 w-full">

    <div class="flex items-center gap-4">
      <!-- Orbit Effect Container -->
      <div class="orbit-container">
        <!-- Orbit Ring (semi-circle) -->
        <div class="orbit-ring"></div>
        <!-- Logo Image -->
        <img src="app_icon.png" alt="Startup.Guru Logo" class="w-12 h-12 orbit-logo shadow-md" />
      </div>
      <h1 class="text-3xl font-bold">
        <span class="text-gray-300">Startup.</span>
        <span class="text-yellow-400">Guru</span>
      </h1>
    </div>

  <div class="flex gap-8">
    <i class="fa-solid fa-bell"></i>
  <i class="fa-solid fa-message"></i>
  <div class="w-8 h-8 bg-yellow-500 rounded-full flex items-center justify-center">DK</div>
  </div>

  
  </header>

  <div class="max-w-3xl mx-auto bg-white/10 backdrop-blur-lg p-10 rounded-2xl shadow-xl border border-white/10">
    <h1 class="text-3xl font-bold text-center mb-8 text-yellow-400">Create Your Service</h1>

    <form class="space-y-6">

      <div>
        <label class="block mb-2 font-semibold text-gray-300">Your Full Name</label>
        <input type="text" placeholder="e.g., Divya Kumari" class="w-full px-4 py-2 rounded-lg bg-gray-800 text-white border border-white/20 focus:outline-none focus:ring-2 focus:ring-yellow-400"/>
      </div>

      <div>
        <label class="block mb-2 font-semibold text-gray-300">Current Working Company</label>
        <input type="text" placeholder="e.g., Infosys, TCS, etc." class="w-full px-4 py-2 rounded-lg bg-gray-800 text-white border border-white/20 focus:outline-none focus:ring-2 focus:ring-yellow-400"/>
      </div>

      <div class="grid grid-cols-2 gap-4">
        <div>
          <label class="block mb-2 font-semibold text-gray-300">Experience (Years)</label>
          <input type="number" min="0" placeholder="e.g., 3" class="w-full px-4 py-2 rounded-lg bg-gray-800 text-white border border-white/20 focus:outline-none focus:ring-2 focus:ring-yellow-400"/>
        </div>
        <div>
          <label class="block mb-2 font-semibold text-gray-300">Location</label>
          <input type="text" placeholder="e.g., Bengaluru" class="w-full px-4 py-2 rounded-lg bg-gray-800 text-white border border-white/20 focus:outline-none focus:ring-2 focus:ring-yellow-400"/>
        </div>
      </div>

      <div>
        <label class="block mb-2 font-semibold text-gray-300">Service Title</label>
        <input type="text" placeholder="e.g., Startup Consultation" class="w-full px-4 py-2 rounded-lg bg-gray-800 text-white border border-white/20 focus:outline-none focus:ring-2 focus:ring-yellow-400"/>
      </div>

      <div>
        <label class="block mb-2 font-semibold text-gray-300">Service Description</label>
        <textarea rows="4" placeholder="Describe your service..." class="w-full px-4 py-2 rounded-lg bg-gray-800 text-white border border-white/20 focus:outline-none focus:ring-2 focus:ring-yellow-400"></textarea>
      </div>

      <div>
        <label class="block mb-2 font-semibold text-gray-300">Service Type & Price</label>
        <div class="grid grid-cols-3 gap-4">
          <div class="bg-black/40 p-4 rounded-lg">
            <i class="fas fa-phone text-green-400 text-xl mb-2"></i>
            <input type="number" placeholder="₹ Call" class="w-full mt-1 px-2 py-1 bg-gray-800 text-white rounded focus:outline-none"/>
          </div>
          <div class="bg-black/40 p-4 rounded-lg">
            <i class="fas fa-video text-blue-400 text-xl mb-2"></i>
            <input type="number" placeholder="₹ Video" class="w-full mt-1 px-2 py-1 bg-gray-800 text-white rounded focus:outline-none"/>
          </div>
          <div class="bg-black/40 p-4 rounded-lg">
            <i class="fas fa-comment text-orange-400 text-xl mb-2"></i>
            <input type="number" placeholder="₹ Chat" class="w-full mt-1 px-2 py-1 bg-gray-800 text-white rounded focus:outline-none"/>
          </div>
        </div>
      </div>

      <div>
        <label class="block mb-2 font-semibold text-gray-300">Availability</label>
        <input type="datetime-local" class="w-full px-4 py-2 rounded-lg bg-gray-800 text-white border border-white/20 focus:outline-none focus:ring-2 focus:ring-yellow-400"/>
      </div>

      <div class="text-center pt-6">
        <button type="submit" class="bg-yellow-400 text-black font-bold px-6 py-2 rounded-full hover:bg-yellow-500 transition">Create Service</button>
      </div>

    </form>
  </div>
</body>
</html>
