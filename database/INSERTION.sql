
-- Insert  data into Admins

INSERT INTO Admins (admin_id, admin_name, admin_email, admin_pass, admin_dob, shift) VALUES
(1, 'John Doe', 'john.doe@example.com', 'password123', '1980-05-15', 'Morning'),
(2, 'Jane Smith', 'jane.smith@example.com', 'password456', '1985-07-20', 'Evening');

-- Insert  data into AdminPhones

INSERT INTO AdminPhones (admin_id, admin_phone) VALUES
(1, '1234567890'),
(1, '0987654321'),
(2, '5551234567');

-- Insert data into Authors

INSERT INTO Authors (author_id, author_name) VALUES
(1, 'George Orwell'),
(2, 'J.K. Rowling'),
(3, 'J.R.R. Tolkien');

-- Insert data into Books

INSERT INTO Books (isbn, book_name, language, rating, stock, date_added, admin_id, copies_added, copies_removed) VALUES
('9780451524935', '1984', 'English', 4.17, 5, '2023-01-01', 1, 10, 0),
('9780747532743', 'Harry Potter and the Philosopher\'s Stone', 'English', 4.47, 7, '2023-01-05', 1, 15, 2),
('9780618260300', 'The Hobbit', 'English', 4.27, 3, '2023-01-10', 2, 12, 1),
('9780553386790', 'Sapiens: A Brief History of Humankind', 'English', 4.41, 6, '2023-02-01', 2, 8, 1),
('9780061120084', 'To Kill a Mockingbird', 'English', 4.28, 4, '2023-02-10', 1, 9, 3),
('9780143039433', 'Pride and Prejudice', 'English', 4.26, 5, '2023-03-01', 2, 11, 2),
('9781451673319', 'Fahrenheit 451', 'English', 3.99, 2, '2023-03-15', 2, 5, 1);

-- Insert data into BookGenres

INSERT INTO BookGenres (isbn, genre) VALUES
('9780451524935', 'Dystopian'),
('9780747532743', 'Fantasy'),
('9780618260300', 'Fantasy'),
('9780553386790', 'Non-Fiction'),
('9780061120084', 'Classic'),
('9780143039433', 'Romance'),
('9781451673319', 'Dystopian');

-- Insert data into Writes

INSERT INTO Writes (isbn, author_id) VALUES
('9780451524935', 1),
('9780747532743', 2),
('9780618260300', 3),
('9780553386790', 1),
('9780061120084', 1),
('9780143039433', 1),
('9781451673319', 1);

-- Insert data into Customers

INSERT INTO Customers (username, cust_name, cust_email, cust_pass, cust_dob) VALUES
('user1', 'Alice Johnson', 'alice.johnson@example.com', 'alicepass', '1990-04-12'),
('user2', 'Bob Brown', 'bob.brown@example.com', 'bobpass', '1989-06-23'),
('user3', 'Charlie Davis', 'charlie.davis@example.com', 'charliepass', '1992-08-14');

-- Insert data into CustomerPhones

INSERT INTO CustomerPhones (username, cust_phone) VALUES
('user1', '1112223333'),
('user1', '4445556666'),
('user2', '7778889999'),
('user3', '1234567890');

-- Insert data into Sees

INSERT INTO Sees (username, isbn, copies_available) VALUES
('user1', '9780451524935', 1),
('user1', '9780747532743', 1),
('user2', '9780618260300', 1),
('user3', '9780553386790', 1),
('user3', '9780061120084', 1);

-- Insert data into Borrowed

INSERT INTO Borrowed (username, isbn, copies_borrowed) VALUES
('user1', '9780143039433', 1),
('user2', '9781451673319', 1),
('user2', '9780747532743', 1),
('user3', '9780618260300', 1);

-- Insert data into RequestedBooks

INSERT INTO RequestedBooks (req_id, req_isbn, req_bookname, req_authorname, author_exists, admin_id, approved, approval_date) VALUES
(1, '9780544003415', 'The Lord of the Rings', 'J.R.R. Tolkien', TRUE, 2, TRUE, '2023-04-01'),
(2, '9780307277671', 'Thinking, Fast and Slow', 'Daniel Kahneman', FALSE, 1, FALSE, NULL);