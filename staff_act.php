 <HTML>
<HEAD>
<style>
.pan{
	background-color:blue;
}
.blink {
	  padding:500px;
margin-bottom:100px;
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
</style>
<TITLE>
Staff Details</TITLE>
</HEAD>
<BODY bgcolor=#89ceeb>
<center>

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
 
$query1= "Select * from `test`.`staff_det` where `staff_id`='".$stu_id."'"; 
 

$result=mysqli_query($conn,$query1);
while($row=mysqli_fetch_array($result)){
 
if( $passworda==($row['dob'])	)
{	
$result=mysqli_query($conn,$query1);
while($row=mysqli_fetch_array($result)){
echo"<b><font color=red>ROLLNO</font>:".$row["staff_id"]."	</b>";
echo"</br>";echo"</br>";
echo"<b><font color=red>NAME</font>:".$row["Name"]."</b>";
	echo"<br>";echo"</br>";
echo"<b><font color=red>NO OF BOOK AVAILABLE</font>:".$row["No_of_book_avl"]."</td>";echo"</br>";echo"</br>";
echo"<b><font color=red>DOB</font>:".$row["dob"]."</td>";echo"</br>";echo"</br>";
echo"<b><font color=red>Mail ID</font>:".$row["mail"]."</td>";echo"</br>";echo"</br>";
echo"<b><font color=red>Phone NO</font>:".$row["phno"]."</td>";echo"</br>";echo"</br>";
echo"<br>";echo"</br>";
echo"<br>";
}
 
$query1="SELECT * FROM lend_det WHERE RollNo='$stu_id'";

 
 
$result1=mysqli_query($conn,$query1);
 
 
 
$count1=mysqli_num_rows($result1);
  

  
     
 

 
if($count1 >= 1){
echo"<table border=1px align=center>
     <tr>
      
     <th>RollNo</th>
     <th>Book Id</th>
     <th>Book Name</th>
     <th>Lend Date</th>
     <th>Return Date</th>
      
     </tr>";
while($row1=mysqli_fetch_assoc($result1)){
    echo"<tr>";
     
    echo"<td>".$row1["RollNo"]."</td>";
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
echo"<b>No Transactions Performed By this staff";}
}else{
echo"<b>Invalid Password</b>";echo"<br>";
echo"<a href=stud.php>Click Here to Go to Student page</a>"; }
}
 ?> 


 <br>
 <br>
 
 
</center>
 <div class=blink>
<font color=red><b>Note:If the screen is Blank, Staff not found</b></font></div>
</BODY>
</HTML>
     