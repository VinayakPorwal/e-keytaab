<div class="projects">

    <div class="pcontainer pleft">
        <div class="projectcard">
            <div style="padding:4px;margin:auto">
                <div style='padding: 5px 10px 0 0;'>
                    <p id="language" style='height: 30px; margin-right: 0 ;'></p>
                    <p id="category" style='height: 30px; margin-right: 0 ;'></p>
                </div>
                <img src='' id="image" alt="Jane" style='height: 100px; border-radius: 5px;     margin: 10px auto;' />
                <div>
                    <h2 id="title"></h2>
                    <p id="author"></p>
                    <p id="subtitle"></p>
                </div>
                <div style="display: flex;justify-content: space-evenly;">

                    <a id="link" class="button">Read Now</a>
                    <a id="link2" class="button">Download</a>
                </div>
            </div>

            <div class="projillus" style="margin: auto;">
                <!-- <h3 class="projhead">OUR PROJECTS</h3> -->
                <img id="image2" alt="proojimg" />
                <p id="category2" style='height: 30px; margin-right: 0 ;'></p>

            </div>

        </div>
    </div>
</div>
</div>

</div>
<script>
function dataa() {
    var preview = document.getElementById("image");
    var preview2 = document.getElementById("image2");
    var title = document.getElementById("title");
    var link = document.getElementById("link");
    var link2 = document.getElementById("link2");
    var category = document.getElementById("category");
    var category2 = document.getElementById("category2");
    var auhtor = document.getElementById("author");
    var subtitle = document.getElementById("subtitle");
    fetch(
            "https://www.googleapis.com/books/v1/volumes?q=Apis&filter=free-ebooks&download=epub&key=AIzaSyBUGfZ8xZ6aTFTwD6dpj5h5X3-vrLahxHw"
        )
        .then((response) => response.json())
        .then((data) => {
            console.log(data.items[0]);
            preview.src = data.items[0].volumeInfo.imageLinks.smallThumbnail;
            preview2.src = data.items[0].volumeInfo.imageLinks.thumbnail;
            title.innerHTML = data.items[0].volumeInfo.title;
            link.href = 'components/canvas.php?pass=' + data.items[0].id;
            link2.href = data.items[0].accessInfo.pdf.downloadLink;
            category.innerHTML = data.items[0].volumeInfo.categories;
            category2.innerHTML = data.items[0].volumeInfo.categories;
            author.innerHTML = "~ " + data.items[0].volumeInfo.authors;
            subtitle.innerHTML = data.items[0].volumeInfo.subtitle;
        })

        .catch((err) => alert("cant Find citty name in Our Database!"));
}
dataa();
</script>