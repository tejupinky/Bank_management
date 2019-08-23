

<?php

$con=mysql_connect("localhost","root","");

if (!$con)

{

die('Could not connect: ' . mysql_error());

}

mysql_select_db("library", $con);
print "<h2 align='center'>CREATION of MySQL Trigger In PHP</h2>";
print "<h4 align='center'>Book Table Content</h4>";
$result = mysql_query("select * from book");

echo "<table border='1' align='center'>

<tr>

<th>bid</th>
<th>title</th>
<th>author</th>
<th>price</th>
<th>status</th>
<th>pid</th>
<th>pname</th>
</tr>";

while($row = mysql_fetch_array($result))

{

echo "<tr>";

echo "<td>" . $row['bid'] . "</td>";
echo "<td>" . $row['title'] . "</td>";
echo "<td>" . $row['author'] . "</td>";
echo "<td>" . $row['price'] . "</td>";
echo "<td>" . $row['status'] . "</td>";
echo "<td>" . $row['pid'] . "</td>";
echo "<td>" . $row['pname'] . "</td>";

echo "</tr>";

}

echo "</table>";
print "<h4 align='center'>Published Book Table Content</h4>";

$result1 = mysql_query("select * from pub_book");

echo "<table border='1' align='center'>

<tr>

<th>pub_id</th>

<th>pname</th>

<th>Number of books</th>

</tr>";

while($row = mysql_fetch_array($result1))

{

echo "<tr>";

echo "<td>" . $row['pub_id'] . "</td>";

echo "<td>" . $row['pname'] . "</td>";
echo "<td>" . $row['no_of_books'] . "</td>";


echo "</tr>";

}

echo "</table>";

$sql = "CREATE TRIGGER MysqlTrigger2 AFTER DELETE ON book FOR EACH ROW UPDATE pub_book SET no_of_books=no_of_books-1 WHERE pname=OLD.pname;";

mysql_query($sql,$con);

if( isset($_POST['submit']) )
	{
		$a = $_POST['bid'];
		$b = $_POST['pname'];
		
		
		
		$qry = mysql_query("delete from book where bid='$a' and pname='$b'");


mysql_query($qry,$con);
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

<body  background="l3.jpg" width="100%" height="100%"  leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
</body>


<form method="post" action="">

<label for="password"><b>Book Id:</b></label> &nbsp
<input placeholder="Enter Book id" type="text" name="bid"/></br>


<label for="password"><b>Publisher Name:</b></label>  &nbsp
<input placeholder="Enter Publisher Name" type="text" name="pname"/></br>

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="submit" value="SUBMIT"  /> </br>

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="reset" name="reset" value="RESET"  /> </br>

</form>

<?php


print "<h4 align='center'>Book Table Content</h4>";
$result = mysql_query("select * from book");

echo "<table border='1' align='center'>

<tr>

<th>bid</th>
<th>title</th>
<th>author</th>
<th>price</th>
<th>status</th>
<th>pid</th>
<th>pname</th>
</tr>";

while($row = mysql_fetch_array($result))

{

echo "<tr>";
echo "<td>" . $row['bid'] . "</td>";
echo "<td>" . $row['title'] . "</td>";
echo "<td>" . $row['author'] . "</td>";
echo "<td>" . $row['price'] . "</td>";
echo "<td>" . $row['status'] . "</td>";
echo "<td>" . $row['pid'] . "</td>";
echo "<td>" . $row['pname'] . "</td>";
echo "</tr>";

}

echo "</table>";
print "<h4 align='center'>Published Book Table Content</h4>";

$result1 = mysql_query("select * from pub_book");

echo "<table border='1' align='center'>

<tr>

<th>pub_id</th>

<th>pname</th>

<th>no_of_books</th>

</tr>";

while($row = mysql_fetch_array($result1))

{

echo "<tr>";

echo "<td>" . $row['pub_id'] . "</td>";
echo "<td>" . $row['pname'] . "</td>";
echo "<td>" . $row['no_of_books'] . "</td>";

echo "</tr>";

}

echo "</table>";

mysql_close($con);
print "</body>";

?>
<a href="admin_home.php"><h1>Click here to Go Back</h1></a>