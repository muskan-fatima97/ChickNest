<?php
include 'connection.php';

$query = "SELECT * FROM blogs";
$result = mysqli_query($con, $query);

while ($row = mysqli_fetch_assoc($result)) {
    echo '<div class="col-md-3 mb-4">';
    echo '  <div class="card">';
    echo '    <img src="' . $row['imageURL'] . '" class="card-img-top" alt="' . htmlspecialchars($row['title']) . '">';
    echo '    <div class="card-body">';
    echo '      <h5 class="card-title">' . htmlspecialchars($row['title']) . '</h5>';
    echo '      <p class="card-text">' . htmlspecialchars($row['description']) . '</p>';
    echo '      <a href="#" class="btn btn-primary">Go somewhere</a>';
    echo '    </div>';
    echo '  </div>';
    echo '</div>';
}
?>
