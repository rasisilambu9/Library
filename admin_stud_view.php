<html>
<Head>
<title> All Books</title></Head>
 <style>
  
</style>
</head>
<body bgcolor=orange>
<center>
<?php
$servername = "localhost";
$username = "root";
$password ="";
$dbname="forum";

 
// Create connection
$conn = new mysqli($servername, $username, $password ,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " .$conn->connect_error);
}
 
$query1= "Select * from `stud_det`"; 
 
echo"<table border=1px>
 <tr>
     
     <th>Reg No</th>
     <th>Name</th>
     <th>Academic</th>
	  <th>DOB</th>
	  <th>Mail ID</th>
	   <th>Phone No</th>
     </tr>";
     
$result=mysqli_query($conn,$query1);
while($row=mysqli_fetch_array($result)){
echo"<tr>";
 
echo"<td>".$row["regno"]."</td>";
echo"<td>".$row["Name"]."</td>";
echo"<td>".$row["academic"]."</td>";
echo"<td>".$row["dob"]."</td>";
echo"<td>".$row["mail"]."</td>";
echo"<td>".$row["phno"]."</td>";
 }
     
 

?>
</center>
</body>
</html>