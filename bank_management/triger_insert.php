

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
print "<h4 align='center'>Book Details Table Content</h4>";

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

$sql = "CREATE TRIGGER MysqlTrigger1 AFTER INSERT ON book FOR EACH ROW UPDATE pub_book SET no_of_books=no_of_books+1 WHERE pname=NEW.pname;";

mysql_query($sql,$con);

if( isset($_POST['submit']) )
	{
		$a = $_POST['title'];
		$b = $_POST['author'];
		$c = $_POST['price'];
		$d = $_POST['status'];
		$e = $_POST['pid'];
		$f = $_POST['pname'];
		
		
		$qry = mysql_query("insert into book(title,author,price,status,pid,pname) values('$a','$b','$c','$d','$e','$f')");


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

<label for="password"><b>Book name:</b></label> &nbsp
<input placeholder="Enter Book name" type="text" name="title"/></br>

<label for="password"><b>Author:</b></label>  &nbsp
<input placeholder="Enter author name" type="text" name="author"/></br>

<label for="password"><b>Price:</b></label>  &nbsp
<input placeholder="Enter the book price" type="text" name="price"/></br>

<label for="status"><b>Status:</b></label> 
Available<input type="radio" name="status" value="Available" />
Unavailable<input type="radio" name="status" value="Unavailable" /></br>
<label for="password"><b>Book pid:</b></label>  &nbsp
<input placeholder="Enter Book pid" type="text" name="pid"/></br>
<label for="password"><b>Book pname:</b></label>  &nbsp
<input placeholder="Enter Book pname" type="text" name="pname"/></br>

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
print "<h4 align='center'>Book Details Table Content</h4>";

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