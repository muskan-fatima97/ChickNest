<?php
include 'connection.php';

$query = "SELECT * FROM blogs";
$result = mysqli_query($conn, $query);

$output = '';
while ($row = mysqli_fetch_assoc($result)) {
    $output .= '
    <div class="col-md-4 card">
        <img src="' . $row['imageURL'] . '" alt="Image">
        <div class="text">' . $row['title'] . '</div>
        <div class="description">' . $row['description'] . '</div>
    </div>';
}

echo $output;
?>
