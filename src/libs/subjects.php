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
 *      ./src/lib/connection.php        Priority: 1
 */

$conn = connect($dbHost, $dbUser, $dbPass, $dbName);

// Check connection state
if(!$conn){
    exit(1);
}