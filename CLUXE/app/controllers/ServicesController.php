<?php

require_once('../../app/models/ServicesModel.php');

class ServicesController {
    // Method to handle inserting services data into the database
    public function insertServicesData() {
        // Check if the HTTP request method is POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Retrieve the form data
            $pickupDate = $_POST['pickup_date'];
            $pickupTime = $_POST['pickup_time'];
            $numHours = $_POST['num_hours'];
            $numMinutes = $_POST['num_minutes'];
            $pickupLocation = $_POST['pickup_location'];
            $dropoffLocation = $_POST['dropoff_location'];
            $numTravellers = $_POST['num_travellers'];
            $numChildren = $_POST['num_children'];
            $numBags = $_POST['num_bags'];

            // Create a new instance of the ServicesModel
            $servicesModel = new ServicesModel();

            // Call the insertServices method of the ServicesModel to insert data into the database
            $inserted = $servicesModel->insertServices($pickupDate, $pickupTime, $numHours, $numMinutes, $pickupLocation, $dropoffLocation, $numTravellers, $numChildren, $numBags);

            if ($inserted) {
                // Data inserted successfully
                echo "Data inserted successfully!";
            } else {
                // Error inserting data
                echo "Error inserting data!";
            }
        } else {
            // Request method is not POST
            echo "Invalid request method!";
        }
    }
}

?>