<?php
$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>

<?php

  /* Take note by Felix Cordero Jr.

    // MySQLi Object-Oriented:

       $conn->close();

    // MySQLi Procedural:

       mysqli_close($conn);

    // PDO (PHP Data Objects)

       $conn = null;
  */

?>