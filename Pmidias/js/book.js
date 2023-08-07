$(document).ready(function() {
    var item, title, author, publisher, category, description, bookImg, id;
    var outputList = document.getElementById("book");
    var bookUrl = "https://www.googleapis.com/books/v1/volumes/";
    var apiKey = "key=AIzaSyDtXC7kb6a7xKJdm_Le6_BYoY5biz6s8Lw";
    var placeHldr = "https://via.placeholder.com/150";
    var id = document.getElementById("id").value;

         $.ajax({
            url: bookUrl + id,
            dataType: "json",
            success: function(response) {
              console.log(response)
              if (response.totalItems === 0) {
                alert("Nenhum resultado encontrado...")
              }
              else {
                displayResults(response);
              }
            },
            error: function () {
              alert("Algo deu errado!...");
            }
          });
        
     /*
     * function to display result in index.html
     * @param response
     */
     function displayResults(response) {
          item = response;
          title = item.volumeInfo.title;
          author = item.volumeInfo.authors;
          publisher = item.volumeInfo.publisher;
          category = item.volumeInfo.categories;
          description = item.volumeInfo.description;
          id = item.id;
          bookImg = (item.volumeInfo.imageLinks) ? item.volumeInfo.imageLinks.thumbnail : placeHldr ;
  
          // in production code, item.text should have the HTML entities escaped.
          outputList.innerHTML += '<div class="row mt-4">' +
                                  formatOutput(bookImg, title, author, publisher, category, description, id) +
                                  '</div>';
  
          console.log(outputList);
        }
  
     /*
     * card element formatter using es6 backticks and templates (indivial card)
     * @param bookImg title author publisher bookLink
     * @return htmlCard
     */
     function formatOutput(bookImg, title, author, publisher, category, description, id) {
       // console.log(title + ""+ author +" "+ publisher +" "+ bookLink+" "+ bookImg)
       var htmlCard = `<div class="col-lg-6">
         <div class="card" style="">
           <div class="row no-gutters">
             <div class="col-md-4">
               <img src="${bookImg}" class="card-img" alt="...">
             </div>
             <div class="col-md-8">
               <div class="card-body">
                 <h5 class="card-title">${title}</h5>
                 <p class="card-text">Autor: ${author}</p>
                 <p class="card-text">Editora: ${publisher}</p>
                 <p class="card-text">Categoria: ${category}</p>
                 <p class="card-text">Descrição: ${description}</p>
                 <input type="hidden" name="img" value="${bookImg}">
                 <input type="hidden" name="title" value="${title}">
                 <input type="hidden" name="author" value="${author}">
                 <input type="hidden" name="id_book" value="${id}">
               </div>
             </div>
           </div>   
         </div>   
       </div>`
       return htmlCard;
     }

})