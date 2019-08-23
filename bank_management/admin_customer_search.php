
<html>
<?php
session_start();
if(isset($_SESSION['admin_name'])=="")
{
header("location: admin_login.php");
}
?>

<style type='text/css'>
body { 
background : url("p2.jpg");
background-repeat:no-repeat;
 background-size: 100%;

}
th {
	display: table-cell;
	font-weight:bold;
	text-align:center;
	color:white;
   }
td {
	display: table-cell;
	font-weight:bold;
	text-align:center;
	color:black;
   }
input[type=text], select {
    width: 100%;
    padding: 3px 5px;
    margin: 5px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-sizing: border-box;
}
input[type=text]:focus {
    border: 1px solid #555;
}
input[type=submit] {
    width: 80%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
	border: 1px solid #ccc;
    border-radius: 8px;
    cursor: pointer;
	}

input[type=submit]:hover{
background-color: grey;
    border: none;
    color: black;
	}
	
input[type=button] {
    width: 30%;
	position:right;
	font-weight:bold;
    background-color: grey;
    color: white;
    padding: 5px 10px;
    margin: 8px 0;
    border: none;
	border: 1px solid #ccc;
    border-radius: 8px;
    cursor: pointer;
	}
	
	input[type=button]:hover{
background-color: #4CAF50;
    border: none;
    color: black;
	}
	
div {
    height: 550px;
    width: 450px;
	position:absolute;
    top: 80px;
    right: 750px;
	border-radius: 10px;
	font-weight:bold;
	font-size:20;
    background-color: #1234;
    padding: 20px;
}

</style>
<body>
<div>
<form action="admin_customer_search.php" method="get"><br/><br/>

<b>Search for the customer here: </b><input type="text" name="value" placeholder="Search here" style="width:150px;height:35px;font:bold 15px Times New Roman;">&nbsp &nbsp
<input type="submit" name="search" value="Search Now" style="width:100px;height:35px;font:bold 15px Times New Roman;"></br>
Click here for &nbsp&nbsp
<input type="button" color="black"  value="HOME PAGE" onclick="fun1()"/>
<script> function fun1() { window.location="admin_home.php"; } </script></br>

Click here for &nbsp&nbsp
<input type="button" color="black"  value="LOG OUT" onclick="fun3()"/>
<script> function fun3() { window.location="Logout.php"; } </script></br>
</div>



</form>




</body>
</html>

<?php

mysql_connect("localhost","root","");
mysql_select_db("bank") or die("cannot connect to the database");

if(isset($_GET['search']))
{
$search_value=$_GET['value'];
$query="select * from customer where cname like '$search_value%'";
 

?>

<table width='800' align='center border='5'>
<tr bgcolor ='blue'>
   <th>customer Id </th>
   <th>customer  Name</th>
   <th>address</th>
   <th>username</th>
   <th>password</th>
   </tr>
<?php

$run=mysql_query($query);
if(mysql_num_rows($run)>0)
{
while($row=mysql_fetch_array($run))
{
$cid=$row[0];
$cname=$row[1];
$address=$row[2];
$username=$row[3];
$password=$row[4];

?>


<tr align='center' bgcolor='yellow'>
<td>   <?php echo $cid; ?></td>
<td>   <?php echo $cname; ?> </td>
<td>   <?php echo $address; ?> </td>
<td>   <?php echo $username; ?> </td>
<td>   <?php echo $password; ?> </td>

</tr>


<?php

}
}
else
{
	echo "<script> alert('no such users found!!! try with some valid users')</script>";
}
}

?>
</html>
