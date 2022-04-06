var qoute = document.getElementById("qoutes");
var author = document.getElementById("author");
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
    //   console.log(data[randomNumber]["text"]+  data[randomNumber]["author"]);
      qoute.innerHTML =
        data[randomNumber]["text"] ;
        author.innerHTML = data[randomNumber]["author"];
    })

    .catch((err) => alert("cant Find citty name in Our Database!"));
}
qoutes();
