
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/category-dropdown.css">
    <link rel="stylesheet" href="styles/scss/category-dropdown.scss">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins%3A400%2C500%2C600"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C500%2C600%2C700"/>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="stylesheet" href="{{assets('css/style.css')"/>

</head>

<style>

 .head{
    display: flex;

    position: relative;
    top: 20px;
  }

.cares{
    position: relative;
    left: -10px;

    background-color: red;
    color: red;
    width: 35px;
    height: 20px;
    border-radius: 10px;
}

  .titre-1{
    position: relative;
    right: 50px;
  }

  .flech1 {
    position: relative;
    left: 200px;
    top: 20px;
    width: 50px;
    height: 50px;
    left: 600px;
    border-radius: 50%;
    background-color: gainsboro;
    border: 1px solid gainsboro;

  }

  .cartCategorie{
      display: flex;
    left: 20px;
      position: relative;
      top: 50px;
      gap: 30px;
      overflow-x: auto;
      font-size: 0px;
      scrollbar-width: none;

  }

  .cartCategorie::-webkit-scrollbar{
    display: none;
  }

  .category-phone {
    border: 1px solid black;
    padding: 20px;
    width: 190px;
    height: 150px;
  }

  .category-phone:hover {
    background-color: red;
  }

  .category-phone3 {
    border: 1px solid black;
    padding: 20px;
    width: 250px;
    height: 150px;
  }

  .category-phone3:hover {
    background-color: red;
  }



  .phones {
    font-size: 25px;

  color: black;
  text-decoration: underline;
  }

  .phones a{
   text-decoration: none;
  }

  .phones:hover {
    color: aliceblue;
  }


  .phones1 {
    position: relative;
    font-size: 25px;
    left: 30px;
    color: black;
    text-decoration: underline;
  }

  .phones1 a{
   text-decoration: none;
  }

  .phones1:hover {
    color: aliceblue;
  }



  .phones3 {
    position: relative;
    font-size: 25px;
    left: 40px;
    color: black;
    text-decoration: underline;
  }

  .phones3 a{
   text-decoration: none;
  }

  .phones3:hover {
    color: aliceblue;
  }
  .category-img:hover {
    color: aliceblue;
  }

  .phones2 {
    position: relative;
    font-size: 25px;
    left: 10px;
    color: black;
    text-decoration: underline;
  }
  .phones2 a{
   text-decoration: none;
  }
  .phones2:hover {
    color: aliceblue;
  }
  .phones4 {
    position: relative;
    font-size: 25px;
    left: 60px;
  color: black;
  text-decoration: underline;
  }
  .phones4 a{
   text-decoration: none;
  }
  .phones4:hover {
    color: aliceblue;
  }
  .icone{
      width: 200px;
     color: black;
     font-weight: 800px;
     font-size: 60px;
  }
  .icone a{
     text-decoration: none;
  }
  .icone:hover{
    color: aliceblue;
  }
  .icone1{
    position: relative;
    right: 30px;
    width: 200px;
    color: black;
    font-weight: 800px;
    font-size: 60px;
  }
  .icone1 a{
   text-decoration: none;
  }
  .icone1:hover{
  color: aliceblue;
  }
  @media only screen and (max-width: 768px){
    .head .flech1{
        display: none !important;
    }
    .cartCategorie{
        gap: 20px;
        display: grid;
        grid-template-columns: auto;
        width: 100%;
    }
     .titre-1{
        position: relative;
        left: 20px;
      }
      .categories{
        position: relative;
        left: 30px;
      }
  }
</style>


<body>
    <div class="container-fluid p-0 mb-5">
      <div class="container ">
        <div class="categories">
          <h6 style="color: red;"> <span class="cares">x</span>Categories</h6>
        </div>
        <div class="head">
          <div class="col-sm-4">
            <h1 class="titre-1">Browse By Category</h1>
          </div>
          <div class="">
            <button id="prev" class="flech1 "><ion-icon name="arrow-forward"></ion-icon></button>
            <button id="next" class="flech1"><ion-icon name="arrow-back"></ion-icon></button>
        </div>
      </div>
      <div class="cartCategorie">
          <div class="category-phone col-sm-4">
            <a href="">
              <ion-icon class="icone1" name="phone-portrait-outline"></ion-icon>
            </a>
            <p class="phones1">Phone</p>
          </div>
          <div class="category-phone col-sm-4">
            <a href="">
              <ion-icon class="icone1" name="desktop-outline"></ion-icon>
            </a>
            <p class="phones2">Computers</p>
          </div>
          <div class="category-phone3 col-sm-4">
            <a href="">
              <ion-icon class="icone" name="watch-outline"></ion-icon>
            </a>
            <p class="phones3">SmartWatch</p>
          </div>

          <div class="category-phone3 col-sm-4">
            <a href="">
              <ion-icon class="icone" name="camera-outline"></ion-icon>
            </a>
            <p class="phones4">Camera</p>
          </div>

          <div class="category-phone3 col-sm-4">
            <a href="">
              <ion-icon class="icone" name="headset-outline"></ion-icon>
            </a>
            <p class="phones3"> HeadPhones</p>
          </div>

          <div class="category-phone3 col-sm-4">
            <a href="">
              <ion-icon class="icone" name="headset-outline"></ion-icon>
            </a>
            <p class="phones3"> HeadPhones</p>
          </div>

          <div class="category-phone3 col-sm-4">
            <a href="">
              <ion-icon class="icone" name="headset-outline"></ion-icon>
            </a>
            <p class="phones3"> HeadPhones</p>
          </div>
        </div>
    </div>

    <script>
            const initSlider =() => {
        const flech1 = document.querySelectorAll(".flech1");
        const cartCategorie = document.querySelector(".cartCategorie");
        flech1.forEach(flech1 => {
            flech1.addEventListener("click",() => {
            const direction = flech1.id === "prev" ? -1 : 1;
            const scrollAmount = cartCategorie.clientWidth * direction;
            cartCategorie.scrollBy({left: scrollAmount, behavior: "smooth"});
            });
        });
        }
        window.addEventListener("load", initSlider);
    </script>

    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.slim.min.js"></script>
    <script src="script.js"></script>
    </body>
    </html>

