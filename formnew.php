<? php
$servername="localhost";
$username="root";
$password=" ";
$database_name="database123";

$conn=mysqli_connect($server_name,$username,$password,$database_name);

if(! $conn)
{
	die("connection failed",mysql_connect_error());
}
if(isset($post['save']))
$name=$_post['name'];
$cname=$_post['cname'];
$id=$_post['id'];

$sql_query="INSERT INTO entry details(NAME,COMPANY NAME,ID)VALUES('$name','$c_name','$id')";
if(mysqli_query($conn,$sql_query))
{
	echo("successfully!")
}