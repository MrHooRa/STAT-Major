<?php

//==================================================
/**
 * This file contain all functions for database
 * 
 * Priority: 1
 * 
 * Used in:
 *      ./public/subject.php
 * 
 * Need to:
 *      ./config/config.php             Priority: 0
 */
//==================================================

/*
 * 
 * connect( $DB_HOST, $DB_USER, $DB_PASS, $DB_NAME )
 * 
 * Parameters: 
 *      <string> $DB_HOST => Database host.
 *      <string> $DB_USER => Database username.
 *      <string> $DB_PASS => Database password.
 *      <string> $DB_NAME => Database name.                
 * 
 * Return Value: 
 *      <mysqli> The connection if connected successfuly into the database.
 *      <bool:False> If there is no connection
 * 
 * Description: 
 * 
 *      This function will connect into database
 * 
 * Example:
 * $conn = connect($dbHost, $dbUser, $dbPass, $dbName);
 * 
 */
function connect(string $DB_HOST, string $DB_USER, string $DB_PASS, string $DB_NAME)
// Connect to database
// Return: $conn -> db connection
{
    $conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
    if (mysqli_connect_errno()) {
        // If there is an error with the connection, stop the script and display the error.
        // exit('Failed to connect to MySQL: ' . mysqli_connect_error());
        return False;
    }

    return $conn;
};

/*
 * 
 * close( $conn ) 
 * 
 * Parameters: 
 *      <mysqli> $conn => Database connection.
 * 
 * Return Value: 
 *      <bool> True if database connection is closed, False otherwise.
 * 
 * Description: 
 * 
 *      This function will send the query
 *      contain all data we want to insert it
 * 
 * Example:
 * closeConn($conn);
 * 
 */
function closeConn($conn)
{
    try {
        $conn->close();
        // Return True if connection is closed
        return True;
    }

    //catch exception
    catch (Exception $e) {
        // Return False if something wrong happend
        return False;
    }
};


/*
 * 
 * query( $conn, $sql ) 
 * 
 * Parameters: 
 *      <mysqli> $conn => Database connection.
 *      <string> $sql  => SQL Statement.
 * 
 * Return Value: 
 *      <mysqli_query> The query you want.
 * 
 * Description: 
 * 
 *      This function will send the query.
 * 
 * Example:
 * $sql = "SELECT * FROM `table_name`";
 * $result = query($conn, $sql);
 * 
 */
function query($conn, $sql)
{
    try {
        return mysqli_query($conn, $sql);
    } catch (Exception $e) {
        return False;
    }
}

/*
 * 
 * connectionState( $conn ) 
 * 
 * Parameters   : <mysqli> $conn => Database connection.
 * 
 * Return Value : 
 *      <int> Database connection state (0 => No connection, 1 => Connected, 2 => Error, 3 => Error while check)
 * 
 * Description: 
 * 
 *      This function will tell the state of the connection to database
 * 
 * Example:
 * $sql = "SELECT * FROM `table_name`";
 * $result = select($conn, $sql);
 * 
 */
function connectionState($conn)
{
    try {
        /* check connection */
        if ($conn->connect_errno)
            // Connection failed
            return 2;

        /* check if server is alive */
        if ($conn->ping())
            // There is connection
            return 1;
        else
            // There is no connection to database
            return 0;
    } catch (Exception $e) {
        return 3;
    }
}
