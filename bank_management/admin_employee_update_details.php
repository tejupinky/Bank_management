
<html>
<?php
session_start();
if(isset($_SESSION['admin_name'])=="")
{
header("location: admin_login.php");
}
?>
<head>
<title> EMPLOYEE UPDATE FORM</title>
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



<body background="bank27jpg" >

<div>
<form method="post" action="">
<label  for="reg">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<u><b>ADMIN LOGIN&nbsp&nbspLOGIN&nbsp&nbspFORM</b></u></label><br><br>

<label for="admin_name"><b>employee name:</b></label> 
<input placeholder="Enter the employee name" type="text" name="customername" /></br>


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
$customername=$_POST['customername'];

 

if($customername =='')
{
echo "<script> alert('Please enter the customer name')</script>";
exit();
}



$query=mysql_query("select * from employee where name='$customername'") or die(mysql_error());
   
   if(mysql_num_rows($query)>0)
   {
  
   
    //echo "<script> window.open('admin_home.php','_self')</script>";
	header("location: admin_customer_update_details1.php");
   }
   else
   {
    echo "<script> alert('enter the valid customer')</script>";
   }
}

?>

</body>
</html>
