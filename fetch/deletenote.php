<?php

include "conn.php";

$id = (isset($_GET['id']) ? $_GET['id'] : null);
// echo $id;

 
$sql = "DELETE FROM `notes` WHERE `notes`.`sno.` = '$id'";
$result = mysqli_query($conn, $sql);
if ($result) {
        echo "Note Deleted Successfully.";
        }
     else {
        echo "error";
    }
?>