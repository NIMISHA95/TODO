<?php
$server="localhost";
$username="dayscholars";
$password="password";
$database = "mydb";

/* Create database  connection with correct username and password*/
$connect=new mysqli($servername,$username,$password,$database);

/* Check the connection is created properly or not */
if($connect->connect_error)
    echo "Connection error:" .$connect->connect_error;
else
{
    echo "";
}
$id=$_GET["id"];
echo $id;
$sql = "UPDATE mytbl SET tik=1,date=CURRENT_TIME WHERE id=$id";
mysqli_query($connect,$sql);
?>
<script type="text/javascript" >
window.location="todo2.php";
</script>
