<?php
$host = "YOUR_RDS_ENDPOINT";
$user = "YOUR_DB_USERNAME";
$password = "YOUR_DB_PASSWORD";
$database = "visitorapp";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $message = $_POST['message'];

    $sql = "INSERT INTO visitors (name, message) VALUES ('$name', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<p>Message submitted successfully!</p>";
    } else {
        echo "<p>Error: " . $conn->error . "</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Visitor App</title>
</head>
<body>
    <h2>Visitor Message Board</h2>

    <form method="POST">
        Name:<br>
        <input type="text" name="name" required><br><br>

        Message:<br>
        <textarea name="message" required></textarea><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>