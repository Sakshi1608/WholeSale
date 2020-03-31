<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wholesale";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: ".$conn->connect_error);
}
$Cid=$_POST["C_id"];
// sql to delete a record
$sql = "DELETE FROM Customer WHERE C_id='$Cid' ";

if($conn->query($sql)==true){
    echo " <script>
    alert('SUCCESSFULLY DELETED');
    window.location.href='Cdisplay.php';
    </script>";
}
else{
    echo "error:".$sql."<br>".$conn->error;
}

$conn->close();
?>