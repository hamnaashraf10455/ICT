<?php
if(isset($_POST['submit'])){
include "user upd con.php";


$c =$_POST['email'];
$d =$_POST['mobile'];

$e =$_POST['password'];

$name7 = implode(',',$_POST['above']);
    $vv =$_POST['mg'];
$i =$_POST['asia'];
$j =$_POST['address'];
$k =$_POST['city'];
$l =$_POST['state'];



$q ="update userii set mnumber='$d',pass='$e',interest='$name7',urequest='$vv',region='$i',address='$j',city='$k',country='$l' where email='$c' ";
$save = mysqli_query($connection,$q);
}
if($save){
    echo "<br>successfully updated<br>";
}else
{
    echo "update failed";
}


