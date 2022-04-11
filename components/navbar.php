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

                    <a class="tab" href='index.php'>Home</a>
                    <a class="tab" href='qoute.php'>Books</a>
                    <a class="tab" href='components/demo.php'>About</a>
                </div>
            </div>
            <div class="credin">

                <?php
                if ($loggedin == false) {
                    echo '<a href="enrtypage.php"><button
                id="loginbtn">login</button>
                </a>
                <a href="enrtypage.php"><button
                id="signinbtn">signup</button>
                </a>';
                } else {
                    echo '
                <a href="components/logout.php"><button
                id="signinbtn">';
                // echo $_SESSION['name'];
                // echo '<i class="fa fa-sign-out" style="font-size:x-large;color: var(--white)"></i>';
                echo 'Logout';
                echo '</button>
                </a>';
                }
                ?>
            </div>

        </div>

    </div>
    <div id="sidebar">


        <a class="sidetab" href='index.php'>Home</a>
        <a class="sidetab" href='qoute.php'>Books</a>
        <a class="sidetab" href='components/demo.php'>About</a>

    </div>
</nav>