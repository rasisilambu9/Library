<HTMl>
<head>
<title>Return details</title>
<style>
body{background-color:#add8e6;}
 
.almnt{
margin-top:200px;
margin-left:480px;
border-radius:10px;}
.topnav {
  background-color: #333;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color:#f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
.topnav button{
   
  float: right;
  padding:6px;
  margin-top: 8px;
  border-radius:10px;
  background:green;
  font-size: 17px;
  border: none;
  cursor: pointer;

}
.topnav input[type=text]{
   
   padding:8px;
  margin-top: 8px;
  margin-left:930px;
  border: none;
}
 
button {
  background-color:green;
  color: white;
  padding: 8px 20px;
  margin: 8px 0;
  border: black 1px;
  cursor: pointer;
  border-radius:10px;
   
}

</style>
</head>
<body>
<div class="topnav">
  <a  href="index.html">Home</a>
 
  
  <a href="about.html">About</a>
   <input type=text placeholder="Enter book item to search"></input>
  <button type="submit">submit</button>
   </div>
<div class="almnt">
<?php
$rollno=$_POST["rollno"];
$bookid=$_POST["bookid"];
 
$date=date("Y-m-d");
$servername = "localhost";
$username = "localhost";
$password ="";
$dbname="test";
 
// Create connection
$conn = new mysqli($servername, $username, $password ,$dbname);
$no_of_books="SELECT `No_of_book_avl` from `test`.`staff_det` where `staff_id`='".$rollno."' ";
$up="UPDATE `test`.`book_det` SET `status` = 0 WHERE `Book_id` = '".$bookid."'";
$updates="UPDATE `test`.`lend_det` SET `status` = 1 WHERE `RollNo` = '".$rollno."' and Book_id='".$bookid."'";
mysqli_query($conn,$updates);
mysqli_query($conn,$up);
$book_res=mysqli_query($conn,$no_of_books);
// Check connection
$book="select `Name` from `test`.`book_det` where Book_id='$bookid'";
$books=mysqli_query($conn,$book);
while($row=mysqli_fetch_assoc($books))
	$bookname=$row["Name"];
$query1= "INSERT INTO `test`.`return_det` ( `RollNo`, `Book_id`, `Book`,`Date`) VALUES ( '$rollno', '$bookid' ,'$bookname','$date')";


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
 echo"<table border=1px color=blue>
     <tr>
     <th>RollNO</th>
     <th>Book</th>
     <th>Book ID</th>
     <th>Date</th>
     </tr>
      <tr>
      <td>$rollno</td>
      <td>$bookname</td>
       <td>$bookid</td>
      <td>$date</td>
     </tr>
     </table>";
  
      echo"<br>"; 
 
 if(mysqli_query($conn,$query1)){
	   while($row1=mysqli_fetch_assoc($book_res)){
		   if($row1["No_of_book_avl"]==4){
		   $up=4;}
		   else{
	  $forup=$row1["No_of_book_avl"];
		   $up=$forup+1;}
     
	  echo"<br>";
	  echo"<br>";

$update="UPDATE `test`.`stud_det` SET `No_of_book_avl` = $up WHERE `RollNo` = '".$rollno."'";
mysqli_query($conn,$update);
$update1="UPDATE `test`.`book_sts` SET `status` = 0 WHERE `Book_id` = '".$bookid."' ";
mysqli_query($conn,$update1);
}}
 echo"<b>Number of Book Available:$up";
 echo"<br>";echo"<br>";
  echo"<font color=black><b>Book Returned by the staff Successfully</b></font>";
?>
<br>
<br>
<br>
<b>
<a href="return_staff.php">click here</a> to Return another book
</b>
</div>
</body>
</html> 