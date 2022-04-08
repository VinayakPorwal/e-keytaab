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




    <div class="home">


        <div style='
          display: flex;
          flex-wrap: wrap-reverse;
          margin: 0 0 50px 0;
       '>
            <div id="heading" class="homerow">
                <div class="title">
                    <h1 class="heading">
                        <span class="head">Platfrom</span>
                        <span class="medium">to make Your</span>
                        <br />
                        <span class="head">Reading </span>
                        <span class="medium">Efficient and Smooth</span>
                    </h1>
                </div>
            </div>
            <div class="homeillus">
                <h3 class="projhead">QUOTE of The DAY</h3>
                <div class="qouteshead">
                    <i class='fa fa-quote-left' style="font-size: xx-large;"></i>
                    <div>
                        <h2 id="Qauthor"></h2>
                        <p id="qoutes" class="title"></p>
                    </div>
                </div>
            </div>
        </div>

        <div style='
          display: flex;
          flex-wrap: wrap-reverse;
          margin: 0 0 50px 0;
       '>
            <div class="homerow">
                <p class="paragraph">
                    Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui
                    lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat
                    fugiat aliqua. Lorem ipsum dolor sit, amet consectetur adipisicing
                    elit. Consequuntur, aliquam iste. Obcaecati rem similique eius
                    accusamus placeat optio qui unde earum ad! Dolores unde a voluptatem
                    elit. Consequuntur, aliquam iste. Obcaecati rem similique eius
                    accusamus placeat optio qui unde earum ad! Dolores unde a voluptatem
                </p>
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