<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register - Bangabandhu Hall</title>
  <link rel="shortcut icon" href="./images/logo/cuet_logo.png" type="image/x-icon">

  <!-- LIBS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

  <!-- CUSTOM CSS -->
  <link rel="stylesheet" href="./css/style.css">

</head>

<body>
  <?php require('./layouts/navbar.php'); ?>

  <section class="d-flex align-items-center py-4 bg-body-tertiary container" style="max-width: 400px; margin-top: 10%;">


    <main class="form-signin w-100 m-auto">
      <form>
        <img src="./images/logo/cuet_logo.png" class="img-fluid" style="height: 80px;" alt="">
        <h1 class="h3 mb-3 fw-normal">Register as hall member</h1>

        <div class="form-floating mt-2">
          <input type="text" class="form-control" id="floatingInput" placeholder="Name">
          <label for="floatingInput">Name</label>
        </div>
        <div class="form-floating mt-2">
          <input type="text" class="form-control" id="floatingInput" placeholder="University Email">
          <label for="floatingInput">University Email</label>
        </div>
        <div class="form-floating mt-2">
          <input type="text" class="form-control" id="floatingInput" placeholder="Phone Number">
          <label for="floatingInput">Phone Number (11 Digit)</label>
        </div>
        <div class="form-floating mt-2">
          <input type="text" class="form-control" id="floatingInput" placeholder="Batch">
          <label for="floatingInput">Batch</label>
        </div>
        <div class="form-floating mt-2">
          <input type="text" class="form-control" id="floatingInput" placeholder="Student ID">
          <label for="floatingInput">Student ID</label>
        </div>
        <div class="form-floating mt-2">
          <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
            <option disabled>Department</option>
            <option value="ETE">ETE</option>
            <option value="EEE">EEE</option>
            <option value="ME">ME</option>
            <option value="CE">CE</option>
            <option value="CSE">CSE</option>
            <option value="ARCH">ARCH</option>
            <option value="BME">BME</option>
            <option value="MIE">MIE</option>
            <option value="PME">PME</option>
            <option value="URP">URP</option>
            <option value="MSE">MSE</option>
            <option value="WRE">WRE</option>
            <option value="HUM">HUMANITIES</option>
            <option value="PHYSICS">PHYSICS</option>
            <option value="CHEMISTRY">CHEMISTRY</option>
            <option value="MATHEMATICS">MATHEMATICS</option>
          </select>
          <label for="floatingSelect">Department</label>
        </div>
        <div class="form-floating mt-2">
          <input type="text" class="form-control" id="floatingInput" placeholder="Emergency Contact Number">
          <label for="floatingInput">Emergency Contact Number</label>
        </div>
        <div class="form-floating mt-2">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">Password</label>
        </div>
        <div class="form-floating mt-2">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">Confirm Password</label>
        </div>

        <div class="form-check text-start my-3">
          <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault">
            I Agree terms and conditions
          </label>
        </div>
        <button class="btn btn-primary w-100 py-2" type="submit">Register</button>
        <p class="text-body-secondary mt-3">
          Already have an account?
          <a href="login.php" class="mt-5 mb-3 text-body-secondary">Login</a>
        </p>

        <a href="" class="mt-3 mb-3 text-body-secondary">Forget password?</a>
      </form>
    </main>



  </section>

  <?php require('./layouts/footer.php'); ?>
</body>

</html>