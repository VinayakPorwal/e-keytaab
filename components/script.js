



function signupbtn() {

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('form').innerHTML = this.responseText
        }
    };
    xhr.open('GET', "frontsignup.php", true);
    xhr.send();
}

function loginbtn() {

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('form').innerHTML = this.responseText;
        }
    };
    xhr.open('GET', "frontlogin.php", true);
    xhr.send();
}

function signup() {

    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var pass = document.getElementById("pass").value;
    var cpass = document.getElementById("cpass").value;
    var dob = document.getElementById("dob").value;

    // console.log(name+email+pass+cpass+dob);

    if (pass, email, cpass, name, dob != null || "") {
        if (pass == cpass) {

            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    // to empty form data 
                    document.getElementById("name").value = "";
                    document.getElementById("email").value = "";
                    document.getElementById("pass").value = "";
                    document.getElementById("cpass").value = "";
                    document.getElementById("dob").value = "";
                    console.log(this.responseText);
                }
            };
            xhttp.open("POST", "signup.php", true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send("name=" + name + "&email=" + email + "&pass=" + pass + "&dob=" + dob + "&sub=" + true);
        }
        else {
            document.getElementById('data').innerHTML = "password not match";

        }
    }
    else {
        document.getElementById('data').innerHTML = "fill all details";
    }
}

function login() {


    var email = document.getElementById("email").value;
    var pass = document.getElementById("pass").value;

    // console.log(name+email+pass+cpass+dob);

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            // to empty form data 

            // document.getElementById("page").innerHTML = this.responseText;

            window.location.assign("index.php");
            // document.getElementById("userinout").innerHTML = "<button onclick='logout();nav()'>logout</button>";
            console.log(this.responseText);
        }
    };
    xhttp.open("POST", "login.php", true);
    xhttp.setRequestHeader("Content-type", "application/json");
    var data = { "email": email, "pass": pass }
    xhttp.send(JSON.stringify(data));

}

function logout() {

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {

            document.getElementById("page").innerHTML = this.responseText;
            // document.getElementById("userinout").innerHTML = "<button onclick='signupbtn()'>signup</button><button onclick='loginbtn()'>login</button>";
            window.location.assign("entrypage.php");
            console.log(this.responseText);
        }
    };
    xhttp.open("GET", "logout.php", true);
    xhttp.send();
}






// function chatpanel(rid){

// }
function enter(e, rid) {
    if (e.keyCode === 13) {
        e.preventDefault();
        chat(rid);

    }
};
