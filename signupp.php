  <HTML>
<head>
<title>Student-signed up</title>
<style>
 body{
background-image:url("home-imgs.jpeg");
background-repeat:no-repeat;
background-size:1800px 800px;
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
  margin-left:1100px;
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
$name=$_POST["name"];
$year=$_POST["year"];
$dob=$_POST["dob"];
$mail=$_POST["mail"];
$phno=$_POST["phno"];

$i=1;    
$servername = "localhost";
$username = "localhost";
$password ="";
$dbname="test";
$query1= "INSERT INTO `test`.`stud_det` ( `RollNo`,`Name`,`year_sem`,`No_of_book_avl`, `dob`,`mail`,`phno`) VALUES ('$rollno','$name','$year',4,'$dob','$mail','$phno')";
$sel="Select RollNo from stud_det"; 
// Create connection
$conn = new mysqli($servername, $username, $password ,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
 
 
 echo"<br>";
 $res=mysqli_query($conn,$sel);
 while($row=mysqli_fetch_array($res))
 if($row['RollNo']==$rollno){
    echo"<font color=black><b>student already exist with ID:<font color=red>$rollno</font></b></font>";
exit;
 
 }
    if(mysqli_query($conn,$query1)){
	  echo"<table border=1px color=blue>
     <tr>
     <th>Roll No</th>
     <th>Name</th>
     <th>DOB</th>
     <th>Mail ID</th>
     <th>Phone NO</th>
     </tr>
      <tr>
      <td>$rollno</td>
      <td>$name</td>
       <td>$dob</td>
      <td>$mail</td>  <td>$phno</td>
     </tr>
     </table>";
 echo"<br>"; echo"<br>"; echo"<br>";
echo"<font color=black><b>New Student  signed up successfully with ID:<font color=red>$rollno</font></b></font>";}
	
	
 
?>
</div>
</body>
</html>