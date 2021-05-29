 <html>
<head>
<title>Book Lend</title> 
<style>
body{
background-image:url("home-imgs.jpeg");
background-repeat:no-repeat;
background-size:1500px 800px;}
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
  margin-top: 6px;
  border-radius:10px;
  background:green;
  font-size: 17px;
  border: none;
  cursor: pointer;

}
.topnav input[type=text]{
   
   padding:8px;
  margin-top: 6px;
  margin-left:920px;
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
.form1{
text-align:center;	
padding:100px;
margin-left:10px;
font-size:20px;
color:grey;
 }
input[type=varchar]{
border-radius:10px;
padding:10px;
border-color:green;
width:200px;}

select{
border-radius:10px;
padding:10px;
border-color:green;
width:200px;}
input[type=date]{
border-radius:10px;
padding:10px;
border-color:green;}

input[type=submit]{
border-radius:10px;
padding:10px;
border-color:green;}</style></head>
<body>
 <div class="topnav">
  <a  href="index.html">Home</a>
  
  
  <a href="about.html">About</a>
     <form method=POST action="search.php">
     <input type=text name="key" placeholder="Enter book item to search"></input>
      <button type="submit" value=submit >Submit</button>
    </form>  
   </div>
     <h3><center><font color=red>A.V.C COLLEGE OF ENGINEERING</CENTER></H3>
<H4><CENTER>DEPARTMENT OF INFORMATION TECHNOLOGY</font></H4>
<form action="insert_staff.php" method=POST class="form1" >
<font color=black align=black><b>StaffID</b></font><br>
<input type=varchar name="rollno" placeholder="Staff ID" required></input><br>
<font color=black><b>Book Id</b></font><br>
  <?php
 
$servername = "localhost";
$username = "localhost";
$password ="";
$dbname="test";
$query1= "SELECT * from `test`.`Book_det` where status=0";
 
// Create connection
$conn = new mysqli($servername, $username, $password ,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$result=mysqli_query($conn,$query1);
$count=mysqli_num_rows($result);

 echo"<select type=varchar name=bookid >";

 while($row=mysqli_fetch_assoc($result)){

 echo"<option name=bookid value=$row[Book_id]>$row[Book_id]</option>";
 echo"<br>";
 

 }
echo"</select>"; 
 ?>
 	
 
 
 
 
 
 
 
  <br>

<font color=black><b>Date</b></font><br>	
 <input type="date" value="<?php echo date("Y-m-d"); ?>" name="date" required readonly ></input><br>
<br>
 
<button type=submit>Lend</Button>
</form>
</body>
</html>