// -------------- Click record system -----------------

var count2 = document.querySelector(".acount2");
function clicks(id) {
  // console.log(id)
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      // count.innerHTML = this.responseText;
      console.log(this.responseText);
    }
  };
  xhttp.open("GET", "linkResponse.php?clgid=" + id, true);
  // xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send();
}

function data() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      count2.innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "data.php", true);
  // xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send();
}
data();