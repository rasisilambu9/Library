 <HTML>
<Head><title>Student History</title>
</head>
<body bgcolor=yellow>
<?php

$rollno=$_POST["rollno"];
$start=$_POST["start_date"];
$end=$_POST["end_date"];
 
$servername = "localhost";
$username = "localhost";
$password ="";
$dbname="test";
// Create connection
$conn = new mysqli($servername, $username, $password ,$dbname);
if ($conn->connect_error) 
  die("Connection failed: " . $conn->connect_error);
 
 
$query1="SELECT * FROM lend_det WHERE RollNo='$rollno' AND( Date >= CAST('".$start."' AS DATE) AND Date<= CAST('".$end."' AS Date))";

 
 
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
while($row1=mysqli_fetch_assoc($result1)){
    echo"<tr>";
     
    echo"<td>".$row1["RollNo"]."</td>";
    echo"<td>".$row1["Book_id"]."</td>";         
    echo"<td>".$row1["Book"]."</td>";
    echo"<td>".$row1["Date"]."</td>";
    $query="select Book_id,Date from`test`.`return_det` where `RollNo`='".$rollno."' AND `Book_id`='".$row1["Book_id"]."' ";
    $result=mysqli_query($conn,$query);
    
    while($row=mysqli_fetch_assoc($result))
          
          echo"<td>".$row["Date"]."</td>";
              
         

         
}
 
}
else{
echo"<b>No Transactions Performed In Selected Date[$start to $end] by this staff<font color=red> $rollno";}
 ?>
 </body></html>