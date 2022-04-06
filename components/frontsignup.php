<form action="signup.php" method="POST" style="text-align:center">

    <div class="inputbox">
        <input id="name" name="name" placeholder="name" type="text" required>
    </div>
    <div class="inputbox">
        <input id="email" name="email" placeholder="email" type="email" required>
    </div>
    <div class="inputbox">
        <input id="pass" name="pass" placeholder="password" type="password" required>
    </div>
    <div class="inputbox">
        <input id="cpass" name="cpass" placeholder="cpass" type="password" required>
    </div>

    <button id="subbtn" name="sub" onclick="signup()">signup</button>

</form>