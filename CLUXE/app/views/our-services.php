<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Our Services</title>
  <script defer src="our-services.js"></script>
  <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous"
  >

  <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
  >

  <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"
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

<?php
require_once('../../app/controllers/ServicesController.php');
require_once('../../app/models/ServicesModel.php');


?>

<!--  Price Quote  -->
<section id="priceQuote" class="p-5">
  <div class="container">
    <div class="row g-4n">
      <div class="col-md">
        <h2 class="text-center mb-4">Get a Quote</h2>

        <form class="row d-sm-block">

          <!-- Pickup Date -->
          <label for="date" class="col-1.5 col-form-label">Pickup Date</label>
          <div class="col-5">
            <div class="input-group date" id="datepicker">
              <input type="date" class="form-control" id="date" required>
              <span class="input-group-append">
<!--          <span class="input-group-text bg-light d-block">-->
<!--            <i class="fa-regular fa-calendar"></i>-->
<!--          </span>-->
        </span>
            </div>
          </div>

          <!-- Pickup Time -->
          <label for="time" class="col-1.5 col-form-label">Pickup Time</label>
          <div class="col-5">
            <div class="input-group date" id="timePicker">
              <input type="time" class="form-control" id="time" required>
              <span class="input-group-append"></span>
            </div>
          </div>

        </form>

        <!-- Number of Hours -->
        <label class="col-1.5 col-form-label">Number of Hours</label>
        <div class="input-group mb-3">
          <button class="btn btn-outline-secondary" type="button" id="num-of-hours1">
              <span class="input-group-append">
                  <i class="fa-solid fa-minus"></i>
            </span>
          </button>
          <input type="text" class="form-control text-center" placeholder="0" aria-label="Example text with button addon" aria-describedby="button-addon1" required>
          <button class="btn btn-outline-secondary" type="button" id="num-of-hours2">
             <span class="input-group-append">
                  <i class="fa-solid fa-plus"></i>
            </span>
          </button>
        </div>

        <!-- Number of Minutes -->
        <label class="col-1.5 col-form-label">Number of Minutes</label>
        <div class="input-group mb-3">
          <button class="btn btn-outline-secondary" type="button" id="num-of-minutes1">
              <span class="input-group-append">
                  <i class="fa-solid fa-minus"></i>
            </span>
          </button>
          <input type="text" class="form-control text-center" name="minutes" placeholder="0" aria-label="Example text with button addon" aria-describedby="button-addon1" required>
          <button class="btn btn-outline-secondary" type="button" id="num-of-minutes2">
             <span class="input-group-append">
                  <i class="fa-solid fa-plus"></i>
            </span>
          </button>
        </div>

        <!-- Pickup Location -->
        <div class="input-group my-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Enter Pickup Location</span>
          </div>
          <input type="text" class="form-control" placeholder="pickup location" aria-label="pickup-location" aria-describedby="basic-addon1" required>
        </div>

        <!-- DropOff Location -->
        <div class="input-group my-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon2">Enter DropOff Location</span>
          </div>
          <input type="text" class="form-control" placeholder="dropOff location" aria-label="dropOff-location" aria-describedby="basic-addon2" required>
        </div>

        <!--Travellers Button -->
        <label class="col-1.5 col-form-label">Travellers</label>
        <div class="input-group mb-3">
          <button class="btn btn-outline-secondary" type="button" id="traveller-button1">
              <span class="input-group-append">
                  <i class="fa-solid fa-minus"></i>
            </span>
          </button>
          <input type="text" class="form-control text-center" placeholder="0" name="travellers-input" aria-label="Example text with button addon" aria-describedby="button-addon1" required>
          <button class="btn btn-outline-secondary" type="button" id="traveller-button2">
             <span class="input-group-append">
                  <i class="fa-solid fa-plus"></i>
            </span>
          </button>
        </div>

        <!--Children Button -->
        <label class="col-1.5 col-form-label">Children</label>
        <div class="input-group mb-3">
          <button class="btn btn-outline-secondary" type="button" id="children-button1">
              <span class="input-group-append">
                  <i class="fa-solid fa-minus"></i>
            </span>
          </button>
          <input type="text" class="form-control text-center" placeholder="0" name="children-input" aria-label="Example text with button addon" aria-describedby="button-addon1" required>
          <button class="btn btn-outline-secondary" type="button" id="children-button2">
             <span class="input-group-append">
                  <i class="fa-solid fa-plus"></i>
            </span>
          </button>
        </div>

        <!--Bags Button -->
        <label class="col-1.5 col-form-label">Bags</label>
        <div class="input-group mb-3">
          <button class="btn btn-outline-secondary" type="button" id="bags-button1">
              <span class="input-group-append">
                  <i class="fa-solid fa-minus"></i>
            </span>
          </button>
          <input type="text" class="form-control text-center" name="bags-input" placeholder="0" aria-label="Example text with button addon" aria-describedby="button-addon1" required>
          <button class="btn btn-outline-secondary" type="button" id="bags-button2">
             <span class="input-group-append">
                  <i class="fa-solid fa-plus"></i>
            </span>
          </button>
        </div>

        <button type="submit" id="getQuote">Get A Quote</button>

        <div class="col-md">
            <img src="" class="img-fluid" alt="">
        </div>

      </div>
    </div>
  </div>
</section>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!--<script type="text/javascript" src="../js/bootstrap-datetimepicker.js" charset="UTF-8"></script>-->
<!--<script type="text/javascript" src="../js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>-->

</body>
</html>


