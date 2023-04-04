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



    $q = "update adminn set mmonth='$a',yyear='$b',region='$c',urequest='$d',dname='$e',vtype='$f',ctype='$g',wrating='$h',wtraffic='$i' where  serialn='$ab'";

    $send_query = mysqli_query($connection, $q);}
if($send_query){
    echo"updated";
}else{
    echo"not updated";
}
?>