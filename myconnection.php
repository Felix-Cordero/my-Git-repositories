<!DOCTYPE HTML>
<html>
<head>
<style>
.container {
        margin-left:30%;
        }
        
 .table {
        align:center;
        background-color:light green;
        }
 
</style>
</head>
<body >
<div class="container">

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pet_profile_form";


// create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    
   echo "Poging Felix you are successfully connected! <br>";   
}

$sql = 'select * from form';
$query = mysqli_query($conn,$sql);

if(!$query)
{
    echo "Pogi Felix Ok yung Query mo!";
}

echo "
    <table class='table'>
    <tr>
    <th>ID</th>
    <th>FirstName</th>
    <th>Surname</th>
    </tr>";

    while ($row = mysqli_fetch_array($query))
    {
        echo ' <tr>
        <td>'.$row['ID'].'</td>
        <td>'.$row['FirstName'].'</td>
        <td>'.$row['Surname'].'</td>
        </tr>';
        
    }
    
    echo "</table>";
    
?>
</div>
</body>
</html>