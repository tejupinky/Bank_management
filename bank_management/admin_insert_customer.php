
<html>
<?php
session_start();
if(isset($_SESSION['admin_name'])=="")
{
header("location: admin_login.php");
}
?>
<head>
<title>Customer Register Form</title>

</head>

<style>
body { 
background : url("bank27.jpg");
background-repeat:no-repeat;
 background-size: 100%;

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
input[type=email], select {
    width: 100%;
    padding: 3px 5px;
    margin: 5px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-sizing: border-box;
}
input[type=email]:focus {
    border: 1px solid #555;
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

input[type=number], select {
    width: 100%;
    padding: 3px 5px;
    margin: 5px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-sizing: border-box;
}
input[type=number]:focus {
    border: 1px solid #555;
}
input[type=submit] {
    width: 60%;
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
    width: 400px;
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
<body background="bank27.jpg" >

</body>
<body>


<div>
<form method="post" action="">
<label  for="reg">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<u><b>CUSTOMER&nbsp&nbspREGISTRATION&nbsp&nbspFORM</b></u></label><br><br>

<label for="cname"><b>cname:</b></label> 
<input placeholder="Enter your cname" type="text" name="cname" /></br>

<label for="address"><b>address:</b></label> 
<input placeholder="Enter your address" type="text" name="address" /></br>

<label for="username"><b>username:</b></label> 
<input placeholder="Enter your user name" type="text" name="username" /></br>

<label for="password"><b>password:</b></label> 
<input placeholder="Enter your password" type="password" name="password"/></br>
<label for="password"><b>EMail:</b></label> 
<input placeholder="Enter your email" type="text" name="email"/></br>
<label for="password"><b>account_type:</b></label> 
<input placeholder="Enter your account_type" type="text" name="accounttype"/></br>

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="submit" value="SUBMIT"  /> </br>

Click here for &nbsp&nbsp
<input type="button" color="black"  value="HOME PAGE" onclick="fun1()"/>
<script> function fun1() { window.location="admin_home.php"; } </script></br>

</form>
</div>
</body>


</html>


<?php


$con=mysql_connect("localhost","root","");
mysql_select_db("bank") or die("cannot connect to the database");

if(isset($_POST['submit']))
{
 
 $cname=$_POST['cname'];
  $address=$_POST['address'];
  
  $username=$_POST['username'];
  $password=$_POST['password'];
$email=$_POST['email'];
 $accounttype=$_POST['accounttype']; 

if($cname =='')
{
echo "<script> alert('Please enter your cname')</script>";
exit();
}

if($address =='')
{
echo "<script> alert('Please enter your address')</script>";
exit();
}

if($username =='')
{
echo "<script> alert('Please enter your username')</script>";
exit();
}

if($password =='')
{
echo "<script> alert('Please enter your password')</script>";
exit();
}
if($email =='')
{
echo "<script> alert('Please enter your email')</script>";
exit();
}
$check_email="select * from customer where email='$email'";

$run=mysql_query($check_email);

if(mysql_num_rows($run)>0)
{
echo "<script> alert('Email already exists') </script>";
exit();
}
if($accounttype =='')
{
echo "<script> alert('Please enter your account type')</script>";
exit();
}
$query= "insert into customer(cname,address,username,password,email,account_type) values ('$cname','$address','$username','$password','$email','$accounttype')";

if(mysql_query($query))
{

echo "<script> alert('User is Succussfully registered')</script>";

}


}


?>
