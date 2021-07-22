<HTML>
<head>
 
<style>
.img1{
margin-top:100px;
margin-left:50px;
padding:80px;
} 
08:26 01-12-2020
form {
  align:center;
  padding: 120px;
   
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
body{
background-image:url("home-imgs.jpeg");
background-repeat:no-repeat;
background-size:1800px 800px;
} 
.img1 img {
   width: 180px;
  height: 150px;
  object-fit: contain;
  border-radius:20%;
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
  margin-top:4px;
  margin-left:10px;
  border-radius:10px;
  background:green;
  font-size: 17px;
  border: none;
  cursor: pointer;

}
.topnav input[type=text]{
   
   padding:6px;
  margin-top: 8px;
  margin-left:980px;
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
font{
padding:8px 0px;

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
 
 
 </style>
 <title>Book Status</title></head>
<BODY bgcolor=orange >
<div class="topnav">
  <a class="home" href="index.html">Home</a>
  <a href="journals">Journals</a>
  <a href="cd">CD</a>
  
  <a href="about.html">About</a>
    <form method=POST action="search.php" >
   <input type=text name="key" placeholder="Enter book item to search"></input>
      <button type="submit" value=submit >Submit</button>
    </form>  
   </div> 
  <h3><center>A.V.C COLLEGE OF ENGINEERING</CENTER></H3>
<H4><CENTER>DEPARTMENT OF INFORMATION TECHNOLOGY</H4>
<form method=POST action=book_sts_get.php class="form1">
<font color=black><b>Book ID</b><br><br>
<input type=longtext name="bookid"   ></input><br>	<br>
 
<Button type=submit>Get Details</button>
</BODY>
</HTML> 
 