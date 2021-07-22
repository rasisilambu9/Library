<HTML>
<head>
<title>Book Return</title>
<style>
body{
background-image:url("home-imgs.jpeg");
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
  margin-left:960px;
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
padding:50px;
margin-left:-20px;
font-size:20px;
color:grey;
 }
  .form2{
	align:center;
text-align:center;	
padding:100px;
margin-left:80px;
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
	
 
</style>
</head>
<body>
 <div class="topnav">
  <a  href="index.html">Home</a>
  <a href="lend.php">Lend</a>
  <a href="history.php">History</a>
  
  <a href="about.html">About</a>
     <form method=POST action="search.php">
     <input type=text name="key" placeholder="Enter book item to search"></input>
       <button type="submit" value=submit >Submit</button>
    </form> 
	
  </div>
    <h3><center><font color=red>A.V.C COLLEGE OF ENGINEERING</CENTER></H3>
<H4><CENTER>DEPARTMENT OF INFORMATION TECHNOLOGY</font></H4>
  <form method=POST action="return_list.php" class="form1">

<font color=black><b>Reg No</b></font><br>
&emsp;&emsp;&emsp;<input type=varchar name="rollno" placeholder="RegNo"  required></input><br><br>
<button type=submit value=submit >Get Books</button>	<br><br>	
</form>


</body>
</HTML>
