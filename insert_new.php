<HTML>
<head>
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
  margin-left:800px;
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
  
  <a href="about.html">About</a>
   <input type=text placeholder="Enter book item to search"></input>
  <button type="submit">submit</button>
   </div>
<div class="almnt"> 
<?php
 
$sno=$_POST["sno"];
$Book_id=$_POST["Book_id"];
$bookname=$_POST["name"];
$author=$_POST["author"];
 echo"<table border=1px color=blue>
     <tr>
     <th>S.No</th>
     <th>Book ID</th>
     <th>Book Name</th>
     <th>Author</th>
     </tr>
      <tr>
      <td>$sno</td>
      <td>$Book_id</td>
       <td>$bookname</td>
      <td>$author</td>
     </tr>
     </table>";
 
$i=1;    
$servername = "localhost";
$username = "localhost";
$password ="";
$dbname="test";
$query1= "INSERT INTO `test`.`book_det` ( `Book_id`, `Name`, `Author`,) VALUES ('$Book_id'  ,'$bookname','$author')";
 
// Create connection
$conn = new mysqli($servername, $username, $password ,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
 
 
 echo"<br>";
 if(mysqli_query($conn,$query1)){
echo"<font color=black><b>New Book inserted successfully</b></font>";}
 
 

?>
</div>
</body>
</html>