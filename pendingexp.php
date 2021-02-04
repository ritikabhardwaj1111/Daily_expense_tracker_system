<?php
include_once('connectDE.php');
if(isset($_POST["button"]))
{
$pndNam = $_POST['pndNam'];
$pndCst = $_POST['pndCst'];
$pndDat = $_POST['pndDat'];
$qry = "INSERT INTO `tbpnd`(`pndNam`, `pndCst`, `pndDat`) VALUES ('$pndNam','$pndCst','$pndDat')";
$result = mysqli_query($conn,$qry);
if(!$result)
{
  echo "Error ".$qry."<br/>".mysqli_error($conn);
}
//mysqli_free_result($result);
mysqli_close($conn);
}
 ?>



<html>
<head>
  <title>
    Add Expenses
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
  .add{
    background-color: white;
    cursor: pointer;
    transition-duration: 0.4s;
    border: 2px solid #8B008B;
    height: 30px;
    width: 60px;
  }
  .add:hover{
    background-color: #8B008B;
  }
  .clear{
  text-align: center;
  height: 300px;
  width: 500px;
  background-image: linear-gradient(315deg, #42275a  0%, #734b6d 74%);
  margin: 0px 170px auto;
  font-size: 20px;
  color: black;
  }
  .clear:hover{
      box-shadow: 1px 1px 9px 1px #BDFFF3 ;
  }
  input[type="text"],[type="date"]{
    background-image: linear-gradient(#ff7e5f , #feb47b);
    height: 30px;
    margin: 0px 20px auto;
    width: 180px;
    border-radius: 30px;
    text-align: center;
    outline: none;
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
   <br><br> <h1>Add Pending Expenses</h1><br>
   <br><br>
   <div class="clear">
  <form method="POST" action="#">
    <br>
  <b>  Name</b><input type="text" name="pndNam" placeholder="eg Rent"><br><br>
   <b> Cost</b> <input type="text" name="pndCst" placeholder="eg 6546"><br><br>
    <b> Due Date</b> <input type="date" name="pndDat"  data-date-format="YYYY MMMM DD"  min="1997-01-01" max="2030-12-31"><br><br>
     <input type="checkbox"> Set a reminder
     <br><br>
          <button type="sumbit" class="add" name="button" onclick="alert('Expense Added')"> ADD </button>
        </div>
        </span>
        </font>
        </body>
        </html>
