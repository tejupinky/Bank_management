
<html>
<?php
session_start();
if(isset($_SESSION['admin_name'])=="")
{
header("location: admin_login.php");
}
?>
<head>
<title>Update employee Information</title>
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
<body background="bank27.jpg" >
</body>
<body>

<div>
<form method="post" action="">
<table width='800' align='center border='5'>
<tr bgcolor ='blue'>
   <th> employee_id </th>
   <th>name</th>
   <th>email</th>
   
   <th>User Name</th>
   <th>Password</th>
      <th>Phone number</th>
</tr>

</br>




<label  for="reg">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<u><b>EMPLOYEE_DETAILS&nbsp&nbspUPDATE&nbsp&nbspFORM</b></u></label><br><br>

<label for="admin_name"><b>employee name:</b></label> 
<input placeholder="Enter the employee name" type="text" name="customername" /></br>

<label for="password"><b>Password:</b></label> 
<input placeholder="Enter your password" type="password" name="password"/></br>

<label for="address"><b>Phone number:</b></label> 
<input placeholder="Enter the phone number" type="number" name="phno"/></br>



&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="submit" value="SUBMIT"  /> 
<br></br>



Click here for &nbsp&nbsp
<input type="button" color="black"  value="HOME PAGE" onclick="fun1()"/>
<script> function fun1() { window.location="admin_home.php"; } </script></br>

Click here for &nbsp&nbsp
<input type="button" color="black"  value="LOG OUT" onclick="fun3()"/>
<script> function fun3() { window.location="Logout_admin.php"; } </script></br>
</div>
</form>

</body>
</html>

<?php
mysql_connect("localhost","root","");
mysql_select_db("bank") or die("cannot connect to the database");
$query="select * from employee";
$run=mysql_query($query);

while ($row=mysql_fetch_array($run))
{
$employee_id=$row[0];
$name=$row[1];
$email=$row[2];
$username=$row[3];
$password=$row[4];
$phno=$row[5];
?>

<tr align='center' bgcolor='yellow'>
<td>   <?php echo $employee_id; ?></td>
<td>   <?php echo $name; ?> </td>
<td>   <?php echo $email; ?> </td>

<td>   <?php echo $username; ?> </td>
<td>   <?php echo $password; ?> </td>
<td>   <?php echo $phno; ?> </td>



</tr>

<?php  }


if(isset($_POST['submit']))
{
 $ename=$_POST['customername'];
$password=$_POST['password'];
 $phno=$_POST['phno'];

 
if($ename =='')
{
echo "<script> alert('Please enter the valid employee name')</script>";
exit();
}

if($password =='')
{
echo "<script> alert('Please enter your password')</script>";
exit();
}


if($phno == '')
{
echo "<script> alert('Please enter valid phone number')</script>";
exit();
}

if (strlen($phno)!=10)
{
echo "<script> alert('Please enter 10digit valid phone number')</script>";
exit();
}
$query="update employee set password='$password',phno='$phno'  where name='$ename'";
if(mysql_query($query))
{

echo "<script> alert('Updated Successfully') </script>";
echo "<br>";
echo " <a href='admin_employee_details.php'>View result</a>"; 
} 

else { 
echo "ERROR"; 
} 
}

?> 
</html>