<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
          integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
          crossorigin="anonymous"
          referrerpolicy="no-referrer"
    >
</head>
<body>
<!--NAV BAR-->
<nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3">
    <div class="container">
        <a href="#" class="navbar-brand">Curet Luxe Transportation</a>

        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navmenu"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navmenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="about-us.html" class="nav-link">About Us</a>
                </li>
                <li class="nav-item">
                    <a href="our-services.php" class="nav-link">Our Services</a>
                </li>
                <li class="nav-item">
                    <a href="our-vehichles.html" class="nav-link">Our Vehicles</a>
                </li>
                <li class="nav-item">
                    <a href="contact-us.php" class="nav-link">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!--PHP-->
<?php
//DATABASE
//require 'app/core/Database.php';
//
//$database = new Database();
//$db = $database->connect();
//
//// check if the form is submitted
//if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//    //retrieve form data
//    $firstName = htmlspecialchars($_POST['firstName']);
//    $lastName = htmlspecialchars($_POST['lastName']);
//    $email = $_POST['email'];
//    $phoneNumber = $_POST['phoneNumber'];
//    $message = $_POST['message'];
// Perform any necessary validation
// Insert data into the database
//    $query = "INSERT INTO contacts (first_name, last_name, email, phone_number, message) VALUES (?, ?, ?, ?, ?)";
//    $stmt = $db->prepare($query);
//    $stmt->bind_param("sssss", $firstName, $lastName, $email, $phoneNumber, $message);
//    if ($stmt->execute()) {
//        echo "<p>Contact information submitted successfully!</p>";
//    } else {
//        echo "<p>Error: " . $stmt->error . "</p>";
//    }
//    $stmt->close();
//}

//CONTROLLER & MODEL
require_once '../../app/controllers/ContactUsController.php';
require_once '../../app/models/ContactUsModel.php';

//contact controller
$contactController = new ContactController();

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Call the processContactForm() method to handle form submission
    $contactController->processContactForm();
}



?>


<!--CONTACT FORM-->
<div class="container mt-5">
    <h1 class="text-center mb-4">Contact Us</h1>
    <form class="row g-3" id="contactForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">

        <!-- FIRST NAME -->
        <div class="col-md-6">
            <label for="firstName" class="form-label">First Name: </label>
            <input type="text" class="form-control" id="firstName">
            <div class="error-text d-none text-danger" id="firstNameErrorIcon">
                    <span class="error-icon ml-1 text-danger" id="firstNameErrorMessage">
                        <i class="fa-solid fa-circle-exclamation"></i>
                        First Name can't be blank
                    </span>
            </div>
            <div class="error text-danger py-2"></div>
            <script>
                function validateForm() {
                    const firstNameInput = document.getElementById('firstName');
                    const firstNameErrorIcon = document.getElementById('firstNameErrorIcon');
                    const firstNameErrorMessage = document.getElementById('firstNameErrorMessage');

                    if (!firstNameInput.value) {
                        firstNameErrorIcon.classList.remove('d-none');
                    } else {
                        firstNameErrorIcon.classList.add('d-none');
                        firstNameErrorMessage.textContent = '';
                    }
                }
            </script>
        </div>

        <!-- LAST NAME -->
        <div class="col-md-6">
            <label for="lastName" class="form-label">Last Name: </label>
            <input type="text" class="form-control" id="lastName">
            <div class="error-text d-none text-danger" id="lastNameErrorIcon">
                    <span class="error-icon ml-1 text-danger" id="lastNameErrorMessage">
                        <i class="fa-solid fa-circle-exclamation"></i>
                        Last Name can't be blank
                    </span>
            </div>
            <div class="error text-danger py-2"></div>
            <script>
                function validateForm() {
                    const lastNameInput = document.getElementById('lastName');
                    const lastNameErrorIcon = document.getElementById('lastNameErrorIcon');
                    const lastNameErrorMessage = document.getElementById('lastNameErrorMessage');

                    if (!lastNameInput.value) {
                        lastNameErrorIcon.classList.remove('d-none');
                    } else {
                        lastNameErrorIcon.classList.add('d-none');
                        lastNameErrorMessage.textContent = '';
                    }
                }

            </script>
        </div>

        <!-- EMAIL -->
        <div class="col-md-8">
            <label for="email" class="form-label">Email </label>
            <input type="text" class="form-control" id="email">
            <div class="error-text d-none text-danger" id="emailErrorIcon">
                      <span class="error-icon ml-1 text-danger" id="emailErrorMessage">
                          <i class="fa-solid fa-circle-exclamation"></i>
                          Email Address can't be blank
                      </span>
            </div>
            <div class="error text-danger py-2"></div>
            <script>
                function validateForm() {
                    const emailInput = document.getElementById('email');
                    const emailErrorIcon = document.getElementById('emailErrorIcon');
                    const emailErrorMessage = document.getElementById('emailErrorMessage');

                    if (!emailInput.value) {
                        emailErrorIcon.classList.remove('d-none');
                    } else {
                        emailErrorIcon.classList.add('d-none');
                        emailErrorMessage.textContent = '';
                    }

                    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

                    if (!emailRegex.test(emailInput.value)) {
                        console.error("Invalid email address");
                    }

                }

                ``

            </script>

        </div>

        <!-- PHONE NUMBER -->
        <div class="col-md-4">
            <label for="phoneNumber" class="form-label">Phone Number (Optional) </label>
            <input type="text" class="form-control" id="phoneNumber" placeholder="+1(888)-888-8888">
            <span id="phoneError" class="text-danger"></span>

            <script>
                document.getElementById('phoneNumber').addEventListener('input', function(event) {
                    var phoneNumber = event.target.value.replace(/[^0-9]/g, '');
                    var formattedPhoneNumber = formattedPhoneNumber(phoneNumber);
                    event.target.value = formattedPhoneNumber;

                    var isValid = validatePhoneNumber(phoneNumber);
                    if (!isValid) {
                        document.getElementById('phoneError').textContent = 'Invalid phone number';
                    } else {
                        document.getElementById('phoneError').textContent = '';
                    }
                });

                function formatPhoneNumber(phoneNumber) {
                    var formattedNumber = '';
                    for (var i = 0; i < phoneNumber.length; i++) {
                        if (i === 3 || i === 7) {
                            formattedNumber += '-';
                        }
                        formattedNumber += phoneNumber[i];
                    }
                    return formattedNumber;
                }

                function validatePhoneNumber(phoneNumber) {
                    return /^\d{3}-\d{3}-\d{4}$/.test(phoneNumber);
                }

            </script>
        </div>

        <!-- MESSAGES -->
        <div class="col-md-12">
            <label for="messages" class="form-label">Message</label>
            <textarea class="form-control" id="messages" rows="3"></textarea>
            <div class="error-text d-none text-danger" id="messageErrorIcon">
                    <span class="error-icon ml-1 text-danger" id="messageErrorMessage">
                        <i class="fa-solid fa-circle-exclamation"></i>
                        Message can't be blank
                    </span>
            </div>

        </div>

        <!-- SUBMIT -->
        <div class="col-md-12">
            <button onclick="validateForm()" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

</div>




</body>
</html>
