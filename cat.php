<html>
<head>
  <title>
    Categories
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
  table{
    color: white;
    font-size: 20px;
    text-align: center;
    width: 700px;
    margin: 0px 100px auto;
    border-bottom-left-radius: 50px;
    border-bottom-right-radius: 30px;
    padding: 0px;
    background-image: linear-gradient(315deg, #bf3a30 0%, #864ba2 74%);
    height: 400px;
    border: 1px ;
    box-shadow: 5px 10px;
  }
  table tr:hover{
    background-color: #FFAF7B;
    color: black;
    cursor: pointer;
  }
  table th{
    background-color:  #BD4F6C;
    color: black;
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
   <br><br> <h1>Categories</h1><br>
<table cellspacing="0">
   <?php
include_once('connectDE.php');
$qry0 = "SELECT * FROM `tbcat` ";
$result = mysqli_query($conn,$qry0);
echo"<tr>";
echo"<th>"."Code"."</th>";
echo"<th>"."Category"."</th>";
echo"<th>"."Description"."</th>";
echo"<th colspan='2'>"." "."</th>";
echo"</tr>";
while($row = mysqli_fetch_array($result))
{
    ?>
    <tr>
    <td><?php echo $row["catCod"]?></td>
    <td><?php echo $row["catNam"]?></td>
    <td><?php echo $row["catDes"]?></td>
    </tr>
    <?php
   }
   mysqli_free_result($result);
   mysqli_close($conn);
    ?>
    </table>
</span>
</font>
</body>
</html>
