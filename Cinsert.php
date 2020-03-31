<?php
$servername="localhost";
$username="root";
$password="";
$dbname="wholesale";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("Connection failed:".$conn->connect_error);
}
//echo"CONNECTION ESTABLISHED\r\n";
//echo"Insertion in process";
$C_id = $_POST["C_id"];
$F_Name = $_POST["F_Name"];
$M_Name = $_POST["M_Name"];
$L_Name = $_POST["L_Name"];
$sql="INSERT INTO customer VALUES('$C_id','$F_Name','$M_Name','$L_Name')";
if($conn->query($sql)==true){
    echo "<script>
    alert('SUCCESSFULLY ENTERED');
    window.location.href='Cdisplay.php';
    </script>";
}
else{
    echo "error:".$sql."<br>".$conn->error;
}
$conn->close();
?>