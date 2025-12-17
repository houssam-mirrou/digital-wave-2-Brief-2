CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(30) NOT NULL,
    last_name VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL UNIQUE,
    phone_number VARCHAR(18) NOT NULL,
    biography VARCHAR(255),
    mot_de_pass VARCHAR(255) NOT NULL,
    date_inscription DATETIME DEFAULT CURRENT_TIMESTAMP,
    is_admin TINYINT(1) DEFAULT 0
);



create table contacts (
    id integer primary key AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL, 
    email VARCHAR(50) NOT NULL, 
    descrip TEXT NOT NULL,
    date_msg DATETIME DEFAULT CURRENT_TIMESTAMP
);