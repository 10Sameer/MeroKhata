<?php
require_once 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mero Khata - Personal Saving Account & Loan Management</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        :root {
            --primary: #2c3e50;
            --secondary: #3498db;
            --accent: #e74c3c;
            --success: #27ae60;
            --light: #ecf0f1;
            --dark: #2c3e50;
            --gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        
        body {
            line-height: 1.6;
            color: #333;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Header Styles */
        header {
            background: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }
        
        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
        }
        
        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
        }
        
        .logo-icon {
            width: 40px;
            height: 40px;
            background: var(--gradient);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            font-size: 20px;
        }
        
        .logo-text h1 {
            font-size: 24px;
            color: var(--primary);
            line-height: 1.2;
        }
        
        .logo-text p {
            font-size: 12px;
            color: var(--secondary);
            font-weight: 500;
        }
        
        nav ul {
            display: flex;
            list-style: none;
            gap: 30px;
        }
        
        nav a {
            text-decoration: none;
            color: var(--primary);
            font-weight: 600;
            padding: 8px 0;
            position: relative;
            transition: color 0.3s;
        }
        
        nav a:hover {
            color: var(--secondary);
        }
        
        nav a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--secondary);
            transition: width 0.3s;
        }
        
        nav a:hover::after {
            width: 100%;
        }
        
        .auth-buttons {
            display: flex;
            gap: 15px;
        }
        
        .btn {
            padding: 10px 25px;
            border-radius: 25px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            border: none;
            text-decoration: none;
            display: inline-block;
            text-align: center;
        }
        
        .btn-login {
            background: transparent;
            color: var(--primary);
            border: 2px solid var(--primary);
        }
        
        .btn-signup {
            background: var(--secondary);
            color: white;
        }
        
        .btn-login:hover {
            background: var(--primary);
            color: white;
            transform: translateY(-2px);
        }
        
        .btn-signup:hover {
            background: var(--primary);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(52, 152, 219, 0.3);
        }
        
        .user-welcome {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .user-welcome span {
            background: var(--success);
            color: white;
            padding: 8px 20px;
            border-radius: 20px;
            font-weight: 600;
        }
        
        /* Hero Section */
        .hero {
            background: var(--gradient);
            color: white;
            padding: 150px 0 100px;
            margin-top: 70px;
            text-align: center;
        }
        
        .hero-content {
            max-width: 800px;
            margin: 0 auto;
        }
        
        .hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
            line-height: 1.2;
        }
        
        .hero p {
            font-size: 20px;
            margin-bottom: 40px;
            opacity: 0.9;
        }
        
        .hero-buttons {
            display: flex;
            gap: 20px;
            justify-content: center;
            margin-top: 30px;
        }
        
        .btn-hero {
            padding: 15px 40px;
            font-size: 18px;
            border-radius: 30px;
        }
        
        .btn-hero-primary {
            background: white;
            color: var(--primary);
        }
        
        .btn-hero-secondary {
            background: transparent;
            color: white;
            border: 2px solid white;
        }
        
        /* Features Preview */
        .features-preview {
            padding: 80px 0;
            background: #f8f9fa;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }
        
        .section-title h2 {
            font-size: 36px;
            color: var(--primary);
            margin-bottom: 15px;
        }
        
        .section-title p {
            color: #666;
            max-width: 600px;
            margin: 0 auto;
        }
        
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .feature-card {
            background: white;
            padding: 40px 30px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            text-align: center;
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }
        
        .feature-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(45deg, var(--secondary), var(--primary));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            color: white;
            font-size: 32px;
        }
        
        .feature-card h3 {
            color: var(--primary);
            margin-bottom: 15px;
            font-size: 22px;
        }
        
        .feature-card p {
            color: #666;
            line-height: 1.6;
        }
        /* AKDLKLASKLDAKDMKASDMKADMDKALDKLDKALDDLKADLKDLDKLADKLDKADLAKLD */
        /* Stats Section */
        .stats {
            padding: 80px 0;
            background: var(--primary);
            color: white;
        }
        
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
            text-align: center;
        }
        
        .stat-item h3 {
            font-size: 42px;
            color: var(--secondary);
            margin-bottom: 10px;
        }
        
        .stat-item p {
            font-size: 18px;
            opacity: 0.9;
        }
        
        /* CTA Section */
        .cta {
            padding: 100px 0;
            background: linear-gradient(rgba(44, 62, 80, 0.9), rgba(44, 62, 80, 0.9)), url('https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
        }
        
        .cta h2 {
            font-size: 36px;
            margin-bottom: 20px;
        }
        
        .cta p {
            font-size: 18px;
            max-width: 600px;
            margin: 0 auto 40px;
            opacity: 0.9;
        }
        
        
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container nav-container">
            <a href="index.php" class="logo">
                <div class="logo-icon">MK</div>
                <div class="logo-text">
                    <h1>Mero Khata</h1>
                    <p>Personal Finance Manager</p>
                </div>
            </a>
            
            <div class="menu-toggle" id="menuToggle">
                <i class="fas fa-bars"></i>
            </div>
            
            <nav>
                <ul id="navMenu">
                    <li><a href="index.php" class="active">Home</a></li>
                    <li><a href="features.php">Features</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
            
            <div class="auth-buttons">
                <?php if(isLoggedIn()): ?>
                    <div class="user-welcome">
                        <span>Welcome, <?php echo $_SESSION['username']; ?>!</span>
                        <a href="dashboard.php" class="btn btn-login">Dashboard</a>
                        <a href="logout.php" class="btn btn-signup">Logout</a>
                    </div>
                <?php else: ?>
                    <a href="login.php" class="btn btn-login">Login</a>
                    <a href="signup.php" class="btn btn-signup">Sign Up Free</a>
                <?php endif; ?>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container hero-content">
            <h1>Take Control of Your Finances with Mero Khata</h1>
            <p>The ultimate digital ledger for tracking savings, loans, and personal expenses. Simple, secure, and accessible anywhere.</p>
            <div class="hero-buttons">
                <?php if(!isLoggedIn()): ?>
                    <a href="signup.php" class="btn btn-hero btn-hero-primary">Get Started Free</a>
                    <a href="features.php" class="btn btn-hero btn-hero-secondary">Learn More</a>
                <?php else: ?>
                    <a href="dashboard.php" class="btn btn-hero btn-hero-primary">Go to Dashboard</a>
                    <a href="features.php" class="btn btn-hero btn-hero-secondary">Explore Features</a>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- Features Preview -->
    <section class="features-preview">
        <div class="container">
            <div class="section-title">
                <h2>Why Choose Mero Khata?</h2>
                <p>Everything you need to manage your personal finances effectively</p>
            </div>
            
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Secure & Private</h3>
                    <p>Your financial data is encrypted and secure. We never share your personal information with third parties.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-sync-alt"></i>
                    </div>
                    <h3>Real-time Updates</h3>
                    <p>Track your savings and loans in real-time. Get instant updates on your financial status anytime, anywhere.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Smart Analytics</h3>
                    <p>Visual reports and insights help you understand your spending patterns and improve your financial health.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-bell"></i>
                    </div>
                    <h3>Payment Reminders</h3>
                    <p>Never miss a payment deadline. Get automatic reminders for loan repayments and receivables.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3>Mobile Friendly</h3>
                    <p>Access your khata from any device - desktop, tablet, or mobile phone. Your data syncs across all devices.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Multi-user Support</h3>
                    <p>Perfect for families and small businesses. Multiple users can manage their accounts independently.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item">
                    <h3>1000+</h3>
                    <p>Active Users</p>
                </div>
                <div class="stat-item">
                    <h3>₹50M+</h3>
                    <p>Transactions Tracked</p>
                </div>
                <div class="stat-item">
                    <h3>99.9%</h3>
                    <p>Uptime</p>
                </div>
                <div class="stat-item">
                    <h3>24/7</h3>
                    <p>Customer Support</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <h2>Ready to Transform Your Financial Management?</h2>
            <p>Join thousands of users who have simplified their financial tracking with Mero Khata. Start your journey to better financial health today.</p>
            <a href="<?php echo isLoggedIn() ? 'dashboard.php' : 'signup.php'; ?>" class="btn btn-signup btn-hero">
                <?php echo isLoggedIn() ? 'Go to Dashboard' : 'Start Free Trial'; ?>
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <div class="logo">
                        <div class="logo-icon">MK</div>
                        <div class="logo-text">
                            <h1>Mero Khata</h1>
                            <p>Personal Finance Manager</p>
                        </div>
                    </div>
                    <p>Your trusted partner in personal finance management since 2024.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                
                <div class="footer-column">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="features.php">Features</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="privacy.php">Privacy Policy</a></li>
                        <li><a href="terms.php">Terms of Service</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3>Features</h3>
                    <ul>
                        <li><a href="features.php#savings">Savings Tracker</a></li>
                        <li><a href="features.php#loans">Loan Management</a></li>
                        <li><a href="features.php#reports">Financial Reports</a></li>
                        <li><a href="features.php#reminders">Payment Reminders</a></li>
                        <li><a href="features.php#multi">Multi-user Accounts</a></li>
                        <li><a href="features.php#mobile">Mobile Access</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3>Contact Info</h3>
                    <ul class="contact-info">
                        <li><i class="fas fa-map-marker-alt"></i> Kathmandu, Nepal</li>
                        <li><i class="fas fa-phone"></i> +977 1-1234567</li>
                        <li><i class="fas fa-envelope"></i> info@merokhata.com</li>
                        <li><i class="fas fa-clock"></i> Support: 24/7</li>
                    </ul>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2024 Mero Khata. All rights reserved. | Designed with <i class="fas fa-heart" style="color: #e74c3c;"></i> for better financial management</p>
            </div>
        </div>
    </footer>
    
    <script>
        // Mobile menu toggle
        document.getElementById('menuToggle').addEventListener('click', function() {
            document.getElementById('navMenu').classList.toggle('active');
        });

        // Close menu when clicking outside
        document.addEventListener('click', function(event) {
            const navMenu = document.getElementById('navMenu');
            const menuToggle = document.getElementById('menuToggle');
            
            if (!navMenu.contains(event.target) && !menuToggle.contains(event.target)) {
                navMenu.classList.remove('active');
            }
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                    
                    // Close mobile menu if open
                    document.getElementById('navMenu').classList.remove('active');
                }
            });
        });

        // Add active class to current page in navigation
        document.addEventListener('DOMContentLoaded', function() {
            const currentPage = window.location.pathname.split('/').pop();
            const navLinks = document.querySelectorAll('nav a');
            
            navLinks.forEach(link => {
                const linkPage = link.getAttribute('href');
                if (linkPage === currentPage || 
                   (currentPage === '' && linkPage === 'index.php')) {
                    link.classList.add('active');
                } else {
                    link.classList.remove('active');
                }
            });
        });
    </script>
 
</body>
</html>