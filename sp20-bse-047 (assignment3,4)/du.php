<?php
if(isset($_POST['submit'])) {
    include('ui c.php');

    $c = $_POST['email'];
    $d = $_POST['mobile'];
    $a = $_POST['g'];
    $h = $_POST['birth'];
    $name7 = implode(',',$_POST['above']);
    $j = $_POST['address'];
    $l = $_POST['state'];

    $q = "update developer set title='$c',director='$a',rdate='$h',bud='$name7',lang='$j',gross='$l' where serial='$d'";


    $send_query = mysqli_query($connection, $q);}
if($send_query){
    echo"inserted";
}else{
    echo"not inserted";
}
?>
