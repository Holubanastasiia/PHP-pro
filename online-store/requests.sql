CREATE TABLE categories
(
    id   INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL
);

CREATE TABLE products
(
    id          INT PRIMARY KEY AUTO_INCREMENT,
    name        VARCHAR(50)    NOT NULL,
    price       DECIMAL(10, 2) NOT NULL,
    category_id INT            NOT NULL,
    FOREIGN KEY (category_id) REFERENCES categories (id)
);

ALTER TABLE products
    (
    ADD FOREIGN KEY (category_id) REFERENCES categories (id);
);

INSERT INTO categories (name)
VALUES ('Phones'),
       ('Cases'),
       ('Notebooks');



INSERT INTO products (name, price, category_id)
VALUES ('Sumsung Galaxy S23', 1549.99, 1),
       ('Silicon Case for Sumsung Galaxy S23', 99.99, 2),
       ('MacBook Pro', 1904.99, 3),
       ('Silicon Case for MacBook Pro', 159.99, 2)


SELECT *
FROM categories LIMIT 3;

SELECT *
FROM products
WHERE category_id = 1 LIMIT 2;


SELECT p.id, p.name, p.price, c.name AS category_name
FROM products p
         JOIN categories c ON p.category_id = c.id;


SELECT c.name, COUNT(p.id) AS product_count
FROM categories c
         LEFT JOIN products p ON c.id = p.category_id
GROUP BY c.id;

