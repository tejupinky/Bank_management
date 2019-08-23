

<?php

$con=mysql_connect("localhost","root","");

if (!$con)

{

die('Could not connect: ' . mysql_error());

}

mysql_select_db("bank", $con);
print "<h2 align='center'>CREATION of MySQL Trigger In PHP</h2>";
print "<h4 align='center'>Customer table content</h4>";
$result = mysql_query("select * from customer");

echo "<table border='1' align='center'>

<tr bgcolor ='blue'>

<th>ID</th>
<th>customer_name</th>
<th>address</th>
<th>username</th>
<th>password</th>
<th>email</th>
<th>account type</th>
</tr>";

while($row = mysql_fetch_array($result))

{

echo "<tr bgcolor ='yellow'>";

echo "<td>" . $row['customer_id'] . "</td>";
echo "<td>" . $row['cname'] . "</td>";
echo "<td>" . $row['address'] . "</td>";
echo "<td>" . $row['username'] . "</td>";
echo "<td>" . $row['password'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['account_type'] . "</td>";
echo "</tr>";

}

echo "</table>";
print "<h4 align='center'>customer Table Content</h4>";

$result1 = mysql_query("select * from account");

echo "<table border='1' align='center'>

<tr bgcolor ='blue'>

<th>account_id</th>
<th>account_type</th>
<th>no_of_customer</th>



</tr>";

while($row = mysql_fetch_array($result1))

{

echo "<tr bgcolor ='yellow'>";

echo "<td>" . $row['account_id'] . "</td>";
echo "<td>" . $row['account_type'] . "</td>";
echo "<td>" . $row['no_of_customer'] . "</td>";



echo "</tr>";

}

echo "</table>";

$sql = "CREATE TRIGGER MysqlTrigger5 AFTER INSERT ON customer FOR EACH ROW UPDATE account SET no_of_customer=no_of_customer+1 where account_type=new.account_type;";

mysql_query($sql);
if( isset($_POST['submit']) )
	{
		$a = $_POST['name'];
		$b = $_POST['address'];
		$c = $_POST['username'];
		$d = $_POST['password'];
		$e = $_POST['email'];
		$f = $_POST['accounttype'];
		$qry ="insert into customer(cname,address,username,password,email,account_type) values('$a','$b','$c','$d','$e','$f')";


if(mysql_query($qry,$con))
{
	echo "<script> alert('User is Succussfully registered')</script>";
}
else
{
	echo "<script> alert('not registered')</script>";
	echo mysql_error();
}
	}
	
 
?>
<style>

input[type=submit] {
    width: 10%;
	position:right;
    background-color: grey;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
	font-weight:bold;
	border: 1px solid #ccc;
    border-radius: 8px;
    cursor: pointer;
	}

input[type=submit]:hover{
background-color: #4CAF50;
    border: none;
    color: black;
	}
input[type=reset] {
    width: 10%;
	position:right;
    background-color: grey;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
	font-weight:bold;
	border: 1px solid #ccc;
    border-radius: 8px;
    cursor: pointer;
	}

input[type=reset]:hover{
background-color: #4CAF50;
    border: none;
    color: black;
	}
 input[type=text], select {
    width: 20%;
    padding: 3px 5px;
    margin: 5px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-sizing: border-box;
}	
	
	
</style>
<body background="b11.jpg" >
</body>


<form method="post" action="">

<label for="password"><b>customer name:</b></label> &nbsp
<input placeholder="Enter customer name" type="text" name="name"/></br>

<label for="password"><b>Address:</b></label>  &nbsp
<input placeholder="Enter address" type="text" name="address"/></br>
<label for="password"><b>username:</b></label>  &nbsp
<input placeholder="Enter username" type="text" name="username"/></br>
<label for="password"><b>password:</b></label>  &nbsp
<input placeholder="Enter Password" type="password" name="password"/></br>
<label for="password"><b>EMail:</b></label> 
<input placeholder="Enter your email" type="text" name="email"/></br>
<label for="password"><b>account_type:</b></label> 
<input placeholder="Enter your account_type" type="text" name="accounttype"/></br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="submit" value="SUBMIT"  /> </br>

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="reset" name="reset" value="RESET"  /> </br>

</form>

<a href="admin_home.php"><h1>Click here to Go Back</h1></a>
<?php
$result3 = mysql_query("select * from customer");

echo "<table border='1' align='center'>

<tr bgcolor ='blue'>

<th>ID</th>
<th>customer_name</th>
<th>address</th>
<th>username</th>
<th>password</th>
<th>email</th>
<th>account type</th>
</tr>";

while($row = mysql_fetch_array($result3))

{

echo "<tr bgcolor ='yellow'>";

echo "<td>" . $row['customer_id'] . "</td>";
echo "<td>" . $row['cname'] . "</td>";
echo "<td>" . $row['address'] . "</td>";
echo "<td>" . $row['username'] . "</td>";
echo "<td>" . $row['password'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['account_type'] . "</td>";
echo "</tr>";

}

echo "</table>";
print "<h4 align='center'>customer Table Content</h4>";

$result2 = mysql_query("select * from account");

echo "<table border='1' align='center'>

<tr bgcolor ='blue'>

<th>account_id</th>
<th>account_type</th>
<th>no_of_customer</th>



</tr>";

while($row = mysql_fetch_array($result2))

{

echo "<tr bgcolor ='yellow'>";

echo "<td>" . $row['account_id'] . "</td>";
echo "<td>" . $row['account_type'] . "</td>";
echo "<td>" . $row['no_of_customer'] . "</td>";



echo "</tr>";

}

echo "</table>";
?>