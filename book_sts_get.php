 <HTML>
<HEAD>
<title>Book Status</title>
<style>
 
.almnt{
padding:100px;
margin-left:300px;}
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
  margin-top:6px;
  border-radius:10px;
  background:green;
  font-size: 17px;
  border: none;
  cursor: pointer;

}
.topnav input[type=text]{
   
   padding:6px;
  margin-top: 8px;
  margin-left:790px;
  border: none;
  border-radius:10px;
}
body{
background-image:url("home-imgs.jpeg");
background-repeat:no-repeat;
background-size:1500px 800px;
} 
 
 </style>
</head>
 

<body bgcolor=orange>
 <div class="topnav">
  <a class="books" href="allbooks.php">Books</a>
  <a href="lend.php">Lend</a>
  <a href="return.php">Return</a>
  <a href="about.html">About</a>
</div>
<div class="almnt">
<?php
$search=$_POST["bookid"];
$servername = "localhost";
$username = "localhost";
$password ="";
$dbname="test";
$query1= "SELECT * from `test`.`book_sts` where`Book_id`='".$search."'";
 
// Create connection
$conn = new mysqli($servername, $username, $password ,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$result=mysqli_query($conn,$query1);
$count=mysqli_num_rows($result);
if($count>=1){
echo"<table border=1px>
     <tr>
     <th>Book_id</th>
     <th>Roll No</th>
     <th>Status</th>
     </tr>";
while($row=mysqli_fetch_assoc($result)){
echo"<tr>";
echo"<td>".$row["Book_id"]."</td>";
 echo"<td>".$row["RollNo"]."</td>";
 if($row["status"]==0){
    echo"<td> Returned</td>";}
else{
echo"<td>Not Returned</td>";
echo"</tr>";
}
 
   
}
}

?> 
 
</div> 
<p><b>If the Book is Lost, it comes under admin control</b></p>
</body>
</html> 