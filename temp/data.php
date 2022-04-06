
<?php

include "./fetch/conn.php";
$sql = "SELECT * FROM `click`ORDER by `clicks` DESC";
$result = mysqli_query($conn, $sql);
if ($result) {
    if (mysqli_num_rows($result) > 0) {
        while ($data = mysqli_fetch_assoc($result)) {
            echo "<br>";
            echo $data['clgid'] ." searches ". $data['clicks']. " times";

        }
    } else {
        echo "error";
    }
}

?>