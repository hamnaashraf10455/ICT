<?php

include "ui c.php";

$c =$_POST['email'];

$delee = "Delete from userii where email='$c'";


$send_query = mysqli_query($connection, $delee);


if ($send_query) {
    echo 'successfully deleted';
} else {
    echo 'not delected';
}