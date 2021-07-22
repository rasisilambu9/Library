<HTML>
<head>
<title>Book Insert</title>
<style>
body{background-color:#add8e6;}
 
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
  margin-left:960px;
  border: none;
  border-radius:10px;
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
  <a href="lend.php">Lend</a>
  <a href="return.php">Return</a>
  
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
$username = "root";
$password ="";
$dbname="test";
// Create connection
$conn = new mysqli($servername, $username, $password ,$dbname);
 



// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$up="UPDATE `test`.`book_det` SET `status` = 1 WHERE `Book_id` = '".$bookid."'";

 
$book="select `Name` from `test`.`book_det` where Book_id='$bookid'";
$books=mysqli_query($conn,$book);
while($row=mysqli_fetch_assoc($books))
	$bookname=$row["Name"];

$no_of_books="SELECT * from `test`.`stud_det` where `RollNo`='".$rollno."' ";
$query1= "INSERT INTO `test`.`lend_det` ( `RollNo`, `Book_id`, `Book`,`Date`) VALUES ('$rollno', '$bookid' ,'$bookname','$date')";
$roll="Select * from `test`.`stud_det`";

 
 echo"<br>";
 $book_res=mysqli_query($conn,$no_of_books);
 $rolls=mysqli_query($conn,$roll);
   $row=mysqli_num_rows($rolls);
 
 
 if($row1=mysqli_fetch_assoc($book_res)){
    echo"<tr>";
     
    if(($row1["No_of_book_avl"]<=4)&&($row1["No_of_book_avl"]!=0)){
if(mysqli_query($conn,$query1)){
 mysqli_query($conn,$up);
echo"<font color=black><b>Book Successfully taken by the student</b></font>";
if($row1["No_of_book_avl"]==0){
$up=0;}
else{
 $forup=$row1["No_of_book_avl"];
$up=$forup-1;}
echo"<br>";
echo"<br>";
 echo"Number of Books can take by the student:<font color=red>$up";
echo"<br>";
$update="UPDATE `test`.`stud_det` SET `No_of_book_avl` = $up WHERE `RollNo` = '".$rollno."' ";
$update1= "INSERT INTO `test`.`book_sts` (`Book_id`, `RollNo`, `status`) VALUES ('$bookid','$rollno','1')";
mysqli_query($conn,$update);
mysqli_query($conn,$update1);

 echo"<table border=1px color=blue>
     <tr>
     <th>Register NO</th>
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
	 
		echo"<b>Already 4 Books issued to this student</b>";}
 
}

?>
<br>
<br>
<br>
<b>
<a href="lend.php">click here</a> to lend another book
</b><br>

</div>
<br><br><br><br><br><br><br><br>
<center
<div class=blink>
<b>Note:<font color=green>If the Screen is blank Student Not signed Up Yet</marquee></b></div>
</body>
</html>