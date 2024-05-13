<?php

require_once('../../app/core/Database.php');
require_once('../../sql/services.sql');

class ServicesModel {

    //method to insert data into the database
    public function insertServices($pickupDate, $pickupTime, $numHours, $numMinutes, $pickupLocation, $dropoffLocation, $numTravellers, $numChildren, $numBags)
    {
        // insert the contact message into the database
        //  PDO, MySQLi...
        echo "$pickupDate, $pickupTime, $numHours, $numMinutes, $pickupLocation, $dropoffLocation, $numTravellers, $numChildren, $numBags";
    }


}