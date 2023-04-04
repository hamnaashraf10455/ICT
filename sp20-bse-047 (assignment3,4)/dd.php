<?php

include "ui c.php";

$d = $_POST['mobile'];

$delee = "Delete from developer where serial='$d' ";


$send_query = mysqli_query($connection, $delee);


if ($send_query) {
    echo 'successfully deleted';
} else {
    echo 'not delected';
}
