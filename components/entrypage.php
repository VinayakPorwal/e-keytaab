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
                        <div id="loginform">
                            <div class="signin-content">
                                <div class="signin-image">
                                    <figure><img id="img2" src="../images/notebook.svg" alt="sing up image"></figure>
                                    <a class="signup-image-link" onclick="signupbtn()">Need an Account? <b>Create One!</b> </a>
                                </div>

                                <!-- <form style="text-align: center;" method="POST" action="login.php">

                                <div class="inputbox">
                                    <input id="email" name="email" placeholder="email" type="email" required>
                                </div>
                                <div class="inputbox">
                                    <input id="pass" name="pass" placeholder="password" type="password" required>
                                </div>

                                <button id="subbtn" type="submit">login</button>

                                </form> -->
                                <div class="signin-form">
                                    <h2 class="form-title">Login</h2>
                                    <form method="POST" class="register-form" action="login.php" id="login-form">
                                        <div class="form-group">
                                            <label for="your_email"><i class="zmdi zmdi-email"></i></label>
                                            <input type="email" name="email" id="your_name" placeholder="Your Email" />
                                        </div>
                                        <div class="form-group">
                                            <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                            <input type="password" name="pass" id="your_pass" placeholder="Password" />
                                        </div>
                                        <!-- <div class="form-group">
                                        <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                        <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                                    </div> -->
                                        <div class="form-group form-button">
                                            <input type="submit" name="signin" id="signin" class="form-submit" value="Log in" />
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div id="signupform" style="display: none;">

                            <!-- <form action="signup.php" method="POST" style="text-align:center">

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

                            </form> -->
                            <div class="signup-content">
                                <div class="signup-form">
                                    <h2 class="form-title">Sign up</h2>
                                    <form method="POST" class="register-form" id="register-form" action="signup.php">
                                        <div class="form-group">
                                            <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                            <input type="text" name="username" id="name" required name="name" placeholder="Your Name" />
                                        </div>
                                        <div class="form-group">
                                            <label for="email"><i class="zmdi zmdi-email"></i></label>
                                            <input type="email" name="email" id="email" required name="email" placeholder="Your Email" />
                                        </div>
                                        <div class="form-group">
                                            <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                            <input type="password" name="pass" id="pass" required name="pass" placeholder="Password" />
                                        </div>
                                        <div class="form-group">
                                            <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                            <input type="password" name="cpass" id="re_pass" required name="cpass" placeholder="Confirm password" />
                                        </div>
                                        <!-- <div class="form-group">
                                            <label for="dob"><i class="zmdi zmdi-cake"></i></label>
                                            <input type="date" name="dob" id="dob" required name="dob" placeholder="Date of Birth" />
                                        </div> -->
                                        <!-- <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div> -->

                                        <div class="form-group form-button">
                                            <input type="submit" name="signup" id="signup" class="form-submit" value="Register" />
                                        </div>

                                    </form>
                                </div>
                                <div class="signup-image">
                                    <figure><img id="img1" src="../images/notebook.svg" alt="sing up image"></figure>
                                    <a class="signup-image-link" onclick="loginbtn()">Already Have a Account? <b>Login!</b> </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </section>
    </div>
    <script src="script.js"></script>
    <script>
        function loginbtn() {
            document.getElementById('signupform').style.display = 'none';
            document.getElementById('loginform').style.display = 'block';

        }

        function signupbtn() {
            document.getElementById('signupform').style.display = 'block';
            document.getElementById('loginform').style.display = 'none';

        }
    </script>
</body>

</html>