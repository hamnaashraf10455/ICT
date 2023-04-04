<?php
if(isset($_POST['submit'])) {
    include('ui c.php');
    $ab = $_POST['abc'];
    $a = $_POST['aa'];
    $b= $_POST['bb'];
    $c = $_POST['cc'];

    $d = implode(',',$_POST['dd']);

    $e = $_POST['ee'];
    $f = $_POST['ff'];

    $g = implode(',',$_POST['gg']);

    $h = $_POST['hh'];
    $i = $_POST['ii'];

    $q = "insert into adminn ( serialn,mmonth,yyear,region,urequest,dname,vtype,ctype,wrating,wtraffic) values ('$ab','$a','$b','$c','$d','$e','$f','$g','$h','$i')";
    $send_query = mysqli_query($connection, $q);}
if($send_query){
    echo"inserted";
}else{
    echo"not inserted";
}
?>