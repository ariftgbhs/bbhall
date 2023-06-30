<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bangabandhu Hall</title>
  <link rel="shortcut icon" href="./images/logo/cuet_logo.png" type="image/x-icon">

  <!-- LIBS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

  <!-- CUSTOM CSS -->
  <link rel="stylesheet" href="./css/style.css">
</head>

<body>
  <?php require('./layouts/navbar.php'); ?>

  <!-- HERO SECTION -->
  <section id="hero-section" class="d-flex align-items-center">
    <div class="container">
      <h1 class="display-1 text-white fw-normal">Bangabandhu Hall</h1>
      <button class="btn btn-success btn-lg">Hall Details</button>
      <button class="btn btn-success btn-lg">Apply For Seat</button>
    </div>
  </section>

  <!-- ABOUT HALL -->
  <section class="container">
    <div class="row mt-3">
      <div class="col-md-6">
        <img src="./images/hall_images/bangabandhu_hall_top_view.jpeg" style="height: auto; width: 100%;" alt="">
      </div>
      <div class="col-md-6 d-flex align-items-center">
        <div>
          <h1 class="mt-5">Bangabandhu Residential Hall</h1>
          <p class="mt-4" style="font-size: 25px;">Bangabandhu Hall is one of the residential halls at Chittagong University of Engineering and Technology (CUET) in Bangladesh. Named after Sheikh Mujibur Rahman, the founding father of Bangladesh and also known as Bangabandhu. The was established to commemorate his contributions to the country.</p>
          <button class="btn btn-success">Learn More</button>
        </div>
      </div>
    </div>
  </section>

  <!-- PICTURE GALLERY -->
  <section class="mt-5 container">
    <h3 class="text-center mb-3 h-underline">Pictures & Gallery</h3>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" id="picgallery"></div>
  </section>
  <!-- JS -->


  <!-- FACILITIES -->
  <section class="mt-5 container">
    <h3 class="text-center mb-3 h-underline">Facilities</h3>
    <div class="row">
      <div class="col-md-4">
        <h4>In-room Amenities</h4>
        <ul>
          <li>One Bed per Student shall be offered</li>
          <li>Fully furnished rooms with beds & underbed drawers</li>
          <li>Study tables & Chair</li>
          <li>Tube lights & LED, Fan</li>
          <li>Dustbin in each room</li>
          <li>300 square feet spacious room</li>
        </ul>
      </div>
      <div class="col-md-4">
        <h4>Self Help Amenities</h4>
        <ul>
          <li>Laundry Service</li>
          <li>Filter Water facility to be provided</li>
          <li>Medical facility available with first aid/ provided to sick Residents</li>
          <li>Doctor on call number(s) to be shared with the students</li>
          <li>Dining area</li>
        </ul>
      </div>
      <div class="col-md-4">
        <h4>Cost-Effective Living Option</h4>
        <ul>
          <li>Cost-effective compared to other living options</li>
          <li>Get all services together in the single hall cost</li>
          <li>Long corridor infront of room</li>
          <li>Separate balcony in each room</li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <h4>Electricity & Internet</h4>
        <ul>
          <li>Electricity facility</li>
          <li>24/7 Generator facility</li>
          <li>High speed internet for each students</li>
        </ul>
      </div>
      <div class="col-md-4">
        <h4>Housekeeping</h4>
        <ul>
          <li>Rooms</li>
          <li>Washrooms</li>
          <li>Common areas are cleaned on a daily basis</li>
          <li>Regular pest controlled services</li>
        </ul>
      </div>
      <div class="col-md-4">
        <h4>Entertainment</h4>
        <ul>
          <li>Mini lounge area with sitting arrangement</li>
          <li>Common TV</li>
          <li>Indoor games like carrom , chess, table tennis etc.</li>
        </ul>
      </div>
    </div>
    <div class="text-center mt-4">
      <button class="btn btn-success">See More</button>
    </div>

    <div class="spacer mb-5 mt-5"></div>
  </section>

  <!-- ACCOMODATION -->
  <section class="container accomodation">
    <div class="row">
      <div class="col-md-6">
        <img src="./images/hall_images/bedroom_1.jpg" class="img-fluid" alt="Bedroom">
        <img src="./images/hall_images/reading_room.jpg" class="img-fluid mt-2" alt="Reading Room">
      </div>
      <div class="col-md-6 d-flex align-items-center">
        <div>
          <div class="text-center">
            <h3>Accommodation</h3>
          </div>
          <p class="fw-bold">Room Details</p>
          <p style="font-size: large;">Three hundred square feet Bangabandhu Hall rooms are spacious and convenient enough to accommodate four ,six and three students at a time.
            <br> <br>
            The room is fully furnished with beds and underbed drawers. Each student will have separate study tables and chairs from their first day at the Hall.There is enough light in the room to ensure a comfortable study in the room.Also,high speed wifi and internet connection for each student is available in the hall.Along with a stable electricity supply,each hall has a generator connection in case of power failure.
          </p>
        </div>
      </div>
    </div>
  </section>

  <?php require('./layouts/footer.php'); ?>
  <script src="./js/main.js"></script>
</body>

</html>