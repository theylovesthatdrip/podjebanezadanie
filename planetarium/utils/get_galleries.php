<?php

require '../utils/db_connect.php';


$sql = "SELECT id, name, thumbnail_file_path FROM galleries";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo $row["id"] . ": " . $row["name"] . " - " . $row["thumbnail_file_path"] . "<br>" . "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
