<?php
require_once 'db.php';
$result = mysqli_query(
    $conn,
    "SELECT id, name, email FROM employees ORDER BY id DESC"
);
while ($row = mysqli_fetch_assoc($result)) {
    $id = (int) $row['id'];
    $name = htmlspecialchars($row['name'], ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($row['email'], ENT_QUOTES, 'UTF-8');
    echo "<div>";
    echo "$name - $email ";
    echo "<button type='button' onclick='editEmployee($id)'>Edit</button>";
    echo "</div>";
}
