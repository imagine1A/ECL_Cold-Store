
fetch('https://dummyjson.com/products')
  .then((response) => response.json())
  .then((data) => {
    // console.log(data["products"]);
    for (i = 0; i < data["products"].length; i++) {
        // console.log(data["products"][i]["id"]);
        temp = document.createElement('div');
        temp.classList.add('card', 'blog-item');
        temp.innerHTML = 
        // '<div class="image_place">'+
         ' <img class= "card-img-top w-100 d-block" src="'+data["products"][i]["images"][0]+'" style="width:100%">'+
      //  ' </div>'+
      
      ' <div class="card-body">'+
        ' <p>'+data["products"][i]["title"]+'</p>'+
        ' <h4 style="font-family:Anton">'+data["products"][i]["title"]+'</h4>'+
        '<p class="card-text">If you&#39;re in a hurry to get fresh food for your dinner, you can reach out to us and we will provide speedy delivery of your fresh food.'+'</p>'+
        '<button class="btn btn-primary readmore" type="button">Read more<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" style="font-weight: 800;font-size: 23px;">'+
                '<path d="M10.5253 5.49475L10.5206 7.49475L15.0782 7.50541L5.47473 17.0896L6.88752 18.5052L16.5173 8.89479L16.5065 13.5088L18.5065 13.5134L18.5253 5.51345L10.5253 5.49475Z" fill="currentColor">'+'</path>'
            +'</svg>'
            +'</button>'
      

        ' </div>';
      document.querySelector('.blog-items').appendChild(temp);;
        }
});