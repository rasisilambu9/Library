  <HTML>
<head><title>Deleted-Academic Year</title>
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
  margin-left:980px;
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
  <a href="lend.php">Lend</a>
  <a href="return.php">Return</a>
  
  <a href="about">About</a>
   <input type=text placeholder="Enter book item to search"></input>
  <button type="submit">submit</button>
   </div>
<div class="almnt">
<?php
 

$ac=$_POST["year"];
 
       
  

 
   
$servername = "localhost";
$username = "root";
$password ="";
$dbname="test";
$conn = new mysqli($servername, $username, $password ,$dbname);
 
$query1= "Delete  from stud_det where Year_sem	='".$ac."' ";
 
// Create connection
 

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
 
 
 echo"<br>";
 
 

if(mysqli_query($conn,$query1))
 echo"<b>Student belonging to the Academic year <font color=red>$ac</font> Deleted successfully</b>";
?>
</div>
</body>
</html>