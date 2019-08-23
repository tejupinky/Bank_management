<html>
<?php
session_start();
?>
<html>
<?php
if(!($_SESSION['admin_name']))
{
header("location: admin_login.php");
}
?>



<head>
<title>HOME</title>
</head>
<marquee behavior="scroll" direction="left"><font color="purple" size="6"><b><strong></strong></b></font></marquee>
<style type="text/css">{
size: 12px;
}

li a:link {
	text-decoration: none;
	color: #666;
}
li a:visited {
	text-decoration: none;
}
li a:hover {
	text-decoration: none;
}
li a:active {
	text-decoration: none;
	color: #666;
	font-size: 13px;
}

.style5711 {
	font-size: 12px;
	font-weight: bold;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
.style571111 {font-size: 12px;
	font-weight: bold;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}

h{
color: blue; font-size:30px; }
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #456;
}

li {
    float: left;
}

li a {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}

</style>

</head>
<body  background=".jpg" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="980" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
    <td width="313"><table width="980" border="0" cellspacing="0" cellpadding="0">
        <tr>
         
        </tr>
    </table></td>
  </tr>
  <tr>
    <td><table width="980"  border="3" cellspacing="0" cellpadding="0">
        <tr>
          <td bgcolor="#333333"><ul>
        <li><a href="admin_home.php" class="style571111">Home</a></li>
		   
             <li><a href="admin_customer_update_details.php"class="style5711">UPDATE CUSTOMER DETAILS</a></li>
			    <li><a href="admin_customer_update_details1.php"class="style5711">UPDATE EMPLOYEE DETAILS</a></li>
			  <li><a href="admin_view_customer_details.php" class="style571111"> CUSTOMER DETAILS</a></li>
			   <li><a href="admin_employee_details.php" class="style571111">  EMPLOYEE  DETAILS</a></li>
          <li><a href="admin_transaction.php" class="style571111">  TRANSACTION</a></li>
		<li><a href="admin_update_salary.php" class="style571111">  update salary</a></li>
		<li><a href="customer_stored_procedure.php" class="style571111">  view salary</a></li>
		        <li><a href="admin_customer_search.php" class="style5711">CUSTOMERSEARCH</a></li>
				
			<li><a href="admin_update_amount1.php" class="style5711">AMOUNT UPDATE</a></li>
 
 <li><a href="admin_customer_delete.php" class="style5711">DELETE_CUSTOMER</a></li>
 <li><a href="admin_employee_search.php" class="style5711">EMPLOYEE_SEARCH</a></li>
 <li><a href="admin_triggers.php" class="style5711">INSERT_CUSTOMER</a></li>
 <li><a href="admin_insert_employee.php" class="style5711">INSERT_EMPLOYEE</a></li>
 <li><a href="admin_employee_delete.php" class="style5711">DELETE_EMPLOYEE</a></li>
<li><a href="Logout.php"class="style5711">LOGOUT</a></li></ul></td>

        </tr>
    </table></td>
  </tr>


<style>
body { 
background : url("p2.jpg");
background-repeat:no-repeat;
 background-size: 100%;

}
input[type=submit] {
    width: 200%;
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
	
	div 
	{
   	position:absolute;
    right:750px;
    padding:10px;
	font-weight:bold;
	}
	
</style>
<body background="1.jpg" ></body>

<body>

<div>

</div>
</body>
</html>
