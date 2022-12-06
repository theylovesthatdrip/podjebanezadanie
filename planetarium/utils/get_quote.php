<?php

require '../utils/db_connect.php';

$x = rand(0, 3);

$sql = "SELECT id, content, author FROM quotes ORDER BY RAND() LIMIT 1";
$result = $conn->query($sql);

if ($row = $result->fetch_assoc()) {
    echo $row["id"] . ": " . $row["content"] . " ~" . $row["author"] . "<br>" . "<br>";
}
$conn->close();
