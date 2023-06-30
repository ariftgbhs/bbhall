<?php
require('config.php');
session_start();
if (!isset($_SESSION['admin_id'])) {
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Messages</title>
    <link rel="shortcut icon" href="../images/logo/cuet_logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <script src="https://getbootstrap.com/docs/5.3/assets/js/color-modes.js"></script>
    <meta name="theme-color" content="#712cf9">
</head>

<body>
    <?php require('./layouts/navbar.php'); ?>
    <section class="container mt-4">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Date</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <?php
            $sql = "SELECT * FROM `webmessages` ORDER BY `webmessages`.`id` DESC";
            $result = mysqli_query($conn, $sql);
            ?>
            <tbody>
                <?php while ($row = mysqli_fetch_array($result)) : ?>
                    <tr>
                        <th scope="row"><?php echo $row['id']; ?></th>
                        <td><?php echo $row['subject']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td><?php echo $row['date']; ?></td>
                        <td>
                            <button class="btn btn-danger">DELETE</button>
                        </td>
                    </tr>
                <?php endwhile; ?>
        </table>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>