<?php
// Connect to database (PhpMyAdmin)

/*
 * 
 * connect( $DB_HOST, $DB_USER, $DB_PASS, $DB_NAME )
 * 
 * Parameters   : <string> $DB_HOST => Database host.
 *                <string> $DB_USER => Database username.
 *                <string> $DB_PASS => Database password.
 *                <string> $DB_NAME => Database name.                
 * 
 * Return Value : <mysqli, bool> The connection if connected successfuly into the database, False otherwise.
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
 * Parameters   : $conn => Database connection.
 * 
 * Return Value : <bool> True if database connection is closed, False otherwise.
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
 * insert( $conn, $sql ) 
 * 
 * Parameters   : $conn => Database connection.
 *                <string> $sql  => SQL INSERT Statement.
 * 
 * Return Value : <bool> True if inserted successfuly, False(with error msg) otherwise.
 * 
 * Description: 
 * 
 *      This function will insert data to database
 * 
 * Example:
 * $sql = "INSERT INTO `table_name`(`id`, `name`) VALUES ('[value-id]','[value-name]')";
 * insert($conn, $sql)
 * 
 */
function insert($conn, $sql)
{
    if ($conn->query($sql) === TRUE) {
        return True;
    } else {
        return False;
    }
}

/*
 * 
 * select( $conn, $sql ) 
 * 
 * Parameters   : $conn => Database connection.
 *                <string> $sql  => SQL SELECT Statement.
 * 
 * Return Value : <array> The data returned is stored in a result table, called the result-set.
 * 
 * Description: 
 * 
 *      This function will send the query
 *      then get the result of the query if exist
 * 
 * Example:
 * $sql = "SELECT * FROM `table_name`";
 * $result = select($conn, $sql);
 * 
 */
function select($conn, $sql)
{
    try {
        return mysqli_query($conn, $sql);
    } catch (Exception $e) {
        return False;
    }
}