<?PHP
header('Access-Control-Allow-Origin: *');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
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
</style>

<body>
    <button id="acropolis" onclick="clicks('acropolis') ,  data()">
             Acropolis
         </button>
        <button id="medicaps" onclick="clicks('medicaps'),  data()">
            Medicaps
        </button>
        <div class="acount2"></div>
        <button onclick="data()">data refresh</button>




    <script src='function.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>

</body>

</html>