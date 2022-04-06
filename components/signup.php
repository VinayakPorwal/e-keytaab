<?php
include "conn.php";


if (isset($_POST['sub'])) {

  $name = ($_POST['name']);
  $email = ($_POST['email']);
  $pass = ($_POST['pass']);
  // $dob= ($_POST['dob']);
  // echo  "</br>" . $name . "<br>";
  // echo $email ."<br>";
  // echo $pass  ."<br>";
  // echo $dob ."<br>";
  // $hash = password_hash($pass,PASSWORD_DEFAULT);
  $sql2 = "SELECT * FROM register2 WHERE `email` = '$email'";
  $result2 =  mysqli_query($conn, $sql2);
  if (mysqli_num_rows($result2) > 0) {
    echo "Account aleardy exist with this email! Go to Login";
  } else {


    $sql = "INSERT INTO register2(name, password , email ,status)
VALUES ('$name', '$pass', '$email', 1)";

    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
      header("location: entrypage.php");
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
}
