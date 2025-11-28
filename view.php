<?php
include "db.php";
$result = $conn->query("SELECT * FROM students ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head><title>Students List</title></head>
<body>
<h2>Student Details</h2>
<a href="add_student.php">Add New Student</a><br><br>

<table border="1" cellpadding="8">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Year</th>
    <th>Graduation</th>
    <th>Phone</th>
    <th>Address</th>
</tr>

<?php while ($row = $result->fetch_assoc()): ?>
<tr>
    <td><?= htmlspecialchars($row['id']) ?></td>
    <td><?= htmlspecialchars($row['student_name']) ?></td>
    <td><?= htmlspecialchars($row['year_of_passing']) ?></td>
    <td><?= htmlspecialchars($row['graduation']) ?></td>
    <td><?= htmlspecialchars($row['phone_number']) ?></td>
    <td><?= htmlspecialchars($row['address']) ?></td>
</tr>
<?php endwhile; ?>

</table>
</body>
</html>
