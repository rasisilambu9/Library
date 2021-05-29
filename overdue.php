<HTML>
<HEAD>
<TITLE>Book Return Overdue</TITLE>
<style>
body{
background-image:url("home-imgs.jpeg");
background-repeat:no-repeat;
background-size:1500px 800px;
} 
</style>
 
</HEAD>
<BODY BGCOLOR=gold><center>

 
   <h3><center><font color=red>A.V.C COLLEGE OF ENGINEERING</CENTER></H3>
<H4><CENTER>DEPARTMENT OF INFORMATION TECHNOLOGY</font></H4>
<b>Book Overdue Students list</b>
<?php
 
 


$servername = "localhost";
$username = "localhost";
$password ="";
$dbname="test";
$query1= "SELECT Date,Book_id,RollNo,Book from `test`.`lend_det`";

$date=date('Y-m-d');
$mdate=strtotime($date. '+ 6 months'); 
  
 
 
// Create connection
$conn = new mysqli($servername, $username, $password ,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$result=mysqli_query($conn,$query1);
 
$count=mysqli_num_rows($result);
if($count>=1){
echo"<table border=1px>
     <tr>
     <th>Book Id</th>
     <th>Book Name</th>
     <th>Student ID</th>
	 <th>student Name</th>
	 <th>Date</th>
     </tr>";
while($row=mysqli_fetch_assoc($result)){
	$vals=$row["Book_id"];
	$val=$row["RollNo"];
	$query2="SELECT * from `test`.`book_sts` where `Book_id`='".$vals."' AND `RollNo`='".$val."' ";
	$query3= "SELECT Name from `test`.`stud_det`  where `RollNo`='".$val."' UNION SELECT Name from `test`.`staff_det` where `staff_id`='".$val."' ";
	$result3=mysqli_query($conn,$query3);
			 while($row3=mysqli_fetch_assoc($result3)){
				 $name=$row3["Name"];
			 }
	$result2=mysqli_query($conn,$query2);
	 while($row2=mysqli_fetch_assoc($result2))

			 
		if($row2["status"]==1){
	if($row["Date"]<date($mdate) ){
		 
		
echo"<tr>";
echo"<td>".$row["Book_id"]."</td>";
 echo"<td>".$row["Book"]."</td>";
 echo"<td>".$row["RollNo"]."</td>";
 echo"<td>$name</td>";
 echo"<td>$row[Date]</td>";
 echo"</tr>";
	} 
		
} 

}
}
 
?> 

 
 
</center>
</BODY>
</HTML>