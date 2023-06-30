<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Bangabandhu Hall</title>
    <link rel="shortcut icon" href="./images/logo/cuet_logo.png" type="image/x-icon">

    <!-- LIBS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <?php require('./layouts/navbar.php'); ?>

    <section class="container" style="margin-top: 10%;">
        <form class="row g-3" method="POST" action="api.php">
            <div class="col-md-6">
                <label for="inputName" class="form-label">Name</label>
                <input name="name" type="text" class="form-control" id="inputName">
            </div>
            <div class="col-md-6">
                <label for="inputemail" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="inputemail">
            </div>
            <div class="col-md-6">
                <label for="inputDepartment" class="form-label">Department</label>
                <select name="department" id="inputDepartment" class="form-select">
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
            </div>
            <div class="col-6">
                <label for="inputPhone" class="form-label">Phone</label>
                <input type="text" name="phone" class="form-control" id="inputPhone" placeholder="018xxxx">
            </div>
            <div class="col-12">
                <label for="inputSubject" class="form-label">Subject</label>
                <input type="text" name="subject" class="form-control" id="inputSubject">
            </div>
            <div class="col-md-12">
                <div class="mb-3">
                    <label for="inputMessage" class="form-label">Message</label>
                    <textarea name="message" class="form-control" id="inputMessage" rows="3"></textarea>
                </div>
            </div>

            <div class="col-12">
                <button name="send_web_message" type="submit" class="btn btn-primary">Send Message</button>
            </div>

            <?php
            if (isset($_GET['error'])) {
                echo '<p class="mt-3 text-danger">' . $_GET['error'] . '</p>';
            } else if (isset($_GET['success'])) {
                echo '<p class="mt-3 text-success">' . $_GET['success'] . '</p>';
            }
            ?>

        </form>
    </section>

    <?php require('./layouts/footer.php'); ?>
</body>

</html>