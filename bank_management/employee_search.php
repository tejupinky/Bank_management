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
<style type='text/css'>
body { 
background : url("p2.jpg");
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
<body>
<div>
<form action="employee_search.php" method="get"><br/><br/>

<b>Search for the employee here: </b><input type="text" name="value" placeholder="Search here" style="width:150px;height:35px;font:bold 15px Times New Roman;">&nbsp &nbsp
<input type="submit" name="search" value="Search Now" style="width:100px;height:35px;font:bold 15px Times New Roman;"></br>

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

if(isset($_GET['search']))
{
$search_value=$_GET['value'];
$query=mysql_query("select * from issue where name like '$search_value%'")or die(mysql_error());
 if(mysql_num_rows($query)>0)
	 
 {

?>

<table width='800' align='center border='5'>
<tr bgcolor ='blue'>
   <th>date</th>
   <th>from</th>
   <th>to</th>
   <th>lo_ser_pro</th>
   <th>truck_no</th>
   <th>invoice_no</th>
   <th>l_r</th>
   <th>driver_no</th>
   <th>driver_name</th>
   <th>belts_available</th>
   <th>wedges_available</th>
   
   </tr>
<?php

//$run=mysql_query($query);

while($row=mysql_fetch_array($query))
{
$date=$row[0];
$from=$row[1];
$to=$row[2];
$lo_ser_pro=$row[3];
$truck_no=$row[4];
$invoice_no=$row[5];
$l_r=$row[6];
$driver_no=$row[7];
$driver_name=$row[8];
$belts_available=$row[9];
$wedges_available=$row[10];

?>


<tr align='center' bgcolor='yellow'>
<td>   <?php echo $date; ?></td>
<td>   <?php echo $from; ?> </td>
<td>   <?php echo $to; ?> </td>
<td>   <?php echo $lo_ser_pro; ?> </td>
<td>   <?php echo $truck_no; ?> </td>
<td>   <?php echo $invoice_no; ?> </td>
<td>   <?php echo $l_r; ?> </td>
<td>   <?php echo $driver_no; ?> </td>
<td>   <?php echo $driver_name; ?> </td>
<td>   <?php echo $belts_available; ?> </td>
<td>   <?php echo $wedges_available; ?> </td>
</tr>

<?php
}
}

else
{
	echo "<script> alert('NO SUCH USERS ENTER SOME VALID USERS...!') </script>";
}
}
?>
</html>
