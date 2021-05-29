<HTML>
<head>
<title>Book Insert</title>
<style>
body{
background-image:url("home-imgs.jpeg");
background-repeat:no-repeat;
background-size:1500px 800px;
} 
 
.almnt{
margin-top:300px;
margin-left:480px;
border-radius:10px;}
.topnav {
  background-color: #333;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: #f2f2f2;
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
  margin-left:940px;
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
 
$date=$_POST["date"];
$bookid=$_POST["bookid"];
$avl;
$i=1;    
$servername = "localhost";
$username = "localhost";
$password ="";
$dbname="test";
// Create connection
$conn = new mysqli($servername, $username, $password ,$dbname);
$up="UPDATE `test`.`book_det` SET `status` = 1 WHERE `Book_id` = '".$bookid."'";

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$book="select `Name` from `test`.`book_det` where Book_id='$bookid'";
$books=mysqli_query($conn,$book);
while($row=mysqli_fetch_assoc($books))
	$bookname=$row["Name"];

$no_of_books="SELECT `No_of_book_avl` from `test`.`staff_det` where `staff_id`='".$rollno."' ";
$query1= "INSERT INTO `test`.`lend_det` ( `RollNo`, `Book_id`, `Book`,`Date`) VALUES ('$rollno', '$bookid' ,'$bookname','$date')";

echo"<br>";
$book_res=mysqli_query($conn,$no_of_books);
	 if($row1=mysqli_fetch_array($book_res)){
       echo"<tr>";
     
    if(($row1["No_of_book_avl"]<=4)&&($row1["No_of_book_avl"]!=0)){
            if(mysqli_query($conn,$query1)){
               mysqli_query($conn,$up);	
               echo"<font color=black><b>Book Taken by the staff Successfully</b></font>";echo"<br>";
               echo"<br>";
 $forup=$row1["No_of_book_avl"];
 if($row1["No_of_book_avl"]==0){
	 $up=0;
 }
 else{
 $up=$forup-1;}
 echo"<b>Number of Books can take by the staff:<font color=red>$up";

$update="UPDATE `test`.`staff_det` SET `No_of_book_avl` = $up WHERE `staff_id` = '".$rollno."' ";
$update1= "INSERT INTO `test`.`book_sts` (`Book_id`, `RollNo`, `status`) VALUES ('$bookid','$rollno','1')";
mysqli_query($conn,$update);
mysqli_query($conn,$update1);
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
}
 
 
}else{
	echo"<b>Already 4 Books issued to this student</b>";
}
	 }
 

?>
<br>
<br>
<br>
<b>
<a href="lend_staff.php">click here</a> to lend another book
<br><br>
 <div class=blink>
<b>Note:<font color=green>If the Screen is blank Staff Not signed Up Yet</marquee></b></div>
</b>
</div>
</body>
</html>