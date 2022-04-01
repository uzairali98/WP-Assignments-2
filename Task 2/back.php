<?php
$servername = $_POST["server_name"];
$username = $_POST["user"];
$password = $_POST["pass"];
$database = $_POST["database"];
$query = $_POST["query"];
echo "Query executed is = $query";

if (!$database)
{
  $conn = new mysqli($servername, $username, $password);
}
else{
  $conn = new mysqli($servername, $username, $password,$database);
}

if ($conn->connect_error) {
  die("Connection failed: " .$conn->connect_error);
}
else{
  
}
$result = mysqli_query ($conn,"$query");
if ($result == 1)
{
  echo "<br>Query executed successfully";
}
else{
  echo "<br><br><h3>Query is not correct</h3>";
}
?>
