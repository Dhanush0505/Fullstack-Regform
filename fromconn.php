<?php
$servername="localhost";
$username="root";
$password="";
$database_name="dhanush";

$conn=mysqli_connect($servername, $username, $password, $database_name);

$v1=$_POST["name"];
$v2=$_POST["email"];
$v3=$_POST["password"];
$v4=$_POST["gender"];
$v5=$_POST["lang"];
$v6=$_POST["qualification"];
$v7=$_POST["address"];

$sql="insert into student(name,email,password,gender,language,qualification,address)
      values('$v1','$v2','$v3','$v4','$v5','$v6','$v7')";
	  
$res=mysqli_query($conn,$sql);

if($res)
{
echo "Inserted Succesfully";
}
else
{
echo"not inserted";
}
?>