<!DOCTYPE html>
<html>
<head><title>Add Student</title></head>
<body>
<h2>Add Student Details</h2>
<form action="insert.php" method="POST">
    <label>Student Name:</label><br>
    <input type="text" name="student_name" required><br><br>

    <label>Year of Passing:</label><br>
    <input type="number" name="year_of_passing" placeholder="2023" required><br><br>

    <label>Graduation:</label><br>
    <input type="text" name="graduation" required><br><br>

    <label>Phone Number:</label><br>
    <input type="text" name="phone_number" required><br><br>

    <label>Address:</label><br>
    <textarea name="address" required></textarea><br><br>

    <button type="submit">Save Student</button>
</form>
<br>
<a href="view.php">View All Students</a>
</body>
</html>
