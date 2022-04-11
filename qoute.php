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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="components/project.css">
    <link rel="stylesheet" href="components/navbar.css">

    <title>Document</title>
</head>

<body>
    <?php include "components/navbar.php"; ?>
    <div class="header">
        <div class="progress-container " id="mytrack">
            <div class="progress-bar" id="myBar"></div>
        </div>
    </div>
    <div class="inputee">
        <!-- <i class="fa fa-search"></i> -->

        <input type="text" placeholder="Enter the book name" class="input_text" id="inputkey"  />
        <button id="sub" onclick='dataa()'>
            <i class="fa fa-search"></i>
        </button>
    </div>


    <div class="projects" id="maindiv">

    </div>

    <script>
        var input = document.getElementById('inputkey');
        function dataa() {
            var add = document.getElementById('maindiv');
            var key = document.getElementById('inputkey').value;
            add.innerHTML = '';
            fetch(
                    "https://www.googleapis.com/books/v1/volumes?q=" + key + "&filter=free-ebooks&download=epub&key=AIzaSyBUGfZ8xZ6aTFTwD6dpj5h5X3-vrLahxHw"
                )
                .then((response) => response.json())
                .then((data) => {
                    // add.removeChild(pcontainer)
                    for (i = 0; i < 10; i++) {

                        console.log(data.items[i]);


                        var preview2 = document.createElement('img');
                        preview2.src = data.items[i].volumeInfo.imageLinks.thumbnail;

                        var link = document.createElement('a');
                        link.href = 'components/canvas.php?pass=' + data.items[i].id;
                        link.innerHTML = 'Read now';
                        link.classList.add('button');

                        var link2 = document.createElement('a');
                        link2.innerHTML = 'Download';
                        link2.classList.add('button');
                        link2.href = data.items[i].accessInfo.pdf.downloadLink;

                        var favbtn = document.createElement('i');
                        favbtn.classList.add('fa');
                        favbtn.classList.add('favbtn');
                        favbtn.classList.add('fa-gratipay');

                        var language = document.createElement('p');
                        language.classList.add('p');
                        language.innerHTML = "Language:"+ data.items[i].volumeInfo.language;
                        var category = document.createElement('p');
                        category.innerHTML = data.items[i].volumeInfo.categories;
                        category.classList.add('p');

                        var category2 = document.createElement('p');
                        category2.innerHTML = data.items[i].volumeInfo.categories;

                        var title = document.createElement('h2');
                        var text = data.items[i].volumeInfo.title;
                        if (text.length > 50) {
                            title.innerHTML = text.slice(0, 50) + "...";
                        } else {
                            title.innerHTML = text;
                        }

                        var auhtor = document.createElement('p');
                        auhtor.classList.add('p');
                        auhtor.innerHTML = "~ " + data.items[i].volumeInfo.authors;

                        // var subtitle = document.createElement('p');
                        // subtitle.classList.add('p');
                        // subtext = data.items[i].volumeInfo.subtitle;
                        // if(subtext.length > 50){
                        //   subtitle.innerHTML = subtext.slice(0, 50) + "..."; 
                        // }
                        // else{
                        //   subtitle.innerHTML = subtext;
                        // }

                        var favlan = document.createElement('div');
                        favlan.classList.add('favlan');
                        favlan.appendChild(favbtn)
                        favlan.appendChild(language)

                        var lancat = document.createElement('div');
                        lancat.classList.add('lancat');
                        lancat.appendChild(favlan)
                        lancat.appendChild(category)

                        var preview = document.createElement('img');
                        preview.src = data.items[i].volumeInfo.imageLinks.smallThumbnail;

                        var context = document.createElement('div');
                        context.appendChild(title);
                        context.appendChild(auhtor);
                        // context.appendChild(subtitle);


                        var buttons = document.createElement('div');
                        buttons.appendChild(link);
                        buttons.appendChild(link2);

                        var projilus = document.createElement('div');
                        projilus.classList.add('projillus');
                        projilus.appendChild(preview2);
                        projilus.appendChild(category2);

                        var projectcarddiv2 = document.createElement('div');
                        projectcarddiv2.classList.add('pro2');
                        // projectcarddiv2.style.padding = '5px';
                        // projectcarddiv2.style.margin = 'auto';
                        // projectcarddiv2.style.max-width = "60%";
                        projectcarddiv2.appendChild(lancat);
                        projectcarddiv2.appendChild(preview);
                        projectcarddiv2.appendChild(context);
                        projectcarddiv2.appendChild(buttons);

                        var projectcard = document.createElement('div');
                        projectcard.classList.add('projectcard');
                        projectcard.appendChild(projectcarddiv2);
                        projectcard.appendChild(projilus);

                        var pcontainer = document.createElement('div');
                        pcontainer.classList.add('pcontainer');
                        pcontainer.classList.add('pleft');
                        pcontainer.appendChild(projectcard)
                        add.appendChild(pcontainer);

                    }
                })

                .catch((err) => alert("Cant Find Book name in Our Database!"));
            key = ' ';
        }
        // dataa();
        function searchbook(e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                dataa();
            }
        };
        input.addEventListener("keyup", function(event) {
            // Number 13 is the "Enter" key on the keyboard
            if (event.keyCode === 13) {
                // Cancel the default action, if needed
                event.preventDefault();
                // Trigger the button element with a click
                // document.getElementById("myBtn").click();
                dataa();
            }
        });


        function favbook(){
            
        }
    </script>

</body>

</html>