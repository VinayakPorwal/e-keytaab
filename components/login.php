<?php
include "conn.php";

$email = $_POST['email'];
$pass = $_POST['pass'];


// echo $email ."<br>";
// echo $pass  ."<br>";

// $hash = password_hash($pass,PASSWORD_DEFAULT);

$sql = "SELECT * FROM register2 WHERE `email` = '$email'";
$result =  mysqli_query($conn, $sql);
if($result){

	
	if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        if ($pass == $row['password']) {
			session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['name'] = $row['name'];
            $_SESSION['id'] = $row['sno.'];
            // header("localtion: index.php");
            // alert("Logged in")
            // echo '<script>
            // window.location.assign("index.php");
            // </script> ';
			echo '<script>
            window.location.assign("../index.php");
            alert(" password match")
            </script>';
			
            // echo "<button onclick='nav()'>nav</button>";
			
        } else {
			//     echo '<script>
			//     window.location.assign("entrypage.php");
			//     alert(" password does not match")
			//     </script>
        //    ';
		echo '<script>
            
		alert(" password does not match")
		</script>';
        }
    }
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
}
else{
	echo "Error: " . $sql . "<br>" . $conn->error;
}
