<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>

    <style>
.titres{
    position: relative;
    width: Hug (525px);
    height: Hug (336px);
    top: 122px;
    left: 75px;
    text-justify: auto;

}

.img-titre{
    width: 605px;
    height: 509px;
    top: 285px;
    left: 735px;
    border-radius: 4px, 0px, 0px, 4px;

}
.bloc-titre{
    display: grid;
    grid-template-columns: auto auto;
    gap: 250px;
}

/* cardcash */
.bloc-cash{
    display: grid;
    grid-template-columns: auto auto auto auto;
    justify-content: center;
    gap:50px;
}
.card-cash{
    position: relative;
    top: 140px;
    border: 1px solid black;
    width: 190px;
    height: 170px;
    border-radius: 5px;

}
.card-cash:hover{
    background-color: red;
}

.cash-icone{
    font-size: 50px;
    margin-left: 60px;
    margin-top: 10px;
    border: 1px solid grey;
    border-radius: 50%;
    box-shadow: -1px 0px 0px 7px #0000004D;
}

.cash-icone:hover{
    color: aliceblue;
    border: 1px solid whitesmoke;
}
.tit1{
    margin-left: 50px;
}

.tit{
    margin-left: 20px;
}

.tit1:hover{
color: aliceblue;
}

.tit:hover{
color: aliceblue;
}


.carousel{
    position: relative;
    top: 100px;

}
.row{
    display: flex;
    gap: 20px;
    justify-content: center;

}
.point{
    position: relative;
    top: -70px;
    color: blueviolet !important;
    background-color: blue !important;
}
.card-img-top1{
    width: 200px !important;
    height: 200px !important;
}

.card-img-top2{
    width: 200px !important;
    height: 200px !important;
}

@media only screen and (max-width: 768px){

    .bloc-titre{
        gap: 150px;
        display: grid;
        grid-template-columns: auto;
         width: 100%;

    }
    .titres{
    position: relative;
    left: 15px;


}
.bloc-cash{
    position: relative;
    right: -100px;
        gap: 100px;
        display: grid;
        grid-template-columns: auto auto;
         width: 100%;

    }


    .secicone{
        gap: 150px;
        display: grid;
        grid-template-columns: auto;
        width: 100%;
        display: none;

    }
  }
  .secicone{
    position: relative;
    top: 140px;
    display: flex;
    justify-content: center;
    gap: 50px;


  }



    </style>
</head>
<body>

    @include('.partial.navbar')

<div class="bloc-titre">
   <div class="titres">
    <h1 >Our Story</h1>
    <p>Launced in 2015, Exclusive is South Asia’s premier online shopping  makterplace with an active presense in Bangladesh. Supported  by wide range of tailored marketing, data and service solutions, Exclusive has 10,500 sallers and 300 brands and serves 3 millioons customers across the region. </p>
      <p> Exclusive has more than 1 Million products to offer, growing at a  very fast. Exclusive offers a diverse assotment in categories  ranging  from consumer.</p>
   </div>
   <div>

    <img src="assets/portrait-two-african-females-holding-shopping-bags-while-reacting-something-their-smartphone-1.png" class="img-titre">
   </div>
</div>


 <!-- section cartsd -->

 <div class="bloc-cash">
       <div class="card-cash">
       <span><ion-icon name="cash-outline" class="cash-icone"></ion-icon></span>
       <h1 class="tit1">10.5k </h1>
       <p class="tit">Sallers active our site</p>
       </div>

       <div class="card-cash">
        <s><ion-icon name="cash-outline" class="cash-icone"></ion-icon></s>
        <h1 class="tit1">10.5k </h1>
        <p class="tit">Sallers active our site</p>
        </div>

        <div class="card-cash">
            <s><ion-icon name="cash-outline" class="cash-icone"></ion-icon></s>
            <h1 class="tit1">10.5k </h1>
            <p class="tit">Sallers active our site</p>
            </div>

            <div class="card-cash">
                <s><ion-icon name="cash-outline" class="cash-icone"></ion-icon></s>
                <h1 class="tit1">10.5k </h1>
                <p class="tit">Sallers active our site</p>
                </div>
 </div>

<div class="carousel">
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" class="point" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" class="point" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" class="point" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" class="point" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
      <button type="button" class="point" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
      <button type="button" class="point" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
    </div>

    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <div class="card" style="width: 18rem;">
                <img src="assets/image-47.png" class="card-img-top1" alt="Cat Image">
                <div class="card-body">
                  <h5 class="card-title">TOME CUREIE</h5>
                  <p class="card-text">funder& Charmon</p>
                  <span><ion-icon name="logo-facebook"></ion-icon></span>
                  <span><ion-icon name="logo-instagram"></ion-icon></span>
                  <span><ion-icon name="logo-linkedin"></ion-icon></span>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card" style="width: 18rem;">
                <img src="assets/image-51.png" class="card-img-top2" alt="Cat Image">
                <div class="card-body">
                    <h5 class="card-title">TOME CUREIE</h5>
                    <p class="card-text">funder& Charmon</p>
                    <span><ion-icon name="logo-facebook"></ion-icon></span>
                    <span><ion-icon name="logo-instagram"></ion-icon></span>
                    <span><ion-icon name="logo-linkedin"></ion-icon></span>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card" style="width: 18rem;">
                <img src="assets/image-46.png" class="card-img-top1" alt="Cat Image">
                <div class="card-body">
                    <h5 class="card-title">TOME CUREIE</h5>
                    <p class="card-text">funder& Charmon</p>
                    <span><ion-icon name="logo-facebook"></ion-icon></span>
                    <span><ion-icon name="logo-instagram"></ion-icon></span>
                    <span><ion-icon name="logo-linkedin"></ion-icon></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Navigation -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>


    <!-- <div> class="secicone"> -->
  <div class="secicone">
    <div>
        <span><ion-icon name="cash-outline" class="cash-icone"></ion-icon></span>
        <h6>FREE AND FAST DELIVERY</h6>
        <p>Free delivery for all orders over $140</p>
    </div>
    <div>
        <span><ion-icon name="cash-outline" class="cash-icone"></ion-icon></span>
        <h6>FREE AND FAST DELIVERY</h5>
        <p>Free delivery for all orders over $140</p>
    </div>
    <div>
        <span><ion-icon name="cash-outline" class="cash-icone"></ion-icon></span>
        <h6>FREE AND FAST DELIVERY</h6>
        <p>Free delivery for all orders over $140</p>
    </div>

    </div>

    {{-- @include('.partial.footer') --}}





    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
