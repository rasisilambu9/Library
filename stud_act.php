<HTML>
<HEAD>
<style>
body{
background-image:url("stud_ back.jpg");
background-repeat:no-repeat;
background-size:1800px 800px;
} 
.pan{
	background-color:#f2a104;
}
 
.blink {
	 
  animation: blink 1s steps(1, end) infinite;
}

@keyframes blink {
  0% {
    opacity: 1;
  }
  50% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }

}
.w3-panel{
	background-color:green;
}
img{
border-radius:100px;}
</style>
<TITLE>
Student Details</TITLE>
</HEAD>
<BODY bgcolor=#89ceeb>
 
  

 



<?php
$stu_id=$_POST["name"];
$passworda=$_POST["password"];
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
// Create connection
$conn = new mysqli($servername, $username, $password ,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " .$conn->connect_error);
}
 
$query1= "Select * from `test`.`stud_det` where `RollNo`='".$stu_id."'"; 
$result=mysqli_query($conn,$query1);
while($row=mysqli_fetch_array($result)){
	 
 
 
  echo"<center>";
 
if( $passworda==($row['dob']))
{	
$result=mysqli_query($conn,$query1);
while($row=mysqli_fetch_array($result)){
echo"<b><font color=orange>ROLLNO:</font>".$row["RollNo"]."	</b>";
echo"<br>";echo"<br>";
echo"<b><font color=orange>NO OF BOOK AVAILABLE:</font>".$row["No_of_book_avl"]."</td>";echo"</br>";
echo"</br>";echo"<b><font color=orange>DOB:</font>".$row["dob"]."</td>";echo"<br>";echo"<br>";
echo"<b><font color=orange>NAME:</font>".$row["Name"]."</b>";echo"<br>";echo"<br>";echo"<b><font color=orange>Mail ID:</font>".$row["mail"]."</td>";echo"</br>";echo"</br>";

echo"<b><font color=orange>YEAR:</font>".$row["Year_sem"]."</b>";
echo"<br>";echo"<br>";
echo"<b><font color=orange>Phone NO:</font>".$row["phno"]."</td>";

echo"</br>";echo"</br>";
echo"<br>";echo"</br>";
echo"<br>";
echo"</div>";
echo"</center>";
echo"</table>";
echo"<center>";
echo"<font color=red><b>Transaction History</font>";
echo"<br>";
echo"<br>";
$query1="SELECT * FROM lend_det WHERE RollNo='$stu_id'";
$result1=mysqli_query($conn,$query1);
$count1=mysqli_num_rows($result1);
if($count1 >= 1){
echo"<table border=1px align=center>
     <tr>
      
     <th>Register Number</th>
     <th>Book Id</th>
     <th>Book Name</th>
     <th>Lend Date</th>
     <th>Return Date</th>
      
     </tr>";
     echo"<br>";
while($row1=mysqli_fetch_assoc($result1)){
    echo"<tr>";
     
   echo"<td>".$row1["Book_id"]."</td>";         
    echo"<td>".$row1["Book"]."</td>";
    echo"<td>".$row1["Date"]."</td>";
    $query="select Book_id,Date from`test`.`return_det` where `RollNo`='".$stu_id."' AND `Book_id`='".$row1["Book_id"]."' ";
    $result=mysqli_query($conn,$query);
    while($row=mysqli_fetch_assoc($result))
          
          echo"<td>".$row["Date"]."</td>";
              
  }  
}
else{
	echo"No Transaction performed by this student";
}
} 
}else{
echo"<b>Invalid login credentials</b>";echo"<br>";echo"<br>";echo"<br>";
echo"<b><a href=stud.php>click here</a> to student login</b>";}

	
}
echo"</center>";
 ?> 
 <br>
 <br>
 
 
</center>

</BODY>
</HTML>
     