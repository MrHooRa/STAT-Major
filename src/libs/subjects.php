<?php

/**
 * This file contain all functions for subjects
 * 
 * Priority: 2
 * 
 * Used in:
 *      ./public/subject.php
 * 
 * Need to:
 *      ./src/lib/connection.php        Priority: 0
 *      ./src/lib/connection.php        Priority: 1
 */

$conn = connect($dbHost, $dbUser, $dbPass, $dbName);

// Check connection state
$dbState = ConnectionState($conn);
if ($dbState == 1) {
    $SELECT_subjects_SQL = "SELECT * FROM " . $TABLE_SUBJECTS;
    $result = select($conn, $SELECT_subjects_SQL);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "ID: " . $row["id"] . " - Name: " . $row["name"] . " - Code: " . $row["code"] . "<br>";
        }
    }
} else {
    echo "Can't reach database! (Error " . $dbState, " )";
}
