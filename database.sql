
CREATE DATABASE marina_luxe CHARACTER SET utf8 COLLATE utf8_general_ci;
USE marina_luxe;

-- Users table
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL
) DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Menu items
CREATE TABLE menu_items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,       -- Dish name
    price DECIMAL(10,2) NOT NULL,
    description TEXT                  -- Dish description
) DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Orders
CREATE TABLE orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    customer_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    delivery_time DATETIME NOT NULL,
    payment_method VARCHAR(50) NOT NULL,
    status ENUM('In Progress','Completed','Cancelled') DEFAULT 'In Progress'
) DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Reservations
CREATE TABLE reservations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    customer_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    guests_count INT NOT NULL,
    reservation_date DATE NOT NULL,
    reservation_time TIME NOT NULL,
    status ENUM('In Progress','Completed','Cancelled') DEFAULT 'In Progress'
) DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
