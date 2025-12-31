<?php
include 'db_connect.php';

$sqlCreateDB = "CREATE DATABASE IF NOT EXISTS merokhata";
if (!$conn->query($sqlCreateDB)) {
    die("Error creating database: " . $conn->error);
}

$conn->select_db("merokhata");


$conn->query("
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) UNIQUE NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    full_name VARCHAR(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)
");


$conn->query("
CREATE TABLE IF NOT EXISTS amount_to_receive (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    person_name VARCHAR(100) NOT NULL,
    reason VARCHAR(255),
    amount DECIMAL(10,2) NOT NULL,
    date_given DATE NOT NULL,
    due_date DATE,
    status ENUM('pending','partial','completed') DEFAULT 'pending',
    remaining_amount DECIMAL(10,2) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
)
");


$conn->query("
CREATE TABLE IF NOT EXISTS amount_to_pay (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    person_name VARCHAR(100) NOT NULL,
    reason VARCHAR(255),
    amount DECIMAL(10,2) NOT NULL,
    date_taken DATE NOT NULL,
    due_date DATE,
    status ENUM('pending','partial','completed') DEFAULT 'pending',
    remaining_amount DECIMAL(10,2) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
)
");


$conn->query("
CREATE TABLE IF NOT EXISTS transactions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    type ENUM('receive','pay') NOT NULL,
    related_id INT NOT NULL,
    person_name VARCHAR(100) NOT NULL,
    amount DECIMAL(10,2) NOT NULL,
    description VARCHAR(255),
    transaction_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
)
");


$conn->query("
CREATE TABLE IF NOT EXISTS payment_history (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    transaction_type ENUM('receive','pay') NOT NULL,
    main_id INT NOT NULL,
    amount_paid DECIMAL(10,2) NOT NULL,
    payment_date DATE NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
)
");

echo "✅ Database & all tables created successfully!";
$conn->close();
?>
