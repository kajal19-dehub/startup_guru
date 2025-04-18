<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StartupMentor - Mentor Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #121212;
            color: #e0e0e0;
            scroll-behavior: smooth;
        }
        .gradient-text {
            background: linear-gradient(90deg, #8B5CF6, #EC4899);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
        .gradient-btn {
            background: linear-gradient(90deg, #6366F1, #8B5CF6, #EC4899);
            transition: all 0.3s ease;
        }
        .gradient-btn:hover {
            opacity: 0.9;
            transform: translateY(-2px);
        }
        .card {
            background-color: #1e1e1e;
            border-radius: 10px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
        }
        .input-field {
            background-color: #2d2d2d;
            border: 1px solid #3d3d3d;
            color: #e0e0e0;
        }
        .input-field:focus {
            border-color: #8B5CF6;
            box-shadow: 0 0 0 3px rgba(139, 92, 246, 0.3);
        }
        .feature-icon {
            background: linear-gradient(45deg, #6366F1, #8B5CF6);
            padding: 15px;
            border-radius: 50%;
            color: white;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }
        .dashboard-section {
            margin-bottom: 2.5rem;
        }
        .dashboard-nav-item {
            display: flex;
            align-items: center;
            padding: 0.75rem 1rem;
            border-radius: 0.5rem;
            transition: all 0.2s ease;
        }
        .dashboard-nav-item:hover {
            background-color: #2d2d2d;
        }
        .dashboard-nav-item.active {
            background-color: #8B5CF6;
            color: white;
        }
        .dashboard-nav-item i {
            margin-right: 0.75rem;
        }
        .progress-bar {
            height: 0.5rem;
            border-radius: 1rem;
            background-color: #2d2d2d;
            overflow: hidden;
        }
        .progress-bar-fill {
            height: 100%;
            background: linear-gradient(90deg, #6366F1, #8B5CF6);
        }
        .notification-badge {
            position: absolute;
            top: -0.5rem;
            right: -0.5rem;
            width: 1.25rem;
            height: 1.25rem;
            border-radius: 50%;
            background-color: #EF4444;
            color: white;
            font-size: 0.75rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .hover-card {
            transition: all 0.3s ease;
        }
        .hover-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        }
        .dashboard-tab {
            padding: 0.75rem 1.5rem;
            border-bottom: 2px solid transparent;
            font-weight: 500;
            transition: all 0.2s ease;
        }
        .dashboard-tab:hover {
            color: #8B5CF6;
        }
        .dashboard-tab.active {
            color: #8B5CF6;
            border-bottom-color: #8B5CF6;
        }
        .mentor-request-card {
            background-color: #1e1e1e;
            border-radius: 0.5rem;
            padding: 1.25rem;
            margin-bottom: 1rem;
            border-left: 4px solid #8B5CF6;
            transition: all 0.2s ease;
        }
        .mentor-request-card:hover {
            background-color: #2d2d2d;
        }
        .activity-item {
            position: relative;
            padding-left: 2rem;
            padding-bottom: 1.5rem;
            border-left: 2px solid #2d2d2d;
        }
        .activity-item:last-child {
            border-left: 2px solid transparent;
            padding-bottom: 0;
        }
        .activity-item::before {
            content: '';
            position: absolute;
            left: -0.5rem;
            top: 0;
            width: 1rem;
            height: 1rem;
            border-radius: 50%;
            background: linear-gradient(90deg, #6366F1, #8B5CF6);
        }
    </style>
</head>
<body>

<!-- Common Header -->
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

<!-- Mentor Dashboard -->
<section id="mentor-dashboard" class="py-12 mt-20">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-bold mb-2">Mentor <span class="gradient-text">Dashboard</span></h1>
        <p class="text-gray-400 mb-8">Guide entrepreneurs and track your mentorship impact</p>
        
        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Sidebar -->
            <div class="lg:w-1/4">
                <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg">
                    <!-- Profile Summary -->
                    <div class="p-6 bg-gradient-to-r from-indigo-600 to-purple-600 text-center">
                        <div class="w-24 h-24 rounded-full bg-white mx-auto mb-4 overflow-hidden">
                            <img src="divya_photo.jpeg" alt="Profile" class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-xl font-bold text-white">Divya Kumari</h3>
                        <p class="text-indigo-200">Startup Advisor & Angel Investor</p>
                        
                    </div>
                    
                    <!-- Navigation -->
                    <div class="p-4">
                        <nav>
                            <ul class="space-y-1">
                                <li>
                                    <a href="#" class="dashboard-nav-item active">
                                        <i class="fas fa-tachometer-alt"></i>
                                        <span>Dashboard</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="dashboard-nav-item">
                                        <i class="fas fa-user-edit"></i>
                                        <span>My Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="dashboard-nav-item relative">
                                        <i class="fas fa-users"></i>
                                        <span>My Mentees</span>
                                        <span class="notification-badge">8</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="dashboard-nav-item relative">
                                        <i class="fas fa-bell"></i>
                                        <span>Mentorship Requests</span>
                                        <span class="notification-badge">5</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="dashboard-nav-item">
                                        <i class="fas fa-comment-alt"></i>
                                        <span>Messages</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="dashboard-nav-item">
                                        <i class="fas fa-calendar-alt"></i>
                                        <span>Schedule</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="dashboard-nav-item">
                                        <i class="fas fa-cog"></i>
                                        <span>Settings</span>
                                    </a>
                                </li>
                                <li class="pt-4 mt-4 border-t border-gray-700">
                                    <a href="#" class="dashboard-nav-item text-red-400 hover:text-red-300">
                                        <i class="fas fa-sign-out-alt"></i>
                                        <span>Logout</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                
                <!-- Mentor Profile -->
                <div class="bg-gray-800 rounded-lg p-5 mt-6 shadow-lg">
                    <h3 class="text-lg font-semibold mb-4 flex items-center">
                        <i class="fas fa-user-tie text-purple-400 mr-2"></i>
                        Mentor Profile
                    </h3>
                    <div class="space-y-3">
                        <div>
                            <p class="text-gray-400 text-sm">Expertise</p>
                            <div class="flex flex-wrap gap-2 mt-1">
                                <span class="bg-gray-700 text-xs px-2 py-1 rounded-full">Fintech</span>
                                <span class="bg-gray-700 text-xs px-2 py-1 rounded-full">Startup Strategy</span>
                                <span class="bg-gray-700 text-xs px-2 py-1 rounded-full">Fundraising</span>
                            </div>
                        </div>
                        <div>
                            <p class="text-gray-400 text-sm">Experience</p>
                            <p class="font-medium">15+ years</p>
                        </div>
                        <div>
                            <p class="text-gray-400 text-sm">Rating</p>
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span class="text-white ml-2">4.8</span>
                            </div>
                        </div>
                        <div>
                            <p class="text-gray-400 text-sm">Availability</p>
                            <p class="font-medium">5-10 hours/week</p>
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
                <div class="dashboard-section bg-gray-800 rounded-lg p-6 shadow-lg">
                    <div class="flex flex-col md:flex-row items-center justify-between mb-6">
                        <h2 class="text-2xl font-bold">Welcome back, Rajiv!</h2>
                        <div class="mt-4 md:mt-0">
                            <button class="gradient-btn px-4 py-2 rounded-md text-white">
                                <i class="fas fa-clock mr-2"></i> Update Availability
                            </button>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                        <div class="bg-gray-700 rounded-lg p-4 hover-card">
                            <div class="flex items-center">
                                <div class="h-12 w-12 rounded-full bg-indigo-500 flex items-center justify-center mr-4">
                                    <i class="fas fa-user-check text-white text-xl"></i>
                                </div>
                                <div>
                                    <p class="text-gray-400">Active Mentees</p>
                                    <h3 class="text-2xl font-bold">8</h3>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-700 rounded-lg p-4 hover-card">
                            <div class="flex items-center">
                                <div class="h-12 w-12 rounded-full bg-green-500 flex items-center justify-center mr-4">
                                    <i class="fas fa-calendar-check text-white text-xl"></i>
                                </div>
                                <div>
                                    <p class="text-gray-400">Sessions Completed</p>
                                    <h3 class="text-2xl font-bold">42</h3>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-700 rounded-lg p-4 hover-card">
                            <div class="flex items-center">
                                <div class="h-12 w-12 rounded-full bg-yellow-500 flex items-center justify-center mr-4">
                                    <i class="fas fa-clock text-white text-xl"></i>
                                </div>
                                <div>
                                    <p class="text-gray-400">Hours Mentored</p>
                                    <h3 class="text-2xl font-bold">68.5</h3>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-700 rounded-lg p-4 hover-card">
                            <div class="flex items-center">
                                <div class="h-12 w-12 rounded-full bg-purple-500 flex items-center justify-center mr-4">
                                    <i class="fas fa-star text-white text-xl"></i>
                                </div>
                                <div>
                                    <p class="text-gray-400">Average Rating</p>
                                    <h3 class="text-2xl font-bold">4.8/5</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Mentorship Requests -->
                <div class="dashboard-section bg-gray-800 rounded-lg p-6 shadow-lg">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-xl font-bold">
                            <i class="fas fa-user-plus text-purple-400 mr-2"></i>
                            Mentorship Requests
                            <span class="bg-red-500 text-xs text-white px-2 py-0.5 rounded-full ml-2">5 New</span>
                        </h2>
                        <a href="#" class="text-purple-400 hover:underline text-sm">View All Requests</a>
                    </div>
                    
                    <div class="space-y-4">
                        <div class="bg-gray-700 p-4 rounded-lg">
                            <div class="flex flex-col md:flex-row justify-between">
                                <div class="flex items-start mb-4 md:mb-0">
                                    <div class="h-12 w-12 rounded-full bg-gray-600 flex items-center justify-center mr-4 flex-shrink-0">
                                        <i class="fas fa-user text-gray-400"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-bold">Rohit Kumar</h4>
                                        <p class="text-sm text-purple-400">Founder, TechHub Solutions</p>
                                        <p class="text-sm text-gray-400 mt-1">Requested on Oct 10, 2023</p>
                                        <p class="text-gray-300 mt-2">
                                            I'm looking for guidance on my fintech startup's go-to-market strategy and fundraising approach. Would appreciate your expertise.
                                        </p>
                                    </div>
                                </div>
                                <div class="flex md:flex-col items-end space-y-2">
                                    <div class="flex space-x-2">
                                        <button class="bg-green-600 text-white px-3 py-1 rounded-md text-sm hover:bg-green-700 transition">
                                            Accept
                                        </button>
                                        <button class="bg-red-600 text-white px-3 py-1 rounded-md text-sm hover:bg-red-700 transition">
                                            Decline
                                        </button>
                                    </div>
                                    <button class="text-purple-400 text-sm hover:underline">View Profile</button>
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
                                        <h4 class="font-bold">Neha Singh</h4>
                                        <p class="text-sm text-purple-400">Co-founder, HealthBridge</p>
                                        <p class="text-sm text-gray-400 mt-1">Requested on Oct 11, 2023</p>
                                        <p class="text-gray-300 mt-2">
                                            Our healthcare startup is preparing for Series A. Would love your insights on our pitch deck and valuation.
                                        </p>
                                    </div>
                                </div>
                                <div class="flex md:flex-col items-end space-y-2">
                                    <div class="flex space-x-2">
                                        <button class="bg-green-600 text-white px-3 py-1 rounded-md text-sm hover:bg-green-700 transition">
                                            Accept
                                        </button>
                                        <button class="bg-red-600 text-white px-3 py-1 rounded-md text-sm hover:bg-red-700 transition">
                                            Decline
                                        </button>
                                    </div>
                                    <button class="text-purple-400 text-sm hover:underline">View Profile</button>
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
                                        <h4 class="font-bold">Amit Patel</h4>
                                        <p class="text-sm text-purple-400">Founder, EduTech</p>
                                        <p class="text-sm text-gray-400 mt-1">Requested on Oct 12, 2023</p>
                                        <p class="text-gray-300 mt-2">
                                            I'm building an EdTech platform and need advice on product-market fit and scaling strategies.
                                        </p>
                                    </div>
                                </div>
                                <div class="flex md:flex-col items-end space-y-2">
                                    <div class="flex space-x-2">
                                        <button class="bg-green-600 text-white px-3 py-1 rounded-md text-sm hover:bg-green-700 transition">
                                            Accept
                                        </button>
                                        <button class="bg-red-600 text-white px-3 py-1 rounded-md text-sm hover:bg-red-700 transition">
                                            Decline
                                        </button>
                                    </div>
                                    <button class="text-purple-400 text-sm hover:underline">View Profile</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Active Mentees & Upcoming Sessions -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Active Mentees -->
                    <div class="dashboard-section bg-gray-800 rounded-lg p-6 shadow-lg">
                        <div class="flex justify-between items-center mb-6">
                            <h2 class="text-xl font-bold">
                                <i class="fas fa-users text-purple-400 mr-2"></i>
                                Active Mentees
                            </h2>
                            <a href="#" class="text-purple-400 hover:underline text-sm">View All</a>
                        </div>
                        
                        <div class="space-y-4">
                            <div class="flex items-center p-3 bg-gray-700 rounded-lg hover:bg-gray-600 transition-all">
                                <div class="h-10 w-10 rounded-full bg-gray-600 flex items-center justify-center mr-3">
                                    <i class="fas fa-user text-gray-400"></i>
                                </div>
                                <div class="flex-grow">
                                    <h4 class="font-medium">Aditya Kumar</h4>
                                    <p class="text-xs text-gray-400">TechSprint | Since Aug 2023</p>
                                </div>
                                <button class="text-purple-400 hover:text-purple-300">
                                    <i class="fas fa-comment-alt"></i>
                                </button>
                            </div>
                            
                            <div class="flex items-center p-3 bg-gray-700 rounded-lg hover:bg-gray-600 transition-all">
                                <div class="h-10 w-10 rounded-full bg-gray-600 flex items-center justify-center mr-3">
                                    <i class="fas fa-user text-gray-400"></i>
                                </div>
                                <div class="flex-grow">
                                    <h4 class="font-medium">Sanjay Joshi</h4>
                                    <p class="text-xs text-gray-400">Datalytics | Since Sep 2023</p>
                                </div>
                                <button class="text-purple-400 hover:text-purple-300">
                                    <i class="fas fa-comment-alt"></i>
                                </button>
                            </div>
                            
                            <div class="flex items-center p-3 bg-gray-700 rounded-lg hover:bg-gray-600 transition-all">
                                <div class="h-10 w-10 rounded-full bg-gray-600 flex items-center justify-center mr-3">
                                    <i class="fas fa-user text-gray-400"></i>
                                </div>
                                <div class="flex-grow">
                                    <h4 class="font-medium">Neha Mehta</h4>
                                    <p class="text-xs text-gray-400">HealthBridge | Since Sep 2023</p>
                                </div>
                                <button class="text-purple-400 hover:text-purple-300">
                                    <i class="fas fa-comment-alt"></i>
                                </button>
                            </div>
                            
                            <div class="flex items-center p-3 bg-gray-700 rounded-lg hover:bg-gray-600 transition-all">
                                <div class="h-10 w-10 rounded-full bg-gray-600 flex items-center justify-center mr-3">
                                    <i class="fas fa-user text-gray-400"></i>
                                </div>
                                <div class="flex-grow">
                                    <h4 class="font-medium">Prateek Sharma</h4>
                                    <p class="text-xs text-gray-400">FinSecure | Since Oct 2023</p>
                                </div>
                                <button class="text-purple-400 hover:text-purple-300">
                                    <i class="fas fa-comment-alt"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Upcoming Sessions -->
                    <div class="dashboard-section bg-gray-800 rounded-lg p-6 shadow-lg">
                        <div class="flex justify-between items-center mb-6">
                            <h2 class="text-xl font-bold">
                                <i class="fas fa-calendar-alt text-purple-400 mr-2"></i>
                                Upcoming Sessions
                            </h2>
                            <a href="#" class="text-purple-400 hover:underline text-sm">View Calendar</a>
                        </div>
                        
                        <div class="space-y-4">
                            <div class="bg-gray-700 p-3 rounded-lg">
                                <div class="flex justify-between mb-2">
                                    <h4 class="font-medium">Pitch Deck Review</h4>
                                    <span class="text-xs text-gray-400">Today</span>
                                </div>
                                <div class="flex justify-between">
                                    <div class="flex items-center">
                                        <div class="h-6 w-6 rounded-full bg-gray-600 flex items-center justify-center mr-2">
                                            <i class="fas fa-user text-xs text-gray-400"></i>
                                        </div>
                                        <span class="text-sm">Aditya Kumar</span>
                                    </div>
                                    <span class="text-sm">3:00 PM - 4:00 PM</span>
                                </div>
                                <button class="mt-2 w-full bg-purple-600 text-white py-1 rounded-md text-sm hover:bg-purple-700 transition">
                                    Join Meeting
                                </button>
                            </div>
                            
                            <div class="bg-gray-700 p-3 rounded-lg">
                                <div class="flex justify-between mb-2">
                                    <h4 class="font-medium">Fundraising Strategy</h4>
                                    <span class="text-xs text-gray-400">Tomorrow</span>
                                </div>
                                <div class="flex justify-between">
                                    <div class="flex items-center">
                                        <div class="h-6 w-6 rounded-full bg-gray-600 flex items-center justify-center mr-2">
                                            <i class="fas fa-user text-xs text-gray-400"></i>
                                        </div>
                                        <span class="text-sm">Neha Mehta</span>
                                    </div>
                                    <span class="text-sm">11:00 AM - 12:00 PM</span>
                                </div>
                                <button class="mt-2 w-full border border-purple-500 text-purple-500 py-1 rounded-md text-sm hover:bg-purple-500 hover:text-white transition-all">
                                    Prepare Notes
                                </button>
                            </div>
                            
                            <div class="bg-gray-700 p-3 rounded-lg">
                                <div class="flex justify-between mb-2">
                                    <h4 class="font-medium">Product Strategy</h4>
                                    <span class="text-xs text-gray-400">Oct 16, 2023</span>
                                </div>
                                <div class="flex justify-between">
                                    <div class="flex items-center">
                                        <div class="h-6 w-6 rounded-full bg-gray-600 flex items-center justify-center mr-2">
                                            <i class="fas fa-user text-xs text-gray-400"></i>
                                        </div>
                                        <span class="text-sm">Sanjay Joshi</span>
                                    </div>
                                    <span class="text-sm">2:00 PM - 3:00 PM</span>
                                </div>
                                <button class="mt-2 w-full border border-purple-500 text-purple-500 py-1 rounded-md text-sm hover:bg-purple-500 hover:text-white transition-all">
                                    Prepare Notes
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Recent Feedback -->
                <div class="dashboard-section bg-gray-800 rounded-lg p-6 shadow-lg">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-xl font-bold">
                            <i class="fas fa-star text-purple-400 mr-2"></i>
                            Recent Feedback
                        </h2>
                        <a href="#" class="text-purple-400 hover:underline text-sm">View All Feedback</a>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-gray-700 p-4 rounded-lg">
                            <div class="flex justify-between mb-3">
                                <div class="flex items-center">
                                    <div class="h-10 w-10 rounded-full bg-gray-600 flex items-center justify-center mr-3">
                                        <i class="fas fa-user text-gray-400"></i>
                                    </div>
                                    <h4 class="font-bold">Ananya Sharma</h4>
                                </div>
                                <div class="flex text-yellow-400">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <p class="text-gray-300 text-sm">
                                "Rajiv's guidance on our fundraising strategy was invaluable. His connections in the VC world and clear feedback on our pitch helped us secure our seed round."
                            </p>
                            <p class="text-gray-400 text-xs mt-2">Oct 8, 2023</p>
                        </div>
                        
                        <div class="bg-gray-700 p-4 rounded-lg">
                            <div class="flex justify-between mb-3">
                                <div class="flex items-center">
                                    <div class="h-10 w-10 rounded-full bg-gray-600 flex items-center justify-center mr-3">
                                        <i class="fas fa-user text-gray-400"></i>
                                    </div>
                                    <h4 class="font-bold">Sanjay Gupta</h4>
                                </div>
                                <div class="flex text-yellow-400">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                            </div>
                            <p class="text-gray-300 text-sm">
                                "The market analysis framework Rajiv provided helped us identify a critical pivot opportunity. His honest feedback was exactly what we needed to hear."
                            </p>
                            <p class="text-gray-400 text-xs mt-2">Oct 5, 2023</p>
                        </div>
                    </div>
                </div>
                
                <!-- Impact Metrics -->
                <div class="dashboard-section bg-gray-800 rounded-lg p-6 shadow-lg">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-xl font-bold">
                            <i class="fas fa-chart-bar text-purple-400 mr-2"></i>
                            Your Mentorship Impact
                        </h2>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                        <div class="bg-gray-700 p-4 rounded-lg text-center">
                            <h3 class="text-3xl font-bold gradient-text">8</h3>
                            <p class="text-gray-400">Startups Mentored</p>
                        </div>
                        <div class="bg-gray-700 p-4 rounded-lg text-center">
                            <h3 class="text-3xl font-bold gradient-text">$4.2M</h3>
                            <p class="text-gray-400">Funding Raised by Mentees</p>
                        </div>
                        <div class="bg-gray-700 p-4 rounded-lg text-center">
                            <h3 class="text-3xl font-bold gradient-text">92%</h3>
                            <p class="text-gray-400">Satisfaction Rate</p>
                        </div>
                    </div>
                    
                    <div class="bg-gray-700 p-4 rounded-lg">
                        <h3 class="font-semibold mb-3">Recent Achievements by Your Mentees</h3>
                        <ul class="space-y-3">
                            <li class="flex items-start">
                                <i class="fas fa-trophy text-yellow-400 mt-1 mr-3"></i>
                                <div>
                                    <p class="text-sm"><span class="font-semibold">TechSprint</span> secured $1.2M in seed funding</p>
                                    <p class="text-xs text-gray-400">Oct 2, 2023</p>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-trophy text-yellow-400 mt-1 mr-3"></i>
                                <div>
                                    <p class="text-sm"><span class="font-semibold">HealthBridge</span> launched their MVP with 500+ beta users</p>
                                    <p class="text-xs text-gray-400">Sep 15, 2023</p>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-trophy text-yellow-400 mt-1 mr-3"></i>
                                <div>
                                    <p class="text-sm"><span class="font-semibold">Datalytics</span> partnered with a major enterprise client</p>
                                    <p class="text-xs text-gray-400">Sep 8, 2023</p>
                                </div>
                            </li>
                        </ul>
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
    // This is just a mock script to make the dashboard appear interactive
    document.addEventListener('DOMContentLoaded', function() {
        // Add hover effects to buttons
        const buttons = document.querySelectorAll('button');
        buttons.forEach(button => {
            button.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-2px)';
            });
            button.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });
        
        // Simulate loading effect on dashboard
        const dashboard = document.getElementById('mentor-dashboard');
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