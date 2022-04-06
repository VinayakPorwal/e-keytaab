<?php
$id = $_GET['pass'];
// $id = 'ktkDAAAAQAAJ';
include "navbar.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
   <link rel="stylesheet" href="navbar.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
   *{
       margin: 0;
       padding: 0;
   }
    tbody{
        display: none;
    }

    /* Scroll bar */
    .row::-webkit-scrollbar {
        width: 5px;
    }

    /* width */
    ::-webkit-scrollbar {
        width: 2px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
        box-shadow: inset 0 0 1px grey;
        border-radius: 10px;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
        background: rgb(251, 255, 0);
        border-radius: 10px;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
        background: #b3a100;
    }
</style>

<body>
    <div id="viewerCanvas" style="width: 100%; height: 90vh"></div>
    <script type="text/javascript" src="https://www.google.com/books/jsapi.js"></script>
    <script type="text/javascript">
        google.books.load();

        function initialize() {
            var viewer = new google.books.DefaultViewer(document.getElementById('viewerCanvas'));
            viewer.load('<?php echo $id; ?>');
        }

        google.books.setOnLoadCallback(initialize);
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
    </script>

</body>

</html>