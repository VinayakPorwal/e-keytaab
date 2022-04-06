
<?php

include "conn.php";
$sql = "SELECT * FROM `notes`ORDER by `date` DESC";
$result = mysqli_query($conn, $sql);
if ($result) {
    if (mysqli_num_rows($result) > 0) {
        while ($data = mysqli_fetch_assoc($result)) {
            $dt = $data['date'];
            $datetime = new DateTime($dt);
            echo "<div id='note'>
                <div style='display:flex;align-items:center'>
                    <span class='amount'><i class='fa fa-inr'></i> " .$data['price'] ."</span>
                    <div>
                    <div class='notepoint'>
                        <p> Ruppees for </p> 
                        <div class='editable' id='".$data['sno.']."'> ". $data['note']. "</div>
                    </div>
                    </div>
                    </div>
                    <div style='margin-left:auto'>
                        <div id='tools'>
                        <span id='editnote' class='tool' onclick='editnote(".$data['sno.'].")'><i class='fa fa-pencil-square-o'></i></span>
                        <span id='updatenote' class='tool' onclick='updatenote(".$data['sno.'].")'><i class='fa fa-check'></i></span>
                        <span id='deletenote' class='tool'onclick='deletenote(".$data['sno.']."),fetchnote()'><i class='fa fa-trash-o'></i></span>
                        </div>
                        <span class='dt'>" . $datetime->format('d-m-Y h:ia') . "</span>
                    </div>
                </div>
                <hr>";
        }
    } else {
        echo "error";
    }
}

?>