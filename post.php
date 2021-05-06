<!DOCTYPE HTML>
<html>
<head>
<title>Data Recorded</title>
<style>
     .name {
     
     
     }

  
      .container {
      width:100%;
      position:;
      margin-right:;
      border-radius:20px;
      background-color: #fef7ed;
      padding:3%;
      
      }
      
      
      .fborder {
      border-color: #d7d4d8;
      border-radius: 10px;
      padding:10px;
      padding-right:auto;
      border-style: solid;
      border-width: .5px;
      border-color:#d7d4d8;
      }
      
      .column {
      width:47%;
      padding:10px;
      height:;
      margin-right:;
      }
      
      


      .button {
      
      background-color: #1f62b5;
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      
      }
      .button {
      box-shadow:
      0 8px 16px 0
      rgba(0,0,0,0.2),
      0 6px 20px 0
      rgba(0,0,0,0.19);
      }
      
      .button:hover {
      background-color: #0d9418;
      box-shadow: 
      0 12px 16px 0
      rgba(0,0,0,0.24),
      0 17px 50px 0
      rgba(0,0,0,0.19);
      }
      

</style>
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

<body class="container">

<div style="background-color:lightgreen; padding:10px; margin-left:20%; margin-right:20%;">
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
            $Surname = $_POST['Surname'] ;
            
            
            
            $stmt = $conn->prepare("insert into form(FirstName, Surname) values(?,?)");
            $stmt->bind_param("ss",$FirstName, $Surname);
            $stmt->execute();
            $stmt->close();
            
//Set @autoid :=0;
//update form set id = @autoid := (@autoid+1);
//alter table form AUTO_increment = 1;
            
echo "<b>Name:</b>"," ",$_POST["FirstName"]."<br>";
echo "<b>Surname:</b>"," ",$_POST["Surname"]."<br>";
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

<a href="http://localhost/myeclipse2021/Forms/"><button id="resetform" class="button">Back</button></a>
 

</div>
</body>
</html>