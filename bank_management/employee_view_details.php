



<html>
<?php
session_start();
?>
<html>
<?php
if(!($_SESSION['username']))
{
header("location: employee_login.php");
}
?>
<head>
<title>Employee Register Form</title>

</head>

<style>
body { 
background : url("p2.jpg");
background-repeat:no-repeat;
 background-size: 100%;

}

div {
    height: 550px;
    width: 550px;
	position:absolute;
    top: 300px;
    right: 750px;
	border-radius: 10px;
	font-weight:bold;
	font-size:20;
    background-color: #1234;
    padding: 20px;
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

</style>
<form action="" method="post">
<table width='800' align='center border='5'>
<tr bgcolor ='blue'>
   <th> Emplooyee Id </th>
   <th>Employee Name</th>
   <th>Email</th> 
   <th>User Name</th>
   <th>Password</th>
    <th>Phone number</th>
 

</tr>
<div>

Click here for &nbsp&nbsp
<input type="button" color="black"  value="HOME PAGE" onclick="fun1()"/>
<script> function fun1() { window.location="employee_home.php"; } </script></br>


Click here for &nbsp&nbsp
<input type="button" color="black"  value="UPDATE DETAILS" onclick="fun2()"/>
<script> function fun2() { window.location="employee_update.php"; } </script></br>

Click here for &nbsp&nbsp
<input type="button" color="black"  value="LOG OUT" onclick="fun3()"/>
<script> function fun3() { window.location="Logout.php"; } </script></br>

</form>
</div>
</body>







<body background="p2.jpg" ></body>

<?php
mysql_connect("localhost","root","");
mysql_select_db("bank") or die("cannot connect to the database");

$query="select * from employee";
$run=mysql_query($query);

while ($row=mysql_fetch_array($run))
{
$id=$row[0];
$ename=$row[1];
$email=$row[2];
$username=$row[3];
$password=$row[4];
$phno=$row[5];
?>

<tr align='center' bgcolor='yellow'>
<td>   <?php echo $id; ?></td>
<td>   <?php echo $ename; ?> </td>
<td>   <?php echo $email; ?> </td>
<td>   <?php echo $username; ?> </td>
<td>   <?php echo $password; ?> </td>
<td>   <?php echo $phno; ?> </td>



</tr>

<?php  }
?>
</html>