-- Create the database
CREATE DATABASE BIBLIO;
USE BIBLIO;

-- Create Admin Table
CREATE TABLE Admins (
    admin_id INT PRIMARY KEY,
    admin_name VARCHAR(100),
    admin_email VARCHAR(100),
    admin_pass VARCHAR(50),
    admin_dob DATE,
    shift VARCHAR(50)
);

-- Create APhone Table (for multivalued attribute)
CREATE TABLE AdminPhones (
    admin_id INT,
    admin_phone VARCHAR(15),
    PRIMARY KEY (admin_id, admin_phone),
    FOREIGN KEY (admin_id) REFERENCES Admins(admin_id)
);

-- Create Authors Table
CREATE TABLE Authors (
    author_id INT PRIMARY KEY,
    author_name VARCHAR(100)
);

-- Create Books Table
CREATE TABLE Books (
    isbn VARCHAR(13) PRIMARY KEY,
    book_name VARCHAR(200),
    language VARCHAR(50),
    rating DECIMAL(3,2),
    stock INT,
    date_added DATE,
    admin_id INT,
    copies_added INT,
    copies_removed INT,
    FOREIGN KEY (admin_id) REFERENCES Admins(admin_id)
);

-- Create BGenre Table (for multivalued attribute)
CREATE TABLE BookGenres (
    isbn VARCHAR(13),
    genre VARCHAR(50),
    PRIMARY KEY (isbn, genre),
    FOREIGN KEY (isbn) REFERENCES Books(isbn)
);

-- Create Writes Table ((Relationship table between Authors and Books))
CREATE TABLE Writes (
    isbn VARCHAR(13),
    author_id INT,
    PRIMARY KEY (isbn, author_id),
    FOREIGN KEY (isbn) REFERENCES Books(isbn),
    FOREIGN KEY (author_id) REFERENCES Authors(author_id)
);

-- Create Customers Table
CREATE TABLE Customers (
    username VARCHAR(50) PRIMARY KEY,
    cust_name VARCHAR(100),
    cust_email VARCHAR(100),
    cust_pass VARCHAR(50),
    cust_dob DATE
);

-- Create CPhone Table (for multivalued attribute)
CREATE TABLE CustomerPhones (
    username VARCHAR(50),
    cust_phone VARCHAR(15),
    PRIMARY KEY (username, cust_phone),
    FOREIGN KEY (username) REFERENCES Customers(username)
);

-- Create Sees Table (Relationship table between Customers and Books)
CREATE TABLE Sees (
    username VARCHAR(50),
    isbn VARCHAR(13),
    copies_available INT,
    PRIMARY KEY (username, isbn),
    FOREIGN KEY (username) REFERENCES Customers(username),
    FOREIGN KEY (isbn) REFERENCES Books(isbn)
);

-- Create Borrowed Table
CREATE TABLE Borrowed (
    username VARCHAR(50),
    isbn VARCHAR(13),
    copies_borrowed INT,
    PRIMARY KEY (username, isbn),
    FOREIGN KEY (username) REFERENCES Customers(username),
    FOREIGN KEY (isbn) REFERENCES Books(isbn)
);

-- Create Requested Table
CREATE TABLE RequestedBooks (
    req_id INT PRIMARY KEY,
    req_isbn VARCHAR(13),
    req_bookname VARCHAR(200),
    req_authorname VARCHAR(100),
    author_exists BOOLEAN,
    admin_id INT,
    approved BOOLEAN,
    approval_date DATE,
    FOREIGN KEY (admin_id) REFERENCES Admins(admin_id)
);