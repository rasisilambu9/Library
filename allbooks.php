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
$dbname="test";

 
// Create connection
$conn = new mysqli($servername, $username, $password ,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " .$conn->connect_error);
}
 
$query1= "Select * from `test`.`book_det`"; 
 
echo"<table border=1px>
 <tr>
     
     <th>Book Id</th>
     <th>Name</th>
     <th>Author</th>
	  <th>Status</th>
     </tr>";
     
$result=mysqli_query($conn,$query1);
while($row=mysqli_fetch_array($result)){
echo"<tr>";
 
echo"<td>".$row["Book_id"]."</td>";
echo"<td>".$row["Name"]."</td>";
echo"<td>".$row["author"]."</td>";
if("$row[status]"==0)
	echo"<td><font color=green><b>In Library</b></font></td>";
else
	echo"<td><font color=red><b>Lend</b></font></td>";
echo"</tr>";
}
     
 

?>
</center>
</body>
</html>