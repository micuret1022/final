<?php

require_once('../../app/core/Database.php');
require_once('../../sql/services.sql');

class ContactModel {

    private $db;
    //initialize database connection
    public function __construct($db) {
        $this->db = $db;
    }

    //save a contact message to the database
    public function saveMessage($firstName, $lastName, $email, $phoneNumber, $message) {
        $stmt = $this->db->prepare("INSERT INTO messages (first_name, last_name, email, phone_number, message) VALUES (?, ?, ?, ?, ?)");
        $stmt->bindParam(1, $firstName);
        $stmt->bindParam(2, $lastName);
        $stmt->bindParam(3, $email);
        $stmt->bindParam(4, $phoneNumber);
        $stmt->bindParam(5, $message);

        $stmt->execute();

//        echo "Message saved: First Name - $firstName, Last Name - $lastName, Email - $email, Phone Number - $phoneNumber, Message - $message";
    }


}

