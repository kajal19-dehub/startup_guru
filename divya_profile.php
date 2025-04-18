<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Divya Profile</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" crossorigin="anonymous" />
  <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="bg-gradient-to-br from-black via-gray-900 to-black text-white font-sans">

  <!-- Header -->
  <header class="flex justify-between items-center p-4 bg-gray-900 text-white fixed top-0 w-full ">
    <!-- Left Side: Logo + Brand Name -->
    <div class="flex items-center gap-3">
      <!-- White Circle Around Icon -->
      <div class="w-12 h-12 rounded-full bg-purple-500 flex items-center justify-center">
        <i class="fa-solid fa-bolt text-2xl text-white"></i>
      </div>
      
      <h1 class="text-2xl font-bold">
        <span class="text-white">Startup.</span>
        <span class="text-purple-500">Guru</span>
      </h1>
    </div>
    
  
    <!-- Right Side: Icons and Avatar -->
    <div class="flex items-center gap-6 pr-8">
      


      <div class="w-8 h-8 bg-purple-500 rounded-full flex items-center justify-center text-sm font-semibold">
        DK
      </div>
    </div>
  </header>

  <!-- Profile Section -->
  <main class="pt-24 px-6 max-w-7xl mx-auto">
    <section class="bg-gradient-to-br from-blue-600/20 via-black to-red-500/20   border border-white/20 rounded-2xl p-6 md:flex gap-10 backdrop-blur-md shadow-lg">
      <img src="divya_photo.jpeg" alt="Divya Kumari" class="rounded-full w-72 h-72 object-cover shadow-md mx-auto md:mx-0">
      <div class="flex-1">
        <h2 class="text-3xl font-bold mb-2">Divya Kumari</h2>
        <p class="text-lg mb-4 text-gray-300">Full Stack Web Developer | Founder of Startup.Guru | Ex-Navodayan</p>

        <div class="space-y-3 mb-6">
          <div class="flex items-center">
            <i class="fa-solid fa-building text-green-400 mr-3"></i>
            <p>Startup.Guru Pvt. Ltd</p>
          </div>
          <div class="flex items-center">
            <i class="fa-solid fa-briefcase text-blue-400 mr-3"></i>
            <p>2+ Years Experience</p>
          </div>
          <div class="flex items-center">
            <i class="fa-solid fa-location-dot text-red-400 mr-3"></i>
            <p>Lovely Professional University, Punjab</p>
          </div>
        </div>

        <h3 class="text-xl font-semibold mb-2">I can help with:</h3>
        <div class="flex flex-wrap gap-2 text-sm">
          <span class="px-3 py-1 bg-gray-800 border border-white/20 rounded-full">Fund Raising</span>
          <span class="px-3 py-1 bg-gray-800 border border-white/20 rounded-full">Marketing Strategies</span>
          <span class="px-3 py-1 bg-gray-800 border border-white/20 rounded-full">Motivational Coaching</span>
          <span class="px-3 py-1 bg-gray-800 border border-white/20 rounded-full">Entrepreneurship</span>
          <span class="px-3 py-1 bg-gray-800 border border-white/20 rounded-full">Startup Idea Validation</span>
        </div>

        <p class="text-gray-400 mt-6 italic">"I’m happy to help entrepreneurs with their growth journey and problem solving."</p>

        <!-- Call Options, Booking, Social -->
        <div class="grid md:grid-cols-3 gap-6 mt-8">

          <!-- Call Charges -->
          <div class="bg-gradient-to-tr from-black via-gray-800 to-gray-900 rounded-xl p-4 shadow-md">
            <div class="flex justify-around text-center">
              <div>
                <div class="rounded-full border-2 border-green-400 w-12 h-12 flex items-center justify-center bg-black mx-auto">
                  <i class="fas fa-phone"></i>
                </div>
                <p class="mt-2 text-sm">₹30K</p>
              </div>
              <div>
                <div class="rounded-full border-2 border-blue-400 w-12 h-12 flex items-center justify-center bg-black mx-auto">
                  <i class="fas fa-video"></i>
                </div>
                <p class="mt-2 text-sm">₹50K</p>
              </div>
              <div>
                <div class="rounded-full border-2 border-orange-400 w-12 h-12 flex items-center justify-center bg-black mx-auto">
                  <i class="fas fa-comment"></i>
                </div>
                <p class="mt-2 text-sm">₹40K</p>
              </div>
            </div>
          </div>

          <!-- Available Time -->
          <div class="bg-gradient-to-tr from-black via-gray-800 to-gray-900 rounded-xl p-4 shadow-md text-center">
            <p class="text-sm mb-2">Next Available At</p>
            <div class="flex justify-center items-center text-xs mb-3">
              <i class="fa-solid fa-calendar-days mr-2"></i> 9:15 PM - 15th April
            </div>
            <a href="book_button.php">
            <button onclick="storeMentorDetails()" class="bg-purple-700 text-white py-2 px-6 rounded-lg hover:scale-105 transition">Book Now</button>
            </a>
          </div>

          <!-- Social Media -->
          <div class="bg-gradient-to-tr from-black via-gray-800 to-gray-900 rounded-xl p-4 shadow-md text-center">
            <p class="text-sm">Social Media Links</p>
            <div class="flex justify-center gap-6 text-xl mt-6">
              <i class="fa-brands fa-square-facebook hover:text-blue-400 cursor-pointer"></i>
              <i class="fa-brands fa-square-instagram hover:text-pink-500 cursor-pointer"></i>
              <i class="fa-brands fa-linkedin hover:text-blue-500 cursor-pointer"></i>
              <i class="fa-brands fa-x-twitter hover:text-white cursor-pointer"></i>
              <i class="fa-brands fa-youtube hover:text-red-600 cursor-pointer"></i>
            </div>
          </div>
        </div>

 

      </div>
    </section>
  </main>

  <script>
    function storeMentorDetails() {
      const mentorDetails = {
        name: "Divya Kumari",
        image: "divya_photo.jpg",
        title: "Startup Mentor",
        experience: "5+ Years Experience",
      };
      localStorage.setItem("selectedMentor", JSON.stringify(mentorDetails));
    }
  </script>

</body>
</html>
