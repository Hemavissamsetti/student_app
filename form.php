<?php
$scanned_data = isset($_GET['data']) ? $_GET['data'] : "";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Form</title>
</head>
<body>

<h2>Student Form</h2>

<form method="POST" action="save.php">
    <label>Student Name:</label>
    <input type="text" name="name" value="<?php echo $scanned_data; ?>"><br><br>

    <label>Year of Passing:</label>
    <input type="text" name="year"><br><br>

    <label>Graduation:</label>
    <input type="text" name="graduation"><br><br>

    <label>Phone Number:</label>
    <input type="text" name="phone"><br><br>

    <label>Address:</label>
    <input type="text" name="address"><br><br>

    <button type="submit">Save</button>
</form>

</body>
</html>
