<?php
include 'connection.php';

$query = "SELECT * FROM blogs";
$result = mysqli_query($con, $query);

$cardHTML = '';
$tableHTML = '';

while ($row = mysqli_fetch_assoc($result)) {
    // Card HTML
    $cardHTML .= '<div class="col-md-3 mb-4">';
    $cardHTML .= '  <div class="card">';
    $cardHTML .= '    <img src="' . $row['imageURL'] . '" class="card-img-top" alt="...">';
    $cardHTML .= '    <div class="card-body">';
    $cardHTML .= '      <h5 class="card-title">' . $row['title'] . '</h5>';
    $cardHTML .= '      <p class="card-text">' . $row['description'] . '</p>';
    $cardHTML .= '    </div>';
    $cardHTML .= '  </div>';
    $cardHTML .= '</div>';

    // Table row HTML
    $tableHTML .= '<tr>';
    $tableHTML .= '  <td>' . $row['id'] . '</td>';
    $tableHTML .= '  <td>' . $row['title'] . '</td>';
    $tableHTML .= '  <td>' . $row['description'] . '</td>';
    $tableHTML .= '  <td>' . $row['imageURL'] . '</td>';
    $tableHTML .= '</tr>';
}

// Return both card and table HTML
echo json_encode([
    'cards' => $cardHTML,
    'table' => $tableHTML
]);
?>
