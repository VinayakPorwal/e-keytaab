<?PHP
header('Access-Control-Allow-Origin: *');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="components/navbar.css">
    <link rel="stylesheet" href="components/project.css">
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
    <div class="projectcard">
      
            <i class= 'fa fa-book'></i>
      
        
        <div>
            <h2 id="author"></h2>
            <p id="qoutes" class="title"></p>
           
        </div>
        
    </div>
    <div class="head">
        <div id="chck">Your Notes are Here</div>
        <div class="tool" onclick="fetchnote()"><em>Reload </em><i class='fa fa-refresh'></i></div>
    </div>
    <div class="notes"></div>

    <div id="entry">

        <input type="tel" name="rs" id="rs" placeholder="Enter Amount">
        <input type="text" name="text" id="input" placeholder="Enter Reason">
        <i id="sendbtn" onclick="sendnote()" style="font-size:larger; align-self:center" class='fa fa-plus-square'></i>

    </div>
    <script>
        var datas = document.querySelector('.notes');
        var rs = document.querySelector('#rs');
        var inp = document.querySelector('#input');
        var check = document.querySelector('#chck');

        // document.rs.onkeydown = function(evt) {
        //     var keyCode = evt ? (evt.which ? evt.which : evt.keyCode) : event.keyCode;
        //     if (keyCode == 13) {
        //         sendnote();
        //     }
        // }
        // document.inp.onkeydown = function(evt) {
        //     var keyCode = evt ? (evt.which ? evt.which : evt.keyCode) : event.keyCode;
        //     if (keyCode == 13) {
        //         sendnote();
        //         fetchnote();
        //     }
        // }

        function fetchnote() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    datas.innerHTML = this.responseText;
                    // check.innerHTML = "Note Fected Successfully"
                }
            };
            xhttp.open("GET", "fetch/fetchnotes.php", true);
            xhttp.send();

        }
        window.onload = fetchnote();

        function sendnote() {

            if (inp.value.replace(/\s+/g, '').length == 0 || rs.value.replace(/\s+/g, '').length == 0) {
                check.innerHTML = "Empty values!"
            } else {

                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        check.innerHTML = this.responseText;
                        console.log(this.responseText)
                    }
                };
            }
            xhttp.open("POST", "fetch/sendnote.php", true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send('rs=' + rs.value + '&text=' + inp.value);
            fetchnote();
            inp.value = "";
            rs.value = "";
        }

        function deletenote(id) {

            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    check.innerHTML = this.responseText;
                    console.log(this.responseText)
                }
            };
            xhttp.open("GET", "fetch/deletenote.php?id=" + id, true);
            xhttp.send();
            fetchnote();
        }


        function updatenote(id) {
            var xhttp = new XMLHttpRequest();
            console.log(document.getElementById(id).innerHTML);
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    check.innerHTML = this.responseText;
                    console.log(this.responseText)
                }
            };
            xhttp.open("POST", "fetch/updatenote.php", true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send('id=' + id + '&text=' + document.getElementById(id).innerHTML);
            document.getElementById(id).contentEditable = false;
            fetchnote();
        }

        function editnote(id) {
            document.getElementById(id).contentEditable = true;
            document.getElementById(id).style.border = "1px solid";
        }
    </script>
    <script src='func.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>

</body>

</html>