<?php

//==================================================
/**
 * This file contain all functions for subjects
 * 
 * Priority: 2
 * 
 * Used in:
 *      ./public/subject.php
 * 
 * Need to:
 *      ./config/config.php             Priority: 0
 *      ./src/lib/connection.php        Priority: 1
 */
//==================================================

$conn = connect($dbHost, $dbUser, $dbPass, $dbName);

/*
 * 
 * subjectFormatDisplay( $row, $color )
 * 
 * Parameters: 
 *      <array> $row => Array contain all data from 1 row.             
 *      <string> $color => Style of box. (orderd => BLUE, RED, GREEN, YELLOW)
 * 
 * Return Value: 
 *      <string> Subject format.
 * 
 * Description: 
 * 
 *      This function will change the style of raw data
 *      and print them in specific shape
 * 
 * Example:
 * $subject_1 = subjectFormat($row, "blue");
 * 
 */
function subjectFormat($row, $color)
{
    $color = strtolower($color);

    // Split $row
    $subject_name = $row['subject_name'];
    $subject_code = $row['subject_code'];
    $subject_level = $row['subject_level'];
    $subject_description = $row['subject_description'];
    $subject_credits = $row['subject_credits'];
    $subject_category = $row['category_name'];
    $subject_filesPath = $row['subject_files_path'];
    $subject_imagePath = $row['subject_image_path'];

    if ($subject_credits == 1)
        $subject_credits = "ساعة";
    else if ($subject_credits == 2)
        $subject_credits = "ساعتان";
    else
        $subject_credits = $subject_credits . " ساعات";

    if ($subject_level == 1)
        $subject_level = "المستوى الاول";
    else if ($subject_level == 2)
        $subject_level = "المستوى الثاني";
    else if ($subject_level == 3)
        $subject_level = "المستوى الثالث";
    else if ($subject_level == 4)
        $subject_level = "المستوى الرابع";
    else if ($subject_level == 5)
        $subject_level = "المستوى الخامس";
    else if ($subject_level == 6)
        $subject_level = "المستوى السادس";
    else if ($subject_level == 7)
        $subject_level = "المستوى السابع";
    else if ($subject_level == 8)
        $subject_level = "المستوى الثامن";
    else if ($subject_level == 9)
        $subject_level = "المستوى التاسع";
    else if ($subject_level == 10)
        $subject_level = "المستوى العاشر";
    else
        $subject_level = "غير معروف";

    return '
    <article class="postcard dark ' . $color . '">
        <a class="postcard__img_link" href="#">
            <img class="postcard__img" src="' . $subject_imagePath . '" alt="' . $subject_code . '" />
        </a>
        <div class="postcard__text">
            <h1 class="postcard__title ' . $color . ' C_rtl C_center"><a href="#" class="C_AR C_bold">' . $subject_name . '</a>
            </h1>
            <div class="postcard__subtitle medium C_rtl C_AR C_center">
            ' . $subject_code . '
            </div>
    
            <!-- Line -->
            <div style="justify-content: center; display: flex;">
                <div class="postcard__bar"></div>
            </div>
    
            <div class="postcard__preview-txt C_rtl C_RIGHT C_AR">
            ' . $subject_description . '
            </div>
            <ul class="postcard__tagbox C_tags">
                <li class="tag__item C_tag">' . $subject_category . '</i></li>
                <li class="tag__item C_tag" dir="rtl">' . $subject_credits . ' <i class="fas fa-clock mr-2"></i>
                <li class="tag__item C_tag"><i class="fas fa-book-open mr-2"></i>' . $subject_level . '</li>
                <li class="tag__item play ' . $color . ' C_tag">
                    <a href="' . $subject_filesPath . '"><i class="fas fa-layer-group mr-2 "></i>أضغط هنا للذهاب إلى محتويات المادة</a>
                </li>
            </ul>
        </div>
    </article>
    ';
}

/*
 * 
 * displaySubjects( $conn, $table )
 * 
 * Parameters: 
 *      <mysqli> $conn => Database connection.
 *      <array> $table => Tables name (Such as subject table and category table)
 * 
 * Return Value: 
 *      <bool> True if there is reuslts (There is subjects in subjects table).
 * 
 * Description: 
 * 
 *      This function will get all subjects details. Then display them after format them.
 * 
 * Example:
 * displaySubjects($conn, array("subjects", "categories"));
 * 
 */
function displaySubjects($conn, $table = array())
{
    // Check connection state
    $dbState = ConnectionState($conn);
    if ($dbState != 1)
        return False;

    // start color
    $color = "blue";

    // Get data
    $SELECT_subjects_SQL = "SELECT * FROM `" . $table[0] . "` INNER JOIN `" . $table[1] . "` ON `" . $table[0] . "`.`subject_category` = `" . $table[1] . "`.`id`";
    $result = select($conn, $SELECT_subjects_SQL);

    if ($result->num_rows > 0)
        while ($row = $result->fetch_assoc()) {

            echo subjectFormat($row, $color);

            if ($color == "blue")
                $color = "red";
            else if ($color == "red")
                $color = "green";
            else if ($color == "green")
                $color = "yellow";
            else
                $color = "blue";
        }
}
