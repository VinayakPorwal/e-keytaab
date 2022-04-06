<?php

include "conn.php";

$texts = (isset($_POST['text']) ? $_POST['text'] : null);
$idd = (isset($_POST['id']) ? $_POST['id'] : null);

// echo $texts;
// echo $idd;


$sql = "UPDATE `notes` SET `note` = '$texts' WHERE `notes`.`sno.` = '$idd';";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo "Note edited Successfully.";
} else {
    echo "error";
}