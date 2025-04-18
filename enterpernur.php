<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StartupMentor - Entrepreneur Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            scroll-behavior: smooth;
        }
    </style>
</head>
<body class="bg-gray-900 text-gray-200">

<!-- Common Header -->
<header class="flex justify-between items-center p-4 bg-gray-900 text-white fixed top-0 w-full z-50">
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

<!-- Entrepreneur Dashboard -->
<section id="entrepreneur-dashboard" class="py-12 mt-16">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-bold mb-2">Entrepreneur <span class="bg-gradient-to-r from-indigo-400 via-purple-500 to-pink-500 bg-clip-text text-transparent">Dashboard</span></h1>
        <p class="text-gray-400 mb-8">Manage your mentorship journey and track your startup progress</p>
        
        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Sidebar -->
            <div class="lg:w-1/4">
                <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg">
                    <!-- Profile Summary -->
                    <div class="p-6 bg-gradient-to-r from-purple-600 to-indigo-600 text-center">
                        <div class="w-24 h-24 rounded-full bg-white mx-auto mb-4 overflow-hidden">
                            <img src="divya_photo.jpeg" alt="Profile" class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-xl font-bold text-white">Divya Kumari</h3>
                        <p class="text-indigo-200">Founder, TechHub Solutions</p>
                        
                    </div>
                    
                    <!-- Navigation -->
                    <div class="p-4">
                        <nav>
                            <ul class="space-y-1">
                                <li>
                                    <a href="#" class="flex items-center p-3 rounded-md bg-purple-600 text-white">
                                        <i class="fas fa-tachometer-alt mr-3"></i>
                                        <span>Dashboard</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center p-3 rounded-md text-gray-300 hover:bg-gray-700 transition-colors">
                                        <i class="fas fa-user-edit mr-3"></i>
                                        <span>My Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center p-3 rounded-md text-gray-300 hover:bg-gray-700 transition-colors">
                                        <i class="fas fa-users mr-3"></i>
                                        <span>My Mentors</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center p-3 rounded-md text-gray-300 hover:bg-gray-700 transition-colors relative">
                                        <i class="fas fa-comment-alt mr-3"></i>
                                        <span>Messages</span>
                                        <span class="absolute -top-1 -right-1 w-5 h-5 rounded-full bg-red-500 text-white text-xs flex items-center justify-center">3</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center p-3 rounded-md text-gray-300 hover:bg-gray-700 transition-colors">
                                        <i class="fas fa-calendar-alt mr-3"></i>
                                        <span>Sessions</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center p-3 rounded-md text-gray-300 hover:bg-gray-700 transition-colors">
                                        <i class="fas fa-chart-line mr-3"></i>
                                        <span>Progress</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center p-3 rounded-md text-gray-300 hover:bg-gray-700 transition-colors">
                                        <i class="fas fa-cog mr-3"></i>
                                        <span>Settings</span>
                                    </a>
                                </li>
                                <li class="pt-4 mt-4 border-t border-gray-700">
                                    <a href="mentor-dashboard.html" class="flex items-center p-3 rounded-md text-purple-400 hover:text-purple-300 hover:bg-gray-700 transition-colors">
                                        <i class="fas fa-user-tie mr-3"></i>
                                        <span>Switch to Mentor View</span>
                                    </a>
                                </li>
                                <li class="pt-4 mt-4 border-t border-gray-700">
                                    <a href="#" class="flex items-center p-3 rounded-md text-red-400 hover:text-red-300 hover:bg-gray-700 transition-colors">
                                        <i class="fas fa-sign-out-alt mr-3"></i>
                                        <span>Logout</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                
                <!-- Startup Profile -->
                <div class="bg-gray-800 rounded-lg p-5 mt-6 shadow-lg">
                    <h3 class="text-lg font-semibold mb-4 flex items-center">
                        <i class="fas fa-rocket text-purple-400 mr-2"></i>
                        Startup Profile
                    </h3>
                    <div class="space-y-3">
                        <div>
                            <p class="text-gray-400 text-sm">Startup Name</p>
                            <p class="font-medium">TechHub Solutions</p>
                        </div>
                        <div>
                            <p class="text-gray-400 text-sm">Industry</p>
                            <p class="font-medium">SaaS / FinTech</p>
                        </div>
                        <div>
                            <p class="text-gray-400 text-sm">Stage</p>
                            <p class="font-medium">Seed</p>
                        </div>
                        <div>
                            <p class="text-gray-400 text-sm">Founded</p>
                            <p class="font-medium">January 2023</p>
                        </div>
                        <div>
                            <p class="text-gray-400 text-sm">Website</p>
                            <a href="#" class="text-purple-400 hover:underline">techhubsolutions.com</a>
                        </div>
                    </div>
                    <button class="w-full mt-4 text-center py-2 border border-purple-500 text-purple-500 rounded-md hover:bg-purple-500 hover:text-white transition-all">
                        Edit Profile
                    </button>
                </div>
            </div>
            
            <!-- Main Content -->
            <div class="lg:w-3/4">
                <!-- Overview -->
                <div class="bg-gray-800 rounded-lg p-6 shadow-lg mb-6">
                    <div class="flex flex-col md:flex-row items-center justify-between mb-6">
                        <h2 class="text-2xl font-bold">Welcome back, Rohit!</h2>
                        <div class="mt-4 md:mt-0">
                            <button class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 px-4 py-2 rounded-md text-white hover:opacity-90 transition-opacity">
                                <i class="fas fa-plus mr-2"></i> Find New Mentors
                            </button>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="bg-gray-700 rounded-lg p-4 transition-all hover:-translate-y-1 hover:shadow-lg">
                            <div class="flex items-center">
                                <div class="h-12 w-12 rounded-full bg-blue-500 flex items-center justify-center mr-4">
                                    <i class="fas fa-calendar-check text-white text-xl"></i>
                                </div>
                                <div>
                                    <p class="text-gray-400">Upcoming Sessions</p>
                                    <h3 class="text-2xl font-bold">2</h3>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-700 rounded-lg p-4 transition-all hover:-translate-y-1 hover:shadow-lg">
                            <div class="flex items-center">
                                <div class="h-12 w-12 rounded-full bg-purple-500 flex items-center justify-center mr-4">
                                    <i class="fas fa-user-tie text-white text-xl"></i>
                                </div>
                                <div>
                                    <p class="text-gray-400">Active Mentors</p>
                                    <h3 class="text-2xl font-bold">3</h3>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-700 rounded-lg p-4 transition-all hover:-translate-y-1 hover:shadow-lg">
                            <div class="flex items-center">
                                <div class="h-12 w-12 rounded-full bg-green-500 flex items-center justify-center mr-4">
                                    <i class="fas fa-tasks text-white text-xl"></i>
                                </div>
                                <div>
                                    <p class="text-gray-400">Goals Completed</p>
                                    <h3 class="text-2xl font-bold">7/10</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Requested Mentors -->
                <div class="bg-gray-800 rounded-lg p-6 shadow-lg mb-6">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-xl font-bold">
                            <i class="fas fa-user-tie text-purple-400 mr-2"></i>
                            Requested Mentors
                        </h2>
                        <a href="#" class="text-purple-400 hover:underline text-sm">View All</a>
                    </div>
                    
                    <div class="space-y-4">
                        <div class="bg-gray-700 p-4 rounded-lg">
                            <div class="flex flex-col md:flex-row justify-between">
                                <div class="flex items-start mb-4 md:mb-0">
                                    <div class="h-12 w-12 rounded-full bg-gray-600 flex items-center justify-center mr-4 flex-shrink-0">
                                        <i class="fas fa-user text-gray-400"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-bold">Rajiv Khanna</h4>
                                        <p class="text-sm text-purple-400">Startup Advisor & Angel Investor</p>
                                        <p class="text-sm text-gray-400 mt-1">Requested on Oct 10, 2023</p>
                                    </div>
                                </div>
                                <div class="flex md:flex-col items-end space-y-2">
                                    <div class="bg-yellow-600 text-yellow-100 text-xs px-3 py-1 rounded-full">
                                        Pending
                                    </div>
                                    <button class="bg-gray-600 text-gray-300 px-3 py-1 rounded-md text-sm hover:bg-gray-500 transition">
                                        Cancel Request
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <div class="bg-gray-700 p-4 rounded-lg">
                            <div class="flex flex-col md:flex-row justify-between">
                                <div class="flex items-start mb-4 md:mb-0">
                                    <div class="h-12 w-12 rounded-full bg-gray-600 flex items-center justify-center mr-4 flex-shrink-0">
                                        <i class="fas fa-user text-gray-400"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-bold">Sunita Patel</h4>
                                        <p class="text-sm text-purple-400">VC & Investment Advisor</p>
                                        <p class="text-sm text-gray-400 mt-1">Requested on Oct 8, 2023</p>
                                    </div>
                                </div>
                                <div class="flex md:flex-col items-end space-y-2">
                                    <div class="bg-yellow-600 text-yellow-100 text-xs px-3 py-1 rounded-full">
                                        Pending
                                    </div>
                                    <button class="bg-gray-600 text-gray-300 px-3 py-1 rounded-md text-sm hover:bg-gray-500 transition">
                                        Cancel Request
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <div class="bg-gray-700 p-4 rounded-lg">
                            <div class="flex flex-col md:flex-row justify-between">
                                <div class="flex items-start mb-4 md:mb-0">
                                    <div class="h-12 w-12 rounded-full bg-gray-600 flex items-center justify-center mr-4 flex-shrink-0">
                                        <i class="fas fa-user text-gray-400"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-bold">Vikram Joshi</h4>
                                        <p class="text-sm text-purple-400">Tech Lead & Engineering VP</p>
                                        <p class="text-sm text-gray-400 mt-1">Requested on Oct 5, 2023</p>
                                    </div>
                                </div>
                                <div class="flex md:flex-col items-end space-y-2">
                                    <div class="bg-green-600 text-green-100 text-xs px-3 py-1 rounded-full">
                                        Accepted
                                    </div>
                                    <button class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 text-white px-3 py-1 rounded-md text-sm hover:opacity-90 transition-opacity">
                                        Schedule Session
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Recent Messages -->
                <div class="bg-gray-800 rounded-lg p-6 shadow-lg mb-6">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-xl font-bold">
                            <i class="fas fa-comment-alt text-purple-400 mr-2"></i>
                            Recent Messages
                        </h2>
                        <a href="#" class="text-purple-400 hover:underline text-sm">View All</a>
                    </div>
                    
                    <div class="space-y-4">
                        <div class="border-l-4 border-purple-500 bg-gray-700 p-4 rounded-r-lg">
                            <div class="flex justify-between mb-2">
                                <h4 class="font-bold">Vikram Joshi</h4>
                                <span class="text-gray-400 text-sm">Today, 10:42 AM</span>
                            </div>
                            <p class="text-gray-300 text-sm">I've reviewed your tech stack and have some suggestions for improving scalability. Let's discuss in our next meeting.</p>
                            <button class="mt-2 text-purple-400 text-sm hover:underline">Reply</button>
                        </div>
                        
                        <div class="border-l-4 border-purple-500 bg-gray-700 p-4 rounded-r-lg">
                            <div class="flex justify-between mb-2">
                                <h4 class="font-bold">Neha Sharma</h4>
                                <span class="text-gray-400 text-sm">Yesterday, 5:30 PM</span>
                            </div>
                            <p class="text-gray-300 text-sm">I'd like to introduce you to a potential investor who might be interested in your FinTech solution. Are you available for a call next Tuesday?</p>
                            <button class="mt-2 text-purple-400 text-sm hover:underline">Reply</button>
                        </div>
                        
                        <div class="border-l-4 border-purple-500 bg-gray-700 p-4 rounded-r-lg">
                            <div class="flex justify-between mb-2">
                                <h4 class="font-bold">StartupMentor Team</h4>
                                <span class="text-gray-400 text-sm">Oct 8, 2023</span>
                            </div>
                            <p class="text-gray-300 text-sm">Your mentorship request with Sunita Patel is pending approval. We'll notify you once there's an update.</p>
                            <button class="mt-2 text-purple-400 text-sm hover:underline">View Details</button>
                        </div>
                    </div>
                </div>
                
                <!-- Upcoming Sessions -->
                <div class="bg-gray-800 rounded-lg p-6 shadow-lg">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-xl font-bold">
                            <i class="fas fa-calendar-alt text-purple-400 mr-2"></i>
                            Upcoming Sessions
                        </h2>
                        <a href="#" class="text-purple-400 hover:underline text-sm">View Calendar</a>
                    </div>
                    
                    <div class="overflow-x-auto">
                        <table class="min-w-full">
                            <thead>
                                <tr>
                                    <th class="py-3 text-left text-gray-400">Mentor</th>
                                    <th class="py-3 text-left text-gray-400">Date</th>
                                    <th class="py-3 text-left text-gray-400">Time</th>
                                    <th class="py-3 text-left text-gray-400">Topic</th>
                                    <th class="py-3 text-left text-gray-400">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-t border-gray-700">
                                    <td class="py-4">
                                        <div class="flex items-center">
                                            <div class="h-10 w-10 rounded-full bg-gray-700 flex items-center justify-center mr-3">
                                                <i class="fas fa-user text-gray-500"></i>
                                            </div>
                                            <span>Vikram Joshi</span>
                                        </div>
                                    </td>
                                    <td class="py-4">Oct 15, 2023</td>
                                    <td class="py-4">10:00 AM</td>
                                    <td class="py-4">Tech Stack Review</td>
                                    <td class="py-4">
                                        <div class="flex space-x-2">
                                            <button class="bg-purple-600 text-white px-3 py-1 rounded-md text-sm hover:bg-purple-700 transition">
                                                Join
                                            </button>
                                            <button class="bg-gray-700 text-gray-300 px-3 py-1 rounded-md text-sm hover:bg-gray-600 transition">
                                                Reschedule
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="border-t border-gray-700">
                                    <td class="py-4">
                                        <div class="flex items-center">
                                            <div class="h-10 w-10 rounded-full bg-gray-700 flex items-center justify-center mr-3">
                                                <i class="fas fa-user text-gray-500"></i>
                                            </div>
                                            <span>Neha Sharma</span>
                                        </div>
                                    </td>
                                    <td class="py-4">Oct 18, 2023</td>
                                    <td class="py-4">2:30 PM</td>
                                    <td class="py-4">Marketing Strategy</td>
                                    <td class="py-4">
                                        <div class="flex space-x-2">
                                            <button class="bg-purple-600 text-white px-3 py-1 rounded-md text-sm hover:bg-purple-700 transition">
                                                Join
                                            </button>
                                            <button class="bg-gray-700 text-gray-300 px-3 py-1 rounded-md text-sm hover:bg-gray-600 transition">
                                                Reschedule
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-gray-900 py-8 mt-16">
    <div class="container mx-auto px-4">
        <div class="flex justify-center items-center">
            <span class="text-gray-400">© 2023 StartupMentor. All rights reserved.</span>
        </div>
    </div>
</footer>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Simulate loading effect on dashboard
        const dashboard = document.getElementById('entrepreneur-dashboard');
        if (dashboard) {
            dashboard.style.opacity = '0';
            dashboard.style.transition = 'opacity 0.5s ease';
            setTimeout(() => {
                dashboard.style.opacity = '1';
            }, 300);
        }
    });
</script>
</body>
</html>