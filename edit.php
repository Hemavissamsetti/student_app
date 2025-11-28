<?php
include "db.php";

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM students WHERE id=$id");
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head><title>Edit Student</title></head>
<body>

<h2>Edit Student Details</h2>

<form action="update.php" method="POST">

    <input type="hidden" name="id" value="<?= $row['id'] ?>">

    <label>Student Name:</label><br>
    <input type="text" name="student_name" value="<?= $row['student_name'] ?>" required><br><br>

    <label>Year of Passing:</label><br>
    <input type="number" name="year_of_passing" value="<?= $row['year_of_passing'] ?>" required><br><br>

    <label>Graduation:</label><br>
    <input type="text" name="graduation" value="<?= $row['graduation'] ?>" required><br><br>

    <label>Phone Number:</label><br>
    <input type="text" name="phone_number" value="<?= $row['phone_number'] ?>" required><br><br>

    <label>Address:</label><br>
    <textarea name="address" required><?= $row['address'] ?></textarea><br><br>

    <button type="submit">Update Student</button>
</form>

</body>
</html>
