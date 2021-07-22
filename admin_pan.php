<HTML>
<head>
<title>Admin Panel-IT Dept Library</title>
<style>
.img1{
margin-top:100px;
margin-left:50px;
padding:80px;
} 
08:26 01-12-2020
form {
  align:center;
  padding: 120px;
   
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
body{
background-image:url("bg_done.jpg");
background-repeat:no-repeat;
background-size:1800px 800px;
} 
.img1 img {
   width: 180px;
  height: 150px;
  object-fit: contain;
  border-radius:20%;
}
/* Add a black background color to the top navigation */
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
  margin-top:-30px;
  margin-right:25px;
  border-radius:10px;
  background:green;
  font-size: 17px;
  border: none;
  cursor: pointer;

}
.topnav input[type=text]{
   
   padding:6px;
  margin-top: -30px;
  margin-left:1250px;
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
font{
padding:8px 0px;

}
 .notification {
  
  color: white;
  text-decoration: none;
  padding: 15px 26px;
  position: relative;
  display: inline-block;
  border-radius: 2px;
}

.notification:hover {
  background: green;
}

.notification .badge {
  position: absolute;
  top: 2px;
  right: -10px;
  padding: 5px 10px;
  border-radius: 50%;
  background: red;
  color: white;
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
<body bgcolor=black>
   
 <div class="topnav">
  <a class="home" href="index.html">Home</a>
  <a href="book_sts.php">Status</a>
  <a href="lend_staff.php">Lend to Staff</a>
  <a href="return_Staff.php">Return By Staff</a>
   <a href="staff_his.php">Staff History</a>
  <a href="overdue.php">Overdated</a>
   
  <a href="stud_del.php">Delete</a>
   <a href="inlib_books.php">Books In Library</a>

  <a href="about.html">About</a>
<form method=POST action="search.php" >
   <input type=text name="key" placeholder="Enter book item to search"></input>
      <button type="submit" value=submit >Submit</button>
</form>  
</div> 
 <h3><center><font color=red>A.V.C COLLEGE OF ENGINEERING</CENTER></H3>
<H4><CENTER>DEPARTMENT OF INFORMATION TECHNOLOGY</font></H4></center>
<div class="img1"><a href="lend.php" color=white><img src="book_lend.png" caption="Booklend"></img></a>
<a href="return.php"><img src="book_return.png" ></img></a>
<a href="history.php"><img src="history.jpg"></img></a> 
<a href="insert_new_book.php"><img src="update.jpg"></img></a> 
<a href="delete.php"><img src="delete.jpg"></img></a> 
<a href="journals_cd.php"><img src="journals_cd.png"></img></a> 
<br> 
 &emsp;&emsp;&emsp;
<b>Lend</b>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<b>Return</b> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<b>History</b>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<b>Insert New Book</b>&emsp;&emsp;&emsp;&emsp;&emsp;
<b>Book Delete</b>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<b>Journals</b>
 
 </div>
 <div class="blink">
 <?php
 

$servername = "localhost";
$username = "root";
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
	if($row["Date"]<date($mdate) )
		 
      echo"<marquee><font color=green size=5em>Kindly Check Overdated Books<font> </marquee>";
	  exit;
	
		}
 }
 ?>
 </div>
 </body>
</html>