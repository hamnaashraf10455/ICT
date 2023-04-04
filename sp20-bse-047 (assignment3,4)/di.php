<?php
if(isset($_POST['submit'])) {
    include('ui c.php');

    $ab = implode(',',$_POST['ab']);
    $vv = $_POST['mg'];
    $c = $_POST['email'];
    $d = $_POST['mobile'];
    $a = $_POST['g'];
    $h = $_POST['birth'];

    $e = $_POST['h'];

    $name7 = implode(',',$_POST['above']);
    $g = $_POST['male'];

    $i = $_POST['asia'];
    $j = $_POST['address'];
    $k = $_POST['city'];
    $l = $_POST['state'];

    $q = "insert into developer (uinterest,urequest,title,serial,director,rdate,rat,bud,mov,genre,lang,running,gross) values ('$ab','$vv','$c','$d','$a','$h','$e','$name7','$g','$i','$j','$k','$l')";


$send_query = mysqli_query($connection, $q);}
if($send_query){
    echo"inserted";
}else{
    echo"not inserted";
}
?>