CREATE TABLE users (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    email VARCHAR(100),
    phone VARCHAR(10),
    password VARCHAR(50),
    register_date DATE NOT NULL,
);

CREATE TABLE admins (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  first_name VARCHAR(50) NOT NULL,
  last_name VARCHAR(50) NOT NULL,
  email VARCHAR(100),
  password VARCHAR(50) NOT NULL
);

CREATE TABLE books (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(100) NOT NULL,
  author VARCHAR(200) NOT NULL, 
  price FLOAT NOT NULL, 
  date_published DATE,
  pages INT,
  format VARCHAR(50),
  admin_id INT NOT NULL,
  FOREIGN KEY (admin_id) REFERENCES admins(id)
);

CREATE TABLE users_books (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    book_id INT NOT NULL,
    discount_code VARCHAR(6) DEFAULT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (book_id) REFERENCES books(id)
);

CREATE TABLE discounts (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    code VARCHAR(6) NOT NULL,
    discount_percent INT NOT NULL
);


-- PROBLEM 1

INSERT INTO users (first_name, last_name, email, phone, `password`, register_date)
VALUES
  ('Pesho', 'Peshev', 'pesho@abv.bg', '0878787878', 'asdasd', '2022-03-04'),
  ('Manioka', 'Maniokova', 'manioka@abv.bg', '0898989898', 'manioka', '2022-02-02'),
  ('Test', 'Testov', NULL, NULL, 'testtest', '2022-03-01'),
  ('Viktor', 'Viktorov', 'viktor@abv.bg', '0878787873', 'viktor123', '2022-01-01');


-- PROBLEM 2

INSERT INTO admins (first_name, last_name, email, password)
VALUES
  ('Alex', 'Mehandzhiyska', 'alexandrina.mehandzhiyska1@gmail.com', 'alexmeh'),
  ('Dian', 'Dimitrov', NULL, 'test'),
  ('Something', 'Something', NULL, 'manioka');


-- PROBLEM 3

INSERT INTO books (title, author, price, date_published, pages, format, admin_id)
VALUES
	('Harry potter', 'J. K. Rowling', 20.55, '2007-10-05', 320, 'paperback', 1),
	('Wonder', 'Someone', 15.95, '2014-03-06', 200, 'digital', 2),
	('Pride and Prejudice', 'Jane Austen', 22.55, '1975-04-10',  410, 'paperback', 2),
  ('Rand', 'Random', 20, NULL, 456, 'digital', 1);

INSERT INTO users_books (user_id, book_id, discount_code) 
VALUES
  (1, 1, 'ASP35J'),
  (1, 2, 'ASP35J'),
  (2, 2, NULL),
  (4, 3, 'SJYBKO');


-- PROBLEM 4

INSERT INTO discounts (code, discount_percent)
VALUES
    ('SJYBKO', 5),
    ('ASP35J', 15),
    ('S62GFA', 10);

    
-- PROBLEM 5

DELETE FROM users
WHERE id = 3;


-- PROBLEM 6

DELETE FROM admins
WHERE id = 3;


-- PROBLEM 7

DELETE FROM books
WHERE id = 4;


-- PROBLEM 8

DELETE FROM discounts
WHERE id = 3;


-- PROBLEM 9

UPDATE users
SET `password` = 'ManiokaPower'
WHERE id = 2;


-- PROBLEM 10

UPDATE admins
SET email = 'alexmeh@abv.bg'
WHERE id = 1;


-- PROBLEM 11

UPDATE books
SET author = 'me'
WHERE id = 2;


-- PROBLEM 12

UPDATE discounts
SET discount_percent = 20
WHERE id = 2;


-- PROBLEM 13

SELECT * FROM books;


-- PROBLEM 14

SELECT a.first_name AS admin_name, b.title
FROM books AS b
JOIN admins AS a ON b.admin_id = a.id
ORDER BY a.first_name;


-- PROBLEM 15
SELECT COUNT(id)
FROM users;


-- PROBLEM 16


SELECT 
  u.first_name AS user_name, 
  b.title AS book,
  d.discount_percent AS discount_percent
FROM users AS u
JOIN users_books AS ub ON u.id = ub.user_id
JOIN books AS b ON ub.book_id = b.id
JOIN discounts AS d ON ub.discount_code = d.code
WHERE ub.discount_code IS NOT NULL;


-- PROBLEM 17

SELECT * FROM users, admins;


-- PROBLEM 18

SELECT u.first_name, b.title AS user_name
FROM users AS u
JOIN users_books AS ub ON ub.user_id = u.id
JOIN books AS b ON ub.book_id = b.id
WHERE ub.discount_code IS NULL;