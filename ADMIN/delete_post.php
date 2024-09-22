<?php
require('connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];

    $query = "DELETE FROM blogs WHERE id = $id";
    if (mysqli_query($con, $query)) {
        echo 'Success';
    } else {
        echo 'Error deleting record: ' . mysqli_error($con);
    }
}
?>
