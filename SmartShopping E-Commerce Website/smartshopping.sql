create database smartshopping;
CREATE TABLE smartshopping.contact (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL unique,
    phone VARCHAR(15) NOT NULL,
    role VARCHAR(50) NOT NULL,
    city VARCHAR(50) NOT NULL,
    message TEXT, 
    submission_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
CREATE TABLE smartshopping.products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    price DECIMAL(10, 2),
    image_url VARCHAR(255)
);

INSERT INTO smartshopping.products (title, description, price, image_url) VALUES
('Smartwatch', 'Stay connected and track your fitness with our cutting-edge smartwatch.', 299.99, 'products/smart-watch.webp'),
('Sneakers', 'Step out in style with our trendy and comfortable sneakers.', 89.99, 'products/shoes.webp'),
('Winter Hoodies', 'Stay warm and cozy in our fashionable winter hoodies.', 59.99, 'products/hoodies.webp'),
('Remote Robot', 'Explore and have fun with our innovative remote-controlled robot.', 149.99, 'products/remote-robot.webp'),
('Laptop', 'Boost your productivity with our high-performance laptops.', 999.99, 'products/laptop.webp'),
('Smartphone', 'Experience the latest technology with our feature-packed smartphones.', 799.99, 'products/smartphone.webp');
CREATE TABLE smartshopping.admin (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100)
);
INSERT INTO smartshopping.admin (username, password, email) VALUES ('adminUser', 'plaintextPassword', 'admin@example.com');


CREATE TABLE smartshopping.productscrud (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    price DECIMAL(10, 2),
    category_id INT,
    image VARCHAR(255)
);


