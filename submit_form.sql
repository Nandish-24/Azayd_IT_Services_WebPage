CREATE DATABASE project;

USE contact_us;

CREATE TABLE form (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    phone_number VARCHAR(15) NOT NULL,
    email VARCHAR(100) NOT NULL,
    job_title VARCHAR(100),
    country VARCHAR(50),
    message TEXT
);
