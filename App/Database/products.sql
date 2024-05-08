-- Create database if not exists
CREATE DATABASE IF NOT EXISTS crud_mvc;

-- Use the database
USE crud_mvc;

-- Create the products table
CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    description TEXT,
    qty INT NOT NULL
);

-- Insert sample data into the products table
INSERT INTO products (name, price, description, qty) VALUES 
    ('Laptop', 999.99, '15-inch, 8GB RAM, 512GB SSD', 10),
    ('Smartphone', 599.99, '6.5-inch, 128GB, 5G support', 20),
    ('Headphones', 149.99, 'Wireless Bluetooth headphones', 50),
    ('Tablet', 399.99, '10-inch, 64GB, Wi-Fi only', 15),
    ('Smartwatch', 199.99, 'Fitness tracker with heart rate monitor', 30),
    ('Camera', 449.99, '20MP DSLR camera with kit lens', 12),
    ('Gaming Console', 399.99, 'Next-gen gaming console with 1TB storage', 8),
    ('Printer', 199.99, 'All-in-one printer, scanner, and copier', 25),
    ('External Hard Drive', 129.99, '2TB USB 3.0 external hard drive', 18),
    ('Wireless Router', 79.99, 'Dual-band Wi-Fi router for high-speed internet', 22),
    ('Fitness Tracker', 79.99, 'Track steps, distance, and calories burned', 35),
    ('Portable Speaker', 59.99, 'Waterproof Bluetooth speaker with 10-hour battery life', 40),
    ('Computer Monitor', 249.99, '27-inch LED monitor with Full HD resolution', 17),
    ('Wireless Mouse', 29.99, 'Ergonomic wireless mouse with adjustable DPI', 50),
    ('Keyboard', 49.99, 'Mechanical gaming keyboard with RGB backlighting', 30);

-- Display success message
SELECT 'Sample data inserted successfully.' AS Message;
