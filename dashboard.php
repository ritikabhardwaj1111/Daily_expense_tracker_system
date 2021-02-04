<html>
<head>
  <title>
    Dashboard
  </title>
  <style>
  body{
    background-color: black;
    margin: 0;
  }
  .menu{
    width: 240px;
    height: 600px;
    background-color: #333;
    color: pink;
    float: left;
    position: sticky;
    display: block;
  }
  .menu a:hover{
    background-color: green;
    text-decoration: none;
    cursor: pointer;
  }
  #userImg{
    border-radius: 50%;
    height: 60px;
    width: 60px;
    border-color: black;
    float: left;
    margin-left: 10px;
    margin-top: 4px;
  }
  .userDel{
    width: 240px;
    background-color: #00ff7f;
    background-image: linear-gradient(315deg, #3a6186 0%, #89253e 74%);
    height: 70px;
  }
  .menu a{
    color:white;
    font-size: 20px;
    width: 240px;
    height: 25px;
    display: block;
    text-decoration: none;
    padding: 12px 16px;
  }
  .menu a:hover{
    background-color: black;
  }
  .dropdown {
  float: left;
  overflow: hidden;
  }
  .dropdown .dropbtn {
  font-size: 20px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  width: 240px;
    text-align: left;
  }
  .navbar a:hover, .dropdown:hover .dropbtn {
  background-color: black;
  }
  .dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  }
  .dropdown-content a {
  float: none;
  color: black;
  padding: 10px 7px;
  text-decoration: none;
  display: block;
  text-align: left;
  }
  .dropdown-content a:hover {
  background-color: #ddd;
  }
  .dropdown:hover .dropdown-content {
  display: block;
  }
.bal{
  background-color: red;
  height: 90px;
  font-size: 20px;
  width: 170px;
  text-align: center;
  border-radius: 20px;
  box-shadow: 1px 1px 9px 1px #333;
}
.reminder{
  background-color:  #89253e ;
  font-size: 20px;
  text-align: center;
  box-shadow: 1px 1px 9px 1px #333;
  border-radius: 3px;
}
.container{
  display: grid;
  grid-template-columns: repeat(2,auto);
  grid-gap: 30px;
  box-sizing: border-box;
  width: 100%;
  padding: 4px;
}
input[type="text"]
{
  border-radius: 30px;
  outline: none;
  text-align: center;
}
.cookie{
background-color: #3a6186;
margin: 90px auto;
font-size: 21px;
}
.divcook{
  text-align: center;
  border : green 1px;
  background-color: lightblue;
  margin: 0px 40px auto;
  border: 2px solid black;
  font-size: 20px;
  outline: none;
  cursor: pointer;
}
.CookieButton{
  text-align: center;
  border : green 1px;
  background-color: lightblue;
  border: 2px solid white;
  font-size: 19px;
  outline: none;
  cursor: pointer;
}
  </style>
</head>
<body>
               <div class="menu">
<div class="userDel">
     &ensp;
     <img src ="account.jpg"  id="userImg" border="2"></img>
      <font color=" #101010"><br>
        <span style="float:right; margin-right:15px; font-size: 20px;">
        <b>  Charlotte Miller</b>
        </span>
      </font>
</div>
<br>
<font color="white">
       <a href="dashboard.php"> Dashboard </a>
       <a href="exphistory.php"> History </a>
       <div class="dropdown">
           <button class="dropbtn">&#10565; Expenses
             <i class="fa fa-caret-down"></i>
           </button>
           <div class="dropdown-content">
             <a href="cat.php"> Category </a>
             <a href="addclrexp.php"> Add Cleared Expenses </a>
             <a href="pendingexp.php"> Add Pending Expenses </a>
             <a href="recipts.php">	Receipt inbox</a>
           </div>
         </div>
         <br><br>
       <a href="calculator.php"> Calculator</a>
       <hr style="height:2px;border-width:0;color:gray;background-color:gray"><br>
       <a href="contact.php"> Contact Support</a>
       <a href="#"> Settings</a>
</font>
</div>
<span style="float:left; margin-left: 40px;">
<font color="white">
   <br><br> <h1>Dashboard</h1>
<div class="container">
  <form method="POST" action="cookie.php">
<p span style="font-size: 20px;">     Today's spending limits : </span>  <input type="text" name="limit">
  <button type="sumbit" class="CookieButton" name="CookieButton"> Sumbit </button>
  </form>
  <br>
   <div class="bal">
<b>Your Current Balance: </b>
   <br>
  <font color="black"> &#8377; 24,11,786</font>
</div>
<div class="reminder">
  <b>Reminder :</b>
  <br>
  <font color="black">
  <?php
  include_once('connectDE.php');
  $qry0 = "SELECT `pndNam`, `pndDat` FROM `tbpnd` ";
  $result = mysqli_query($conn,$qry0);
  while($row = mysqli_fetch_array($result))
  {
  echo $row["pndNam"].' due on '.$row["pndDat"];
  echo "<br>";
}
  ?>
  </font>
 </div>
</div>
<br>
<div class="cookie" id="cookie">
  This site uses cookies to provide you with a great experience.
  <br>
  Check out our <font color="black"> Cookie policy </font>. Do you accept these cookies and the
  processing of personal data involved?
  <br><br>
  <a href="cook.php" ><button class="divcook" id="divcook0" onclick="hide()"> More information </button></a>
  <button class="divcook" id="divcook" onclick="hide()"> Yes, I Accept </button>
</div>
</span>
</font>
<script>
function hide()
{
  document.getElementById("cookie").style.backgroundColor = "black";
  document.getElementById("divcook0").style.backgroundColor="black";
  document.getElementById("divcook").style.backgroundColor="black";
  document.getElementById("cookie").style.color="black";
}
</script>
</body>
</html>
