<?php
 $stu_name=$_POST['sname'];
 $stu_address=$_POST['saddress'];
 $stu_class=$_POST['class'];
 $stu_phone=$_POST['sphone'];

// jo data add wale file mai dalenge wo database mai save kara rahe (insert query chalegi kyuki data store karana hai)

$conn=mysqli_connect("localhost","root","","crud") or die(" Connection Failed");
$sql="INSERT INTO student(sname,saddress,sclass,sphone)VALUES('{$stu_name}','{$stu_address}','{$stu_class}','{$stu_phone}')";
$result= mysqli_query($conn,$sql) or die("Query Unsuccessful");

//abb jaise data database mai store ho waise hee redirect ho jaye home page
header("Location: http://localhost/crud/index.php");
//connetion close 
mysqli_close($conn);




?>