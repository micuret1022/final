<?php

require_once '../../app/models/ContactUsModel.php';

class ContactController {
    //display the contact form
    public function showContactForm() {

        include '../../app/views/contact-us.php';
    }

    //process the contact form submission
    public function processContactForm() {
        // Check if the form was submitted via POST method
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Validate form data
            $errors = $this->validateContactForm($_POST);

            if (empty($errors)) {
                // If form data is valid, process the submission
                $firstName = $_POST['firstName'];
                $lastName = $_POST['lastName'];
                $email = $_POST['email'];
                $phoneNumber = $_POST['phoneNumber'];
                $message = $_POST['message'];

                // Create a new instance of ContactModel
                $contactModel = new ContactModel();

                // Save the contact message in the database
                $contactModel->saveMessage($firstName, $lastName, $email, $phoneNumber, $message);

                // Redirect to a thank you page or display a success message
                header("Location: thank_you.php");
                exit;
            } else {
                // If there are errors, reload the contact form with error messages
                include '../../app/views/contact-us.php';
            }
        } else {
            // If the form was not submitted via POST method, redirect to the contact form page
            header("Location: index.php?action=showContactForm");
            exit;
        }
    }

    //validate the contact form data
    private function validateContactForm($formData) {
        $errors = [];

        // Validate first name
        if (empty($formData['firstName'])) {
            $errors['firstName'] = "First Name is required";
        }

        // Validate last name
        if (empty($formData['lastName'])) {
            $errors['lastName'] = "Last Name is required";
        }

        // Validate email
        if (empty($formData['email'])) {
            $errors['email'] = "Email is required";
        } elseif (!filter_var($formData['email'], FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "Invalid email format";
        }

        // Validate phone number
        if (empty($formData['phoneNumber'])) {
            $errors['phoneNumber'] = "Phone Number is required";
        }

        // Validate message
        if (empty($formData['message'])) {
            $errors['message'] = "Message is required";
        }

        return $errors;
    }
}
