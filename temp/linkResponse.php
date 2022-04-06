<?php

include "./fetch/conn.php";
$webid=$_GET['clgid'];
// $webid = 'acropolis';
echo $webid;

$sql = "SELECT * FROM `click` WHERE `clgid` = '$webid'";
$result = mysqli_query($conn, $sql);
if ($result) {

    if (mysqli_num_rows($result) > 0) {
        while ($data = mysqli_fetch_assoc($result)) {
            $number = $data['clicks']+1;
            echo $number;
            $sql8 = "UPDATE `click` SET `clicks` = '$number' WHERE `clgid` = '$webid'";
            $result8 = mysqli_query($conn, $sql8);
            if ($result8) {
                echo "success";
                // header("location: index.php");
            } else {
                echo "No Records Found!";
            }
        }
    } else {
        echo "error";
    }
} else {
    echo "err";
}
