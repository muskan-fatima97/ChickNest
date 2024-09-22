<?php
require('connection.php');

$q = "SELECT COUNT(*) as user_count FROM users";
$res = mysqli_query($con, $q);

if ($res) {
    $row = mysqli_fetch_assoc($res);
    echo $row['user_count'];
} else {
    echo "0";
}
?>
