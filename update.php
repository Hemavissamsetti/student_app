<?php
include "db.php";

$id = $_POST['id'];
$name = $_POST['student_name'];
$year = $_POST['year_of_passing'];
$graduation = $_POST['graduation'];
$phone = $_POST['phone_number'];
$address = $_POST['address'];

$sql = "UPDATE students SET 
        student_name='$name',
        year_of_passing='$year',
        graduation='$graduation',
        phone_number='$phone',
        address='$address'
        WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: view.php");
} else {
    echo "Error: " . $conn->error;
}
?>
