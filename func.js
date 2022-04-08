var qoute = document.getElementById("qoutes");
var Qauthor = document.getElementById("Qauthor");
function qoutes() {
  // const api_url = "https://zenquotes.io/api/quotes/";
  var randomNumber = Math.floor(Math.random() * 100);
  //   const api_url = "https://type.fit/api/quotes";
  //   async function getapi(url) {
  //     const response = await fetch(url);
  //     var data = await response.json();
  //     console.log(data[randomNumber]["text"]);
  //   }

  //   getapi(api_url);
  fetch("https://type.fit/api/quotes")
    .then((response) => response.json())
    .then((data) => {
      // console.log(data);
    //   console.log(data[randomNumber]["text"]+  data[randomNumber]["author"]);
      qoute.innerHTML =
        data[randomNumber]["text"] ;
        Qauthor.innerHTML = data[randomNumber]["author"];
    })

    // .catch((err) => alert("cant Find citty name in Our Database!"));
}
qoutes();


// var datas = document.querySelector('.notes');
// var rs = document.querySelector('#rs');
// var inp = document.querySelector('#input');
// var check = document.querySelector('#chck');

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

// function fetchnote() {
//     var xhttp = new XMLHttpRequest();
//     xhttp.onreadystatechange = function() {
//         if (this.readyState == 4 && this.status == 200) {
//             datas.innerHTML = this.responseText;
//             // check.innerHTML = "Note Fected Successfully"
//         }
//     };
//     xhttp.open("GET", "fetch/fetchnotes.php", true);
//     xhttp.send();

// }
// window.onload = fetchnote();

// function sendnote() {

//     if (inp.value.replace(/\s+/g, '').length == 0 || rs.value.replace(/\s+/g, '').length == 0) {
//         check.innerHTML = "Empty values!"
//     } else {

//         var xhttp = new XMLHttpRequest();
//         xhttp.onreadystatechange = function() {
//             if (this.readyState == 4 && this.status == 200) {
//                 check.innerHTML = this.responseText;
//                 console.log(this.responseText)
//             }
//         };
//     }
//     xhttp.open("POST", "fetch/sendnote.php", true);
//     xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
//     xhttp.send('rs=' + rs.value + '&text=' + inp.value);
//     fetchnote();
//     inp.value = "";
//     rs.value = "";
// }

// function deletenote(id) {

//     var xhttp = new XMLHttpRequest();
//     xhttp.onreadystatechange = function() {
//         if (this.readyState == 4 && this.status == 200) {
//             check.innerHTML = this.responseText;
//             console.log(this.responseText)
//         }
//     };
//     xhttp.open("GET", "fetch/deletenote.php?id=" + id, true);
//     xhttp.send();
//     fetchnote();
// }


// function updatenote(id) {
//     var xhttp = new XMLHttpRequest();
//     console.log(document.getElementById(id).innerHTML);
//     xhttp.onreadystatechange = function() {
//         if (this.readyState == 4 && this.status == 200) {
//             check.innerHTML = this.responseText;
//             console.log(this.responseText)
//         }
//     };
//     xhttp.open("POST", "fetch/updatenote.php", true);
//     xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
//     xhttp.send('id=' + id + '&text=' + document.getElementById(id).innerHTML);
//     document.getElementById(id).contentEditable = false;
//     fetchnote();
// }

// function editnote(id) {
//     document.getElementById(id).contentEditable = true;
//     document.getElementById(id).style.border = "1px solid";
// }

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