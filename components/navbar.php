<nav class="navbar">
    <div class="">
        <div class="rightside">
            <div class="logo">
                <i id="hambar" class="fa fa-bars" onclick='sidenav()'></i>
                <img id="navlogoimg" src='images/notebook.svg' alt="Workflow" />
                <i id="authicon" class="fa fa-gear"></i>
            </div>
            <div class="navtab">
                <div class="tabgroup">

                    <a class="tab" href='#'>hello</a>
                    <a class="tab" href='#'>hello</a>
                    <a class="tab" href='#'>hello</a>
                    <a class="tab" href='#'>hello</a>
                </div>
            </div>
            <?php
            if ($loggedin == false) {

                echo `<div class="credin">
                        <a href="enrtypage.php">
                            <button id="loginbtn">login</button>
                        </a>
                        <a href="enrtypage.php">
                            <button id="signinbtn">signup</button>
                        </a>
                     </div>`;
            } else {
                echo `<div class="credin">
              <a href="enrtypage.php">
            <button id="loginbtn">` . $_SESSION['name'] . `</button>
        </a>
        <a href="enrtypage.php">
            <button id="signinbtn">` . $_SESSION['name'] . `</button>
        </a>
              
             </div>`;
            }
            ?>
        </div>

    </div>
    <div id="sidebar">


        <a class="sidetab" href='#'>hello</a>
        <a class="sidetab" href='#'>hello</a>
        <a class="sidetab" href='#'>hello</a>
        <a class="sidetab" href='#'>hello</a>

    </div>
</nav>