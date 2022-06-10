<?php
//==================================================
/**
 * This page will display all subjects stored in database
 * 
 * Need to:
 *      ./config/config.php             Priority: 0
 *      ./src/lib/database.php          Priority: 1
 *      ./src/libs/subjectsFun.php      Priority: 2
 */
//==================================================

include_once("../config/config.php");
include_once("../src/libs/database.php");
include_once("../src/libs/subjectsFun.php");
?>

<!DOCTYPE html>
<!-- 
cards-responsive License:

The MIT License (MIT)

Copyright (c) 2022 by 3psy0n (https://codepen.io/3psy0n/pen/LYpajmX)

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
-->
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
    <section class="dark">
        <div class="container py-4">
            <h1 class="h1 text-center C_AR" id="pageHeaderTitle">المواد</h1>

            <?php
            // Get all subjects and display it here
            displaySubjects($conn, array($TABLE_SUBJECTS, $TABLE_CATEGORY));
            ?>

        </div>
    </section>
</body>

</html>

<?php
closeConn($conn);
?>