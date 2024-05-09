<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "db";
$conn = mysqli_connect($server, $username, $password, $db);
$roll = $_REQUEST['roll'];
$sql = "SELECT * FROM student WHERE rollno = $roll";
$res = mysqli_query($conn, $sql);

if (mysqli_num_rows($res) > 0) {
    while ($row = mysqli_fetch_assoc($res)) {
        echo "Roll No- " . $row['rollno'];
        echo "<br>";
        echo " Name- " . $row['name'];
        echo "<br>";
        echo "<br>";
    }
} else {
    echo "Underflow";
}
