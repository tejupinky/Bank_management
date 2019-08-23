
<html>
<head>
<title>Publisher Register Form</title>

</head>

<style>
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
    background-color: lightblue;
    padding: 20px;
}
</style>
<body  background="b10.jpg" width="100%" height="100%"  leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
</body>
<body>


<div>
<form method="post" action="">

<label  for="reg">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<u><b>PUBLISHER&nbsp&nbspREGISTRATION&nbsp&nbspFORM</b></u></label><br><br>

<label for="pname"><b>customer id:</b></label> 
<input placeholder="Enter customer id" type="text" name="customer id" /></br>

<label for="address"><b>Amount:</b></label> 
<input placeholder="Enter your Amount" type="text" name="amount" /></br>


&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="submit" value="SUBMIT"  /> </br>

111

</form>
</div>
Click here for &nbsp&nbsp
<input type="button" color="black"  value="HOME PAGE" onclick="fun1()"/>
<script> function fun1() { window.location="admin_home.php"; } </script></br>
</body>


</html>


<?php

session_start();
$con=mysql_connect("localhost","root","");
mysql_select_db("bank") or die("cannot connect to the database");

if(isset($_POST['submit']))
{
$customer_id=$_POST['custiomer_id'];
$amount=$_POST['amount'];


if($customer_id =='')
{
echo "<script> alert('Please enter your customer_id')</script>";
exit();
}

if($amount =='')
{
echo "<script> alert('Please enter your amount')</script>";
exit();
}
 
/*if($pphone =='')
{
echo "<script> alert('Please enter valid phone number')</script>";
exit();
}

if(strlen($pphone)!=10)
{
echo "<script> alert('Please enter 10digit valid phone number')</script>";
exit();
}

if($email =='')
{
echo "<script> alert('Please enter your email')</script>";
exit();
}*/

$check_email="select * from amount where amount='$amount'";

$run=msql_query($check_email);

if(mysql_num_rows($run)>0)
{
echo "<script> alert('Email already exists') </script>";
exit();
}
$sql= " CALL InsertData('".$_POST["customer_id"]."',$_POST["salary"]."')";
if(mysql_query($sql))
{
	echo "<script> alert('Data successfully inserted via stored procedure')</script>";
	
}
}



?>
