 <HTML>
<HEAD>
<TITLE>IT DEPT LIBRARY</TITLE>
<style>
body{
background-image:url("home-imgs.jpeg");
background-repeat:no-repeat;
background-size:1800px 800px;
} 

/* Add a black background color to the top navigation */
 
.form1 {
  align:center;
  padding:120px;
   
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
input[type=text], input[type=date] {
   
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius:20px;
  box-sizing: border-box;
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
 <h3><center><font color=green face="verdana">A.V.C COLLEGE OF ENGINEERING</CENTER></H3>
<H4><CENTER>DEPARTMENT OF INFORMATION TECHNOLOGY</H4>

<form method=POST action="staff_act.php" class="form1"> 
<CEnter><h4><font color=red face=verdana>FACULTY LOGIN</font></center>
<font color=black><b>Name</b></font><br>
<input type=text name="name" placeholder="Staff ID"></input><br>
<font color=black><b>Password</b></font><br>
<input type=date name="password" placeholder=Password></input><br>
<button type=submit value=submit>submit</button>
</form>
<br>
</center>
</body>
</HTML>
