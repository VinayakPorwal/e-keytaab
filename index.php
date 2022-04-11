<?php

header('Access-Control-Allow-Origin: *');
?>
<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    $loggedin = false;
    header("location: components/entrypage.php");
} else {
    $loggedin = true;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="components/navbar.css">
    <link rel="stylesheet" href="components/project.css">
    <link rel="stylesheet" href="components/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <title>Document</title>
</head>
<style>
    :root {
        --colorb: #ffffff;
        --color: #1e1e1e;

        --white: #ffffff;
        --dblue: #7289da;
        --grey: #99aab5;
        --lightblack: #2c2f33;
        --black: #23272a;
        --yellow: #ffe700;
        --green: #74ee15;
        --skyblue: #4deeea;
    }

    * {
        margin: 0;
        padding: 0;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

    }

    #note {
        display: flex;
        align-items: center;
        height: fit-content;
    }

    #note p {
        margin: 0 5px;
    }

    .notepoint {
        display: flex;
        margin: 2px 5px 0 5px;
        padding: 0 5px;
    }

    .notepoint i {
        align-self: center;
        font-size: larger;
    }

    #tools {
        margin-left: auto;
        padding: 0 5px;
    }

    .tool {
        padding: 1px 5px;
        border-radius: 5px;
        font-size: large;
        margin: 5px auto;
    }

    .notes {
        background-color: azure;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    #entry {
        margin: 10px auto;
        display: flex;
        justify-content: space-evenly;
    }

    input {
        padding: 5px;
    }

    .head {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    #chck,
    em {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

    }

    .editable {
        border-radius: 5px;
        padding: 2px 4px;
    }



    .dt {
        position: relative;
        margin-bottom: auto;
        font-size: small;
        font-style: italic;
        font-weight: 600;
        color: gray;
        padding: 0 2px;
    }

    .amount {
        background: lightskyblue;
        padding: 6px;
        color: #1a931a;
        font-size: larger;
        font-weight: 800;
        border-radius: 0 5px 5px 0;
    }
</style>

<body>
    <?php include 'components/navbar.php'; ?>
    <div class="header">
        <div class="progress-container " id="mytrack">
            <div class="progress-bar" id="myBar"></div>
        </div>
    </div>



    <div class="qouteshead">

        <h3 class="projhead">
            <i class='fa fa-quote-left' style="font-size: large;color: var(--dblue);
            position: relative;
            top: -15px;
            "></i>
            <em style="color: var(--dblue)">QUOTE</em>
            <i class='fa fa-quote-right' style="font-size: large;color: var(--dblue);
            position: relative;
            top: -15px;"></i>
            of the DAY
        </h3>
        <hr>
        <br>
        <div style="padding: 0 5px;">
            <em>
                <h2 id="Qauthor"></h2>
            </em>
            <p id="qoutes" class="title2"></p>
        </div>
    </div>
    <div class="home">


        <!-- <div style='
          display: flex;
          flex-wrap: wrap-reverse;
          margin: 0 0 50px 0;
       '> -->
        <!-- <div id="headingdiv" class="homerow"> -->
        <div class="title">
            <h1 class="heading" style="display: flex;    margin: auto;
                align-items: baseline;">
                <span class="head" style="padding: 0 5px;">Platfrom </span>
                <span class="medium"> to make Your</span>
                <br />
            </h1>
            <h1 class="heading" style="display: flex;    margin: auto;
                align-items: baseline;">

                <span class="head" style="padding: 0 5px;">Reading </span>
                <span class="medium"> Efficient and Smooth</span>
            </h1>
        </div>
    </div>
    <!-- <div class="homeillus" id="qoutesdiv"> -->

    <!-- Comtent Here -->

    <!-- </div> -->
    <!-- </div> -->

    <div style='
          display: flex;
          flex-wrap: wrap-reverse;
          margin: 0 0 50px 0;
       '>
        <div class="homerow">
            <div style="margin: 80px 0 10px 0; position:relative ">

                <span class="head" style="margin: 10px "> Why Choose Us?</span>
                <p class="paragraph">
                    <i class='fa fa-book'></i>Ease Reading <br>
                    <i class='fa fa-tasks'></i>Ease in Maintainance<br>
                    <i class='fa fa-globe'></i>Ease Accessible<br>
                    <i class='fa fa-leaf'></i>Environment Freindly<br>
                </p>
            </div>
            <button class="homebutton">Get Started</button>
        </div>
        <div class="homeillus">
            <img src='images/notebook.svg' alt="" />
        </div>
    </div>
    </div>



    <!-- -------------NOTES------------- -->
    <!-- <div class="head">
        <div id="chck">Your Notes are Here</div>
        <div class="tool" onclick="fetchnote()"><em>Reload </em><i class='fa fa-refresh'></i></div>
    </div>
    <div class="notes"></div>

    <div id="entry">

        <input type="tel" name="rs" id="rs" placeholder="Enter Amount">
        <input type="text" name="text" id="input" placeholder="Enter Reason">
        <i id="sendbtn" onclick="sendnote()" style="font-size:larger; align-self:center" class='fa fa-plus-square'></i>

    </div> -->


    <script>
        function sidenav() {
            if (document.getElementById("sidebar").style.display == "none") {
                document.getElementById("sidebar").style.display = "flex";
                document.getElementById("hambar").style.transform = "rotate(90deg)";
                document.getElementById("myBar").style.height = "2px !important";
                document.getElementById("mytrack").style.background = "var(--grey)";
                document.getElementById("mytrack").style.height = "1px !important";
            } else {
                document.getElementById("sidebar").style.display = "none";
                document.getElementById("hambar").style.transform = "rotate(0deg)";
                document.getElementById("myBar").style.height = "3px ";
                document.getElementById("mytrack").style.background = "var(--lightblack)";
                document.getElementById("mytrack").style.height = "3px";
            }
        }
        window.onscroll = function() {
            mFunction();
        };

        function mFunction() {
            var winScroll =
                document.body.scrollTop || document.documentElement.scrollTop;
            var height =
                document.documentElement.scrollHeight -
                document.documentElement.clientHeight;
            var scrolled = (winScroll / height) * 100;
            document.getElementById("myBar").style.width = scrolled + "%";
        }
    </script>
    <script src='func.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>

</body>

</html>