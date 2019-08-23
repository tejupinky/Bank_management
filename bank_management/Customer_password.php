<?php
session_start();
?>
<html>
<?php
if(!($_SESSION['username']))
{
header("location: Customer_login.php");
}
?>
<head>
<title>Update Customer Information</title>
</head>


<style>
body { 
background : url("bank27.jpg");
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
   
   input[type=password], select {
    width: 100%;
    padding: 3px 5px;
    margin: 5px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-sizing: border-box;
}
input[type=password]:focus {
    border: 1px solid #555;
}

input[type=submit] {
    width: 60%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 7px 0;
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
    width:500px;
	position:absolute;
    top: 80px;
    right: 750px;
	border-radius: 20px;
	font-weight:bold;
	font-size:20;
    background-color: #1234;
    padding: 40px;
}
</style>
<body background="bank27.jpg" >
</body>
<body>

<div>
<form method="post" action="">
<table width='800' align='center border='5'>
<tr bgcolor ='blue'>
   <th> Customer Id </th>
   <th>Customer Name</th>
   <th>Address</th>
   <th>User Name</th>
   <th>Password</th>
  

</tr>

</br>




<label  for="reg">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<u><b>CHANGE&nbsp&nbspPASSWORD&nbsp&nbsp</b></u></label><br><br>



<label for="password"><b>Password:</b></label> 
<input placeholder="Enter your password" type="password" name="password"/></br>

<label for="password"><b>Retype Password:</b></label> 
<input placeholder="Retype your password" type="password" name="retype"/></br>

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="submit" value="SUBMIT"  /> 
<br></br>



Click here for &nbsp&nbsp
<input type="button" color="black"  value="HOME PAGE" onclick="fun1()"/>
<script> function fun1() { window.location="Customer_home.php"; } </script></br>

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
$get_username=$_SESSION['username'];
$query="select * from customer where username='$get_username'";
$run=mysql_query($query);

while ($row=mysql_fetch_array($run))
{
$id=$row[0];
$name=$row[1];
$address=$row[2];
$username=$row[3];
$password=$row[4];
?>

<tr align='center' bgcolor='yellow'>
<td>   <?php echo $id; ?></td>
<td>   <?php echo $name; ?> </td>
<td>   <?php echo $address; ?> </td>
<td>   <?php echo $username; ?> </td>
<td>   <?php echo $password; ?> </td>



</tr>

<?php  }


if(isset($_POST['submit']))
{
 
$password=$_POST['password'];
 $retype=$_POST['retype'];

 


if($password =='')
{
echo "<script> alert('Please enter your password')</script>";
exit();
}

if($retype =='')
{
echo "<script> alert('Please enter your password again')</script>";
exit();
}
if($password==$retype)
{
$query="update customer set password='$password' where username='$get_username'";

if(mysql_query($query))
{
$_SESSION['username']=$get_username;
echo "<script> alert('Password changed Successfully') </script>";
echo "<br>";
echo " <a href='Customer_view_details.php'>View result</a>"; 
} 
}
else { 
echo "<script> alert('reenter the password') </script>"; 
} 
}

?> 
</html>