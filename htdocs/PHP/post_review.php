<?php
header("Location: http://localhost/index.php");
require_once('sql_conn.php');

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$review = $_POST["review"];

    
$sql = "INSERT INTO reviews (fname, lname, review) VALUES 
('" . $fname . "', '".$lname."', '".$review."');";

if ($dbc->query($sql) === TRUE) {
    echo "New record created successfully: ";
} else {
    echo "Error: " . $sql . "<br>" . $dbc->error;
}

?>


