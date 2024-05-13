CREATE TABLE services (
     id INT AUTO_INCREMENT PRIMARY KEY,
     pickup_date DATE,
     pickup_time TIME,
     num_hours INT,
     num_minutes INT,
     pickup_location VARCHAR(255),
     dropoff_location VARCHAR(255),
     num_travellers INT,
     num_children INT,
     num_bags INT
);

CREATE TABLE messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name   VARCHAR(50),
    last_name    VARCHAR(50),
    email        VARCHAR(100),
    phone_number VARCHAR(20),
    message      TEXT
);

