<?php

include "conn.php";

$inpp = (isset($_POST['text']) ? $_POST['text'] : null);
$rss = (isset($_POST['rs']) ? $_POST['rs'] : null);

// echo $inpp;
// echo $rss;


$sql = "INSERT INTO `notes` ( `price`, `note`) VALUES ('$rss', '$inpp')";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo "Note Created Successfully.";
} else {
    echo "error";
}
