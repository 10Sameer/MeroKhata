<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Features - Mero Khata | Complete Financial Management Solution</title>
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
                    <li><a href="features.php" class="active">Features</a></li>
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

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <h1>Powerful Features for Complete Financial Control</h1>
            <p>Discover all the tools and features that make Mero Khata the best choice for managing your personal finances and business accounts</p>
        </div>
    </section>

    <!-- Features Categories -->
    <section class="features-categories">
        <div class="container">
            <div class="category-nav">
                <button class="category-btn active" data-target="savings">
                    <i class="fas fa-piggy-bank"></i> Savings Tracker
                </button>
                <button class="category-btn" data-target="loans">
                    <i class="fas fa-hand-holding-usd"></i> Loan Management
                </button>
                <button class="category-btn" data-target="reports">
                    <i class="fas fa-chart-bar"></i> Financial Reports
                </button>
                <button class="category-btn" data-target="reminders">
                    <i class="fas fa-bell"></i> Smart Reminders
                </button>
                <button class="category-btn" data-target="multi">
                    <i class="fas fa-users"></i> Multi-user Access
                </button>
                <button class="category-btn" data-target="security">
                    <i class="fas fa-shield-alt"></i> Security Features
                </button>
            </div>
        </div>
    </section>



</body>
</html>