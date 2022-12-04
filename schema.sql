DROP DATABASE IF EXISTS dolphin_crm;

CREATE DATABASE dolphin_crm;
USE dolphin_crm;

CREATE TABLE Users(
    id int NOT NULL AUTO_INCREMENT, 
    firstname varchar(150),
    lastname varchar(150),
    password varchar(255) NOT NULL, /*varbinary(255) could be used to hash password in mysql. Lecturer recommended we use php to hash password though.*/
    email varchar(255) NOT NULL,
    role varchar(50), 
    created_at DATETIME,
    
    PRIMARY KEY (id)
);

CREATE TABLE Contacts(
    id int NOT NULL AUTO_INCREMENT, 
    title varchar(150), 
    firstname varchar(150), 
    lastname varchar(150), 
    email varchar(150), 
    telephone varchar(15),
    company varchar(100), 
    ctype varchar(100),
    assigned_to int, 
    created_by int,
    created_at varchar(100), 
    updated_at varchar(100),

    PRIMARY KEY (id), 
    FOREIGN KEY (assigned_to) REFERENCES Users(id),
    FOREIGN KEY (created_by) REFERENCES Users(id)
);

CREATE TABLE Notes(
    id int NOT NUll AUTO_INCREMENT, 
    contact_id int, 
    comment text, 
    created_by int, 
    created_at DATETIME,

    PRIMARY KEY (id),
    FOREIGN KEY (contact_id) REFERENCES Contacts(id), 
    FOREIGN KEY (created_by) REFERENCES Users(id)
);

 
INSERT INTO Users (firstname, lastname, password, email, role, created_at)VALUES ('Aliek', 'Chambers', 'password123', 'admin@project2.com', 'Admin', NOW() );

INSERT INTO Contacts (title, firstname, lastname, email, telephone, company, ctype, created_at,updated_at) VALUES ('Mr.', 'Danny', 'Brown', 'dbrown@gmail.com', '8763156789', 'Books Inc.', 'Support', NOW(), NOW());