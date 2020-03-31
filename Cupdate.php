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
$sql="UPDATE customer SET F_name='$F_Name',M_name='$M_Name,L_name='LF_Name WHERE C_id='$C_id'";
if($conn->query($sql)==true){
    echo "<script>
    alert('SUCCESSFULLY UPDATED');
    window.location.href='Cdisplay.php';
    </script>";
}
else{
    echo "error:".$sql."<br>".$conn->error;
}
$conn->close();
?>


