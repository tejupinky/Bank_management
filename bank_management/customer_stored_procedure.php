<!DOCTYPE html>
<html>
    <head>
        <title>PHP MySQL Stored Procedure Demo 1</title>
         <link rel="stylesheet" href="css/table.css" type="text/css" />
    </head>
    <body background='bank23.jpg'>
        <?php
     $host = 'localhost';
    $dbname = 'bank';
    $username = 'root';
    $password = '';
$con=mysql_connect("localhost","root","");

if (!$con)

{

die('Could not connect: ' . mysql_error());

}

mysql_select_db("bank", $con);

$sql1 = "CREATE PROCEDURE Getsol()BEGIN SELECT Employee_id, salary FROM salary; END;";
mysql_query($sql1,$con);

print "<h2 align='center'>Result from the above Stored Procedure</h2>";


$sql2 = 'CALL Getsol()';
$result1=mysql_query($sql2,$con);
     
        ?>

        <table  align='center' width=400>
            <tr bgcolor ='blue'>
                <th>Employee id</th>
                <th>Salary</th>
            </tr>
            <?php while ($r = mysql_fetch_array($result1)): ?>
                <tr align='center' bgcolor='yellow'>
                    <td><?php echo $r['Employee_id'] ?></td>
                    <td><?php echo $r['salary']?>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
Click here for &nbsp&nbsp
<input type="button" color="black"  value="HOME PAGE" onclick="fun1()"/>
<script> function fun1() { window.location="admin_home.php"; } </script></br>
Click here for &nbsp&nbsp
<input type="button" color="black"  value="LOG OUT" onclick="fun3()"/>
<script> function fun3() { window.location="Logout.php"; } </script></br>
		</body>
</html>    
