<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Startup.Guru - Your Guide to Entrepreneurial Success</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --deep-blue: #0a0a2a;
            --dark-blue: #121242;
            --electric-blue: #0066ff;
            --vivid-red: #ff355e;
            --dark-red: #cc2a49;
            --black: #000000;
            --light-gray: #f5f5f5;
            --white: #ffffff;
            --gradient: linear-gradient(135deg, var(--electric-blue) 0%, var(--deep-blue) 50%, var(--black) 100%);
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: var(--light-gray);
            color: var(--black);
            overflow-x: hidden;
        }
        
        /* Header Styles */
        header {
            background:rgb(5, 5, 57);
            color: var(--white);
            padding: 1rem 5%;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
            transition: all 0.3s ease;
        }
        
        header.scrolled {
            padding: 0.5rem 5%;
            background: rgba(10, 10, 42, 0.95);
            backdrop-filter: blur(10px);
        }
        
        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1400px;
            margin: 0 auto;
        }
        
        .logo {
            display: flex;
            align-items: center;
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--white);
            text-decoration: none;
        }
        
        .logo span {
            color: var(--vivid-red);
        }
        
        .logo i {
            margin-right: 10px;
            font-size: 2rem;
            color: var(--vivid-red);
        }
        
        nav ul {
            display: flex;
            list-style: none;
        }
        
        nav ul li {
            margin-left: 2rem;
        }
        
        nav ul li a {
            color: var(--white);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
            position: relative;
        }
        
        nav ul li a:hover {
            color: var(--vivid-red);
        }
        
        nav ul li a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 0;
            background-color: var(--vivid-red);
            transition: width 0.3s;
        }
        
        nav ul li a:hover::after {
            width: 100%;
        }
        
        .auth-buttons .btn {
            margin-left: 1rem;
            padding: 0.6rem 1.2rem;
            border-radius: 30px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .auth-buttons .login {
            background: transparent;
            color: var(--white);
            border: 2px solid var(--electric-blue);
        }
        
        .auth-buttons .login:hover {
            background: var(--electric-blue);
        }
        
        .auth-buttons .signup {
            background: var(--vivid-red);
            color: var(--white);
            border: 2px solid var(--vivid-red);
        }
        
        .auth-buttons .signup:hover {
            background: var(--dark-red);
            border-color: var(--dark-red);
        }
        
        /* Mobile Menu Toggle */
        .menu-toggle {
            display: none;
            width: 30px;
            height: 20px;
            position: relative;
            cursor: pointer;
            z-index: 1001;
        }
        
        .menu-toggle i {
            position: absolute;
            height: 3px;
            width: 100%;
            background: var(--white);
            transition: all 0.3s;
        }
        
        .menu-toggle i:nth-child(1) {
            top: 0;
        }
        
        .menu-toggle i:nth-child(2) {
            top: 50%;
            transform: translateY(-50%);
        }
        
        .menu-toggle i:nth-child(3) {
            bottom: 0;
        }
        
        .menu-toggle.active i:nth-child(1) {
            top: 50%;
            transform: translateY(-50%) rotate(45deg);
        }
        
        .menu-toggle.active i:nth-child(2) {
            opacity: 0;
        }
        
        .menu-toggle.active i:nth-child(3) {
            bottom: 50%;
            transform: translateY(50%) rotate(-45deg);
        }
        
        /* Hero Section */
        .hero {
            height: 100vh;
            background: var(--gradient);
            display: flex;
            align-items: center;
            padding: 0 5%;
            position: relative;
            overflow: hidden;
        }
        
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2069&q=80') no-repeat center center/cover;
            opacity: 0.1;
        }
        
        .hero-content {
            max-width: 600px;
            z-index: 1;
            color: var(--white);
        }
        
        .hero-content h1 {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            line-height: 1.2;
        }
        
        .hero-content h1 span {
            color: var(--vivid-red);
            text-shadow: 0 0 10px rgba(255, 53, 94, 0.5);
        }
        
        .hero-content p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }
        
        .hero-buttons .btn {
            padding: 0.8rem 1.8rem;
            border-radius: 30px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            margin-right: 1rem;
            font-size: 1rem;
        }
        
        .hero-buttons .primary {
            background: var(--vivid-red);
            color: var(--white);
            border: 2px solid var(--vivid-red);
            box-shadow: 0 4px 15px rgba(255, 53, 94, 0.4);
        }
        
        .hero-buttons .primary:hover {
            background: var(--dark-red);
            border-color: var(--dark-red);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(255, 53, 94, 0.6);
        }
        
        .hero-buttons .secondary {
            background: transparent;
            color: var(--white);
            border: 2px solid var(--white);
        }
        
        .hero-buttons .secondary:hover {
            background: rgba(255, 255, 255, 0.1);
            transform: translateY(-2px);
        }
        
        .hero-image {
            position: absolute;
            right: 5%;
            width: 50%;
            max-width: 700px;
            animation: float 6s ease-in-out infinite;
            filter: drop-shadow(0 10px 20px rgba(0, 0, 0, 0.3));
        }
        
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }
        
        /* Features Section */
        .features {
            padding: 5rem 5%;
            background: var(--white);
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 3rem;
        }
        
        .section-title h2 {
            font-size: 2.5rem;
            color: var(--deep-blue);
            margin-bottom: 1rem;
        }
        
        .section-title p {
            color: #666;
            font-size: 1.1rem;
            max-width: 700px;
            margin: 0 auto;
        }
        
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .feature-card {
            background: var(--white);
            border-radius: 10px;
            padding: 2rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s, box-shadow 0.3s;
            border: 1px solid #eee;
            position: relative;
            overflow: hidden;
        }
        
        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background: var(--vivid-red);
            transition: width 0.3s;
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .feature-card:hover::before {
            width: 8px;
        }
        
        .feature-icon {
            font-size: 2.5rem;
            color: var(--electric-blue);
            margin-bottom: 1.5rem;
        }
        
        .feature-card h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: var(--deep-blue);
        }
        
        .feature-card p {
            color: #666;
            line-height: 1.6;
        }
        
        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            z-index: 2000;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: opacity 0.3s;
        }
        
        .modal.active {
            display: flex;
            opacity: 1;
        }
        
        .modal-content {
            background: var(--white);
            border-radius: 10px;
            width: 90%;
            max-width: 450px;
            padding: 2.5rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            transform: translateY(-50px);
            transition: transform 0.3s;
            position: relative;
            border-top: 4px solid var(--vivid-red);
        }
        
        .modal.active .modal-content {
            transform: translateY(0);
        }
        
        .close-modal {
            position: absolute;
            top: 15px;
            right: 15px;
            font-size: 1.5rem;
            color: #999;
            cursor: pointer;
            transition: color 0.3s;
        }
        
        .close-modal:hover {
            color: var(--vivid-red);
        }
        
        .modal h2 {
            text-align: center;
            color: var(--deep-blue);
            margin-bottom: 1.5rem;
            font-size: 2rem;
        }
        
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: var(--deep-blue);
            font-weight: 500;
        }
        
        .form-group input {
            width: 100%;
            padding: 0.8rem 1rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
            transition: border-color 0.3s;
        }
        
        .form-group input:focus {
            border-color: var(--electric-blue);
            outline: none;
            box-shadow: 0 0 0 2px rgba(0, 102, 255, 0.2);
        }
        
        .form-actions {
            margin-top: 2rem;
        }
        
        .form-actions button {
            width: 100%;
            padding: 0.8rem;
            background: var(--vivid-red);
            color: var(--white);
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s, transform 0.2s;
            box-shadow: 0 4px 10px rgba(255, 53, 94, 0.3);
        }
        
        .form-actions button:hover {
            background: var(--dark-red);
            transform: translateY(-2px);
        }
        
        .form-actions button:active {
            transform: translateY(0);
        }
        
        .form-footer {
            text-align: center;
            margin-top: 1.5rem;
            color: #666;
        }
        
        .form-footer a {
            color: var(--electric-blue);
            text-decoration: none;
            font-weight: 500;
        }
        
        .form-footer a:hover {
            color: var(--vivid-red);
            text-decoration: underline;
        }
        
        .social-login {
            margin: 1.5rem 0;
            text-align: center;
        }
        
        .social-login p {
            color: #666;
            margin-bottom: 1rem;
            position: relative;
        }
        
        .social-login p::before,
        .social-login p::after {
            content: '';
            position: absolute;
            top: 50%;
            width: 30%;
            height: 1px;
            background: #ddd;
        }
        
        .social-login p::before {
            left: 0;
        }
        
        .social-login p::after {
            right: 0;
        }
        
        .social-icons {
            display: flex;
            justify-content: center;
            gap: 1rem;
        }
        
        .social-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-size: 1.2rem;
            cursor: pointer;
            transition: transform 0.3s;
        }
        
        /* Mobile Menu Styles */
        .mobile-menu {
            position: fixed;
            top: 70px;
            left: -100%;
            width: 80%;
            height: calc(100vh - 70px);
            background: var(--deep-blue);
            transition: left 0.3s;
            z-index: 999;
            padding: 2rem;
            display: flex;
            flex-direction: column;
        }
        
        .mobile-menu.active {
            left: 0;
        }
        
        .mobile-menu ul {
            list-style: none;
            margin-bottom: 2rem;
        }
        
        .mobile-menu ul li {
            margin-bottom: 1.5rem;
        }
        
        .mobile-menu ul li a {
            color: var(--white);
            text-decoration: none;
            font-size: 1.2rem;
            transition: color 0.3s;
        }
        
        .mobile-menu ul li a:hover {
            color: var(--vivid-red);
        }
        
        .mobile-auth-buttons {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            margin-top: auto;
        }
        
        .mobile-auth-buttons .btn {
            padding: 0.8rem;
            border-radius: 30px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            text-align: center;
            font-size: 1rem;
        }
        
        .mobile-auth-buttons .login {
            background: transparent;
            color: var(--white);
            border: 2px solid var(--electric-blue);
        }
        
        .mobile-auth-buttons .login:hover {
            background: var(--electric-blue);
        }
        
        .mobile-auth-buttons .signup {
            background: var(--vivid-red);
            color: var(--white);
            border: 2px solid var(--vivid-red);
        }
        
        .mobile-auth-buttons .signup:hover {
            background: var(--dark-red);
            border-color: var(--dark-red);
        }
        
        /* Responsive Styles */
        @media (max-width: 992px) {
            .hero-content h1 {
                font-size: 2.8rem;
            }
            
            .hero-image {
                width: 45%;
                opacity: 0.8;
            }
        }
        
        @media (max-width: 768px) {
            header {
                padding: 1rem;
            }
            
            .logo {
                font-size: 1.5rem;
            }
            
            .logo i {
                font-size: 1.7rem;
            }
            
            nav {
                display: none;
            }
            
            .auth-buttons {
                display: none;
            }
            
            .menu-toggle {
                display: block;
            }
            
            .hero {
                flex-direction: column;
                text-align: center;
                padding-top: 100px;
                height: auto;
                padding-bottom: 3rem;
            }
            
            .hero-content {
                max-width: 100%;
                margin-bottom: 3rem;
            }
            
            .hero-buttons {
                display: flex;
                justify-content: center;
            }
            
            .hero-image {
                position: relative;
                right: auto;
                width: 80%;
                max-width: 500px;
                margin: 0 auto;
            }
        }
        
        @media (max-width: 576px) {
            .hero-content h1 {
                font-size: 2.2rem;
            }
            
            .hero-content p {
                font-size: 1rem;
            }
            
            .hero-buttons .btn {
                padding: 0.6rem 1.2rem;
                font-size: 0.9rem;
                margin-bottom: 0.5rem;
            }
            
            .hero-buttons {
                flex-direction: column;
                align-items: center;
            }
            
            .section-title h2 {
                font-size: 2rem;
            }
            
            .modal-content {
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header id="header">
        <div class="header-container">
            <a href="#" class="logo">
                <i class="fas fa-bolt"></i>
                Startup.<span>Guru</span>
            </a>
            
            <div class="auth-buttons">
                <button class="btn login" id="loginBtn">Login</button>
                <button class="btn signup" id="signupBtn">Sign Up</button>
            </div>
            
            <div class="menu-toggle" id="menuToggle">
                <i></i>
                <i></i>
                <i></i>
            </div>
        </div>
    </header>
    
    <!-- Mobile Menu -->
    <div class="mobile-menu" id="mobileMenu">

        
        <div class="mobile-auth-buttons">
            <button class="btn login" id="mobileLoginBtn">Login</button>
            <button class="btn signup" id="mobileSignupBtn">Sign Up</button>
        </div>
    </div>
    
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Ignite Your Startup <span>Journey</span> With Expert Power</h1>
            <p>Startup.Guru supercharges your entrepreneurial path with cutting-edge tools, dynamic resources, and explosive growth strategies. Join the revolution of successful founders.</p>
            <div class="hero-buttons">
                <button class="btn primary" id="heroSignup">Launch Now</button>
                <button class="btn secondary">Explore More</button>
            </div>
        </div>
        <img src="https://images.unsplash.com/photo-1579389083078-4e7018379f7e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Startup Team" class="hero-image">
    </section>
    
    <!-- Features Section -->
    <section class="features">
        <div class="section-title">
            <h2>Why Startup.Guru Accelerates Success</h2>
            <p>We fuel your startup's growth with powerful tools and strategic advantages</p>
        </div>
        
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-rocket"></i>
                </div>
                <h3>Rapid Scaling</h3>
                <p>Our growth frameworks help you scale at unprecedented speed without losing control or vision.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-chart-network"></i>
                </div>
                <h3>Strategic Networks</h3>
                <p>Access our exclusive network of investors, mentors, and potential partners who can propel your startup forward.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-brain"></i>
                </div>
                <h3>Intelligent Analytics</h3>
                <p>AI-powered insights and predictive analytics to make smarter decisions and outperform competitors.</p>
            </div>
        </div>
    </section>
    
    <!-- Login Modal -->
    <div class="modal" id="loginModal">
        <div class="modal-content">
            <span class="close-modal">&times;</span>
            <h2>Welcome Back Founder</h2>
            
            <div class="form-group">
                <label for="loginEmail">Email Address</label>
                <input type="email" id="loginEmail" placeholder="Enter your email">
            </div>
            
            <div class="form-group">
                <label for="loginPassword">Password</label>
                <input type="password" id="loginPassword" placeholder="Enter your password">
            </div>
            
            <div class="form-actions">
                <button id="loginSubmit">Launch Dashboard</button>
            </div>
            
            <div class="form-footer">
                <p>New to Startup.Guru? <a href="#" id="switchToSignup">Create Account</a></p>
                <p><a href="#">Forgot password?</a></p>
            </div>
        </div>
    </div>
    
    <!-- Signup Modal -->
    <div class="modal" id="signupModal">
        <div class="modal-content">
            <span class="close-modal">&times;</span>
            <h2>Join the Revolution</h2>
            
            <div class="form-group">
                <label for="signupName">Full Name</label>
                <input type="text" id="signupName" placeholder="Enter your full name">
            </div>
            
            <div class="form-group">
                <label for="signupEmail">Email Address</label>
                <input type="email" id="signupEmail" placeholder="Enter your email">
            </div>
            
            <div class="form-group">
                <label for="signupPassword">Password</label>
                <input type="password" id="signupPassword" placeholder="Create a password (min 8 chars)">
            </div>
            
            <div class="form-group">
                <label for="signupConfirm">Confirm Password</label>
                <input type="password" id="signupConfirm" placeholder="Confirm your password">
            </div>
            
            <div class="form-actions">
                <button id="signupSubmit">Start My Journey</button>
            </div>
            
            <div class="form-footer">
                <p>Already revolutionizing? <a href="#" id="switchToLogin">Login</a></p>
            </div>
        </div>
    </div>
    
    <script>
        // Header Scroll Effect
        window.addEventListener('scroll', function() {
            const header = document.getElementById('header');
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
        
        // Mobile Menu Toggle
        const menuToggle = document.getElementById('menuToggle');
        const mobileMenu = document.getElementById('mobileMenu');
        
        menuToggle.addEventListener('click', function() {
            this.classList.toggle('active');
            mobileMenu.classList.toggle('active');
            
            if (mobileMenu.classList.contains('active')) {
                document.body.style.overflow = 'hidden';
            } else {
                document.body.style.overflow = 'auto';
            }
        });
        
        // Close mobile menu when clicking on a link
        const mobileLinks = document.querySelectorAll('.mobile-menu a');
        mobileLinks.forEach(link => {
            link.addEventListener('click', function() {
                menuToggle.classList.remove('active');
                mobileMenu.classList.remove('active');
                document.body.style.overflow = 'auto';
            });
        });
        
        // Modal Functionality
        const loginBtn = document.getElementById('loginBtn');
        const signupBtn = document.getElementById('signupBtn');
        const mobileLoginBtn = document.getElementById('mobileLoginBtn');
        const mobileSignupBtn = document.getElementById('mobileSignupBtn');
        const heroSignup = document.getElementById('heroSignup');
        const loginModal = document.getElementById('loginModal');
        const signupModal = document.getElementById('signupModal');
        const closeModals = document.querySelectorAll('.close-modal');
        const switchToSignup = document.getElementById('switchToSignup');
        const switchToLogin = document.getElementById('switchToLogin');
        
        // Show Login Modal
        function showLoginModal() {
            loginModal.classList.add('active');
            document.body.style.overflow = 'hidden';
            // Close mobile menu if open
            menuToggle.classList.remove('active');
            mobileMenu.classList.remove('active');
        }
        
        // Show Signup Modal
        function showSignupModal() {
            signupModal.classList.add('active');
            document.body.style.overflow = 'hidden';
            // Close mobile menu if open
            menuToggle.classList.remove('active');
            mobileMenu.classList.remove('active');
        }
        
        loginBtn.addEventListener('click', showLoginModal);
        mobileLoginBtn.addEventListener('click', showLoginModal);
        
        signupBtn.addEventListener('click', showSignupModal);
        mobileSignupBtn.addEventListener('click', showSignupModal);
        
        // Hero Signup Button
        heroSignup.addEventListener('click', showSignupModal);
        
        // Close Modals
        closeModals.forEach(btn => {
            btn.addEventListener('click', function() {
                loginModal.classList.remove('active');
                signupModal.classList.remove('active');
                document.body.style.overflow = 'auto';
            });
        });
        
        // Switch between Login and Signup
        switchToSignup.addEventListener('click', function(e) {
            e.preventDefault();
            loginModal.classList.remove('active');
            signupModal.classList.add('active');
        });
        
        switchToLogin.addEventListener('click', function(e) {
            e.preventDefault();
            signupModal.classList.remove('active');
            loginModal.classList.add('active');
        });
        
        // Close modal when clicking outside
        window.addEventListener('click', function(e) {
            if (e.target === loginModal) {
                loginModal.classList.remove('active');
                document.body.style.overflow = 'auto';
            }
            if (e.target === signupModal) {
                signupModal.classList.remove('active');
                document.body.style.overflow = 'auto';
            }
        });
        
        // Form Submission (example)
        document.getElementById('loginSubmit').addEventListener('click', function() {
            // Add your login logic here
            alert('Login functionality would be implemented here');
        });
        
        document.getElementById('signupSubmit').addEventListener('click', function() {
            // Add your signup logic here
            alert('Signup functionality would be implemented here');
        });
    </script>
</body>
</html>