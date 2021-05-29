 <html>
<Head>
<style>
body{
background-image:url("home-imgs.jpeg");
background-repeat:no-repeat;
background-size:1500px 800px;
} 
 
</style>
<title>Ensure-Delete</title></Head>
<body bgcolor=#89CEEB>
<center>
<br>
<b><font color=green>Kindly Ensure Before deleting the Student belongs to the selected academic year that he/she had No book dues</font>
<font color=black>[No of book available=4]</font><br><br>
<br>
 
<?php
$ac=$_POST["year"];
$servername = "localhost";
$username = "localhost";
$password ="";
$dbname="test";

 
// Create connection
$conn = new mysqli($servername, $username, $password ,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " .$conn->connect_error);
}
 
$query1= "Select * from `test`.`stud_det` where `year_sem`='".$ac."'"; 
 
echo"<table border=1px>
 <tr>
     
	 
     <th><font color=green>Register Number</th>
     <th><font color=green>Name</th>
     <th><font color=green>Academic Year</th>
	  <th><font color=green>No Of Book Available</th>
	   <th><font color=green>DoB</th>
	    <th><font color=green>E-mail ID</th>
		 <th><font color=green>Contact Number</th>
     </tr>";
     
$result=mysqli_query($conn,$query1);
 
while($row=mysqli_fetch_array($result)){
echo"<tr>";
 
echo"<td>".$row["RollNo"]."</td>";
echo"<td>".$row["Name"]."</td>";
echo"<td>".$row["Year_sem"]."</td>";
 echo"<td>".$row["No_of_book_avl"]."</td>";
 echo"<td>".$row["dob"]."</td>";    
 echo"<td>".$row["mail"]."</td>";
echo"<td>".$row["phno"]."</td>";
}
echo"<br>";
echo"<form method=POST action=delete_stud.php>
<input name=year value=$ac></input> 
<input type=submit value=Delete color=green>
</input></form>";
echo"<br>";
?>


</center>
</body>
</html>