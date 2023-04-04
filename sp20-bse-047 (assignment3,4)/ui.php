<?php

if(isset($_POST['submit'])){
include ('ui c.php');
$a =$_POST['g'];
$b =$_POST['h'];
$c =$_POST['email'];
$d =$_POST['mobile'];
$e =$_POST['password'];
$name7 = implode(',',$_POST['above']);
    $vv =$_POST['mg'];
$g =$_POST['male'];
$h =$_POST['birth'];
$i =$_POST['asia'];
$j =$_POST['address'];
$k =$_POST['city'];
$l =$_POST['state'];

$q ="insert into userii (fname,lname,email,mnumber,pass,interest,urequest,gender,bdate,region,address,city,country) values ('$a','$b','$c','$d','$e','$name7',' $vv ','$g','$h','$i','$j','$k','$l')";

$send_query = mysqli_query($connection,$q);
}
if($send_query){
    echo"inserted";
}else{
    echo"not inserted";
}
?>