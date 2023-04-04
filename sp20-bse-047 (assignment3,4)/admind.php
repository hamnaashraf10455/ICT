<?php

include "ui c.php";

$ab = $_POST['abc'];

$delee = "Delete from adminn where serialn='$ab' ";


$send_query = mysqli_query($connection, $delee);


if ($send_query) {
    echo 'successfully deleted';
} else {
    echo 'not delected';
}
