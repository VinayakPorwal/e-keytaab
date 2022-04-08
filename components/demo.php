<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    $loggedin = false;
    header("location: entrypage.php");
} else {
    $loggedin = true;
}
?>
 <?php

echo '<div>
        <p 
            id="loginbtn">login
      </p>
      <p 
            id="signinbtn">signup
      </p></div>';
      echo '<table class="html-table">
      <tr>
          <th>Print statements</th>
      </tr>
      <tr>
          <td>echo</td>
      </tr>
      </table>';
if ($loggedin==false) {
    echo '<a href="enrtypage.php"
     id="loginbtn">login
</a>
<a href="enrtypage.php"
    id="signinbtn">signup
</a>';
    
  
} else {
    echo ` <a href="enrtypage.php"
    id="loginbtn">login
</a>
<a href="enrtypage.php"
   id="signinbtn">`;

    echo $_SESSION['name'];
    echo `
</a>`;
}
 if ($loggedin==false) {
     echo  "<div style='display: flex;left:0px;position: absolute;align-items:center;'>
             <div id='id'>
             <a href='#footr'>";
     echo $_SESSION['name'];
     echo "</a>
             </div>
             ";
 } else {
     echo '<div style="display: flex;left:0px;position: absolute;align-items:center;">
             <div id="id">
             <a href="#footr"> Login/Signup</a>
           </div>
             ';
 }
 ?>