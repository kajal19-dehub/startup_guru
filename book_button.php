<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Startup Support - Book a Call</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" crossorigin="anonymous" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-gray-900 via-black to-gray-800 text-white min-h-screen flex flex-col">

  <!-- Centered Form Section -->
  <main id="mainContent" class="flex-grow flex items-center justify-center px-4 pt-32 pb-10">
    <div class="w-full max-w-lg bg-white/10 backdrop-blur-lg p-10 rounded-3xl shadow-2xl border border-white/20 transition-transform duration-300 hover:scale-[1.02]">
      <h2 class="text-4xl font-extrabold mb-8 text-center text-purple-700"> Book a Call</h2>

      <form onsubmit="return handleSubmit(event)" class="space-y-6">
        <!-- Name -->
        <div>
          <label class="block text-sm font-medium mb-1" for="name">Your Name</label>
          <input type="text" name="name" id="name" class="w-full px-4 py-2 rounded-xl border border-gray-400 text-black focus:ring-2 focus:ring-indigo-500 focus:outline-none" required>
        </div>

        <!-- Call Type -->
        <div>
          <label class="block text-sm font-medium mb-1" for="call_type">Call Type</label>
          <select name="call_type" id="call_type" class="w-full px-4 py-2 rounded-xl border border-gray-400 text-black focus:ring-2 focus:ring-indigo-500 focus:outline-none" required>
            <option value="">-- Select --</option>
            <option value="Video Call"> Video Call</option>
            <option value="Voice Call"> Voice Call</option>
            <option value="Chat"> Chat</option>
          </select>
        </div>

        <!-- Date -->
        <div>
          <label class="block text-sm font-medium mb-1" for="date">Select Date</label>
          <input type="date" name="date" id="date" class="w-full px-4 py-2 rounded-xl border border-gray-400 text-black focus:ring-2 focus:ring-indigo-500 focus:outline-none" required>
        </div>

        <!-- Time -->
        <div>
          <label class="block text-sm font-medium mb-1" for="time">Select Time</label>
          <input type="time" name="time" id="time" class="w-full px-4 py-2 rounded-xl border border-gray-400 text-black focus:ring-2 focus:ring-indigo-500 focus:outline-none" required>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="w-full bg-purple-700 text-white font-bold py-3 px-4 rounded-xl shadow-lg hover:shadow-xl hover:scale-105 transform transition-all duration-300">
          <i class="fa fa-check-circle mr-2"></i>Book Now
        </button>
      </form>
    </div>
  </main>

  <script>
   function handleSubmit(event) {
  event.preventDefault();

  const name = document.getElementById("name").value.trim();
  const callType = document.getElementById("call_type").value;
  const date = document.getElementById("date").value;
  const time = document.getElementById("time").value;

  if (!name || !callType || !date || !time) {
    alert("Please fill in all fields.");
    return false;
  }

  const mentorDetails = JSON.parse(localStorage.getItem("selectedMentor")) || {};

  const callData = {
    menteeName: name,
    callType,
    date,
    time,
    mentor: mentorDetails
  };

  // Store the call info to localStorage (you can also push multiple calls if needed)
  localStorage.setItem("upcomingCall", JSON.stringify(callData));

  // Show confirmation message
  const mainContent = document.getElementById("mainContent");
  mainContent.innerHTML = `
    <div class="bg-gradient-to-br from-green-500 via-green-600 to-emerald-700 p-10 rounded-3xl shadow-2xl text-white text-center max-w-md w-full animate-fade-in-up">
      <h2 class="text-4xl font-extrabold mb-4 ">🎉 Congratulations!</h2>
      <p class="text-lg mb-2">Your call with <strong>${mentorDetails.name}</strong> has been successfully booked.</p>

    </div>
  `;
  return false;
}

  </script>

</body>
</html>
