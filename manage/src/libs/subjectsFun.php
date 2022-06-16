<?php

//==================================================
/**
 * This file contain all functions for manage subjects (Such as add, edit and delete subjects)
 * 
 * Priority: 2*
 * 
 * Used in:
 *      ./manage/subjects.php
 * 
 * Need to:
 *      ./config/config.php             Priority: 0
 *      ./src/lib/database.php          Priority: 1
 */
//==================================================

/*
 * 
 * insertNewSubject( $conn, $tableName, $vars, $values )
 * 
 * Parameters: 
 *      <mysqli> $conn => Database connection.
 *      <string> $tableName => Name of the table that will insert new data in it.
 *      <array> $vars => Array should contain variables name from database column.
 *      <array> $values => values of the vars.
 * 
 * Return Value: 
 *      <bool> True if inserted successfuly, False otherwise.
 * 
 * Description: 
 * 
 *      Insert new data in specifc table name.
 * 
 * Example:
 * insertNewSubject("users", array('name', 'email'), array('salman', 'salman@example.com));
 * 
 */
function insertNewSubject($conn, $tableName, $vars, $values)
{
    $vars = convertArrayToString($vars, False);
    $values = convertArrayToString($values, True);

    $sqlInsert = "INSERT INTO `" . $tableName . "` (" . $vars . ") VALUES (" . $values . ")";
    if (query($conn, $sqlInsert))
        return True;
    else
        return False;
}

/*
 * 
 * getSubject( $conn, $tableName, $id )
 * 
 * Parameters: 
 *      <mysqli> $conn => Database connection.
 *      <string> $tableName => Name of the table that will get subject from it.
 *      <string> $id => subject id in the table.
 * 
 * Return Value: 
 *      <array> Contain all subject details.
 * 
 * Description: 
 * 
 *      Get sbuject details such as name, credit and others.
 * 
 * Example:
 * getSubject($conn, "subjects", 1)['name'];
 * 
 */
function getSubject($conn, $tableName, $id)
{
    $sqlSelect = "SELECT * FROM `" . $tableName . "` WHERE id = " . $id;
    if ($result = query($conn, $sqlSelect)) {
        while ($row = $result->fetch_row()) {
            $subject = array(
                "id" => $row[0],
                "name" => $row[1],
                "code" => $row[2],
                "level" => $row[3],
                "description" => $row[4],
                "credits" => $row[5],
                "category" => $row[6],
                "files_path" => $row[7],
                "image_path" => $row[8]
            );
        }
        $result->free_result();
    }
    return $subject;
}

/*
 * 
 * deleteSubject( $arr, $tableName, $id )
 * 
 * Parameters: 
 *      <mysqli> $conn => Database connection.
 *      <string> $tableName => Name of the table that will get subject from it.
 *      <string> $id => subject id in the table.
 * 
 * Return Value: 
 *      <string> string of list.
 * 
 * Description: 
 * 
 *      Delete row with specifc id in table name.
 * 
 * Example:
 * deleteSubject( $conn, "subjects", 4 )
 * 
 */
function deleteSubject($conn, $tableName, $id)
{
    $sqlDelete = "DELETE FROM `" . $tableName . "` WHERE `" . $tableName . "`.`id` = " . $id;
    if (query($conn, $sqlDelete))
        return True;
    else
        return False;
}

/*
 * 
 * updateSubject( $conn, $tableName, $id, $vars, $values )
 * 
 * Parameters: 
 *      <mysqli> $conn => Database connection.
 *      <string> $tableName => Name of the table that will get subject from it.
 *      <string> $id => subject id in the table.
 *      <array>  $vars =>
 *      <array>  $values =>
 * 
 * Return Value: 
 *      <bool> True if updated successfuly, False otherwise.
 * 
 * Description: 
 * 
 *      Update values of specifc row of data in database.
 * 
 * Example:
 * // Update name from [old.name] to [admin]
 * updateSubject( $conn, "subjects", 1, array("name"), array("admin") )
 * 
 */
function updateSubject($conn, $tableName, $id, $vars, $values)
{
    if (count($vars) != count($values))
        return False;

    $varsAndValues = "`" . $vars[0] . "` = '" . $values[0] . "'";
    for ($i = 1; $i < count($vars); $i += 1) {
        $varsAndValues = $varsAndValues . ", `" . $vars[$i] . "` = '" . $values[$i] . "'";
    }

    $sqlUpdate = "UPDATE `" . $tableName . "` SET " . $varsAndValues . " WHERE `" . $tableName . "`.`id` = " . $id;
    if (query($conn, $sqlUpdate))
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
 *      <bool>  $comma => If true, replace (`) -> (')
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
