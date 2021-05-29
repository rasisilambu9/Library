<HTML>
<HEAD>
<TITLE>
Student Details</TITLE>
</HEAD>
<BODY>
<?php
$stu_id=$_POST["name"];
$servername = "localhost";
$username = "localhost";
$password ="";
$dbname="test";
$query1= "SELECT * from `test`.`stud_det` where`RollNo` =  '.$stu_id.'";
 // Create connection
$conn = new mysqli($servername, $username, $password ,$dbname);


// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$result=mysqli_query($conn,$query1);
while($row=mysqli_fetch_array($result)){
 echo"<b>".$row["RollNo"]."</b>";
 echo"<b>".$row["Name"]."</b>";
 echo"<b>".$row["Year_sem"]."</b>";
 echo"<b>".$row["No_of_book_issued"]."</b>";
 
}
?>
</BODY>
</HTML>
     