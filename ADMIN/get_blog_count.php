<?php
require('connection.php'); // Ensure this file correctly sets up the $con variable for the database connection

$query = "SELECT COUNT(*) as count FROM blogs";
$result = mysqli_query($con, $query);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    echo $row['count'];
} else {
    echo 'Error: ' . mysqli_error($con);
}
?>
