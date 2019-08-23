


<html>
<head>
<title> CUSTOMER REGISTRATION FORM</title>
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
	
div {
    height: 550px;
    width: 300px;
	position:absolute;
    top: 50px;
    right: 1000px;
	border-radius: 10px;
    background-color: #1234;
    padding: 20px;
}
</style>



<body background="bank27.jpg" >

<div>
<form method="post" action="">
<label  for="reg">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<u><b>CUSTOMER&nbsp&nbspLOGIN&nbsp&nbspFORM</b></u></label><br><br>

<label for="name"><b>User name:</b></label> 
<input placeholder="Enter your name" type="text" name="username" /></br>

<label for="address"><b>Password:</b></label> 
<input placeholder="Enter your password" type="password" name="password" /></br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="submit" value="SUBMIT"  /> 
</form>
</div>
</body>



<?php
session_start();
if(isset($_POST['submit']))
{
mysql_connect("localhost","root","");
mysql_select_db("bank") or die("cannot connect to the database");
$username=$_POST['username'];
 $password=$_POST['password'];
 

if($username =='')
{
echo "<script> alert('Please enter your name')</script>";
exit();
}

if($password =='')
{
echo "<script> alert('Please enter your password')</script>";
exit();
}


$query=mysql_query("select * from customer where username='$username' and password='$password'") or die(mysql_error());
   
   if(mysql_num_rows($query)>0)
   {
   $_SESSION['username']=$userrname;
   
    //echo "<script> window.open('customer_home.php','_self')</script>";
	header("location: customer_home.php?id=".$username);
   }
   else
   {
    echo "<script> alert('Invalid Login')</script>";
   }
}

?>

</body>
</html>
