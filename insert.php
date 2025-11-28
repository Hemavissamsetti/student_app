<?php
include "db.php";

$name = $conn->real_escape_string($_POST['student_name']);
$year = (int)$_POST['year_of_passing'];
$graduation = $conn->real_escape_string($_POST['graduation']);
$phone = $conn->real_escape_string($_POST['phone_number']);
$address = $conn->real_escape_string($_POST['address']);

$sql = "INSERT INTO students (student_name, year_of_passing, graduation, phone_number, address)
        VALUES ('$name', '$year', '$graduation', '$phone', '$address')";

if ($conn->query($sql) === TRUE) {
    header("Location: view.php"); // after insert go to list
    exit;
} else {
    echo "Error: " . $conn->error;
}
?>
