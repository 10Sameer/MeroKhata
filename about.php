<?php
require_once 'db_connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Mero Khata | Our Story & Mission</title>
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
            --light: #f8f9fa;
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
        
        /* Header Styles (Same as index.php) */
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
        
        /* Page Header */
        .page-header {
            background: var(--gradient);
            color: white;
            padding: 120px 0 80px;
            margin-top: 70px;
            text-align: center;
        }
        
        .page-header h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }
        
        .page-header p {
            font-size: 20px;
            max-width: 700px;
            margin: 0 auto;
            opacity: 0.9;
        }
        
        /* About Content */
        .about-content {
            padding: 80px 0;
        }
        
        .about-section {
            margin-bottom: 80px;
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
            max-width: 700px;
            margin: 0 auto;
            font-size: 18px;
        }
        
        .story-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }
        
        .story-text h3 {
            font-size: 28px;
            color: var(--primary);
            margin-bottom: 20px;
        }
        
        .story-text p {
            color: #666;
            font-size: 18px;
            line-height: 1.8;
            margin-bottom: 20px;
        }
        
        .story-image {
            background: white;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }
        
        .image-placeholder {
            width: 100%;
            height: 300px;
            background: linear-gradient(45deg, #f1f1f1, #e0e0e0);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #999;
            font-size: 18px;
        }
        
        /* Mission & Vision */
        .mission-vision {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
            margin-top: 50px;
        }
        
        .mission-card {
            background: white;
            padding: 40px 30px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            text-align: center;
            transition: transform 0.3s;
        }
        
        .mission-card:hover {
            transform: translateY(-10px);
        }
        
        .mission-icon {
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
        
        .mission-card h3 {
            color: var(--primary);
            margin-bottom: 20px;
            font-size: 24px;
        }
        
        .mission-card p {
            color: #666;
            line-height: 1.8;
        }
        
        /* Team Section */
        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }
        
        .team-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }
        
        .team-card:hover {
            transform: translateY(-10px);
        }
        
        .team-image {
            height: 250px;
            background: linear-gradient(45deg, #f1f1f1, #e0e0e0);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #999;
        }
        
        .team-info {
            padding: 25px;
            text-align: center;
        }
        
        .team-info h3 {
            color: var(--primary);
            margin-bottom: 5px;
            font-size: 20px;
        }
        
        .team-info p {
            color: var(--secondary);
            margin-bottom: 15px;
            font-weight: 500;
        }
        
        .team-info .bio {
            color: #666;
            font-size: 14px;
            line-height: 1.6;
        }
        
        /* Values */
        .values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }
        
        .value-card {
            text-align: center;
            padding: 30px 20px;
        }
        
        .value-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(45deg, var(--success), #2ecc71);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            color: white;
            font-size: 28px;
        }
        
        .value-card h3 {
            color: var(--primary);
            margin-bottom: 15px;
            font-size: 20px;
        }
        
        .value-card p {
            color: #666;
            font-size: 14px;
            line-height: 1.6;
        }
        
        /* CTA */
        .cta-section {
            padding: 100px 0;
            background: linear-gradient(rgba(44, 62, 80, 0.9), rgba(44, 62, 80, 0.9)), url('https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
        }
        
        .cta-section h2 {
            font-size: 36px;
            margin-bottom: 20px;
        }
        
        .cta-section p {
            font-size: 18px;
            max-width: 600px;
            margin: 0 auto 40px;
            opacity: 0.9;
        }
        
        /* Footer (Same as index.php) */
        footer {
            background: #2c3e50;
            color: white;
            padding: 60px 0 30px;
        }
        
        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }
        
        .footer-column h3 {
            color: var(--secondary);
            margin-bottom: 25px;
            font-size: 20px;
        }
        
        .footer-column ul {
            list-style: none;
        }
        
        .footer-column ul li {
            margin-bottom: 10px;
        }
        
        .footer-column ul li a {
            color: #bbb;
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .footer-column ul li a:hover {
            color: white;
        }
        
        .footer-bottom {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(255,255,255,0.1);
            color: #bbb;
        }
        
        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }
        
        .social-links a {
            width: 40px;
            height: 40px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            transition: all 0.3s;
        }
        
        .social-links a:hover {
            background: var(--secondary);
            transform: translateY(-3px);
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .page-header h1 {
                font-size: 36px;
            }
            
            .page-header p {
                font-size: 18px;
            }
            
            .story-grid {
                grid-template-columns: 1fr;
            }
            
            .section-title h2 {
                font-size: 28px;
            }
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
            
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="features.php">Features</a></li>
                    <li><a href="about.php" class="active">About</a></li>
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

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <h1>Our Story & Mission</h1>
            <p>Learn about Mero Khata, our journey, and our commitment to transforming personal finance management in Nepal and beyond.</p>
        </div>
    </section>

    <!-- About Content -->
    <div class="about-content">
        <div class="container">
            <!-- Our Story -->
            <section class="about-section">
                <div class="section-title">
                    <h2>Our Story</h2>
                    <p>How Mero Khata began and evolved into Nepal's leading personal finance management platform</p>
                </div>
                
                <div class="story-grid">
                    <div class="story-text">
                        <h3>From Simple Idea to Powerful Platform</h3>
                        <p>Mero Khata was founded in 2024 by a team of Nepali developers and finance enthusiasts who recognized the need for a simple yet powerful digital solution to manage personal finances.</p>
                        <p>We observed that many people in Nepal still rely on physical notebooks (khata) to track their savings, loans, and expenses. While traditional methods have their charm, they lack the efficiency, security, and analytical power of digital solutions.</p>
                        <p>Our mission was clear: create a user-friendly, secure, and feature-rich platform that would digitize the traditional "khata" while preserving its simplicity and familiarity.</p>
                        <p>Today, Mero Khata serves thousands of users across Nepal, helping individuals, families, and small businesses take control of their finances with confidence.</p>
                    </div>
                    
                    <div class="story-image">
                        <div class="image-placeholder">
                            <div>
                                <i class="fas fa-book-open" style="font-size: 48px; margin-bottom: 20px;"></i>
                                <p>Our Journey Visualization</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Mission & Vision -->
            <section class="about-section">
                <div class="section-title">
                    <h2>Our Mission & Vision</h2>
                    <p>What drives us forward and what we aspire to achieve</p>
                </div>
                
                <div class="mission-vision">
                    <div class="mission-card">
                        <div class="mission-icon">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <h3>Our Mission</h3>
                        <p>To empower every individual in Nepal with the tools and knowledge to manage their personal finances effectively, promoting financial literacy and independence through accessible technology.</p>
                    </div>
                    
                    <div class="mission-card">
                        <div class="mission-icon">
                            <i class="fas fa-eye"></i>
                        </div>
                        <h3>Our Vision</h3>
                        <p>To become Nepal's most trusted personal finance platform, reaching millions of users and contributing to the nation's financial well-being and economic growth.</p>
                    </div>
                    
                    <div class="mission-card">
                        <div class="mission-icon">
                            <i class="fas fa-heart"></i>
                        </div>
                        <h3>Our Values</h3>
                        <p>Simplicity, Security, Innovation, Customer-Centricity, and Social Responsibility guide every decision we make and every feature we develop.</p>
                    </div>
                </div>
            </section>

            <!-- Our Team -->
            <section class="about-section">
                <div class="section-title">
                    <h2>Meet Our Team</h2>
                    <p>The passionate individuals behind Mero Khata's success</p>
                </div>
                
                <div class="team-grid">
                    <div class="team-card">
                        <div class="team-image">
                            <i class="fas fa-user" style="font-size: 48px;"></i>
                        </div>
                        <div class="team-info">
                            <h3>Rajesh Sharma</h3>
                            <p>Founder & CEO</p>
                            <p class="bio">Former finance professional with 10+ years of experience in banking and fintech.</p>
                        </div>
                    </div>
                    
                    <div class="team-card">
                        <div class="team-image">
                            <i class="fas fa-user" style="font-size: 48px;"></i>
                        </div>
                        <div class="team-info">
                            <h3>Sunita Gurung</h3>
                            <p>Lead Developer</p>
                            <p class="bio">Full-stack developer with expertise in PHP, JavaScript, and financial systems.</p>
                        </div>
                    </div>
                    
                    <div class="team-card">
                        <div class="team-image">
                            <i class="fas fa-user" style="font-size: 48px;"></i>
                        </div>
                        <div class="team-info">
                            <h3>Bikash Thapa</h3>
                            <p>UI/UX Designer</p>
                            <p class="bio">Creative designer focused on creating intuitive and beautiful user experiences.</p>
                        </div>
                    </div>
                    
                    <div class="team-card">
                        <div class="team-image">
                            <i class="fas fa-user" style="font-size: 48px;"></i>
                        </div>
                        <div class="team-info">
                            <h3>Anita Shrestha</h3>
                            <p>Customer Support Head</p>
                            <p class="bio">Dedicated to ensuring every user has an excellent experience with our platform.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Our Values -->
            <section class="about-section">
                <div class="section-title">
                    <h2>Our Core Values</h2>
                    <p>The principles that guide everything we do</p>
                </div>
                
                <div class="values-grid">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-lock"></i>
                        </div>
                        <h3>Security First</h3>
                        <p>We prioritize the security and privacy of your financial data above all else.</p>
                    </div>
                    
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h3>Innovation</h3>
                        <p>Continuously improving and adding new features to serve you better.</p>
                    </div>
                    
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3>User-Centric</h3>
                        <p>Everything we build is designed with our users' needs and feedback in mind.</p>
                    </div>
                    
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <h3>Trust</h3>
                        <p>Building lasting relationships based on transparency and reliability.</p>
                    </div>
                    
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <h3>Education</h3>
                        <p>Promoting financial literacy through our platform and resources.</p>
                    </div>
                    
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-hand-holding-heart"></i>
                        </div>
                        <h3>Community</h3>
                        <p>Serving and contributing to the growth of our local communities.</p>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <h2>Join Our Growing Community</h2>
            <p>Be part of the financial revolution in Nepal. Start managing your finances the smart way with Mero Khata.</p>
            <a href="<?php echo isLoggedIn() ? 'dashboard.php' : 'signup.php'; ?>" class="btn btn-signup btn-large">
                <?php echo isLoggedIn() ? 'Go to Dashboard' : 'Join Now for Free'; ?>
            </a>
        </div>
    </section>

    <!-- Footer left -->
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
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3>Resources</h3>
                    <ul>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="faq.php">FAQ</a></li>
                        <li><a href="tutorials.php">Tutorials</a></li>
                        <li><a href="privacy.php">Privacy Policy</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3>Contact Info</h3>
                    <ul>
                        <li><i class="fas fa-map-marker-alt"></i> Kathmandu, Nepal</li>
                        <li><i class="fas fa-phone"></i> +977 1-1234567</li>
                        <li><i class="fas fa-envelope"></i> info@merokhata.com</li>
                    </ul>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2024 Mero Khata. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>