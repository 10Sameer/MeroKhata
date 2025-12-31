<?php
require_once 'db_connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mero Khata - Personal Saving Account & Loan Management</title>
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

   

</body>
</html>