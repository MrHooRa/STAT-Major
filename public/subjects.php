<?php
include_once("../config/config.php");
include_once("../src/libs/connection.php");
include_once("../src/libs/subjects.php");

?>

<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <title>المواد الدراسية</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
    <link rel="stylesheet" href="../src/inc/css/subject.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../src/inc/css/custom.css">

</head>

<body>
    <!-- partial:index.partial.html -->
    <section class="dark">
        <div class="container py-4">
            <h1 class="h1 text-center C_AR" id="pageHeaderTitle">المواد</h1>

            <?php
            // Get all subjects and display it here
            displaySubjects($conn, array($TABLE_SUBJECTS, $TABLE_CATEGORY));
            ?>
        </div>
    </section>

    <!-- partial -->

</body>

</html>