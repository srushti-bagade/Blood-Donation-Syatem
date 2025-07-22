-- Create Database
CREATE DATABASE IF NOT EXISTS blood_donation_system;
USE blood_donation_system;

-- Donors Table
CREATE TABLE donors (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    age INT NOT NULL,
    blood_group VARCHAR(5) NOT NULL,
    contact VARCHAR(15) NOT NULL,
    email VARCHAR(100) NOT NULL
);

-- Donations Table
CREATE TABLE donations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    donor_id INT NOT NULL,
    donation_date DATE NOT NULL,
    location VARCHAR(100) NOT NULL,
    status VARCHAR(20) NOT NULL,
    FOREIGN KEY (donor_id) REFERENCES donors(id) ON DELETE CASCADE
);

-- Recipients Table
CREATE TABLE recipients (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    age INT NOT NULL,
    blood_group VARCHAR(5) NOT NULL,
    contact VARCHAR(15) NOT NULL,
    email VARCHAR(100) NOT NULL
);

-- Requests Table
CREATE TABLE requests (
    id INT AUTO_INCREMENT PRIMARY KEY,
    recipient_id INT NOT NULL,
    request_date DATE NOT NULL,
    hospital VARCHAR(100) NOT NULL,
    status VARCHAR(20) NOT NULL,
    FOREIGN KEY (recipient_id) REFERENCES recipients(id) ON DELETE CASCADE
);

-- Optional: Admin Table (for future use)
CREATE TABLE admins (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

-- Insert Sample Admin (optional login feature)
-- INSERT INTO admins (username, password) VALUES ('admin', 'admin123');

-- Sample data (optional)
-- INSERT INTO donors (name, age, blood_group, contact, email) VALUES 
-- ('Srishti Rao', 21, 'B+', '9876543210', 'srishti@example.com');

-- INSERT INTO recipients (name, age, blood_group, contact, email) VALUES 
-- ('Rahul Kumar', 35, 'O+', '8765432109', 'rahul@example.com');
