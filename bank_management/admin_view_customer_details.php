
<html>
<?php
session_start();
if(isset($_SESSION['admin_name'])=="")
{
header("location: admin_login.php");
}
?>
<head>
<title>Admin customer view details</title>

</head>

<style>
body { 
background : url("bank27.jpg");
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
   <th> customer_id </th>
   <th>cname</th>
   <th>Address</th>
  
   <th>User Name</th>
   <th>Password</th>
   <th>Email</th>
   <th>Account type</th>
   

</tr>
<div>

Click here for &nbsp&nbsp
<input type="button" color="black"  value="HOME PAGE" onclick="fun1()"/>
<script> function fun1() { window.location="admin_home.php"; } </script></br>

Click here for &nbsp&nbsp
<input type="button" color="black"  value="LOG OUT" onclick="fun3()"/>
<script> function fun3() { window.location="Logout.php"; } </script></br>

</form>
</div>
</body>







<body background="bank27.jpg" ></body>

<?php
mysql_connect("localhost","root","");
mysql_select_db("bank") or die("cannot connect to the database");

$query="select * from customer";
$run=mysql_query($query);

while ($row=mysql_fetch_array($run))
{
$customer_id=$row[0];
$cname=$row[1];
$address=$row[2];
$username=$row[3];
$password=$row[4];
$email=$row[5];
$accounttype=$row[6];
?>

<tr align='center' bgcolor='yellow'>
<td>   <?php echo $customer_id; ?></td>
<td>   <?php echo $cname; ?> </td>
<td>   <?php echo $address; ?> </td>

<td>   <?php echo $username; ?> </td>
<td>   <?php echo $password; ?> </td>
<td>   <?php echo $email; ?> </td>
<td>   <?php echo $accounttype; ?> </td>



</tr>

<?php  }
?>
</html>