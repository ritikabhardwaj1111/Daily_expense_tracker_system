<html>
<head>
  <title>
        Calculator
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
    background-color: #f8ceec;
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
  .cal{
    box-sizing: border-box;
    width: 100%;
    height: 350px;
    margin-left: 50px;
  
  }
  .screen{
  width: 240px;
  height: 100px;
  background-color: #f4e1d2;
  border: black;
  cursor: none;
  font-size: 20px;
  position: sticky;
}
.keys{
  width:60px;
  height: 63px;
  background-color: #000080 ;
  font-size: 20;
  opacity: 1;
  padding: 10px 24px;
  float:left;
  border:black;
  cursor: pointer;
  color: white;
  outline: none;
  box-shadow: 4px 4px rgba(0, 0, 0, 0.7);
  position: sticky;
  margin-left: 19px auto;
}
.keys:hover{
  background-color: red;
}
.enter{
  width: 240px;
  height: 60px;
  background-color:#f44336;
  font-size: 20px;
  float: left;
  border:black;
  cursor: pointer;
  box-shadow: 4px 4px rgba(0, 0, 0, 0.7);
  position: sticky;
}
.enter:hover{
  background-color: #CC0000;
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
  <h1> Calculator </h1>
  <hr style="height:2px;border-width:0;color:gray;background-color:gray"></hr><br>
   <br>

<div class="cal">
  <div> <input type="text" class="screen" id="final_result"></input>
  </div>
  <div>
      <input type="button" class="keys" value="AC" onclick="clr()">
    </div>
    <div ><input type="button" class="keys" value="7" onclick="a('7')">
    </div>
    <div><input type="button" class="keys" value="8" onclick="a('8')">
    </div>
    <div><input type="button" class="keys" value="9" onclick="a('9')">
    </div><br>
    <div><input type="button" class="keys" value="+" onclick="a('+')">
    </div>
    <div> <input type="button" class="keys" value="6" onclick="a('6')">
    </div>
    <div><input type="button" class="keys" value="5" onclick="a('5')">
    </div>
    <div><input type="button" class="keys" value="4" onclick="a('4')">
    </div><br>
    <div><input type="button" class="keys" value="-" onclick="a('-')">
    </div>
    <div><input type="button" class="keys" value="1" onclick="a('1')">
    </div>
    <div><input type="button" class="keys" value="2" onclick="a('2')">
    </div>
    <div><input type="button" class="keys" value="3" onclick="a('3')">
    </div><br>
    <div><input type="button" class="keys" value="*" onclick="a('*')">
    </div>
    <div><input type="button" class="keys" value="." onclick="a('0')">
    </div>
    <div><input type="button" class="keys" value="0" onclick="a('.')">
    </div>
    <div><input type="button" class="keys" value="/" onclick="a('/')">
    </div>
    <br>
    <div><input type="submit" class="enter" value="=" onclick="solve()">

  </div>
</div>
</span>
</font>
<script>
function a(val)
{
  document.getElementById('final_result').value+=val;
}
function solve()
{
           let x = document.getElementById("final_result").value
           let y = eval(x)
           document.getElementById("final_result").value = y
}
function clr()
{
  document.getElementById('final_result').value=" ";
}
</script>
</body>
</html>
