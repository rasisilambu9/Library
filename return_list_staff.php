<HTML>
<head>
<title>Book Return</title>
<style>
body{
background-image:url("home-imgs.jpg");
background-repeat:no-repeat;
background-size:1800px 800px;}
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
   
   padding:10px;
  margin-top: 8px;
  margin-left:1100px;
  border: none;
border-radius:20px;
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
 .form1{
text-align:center;	
padding:100px;
margin-left:150px;
font-size:20px;
color:grey;
 }
  .form2{
	align:center;
text-align:center;	
padding:100px;
margin-left:100px;
font-size:20px;
color:grey;
 }
 
	input[type=varchar]{
border-radius:10px;
padding:10px;
border-color:green;
width:200px;}
input[type=date]{
border-radius:10px;
padding:10px;
border-color:green;}
select{
border-radius:10px;
padding:10px;
width:200px; }
.input[type=submit]
{  
  background-color:green;
  color: white;
  padding: 8px 20px;
  margin: 8px 0;
  border: black 1px;
  cursor: pointer;
  border-radius:10px;
   

}
.for{
padding:110px;
margin-left:400px;}
	
 
</style>
</head>
<body>
 <div class="topnav">
  <a  href="index.html">Home</a>
 
  <a href="about.html">About</a>
     <form method=POST action="search.php">
     <input type=text name="key" placeholder="Enter book item to search"></input>
       <button type="submit" value=submit >Submit</button>
	   </div>
	   </form>
	      <h3><center><font color=red>A.V.C COLLEGE OF ENGINEERING</CENTER></H3>
<H4><CENTER>DEPARTMENT OF INFORMATION TECHNOLOGY</font></H4>
<div class="for">  
<form action="return_det_staff.php" method=POST>
<font color=black><b>&emsp;&emsp;&emsp;Rollno</b></font><br>
  <?php
 $rollno=$_POST["rollno"];
 echo"<input type=varchar name=rollno value=$rollno></input>";echo"<br>";
 echo"<font color=grey><b>&emsp;&emsp;&emsp;&emsp;Book ID</b></font><br>";
$servername = "localhost";
$username = "root";
$password ="";
$dbname="test";
 $query1= "select status,Book_id from lend_det where RollNo='".$rollno."'";
 
// Create connection
$conn = new mysqli($servername, $username, $password ,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$result=mysqli_query($conn,$query1);
$count=mysqli_num_rows($result);
  
 echo"<select type=varchar name=bookid required>";
 echo"<option value=0>Select Book to Return</option>";

 while($row=mysqli_fetch_assoc($result)){
	  if($row[status]==0)

 echo"<option name=bookid value=$row[Book_id]>$row[Book_id]</option>";
 echo"<br>";
 

 }
echo"</select>"; 
 ?>
 
 
  <br>
<font color=black><b>&emsp;&emsp;&emsp;&emsp;&emsp;	Date</b><?font><br>	
&emsp; <input type="date" value="<?php echo date("Y-m-d"); ?>" name="date" required readonly ></input><br> 
&emsp;&emsp;&emsp;&emsp;<Button type="submit" value=submit>Return</Button>
</form>
</body>
</HTML>
