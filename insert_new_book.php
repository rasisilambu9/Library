 <HTML>
<head><style>
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
  margin-left:780px;
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
margin-left:10px;
font-size:20px;
color:grey;
 }
input[type=longtext]{
border-radius:10px;
padding:10px;
border-color:green;
width:200px;}
input[type=int]{
border-radius:10px;
padding:10px;
border-color:green;
width:200px;} 
input[type=submit]{
border-radius:10px;
padding:10px;
border-color:green;}</style></head>
<body>
 <div class="topnav">
  <a  href="index.html">Home</a>
  <a href="lend.php">Lend</a>
  <a href="return.php">Return</a>
  
  <a href="about.html">About</a>
   <form method=POST action="search.php">
    <input type=text name="key" placeholder="Enter book item to search"></input>
      <button type="submit" value=submit >Submit</button>
    </form>  
   </div>
   <h3><center><font color=red>A.V.C COLLEGE OF ENGINEERING</CENTER></H3>
<H4><CENTER>DEPARTMENT OF INFORMATION TECHNOLOGY</font></H4>
<form method=POST action=insert_new.php class="form1">
 
<font color=black><b>Book ID:</b><br>
<input type=longtext name="Book_id"   placeholder="Book ID" required></input><br>
<font color=black><b>Book Name <br>
<input type=longtext name="name"   placeholder="Book Name" required></input><br>
Author<br>
<input type=longtext name="author"   placeholder="Author" required></input><br>
<Button type=submit>Insert</button>
</body>
</html>