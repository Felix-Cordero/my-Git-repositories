<!DOCTYPE HTML>
<html>
<head>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      
      <script> 
             $(document).ready(function()
              {
               $("#resetform").click(function()
              {
                $("#form1")[0].reset();
              });
            });
     </script>
</head>

<body>

<div style="background-color:lightgreen; padding:10px; width:20%;">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pet_profile_form";


// create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

//Check connectio

if (!$conn) {
    die("Connction failed: " . mysqli_connect_error());
    
}

    echo "Connected successfully<br>";
    
               
            $FirstName = $_POST['FirstName'] ;
            $SureName = $_POST['SureName'] ;
            
            
            
            $stmt = $conn->prepare("insert into form(FirstName, SureName) values(?,?)");
            $stmt->bind_param("ss",$FirstName, $SureName);
            $stmt->execute();
            $stmt->close();
            
//Set @autoid :=0;
//update form set id = @autoid := (@autoid+1);
//alter table form AUTO_increment = 1;
            
echo "<b>Name:</b>"," ",$_POST["FirstName"]."<br>";
echo "<b>Sure Name:</b>"," ",$_POST["SureName"]."<br>";
echo "<b>Street Address:</b>"," ",$_POST["streetaddress"]."<br>";
echo "<b>Street Address:</b>"," ",$_POST["streetaddress2"]."<br>";
echo "<b>City:</b>"," ",$_POST["City"]."<br>";
echo "<b>State:</b>"," ",$_POST["State"]."<br>";
echo "<b>Postal:</b>"," ",$_POST["Postal"]."<br>";
echo "<b>Country:</b>"," ",$_POST["country"]."<br>";
echo "<b>Phone:</b>"," ",$_POST["Phone"]."<br>";
echo "<b>Number of Pets:</b>"," ",$_POST["numberofpets"]."<br>";
echo "<b>Name of Pets:</b>"," ",$_POST["nameofpets"]."<br>";
echo "<b>Age of Pets:</b>"," ",$_POST["ageofpets"]. "<br>";
echo "<b>Pet Gender:</b>"," ",$_POST["petgender"]."<br>";
echo "<b>Neutered:</b>"," ",$_POST["neutered"]. "<br>";
echo "<b>Pets Breed:</b>"," ",$_POST["petsbreed"]."<br>";
echo "<b>Pets Weight:</b>"," ",$_POST["petsweight"]."<br>";
echo "<b>Maturity:</b>"," ",$_POST["maturity"]."<br>";
echo "<b>Weight Category:</b>"," ",$_POST["weightcategory"]."<br>";

//foreach ($_POST as $name) {
//    echo $name. "<br>";
//}


?>

<a href="http://localhost/myeclipse2021/Forms/"><button id="resetform">Back</button></a>
 

</div>
</body>
</html>