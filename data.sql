
CREATE TABLE ecom_project

CREATE TABLE `category` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `url_image` VARCHAR(255),
    `description` TEXT
);

INSERT INTO category (name, description)
VALUES ('Camera', NULL),
       ('Food', NULL),
       ('Makeup', NULL),
       ('Electronics', NULL),
       ('Watches', NULL),
       ('Bags', NULL);

INSERT INTO categories (name, description, url_image)
VALUES
  ('Camera', 'High-quality cameras to capture your best moments.', 'assets/img/products/camera.jpg'),
  ('Food', 'Fresh and delicious food products for all tastes.', 'assets/img/products/food.webp'),
  ('Makeup', 'A wide range of makeup products for all skin types.', 'assets/img/products/makeup-cosmetics.webp'),
  ('Electronics', 'Latest electronic devices including phones and laptops.', 'assets/img/products/electronics.jpg'),
  ('Watches', 'Elegant and modern watches for men and women.', 'assets/img/products/watch.jpg'),
  ('Bags', 'Stylish and practical bags for daily use.', 'assets/img/products/bage.jpg');


CREATE TABLE product (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    price DECIMAL(10,2),
    imagepath VARCHAR(255),
    quantity INT,
    category_id INT,
    FOREIGN KEY (category_id) REFERENCES category(id)
);

INSERT INTO product (name, description, price, imagepath, quantity, category_id)
VALUES
  ('Canon EOS 90D', 'High-resolution DSLR camera', 899.99, 'assets/img/products/Canon_EOS_90D.jpg', 15, 19),
  ('Margherita Pizza', 'Classic pizza with fresh tomatoes and mozzarella', 8.50, 'assets/img/products/Margherita-Pizza.webp', 50, 20),
  ('Lipstick Set', 'Matte lipstick set with multiple colors', 25.00, 'assets/img/products/makeup_product.webp', 30, 21),
  ('iPhone 14', 'Latest Apple smartphone with powerful features', 999.99, 'assets/img/products/iphone14.jpg', 20, 22),
  ('Rolex Watch', 'Luxury watch for special occasions', 1250.00, 'assets/img/products/watch_rolex.jpg', 5, 23),
  ('Leather Backpack', 'Durable and stylish leather backpack', 70.00, 'assets/img/products/Leather Backpack_photo.webp', 10, 24);
