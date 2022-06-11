<?php
include_once("../../../config/config.php");
include_once("../database.php");

//==================================================
/**
 * This file contain all functions for manage subjects (Such as add, edit and remove subjects)
 * 
 * Priority: 2
 * 
 * Used in:
 *      ./manage/subjects.php           # Make sure to create new file (Page) to use this file in it.
 * 
 * Need to:
 *      ./config/config.php             Priority: 0
 *      ./src/lib/database.php          Priority: 1
 */
//==================================================

$conn = connect($dbHost, $dbUser, $dbPass, $dbName);

/*
 * 
 * insertNewSubject( $conn, $tableName, $vars, $values )
 * 
 * Parameters: 
 *      <mysqli> $conn => Database connection.
 *      <string> $tableName => Name of the table that will insert new data in it.
 *      <array> $vars => Array should contain variables name from databse column.
 *      <array> $values => value of the vars.
 * 
 * Return Value: 
 *      <bool> True if inserted successfuly, False otherwise.
 * 
 * Description: 
 * 
 *      Insert new data in specifc table name.
 * 
 * Example:
 * insertNewSubject("users", array('name', 'email'), array('salman', 'example@example.com));
 * 
 */
function insertNewSubject($conn, $tableName, $vars, $values)
{
    $vars = convertArrayToString($vars, False);
    $values = convertArrayToString($values, True);

    $sqlInsert = "INSERT INTO `" . $tableName . "`(" . $vars . ") VALUES (" . $values . ")";
    if (insert($conn, $sqlInsert))
        return True;
    else
        return False;
}

/*
 * 
 * convertArrayToString( $arr, $comma )
 * 
 * Parameters: 
 *      <array> $arr => Array contain list.
 *      <bool>  $comma => If true, replace ` -> '
 * 
 * Return Value: 
 *      <string> string of list.
 * 
 * Description: 
 * 
 *      Convert array to string of list with qummas between each one.
 * 
 * Example:
 * convertArrayToString( array('name', 'email', False) )
 * 
 */
function convertArrayToString($vars, $comma = False)
{
    if (count($vars) == 0)
        return "";

    if ($comma)
        $comma = "'";
    else
        $comma = "`";
    $varsList = $comma . $vars[0] . $comma;
    for ($i = 1; $i < count($vars); $i += 1)
        $varsList = $varsList . ", " . $comma . $vars[$i] . $comma;

    return $varsList;
}

// Example
// $varsList = array("subject_name", "subject_code", "subject_level", "subject_description", "subject_credits", "subject_category", "subject_files_path", "subject_image_path");
// $valuesList = array('Salman', 'CSS100', '9', 'This is description :D', '4', '2', 'NONE', 'NONE');

// if (insertNewSubject($conn, "subjects", $varsList, $valuesList))
//     echo "Inserted sucssesfuly \n\n";