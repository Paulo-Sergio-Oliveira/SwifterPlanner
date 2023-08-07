$(document).ready(function() {
    var item, tile, author, publisher, category, bookImg, id;
    var outputList = document.getElementById("list-output");
    var bookUrl = "https://www.googleapis.com/books/v1/volumes?maxResults=40&q=";
    var bookUrlCategory = "https://www.googleapis.com/books/v1/volumes?maxResults=40&q=+subject:";
    var apiKey = "key=AIzaSyDtXC7kb6a7xKJdm_Le6_BYoY5biz6s8Lw";
    var placeHldr = "img/indisponivel.jpg";
    var searchData;

    $(".category").click(function() {

      outputList.innerHTML = ""; //empty html output
      document.body.style.backgroundImage = "url('img/bg-book2.jpg')";
      $.ajax({
        url: bookUrlCategory + this.value,
        dataType: "json",
        success: function(response) {
          console.log(response)
          if (response.totalItems === 0) {
            alert("Nenhum resultado encontrado...")
          }
          else {
            $("#title").animate({'margin-top': '5px'}, 1000); //search box animation
            $(".book-list").css("visibility", "visible");
            displayResults(response);
          }
        },
        error: function () {
          alert("Algo deu errado!...");
        }
      });
     });

    //listener for search button
    $("#search").click(function() {
      outputList.innerHTML = ""; //empty html output
      document.body.style.backgroundImage = "url('img/bg-book2.jpg')";
       searchData = $("#search-box").val();
       //handling empty search input field
       if(searchData === "" || searchData === null) {
         displayError();
       }
      else {
         // console.log(searchData);
         // $.get("https://www.googleapis.com/books/v1/volumes?q="+searchData, getBookData()});
         $.ajax({
            url: bookUrl + searchData,
            dataType: "json",
            success: function(response) {
              console.log(response)
              if (response.totalItems === 0) {
                alert("Nenhum resultado encontrado...")
              }
              else {
                $("#title").animate({'margin-top': '5px'}, 1000); //search box animation
                $(".book-list").css("visibility", "visible");
                displayResults(response);
              }
            },
            error: function () {
              alert("Algo deu errado!...");
            }
          });
        }
        $("#search-box").val(""); //clearn search box
     });
  
     /*
     * function to display result in index.html
     * @param response
     */
     function displayResults(response) {
        for (var i = 0; i < response.items.length; i+=2) {
          item = response.items[i];
          title1 = item.volumeInfo.title;
          author1 = item.volumeInfo.authors;
          publisher1 = item.volumeInfo.publisher;
          category1 = item.volumeInfo.categories;
          id1 = item.id;
          bookImg1 = (item.volumeInfo.imageLinks) ? item.volumeInfo.imageLinks.thumbnail : placeHldr ;
  
          item2 = response.items[i+1];
          title2 = item2.volumeInfo.title;
          author2 = item2.volumeInfo.authors;
          publisher2 = item2.volumeInfo.publisher;
          category2 = item2.volumeInfo.categories;
          id2 = item2.id;
          bookImg2 = (item2.volumeInfo.imageLinks) ? item2.volumeInfo.imageLinks.thumbnail : placeHldr ;
  
          // in production code, item.text should have the HTML entities escaped.
          outputList.innerHTML += '<div class="row mt-4">' +
                                  formatOutput(bookImg1, title1, author1, publisher1, category1, id1) +
                                  formatOutput(bookImg2, title2, author2, publisher2, category2, id2) +
                                  '</div>';
  
          console.log(outputList);
        }
     }
  
     /*
     * card element formatter using es6 backticks and templates (indivial card)
     * @param bookImg title author publisher bookLink
     * @return htmlCard
     */
     function formatOutput(bookImg, title, author, publisher, category, id) {
       // console.log(title + ""+ author +" "+ publisher +" "+ bookLink+" "+ bookImg)
       var htmlCard = `<div class="col-lg-6">
       <a href="bookpage.php?id=${id}">
         <div class="card" style="">
           <div class="row no-gutters">
             <div class="col-md-4">
               <img src="${bookImg}" class="card-img" alt="...">
             </div>
             <div class="col-md-8">
               <div class="card-body" style="">
                 <h5 class="card-title">${title}</h5>
                 <p class="card-text">Author: ${author}</p>
                 <p class="card-text">Publisher: ${publisher}</p>
                 <p class="card-text">Category: ${category}</p>
                 <p class="card-text">Id: ${id}</p>
               </div>
             </div>
           </div>
         </div>
         </a>
       </div>`
       return htmlCard;
     }
  
     //handling error for empty search box
     function displayError() {
       alert("O campo de texto não pode ser vazio!...")
     }

     
  
  });