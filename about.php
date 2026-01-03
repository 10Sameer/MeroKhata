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


</body>
</html>