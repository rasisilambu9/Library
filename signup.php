<HTML>
<HEAD>
<TITLE>Student signup</TITLE>
 <style>
body{
background-image:url("home-imgs.jpeg");
background-repeat:no-repeat;
background-size:1500px 800px;
} 

/* Add a black background color to the top navigation */
 
.form1 {
  align:center;
  padding:50px;
   
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
button {
  background-color:green;
  color: white;
  padding: 8px 20px;
  margin: 8px 0;
  border: black 1px;
  cursor: pointer;
  border-radius:10px;
   
}
input[type=text], input[type=date] ,select{
   
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius:20px;
  box-sizing: border-box;
}
.a{
color:grey;
font-size:1.5em;
}
</style>

 </HEAD>
<body>
  <div class="topnav">
  <a class="books" href="allbooks.php">Books</a>
  <a href="index.html">Journals</a>
  <a href="index.html">CD</a>
  
  <a href="about.html">About</a>
   
   <form method=POST action="search.php" >
   <input type=text name="key" placeholder="Enter book item to search"></input>
      <button type="submit" value=submit >Submit</button>
    </form>  
   </div>
 <center>

<form method=post action=signupp.php class="form1"> 
<font color=black><b>Register Number</b></font><br>
<input type=text name="rollno" placeholder=RegNO></input><br>
<font color=black></b>Name<b></font><br>
<input type=text name="name" placeholder=Name></input><br>
<font color=black></b>Year<b></font><br>
 <?php
 echo"<select name=year>";
 echo"<option value=0>Select Academic Year</option>";
 for($start=2000;$start<=2050;$start+=1){
	 $starts=$start+4;
	 $a=start;
	 $a.=starts;
 echo"<option value=$start-$starts >$start - $starts	</option>";}
 echo"</select>";
 
 ?>
 <br>
 <font color=black></b>DoB<b></font><br>
<input type=date name="dob" ></input><br>
<font color=grey></b>Mail Id<b></font><br>
<input type=text name="mail" placeholder=Mail ID></input><br>
<font color=black></b>Phone Number<b></font><br>
<input type=text name="phno" placeholder=Phone No></input><br>
<button type=submit value=submit>submit</button>
</form>
<br>
 
 
</center>
<HTML>
