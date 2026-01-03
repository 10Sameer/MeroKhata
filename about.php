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

</body>
</html>