<html>
<body>
<?php
 
// Create connection
$conn = new mysqli('localhost','root','');
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "DB Connected successfully";
 
// this will select the Database sample_db
mysqli_select_db($conn,"website");
 
echo "\n DB is seleted as Test successfully";
 
// create INSERT query
  
$sql="INSERT INTO sample_db(name,email,subject,message) VALUES ('$_POST[name]','$_POST[email]','$_POST[subject]','$_POST[message]')";
 
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 
mysqli_close($conn);
?>
</body>
</html>