<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
    <meta http-equiv="pragma" content="no-cache" />
    <link rel="stylesheet" href="entrypage.css">
    <title>log/sign</title>
</head>

<body>

    <div id="page">
        <section>
            <div class="color" id="cbox1"></div>
            <div class="color" id="cbox2"></div>
            <div class="color" id="cbox3"></div>

            <div class="box">
                <div class="buttonbox">
                    <button class="btn" onclick="loginbtn()">login</button>
                    <button class="btn" onclick="signupbtn()">signup</button>
                </div>
                <div class="container">
                    <div id="data"></div>
                    <div id="form" class="form">
                        <div id="loginform" >


                            <form style="text-align: center;" method="POST" action="login.php">

                                <div class="inputbox">
                                    <input id="email" name="email" placeholder="email" type="email" required>
                                </div>
                                <div class="inputbox">
                                    <input id="pass" name="pass" placeholder="password" type="password" required>
                                </div>

                                <button id="subbtn" type="submit">login</button>

                            </form>
                        </div>
                        <div id="signupform" style="display: none;">

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
                        </div>

                    </div>
                </div>
            </div>


        </section>
    </div>
    <script src="script.js"></script>
    <script>
function loginbtn(){
    document.getElementById('signupform').style.display ='none';
    document.getElementById('loginform').style.display ='block';

}
function signupbtn(){
    document.getElementById('signupform').style.display ='block';
    document.getElementById('loginform').style.display ='none';

}
    </script>
</body>

</html>