<!DOCTYPE html>
<html>
<head>
<style>
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,600);

*, *:before, *:after {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  background-image:url(product12.jfif);
  background-size:cover;
  font-family: 'Open Sans', sans-serif;
}
table {
  background: #012B39;
  border-radius: 0.25em;
  border-collapse: collapse;
  margin: 1em;
}
th {
  border-bottom: 1px solid #364043;
  color: #E2B842;
  font-size: 0.85em;
  font-weight: 600;
  padding: 0.5em 1em;
  text-align: left;
}
td {
  color: #fff;
  font-weight: 400;
  padding: 0.65em 1em;
}
.disabled td {
  color: #4F5F64;
}
tbody tr {
  transition: background 0.25s ease;
}
tbody tr:hover {
  background: #014055;
}

</style>
</head>
<body>
    <center>
    <table>
        <tr>
            <th>C_id</th>
            <th>F_Name</th>
            <th>M_Name</th>
            <th>L_Name</th>
        </tr>
    

        <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wholesale";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT C_id, F_Name, M_Name,L_Name FROM customer";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo  "<tr><td>".$row["C_id"]."</td><td>".$row["F_Name"]."</td><td>".$row["M_Name"]."</td><td>".$row["L_Name"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>  
</table>
<a href="Rpage.html" ><center>Back</center></a>
</center>
</body>
</html>
