<?php

require '../utils/db_connect.php';

$sql = "SELECT id, content, author FROM quotes";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo $row["id"] . ": " . $row["content"] . " ~" . $row["author"] . "<br>" . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
