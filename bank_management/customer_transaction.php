
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
<title>Update Customer Information</title>
</head>


<style>

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
<body background="bank1.jpg" >
</body>
<body>

<div>
<form method="post" action="">
<table width='800' align='center border='5'>
<tr bgcolor ='blue'>
<th> accoumt id</th>
   <th> Customer id </th>
   <th>Amount</th>
  

</tr>

</br>




<label  for="reg">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<u><b>CHANGE&nbsp&nbspPASSWORD&nbsp&nbsp</b></u></label><br><br>

<label for="receiver_id"><b>Sender Id:</b></label> 
<input placeholder="Enter the sennder id" type="text" name="sid"/></br>

<label for="receiver_id"><b>Receiver Id:</b></label> 
<input placeholder="Enter the receiver id" type="text" name="rid"/></br>

<label for="amount"><b>Amount:</b></label> 
<input placeholder="Enter the amount" type="text" name="amount"/></br>

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="submit" value="SUBMIT"  /> 
<br></br>



Click here for &nbsp&nbsp
<input type="button" color="black"  value="HOME PAGE" onclick="fun1()"/>
<script> function fun1() { window.location="employee_home.php"; } </script></br>

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

$query="select * from amount";

$run=mysql_query($query);

while ($row=mysql_fetch_array($run))
{
$id=$row[0];
$name=$row[1];
$amount=$row[2];
?>

<tr align='center' bgcolor='yellow'>
<td>   <?php echo $id; ?></td>
<td>   <?php echo $name; ?></td>
<td>   <?php echo $amount; ?> </td>



</tr>

<?php  }


if(isset($_POST['submit']))
{

 $rid=$_POST['rid'];
 $amount=$_POST['amount'];
$sid=$_POST['sid'];

if($sid =='')
{
echo "<script> alert('Please enter the receiver Id')</script>";
exit();
}

if($rid =='')
{
echo "<script> alert('Please enter the receiver Id')</script>";
exit();
}
if($amount =='')
{
echo "<script> alert('Please enter the amount')</script>";
exit();
}














$result=mysql_query("select amount from amount where customer_id='$sid'");
$a=mysql_fetch_array($result);
if($a["amount"]<$amount){
				echo "<script> alert('TRANSACTION failed!!INSUFFICENT FUNDS') </script>";
				echo "<br>";
					echo " <a href='customer_transaction.php'>View result</a>"; 
				}

else{
					$r="select amount from amount where customer_id='$rid'";
					$s="select amount from amount where customer_id='$sid'";
					$ms=mysql_query($s);
					$ra=mysql_fetch_array($ms);
					$mc=mysql_query($r);
										$sa=mysql_fetch_array($mc);

if(mysql_num_rows($ms)==1)
{
if(mysql_num_rows($mc)==1)
{
$query="update amount set amount=amount-'$amount' where customer_id='$sid'";
$query1="update amount set amount=amount+'$amount' where customer_id='$rid'";

if(mysql_query($query))
{
if(mysql_query($query1))
{	
echo "<script> alert('TRANSACTION SUCCESSFULL') </script>";
echo "<br>";
echo " <a href='amount_view_details.php'>View result</a>"; 
}
}
}
}
else{
	echo "<script> alert('TRANSACTION UNSUCCESSFULL') </script>";
echo "<br>";
echo " <a href='customer_transaction.php'> </a>"; 
}
}

				
				
				
				
				
				
				
				
				
				
				
				
				
				
				}












else { 
echo "ERROR"; 
} 


?> 
</html>