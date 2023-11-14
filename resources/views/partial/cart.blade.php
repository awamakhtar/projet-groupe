<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter%3A700"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C500%2C700"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins%3A400%2C500"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <style>
        body{
    font-family: Poppins, 'Source Sans Pro';
}
.rectangle{
    margin-right: 1.6rem;
    width: 1.2rem;
    height: 2.5rem;
    background-color: #db4444;
    border-radius: 0.4rem;
    flex-shrink: 0;
 }
.our-products{
    color: #db4444;
    font-weight: bold;
}
.card-img-top{
    width: 120px;
    height: 180px;
}
.card {
    background-color:#f2f2f2;
    margin: 10px;
    height: 250px;
    border: none;
}
.card:hover{
    cursor: pointer;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    transition: all 0.3s ease;
    transform: scale(1.05);
  }
.image-fill a{
    color: #000;
}
.image-fill{
    justify-content: center;
    text-align: center;
    margin-left:80%;

}
.image-fill i{
    background-color:#f2f2f2;
    border-radius: 50%;
    padding:10px;
    font-size: 24px;
    }
.icon-heart-eye i{
    background-color: #fff;
    border-radius: 50%;
    padding: 8px;
    font-size: large;
}
.icon-heart-eye a{
    color: #000;
    margin: 10px;
}
.icon-heart-eye{
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    position: relative;
    bottom: 220px;
}
.stars .bi-star-fill{
    color: #e8c70ce0;
}
.stars .start-fil{
    color: #939191e7;
}
.image-color-change img{
    width: 50px;
    position: relative;
    bottom: 30px;
}
.btn-button{
    background-color:#db4444;
    color: #fff;
    font-size: 16px;
    width: 40%;
    padding: 12px;
}
div .semi-clone{
    width: 0.4rem;
    height: 1.6rem;
    margin: 1.6rem 1.7rem 0rem 0rem;

}
    </style>

<div class="py-5">
        <div class="  mx-5">
            <div class="d-flex mx-3">
                <div class="rectangle"></div>
                <p class="our-products ">Our Products</p>
            </div>
            <p class="fs-1 fw-bold mx-4">Explore Our Products</p>
        </div>
        <div class="image-fill ">
          <a href=""><i class="bi bi-arrow-left icon_arrow "></i></a>
          <a href=""><i class="bi bi-arrow-right icon_arrow"></i></a>
        </div>
    </div>
  <div class="container content">
      <div class="row">
          <div class="col-md-3 col-12 col-sm-6 col-lg-3">
              <div class="card">
                  <img src="assets/rdoexxtrl-1-29x.png" alt="" class="card-img-top mx-5 mt-5 col-md-3 col-12 col-sm-6 col-lg-3">
                  <div class="icon-heart-eye py-3">
                    <a href=""><i class="bi bi-suit-heart"></i> </a>
                    <a href=""><i class="bi bi-eye"></i></a>
                  </div>
              </div>
              <div class="card-body mx-2">
                  <h6 class="card-title">Breed Dry Dog Food</h6>
                  <div class="d-flex">
                      <p class="text-danger py-2">$100</p>
                      <div class="stars mx-2 py-2 d-flex justify-content-end">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill start-fil"></i>
                        <i class="bi bi-star-fill start-fil"></i>
                      </div>
                      <p class="text-en-gras py-2 fw-bold">(35)</p>
                  </div>
              </div>
          </div>

          <div class="col-md-3 col-12 col-sm-6 col-lg-3">
            <div class="card">
                <img src="assets/eos-250d-03-500x500-1-5ar.png" alt="" class="card-img-top mx-5  mt-4 col-md-3 col-12 col-sm-6 col-lg-3">
                <button class="bg-dark text-white mt-2 py-1 btn-cart">Add To Cart</button>
                <div class="icon-heart-eye py-1">
                  <a href=""><i class="bi bi-suit-heart"></i> </a>
                  <a href=""><i class="bi bi-eye"></i></a>
                </div>
            </div>
            <div class="card-body mx-2">
                <h6 class="card-title">CANON EOS DSLR Camera</h6>
                <div class="d-flex">
                    <p class="text-danger py-2">$360</p>
                    <div class="stars mx-2 py-2 d-flex justify-content-end">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill start-fil"></i>
                      <i class="bi bi-star-fill start-fil"></i>
                    </div>
                    <p class="text-en-gras py-2 fw-bold">(95)</p>
                </div>
            </div>
          </div>
          <div class="col-md-3 col-12 col-sm-6 col-lg-3">
            <div class="card">
                <img src="assets/ideapad-gaming-3i-01-500x500-1-QA6.png" alt="" class="card-img-top mx-5  mt-4 col-md-3 col-12 col-sm-6 col-lg-3">
                <div class="icon-heart-eye py-5">
                  <a href=""><i class="bi bi-suit-heart"></i> </a>
                  <a href=""><i class="bi bi-eye"></i></a>
                </div>
            </div>
            <div class="card-body mx-2">
                <h6 class="card-title">ASUS FHD Gaming Laptop</h6>
                <div class="d-flex">
                    <p class="text-danger py-2">$700</p>
                    <div class="stars mx-2 py-2 d-flex justify-content-end">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill start-fil"></i>
                      <i class="bi bi-star-fill start-fil"></i>
                    </div>
                    <p class="text-en-gras py-2 fw-bold">(325)</p>
                </div>
            </div>
          </div>

          <div class="col-md-3 col-12 col-sm-6 col-lg-3">
            <div class="card">
                <img src="assets/curology-j7pkvqrtusm-unsplash-1.png" alt="" class="card-img-top mx-5    mt-4 col-md-3 col-12 col-sm-6 col-lg-3">
                <div class="icon-heart-eye py-5">
                  <a href=""><i class="bi bi-suit-heart"></i> </a>
                  <a href=""><i class="bi bi-eye"></i></a>
                </div>
            </div>
            <div class="card-body mx-2">
                <h6 class="card-title">Curology Product Set</h6>
                <div class="d-flex">
                    <p class="text-danger py-2">$500</p>
                    <div class="stars mx-2 py-2 d-flex justify-content-end">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill start-fil"></i>
                      <i class="bi bi-star-fill start-fil"></i>
                    </div>
                    <p class="text-en-gras py-2 fw-bold">(145)</p>
                </div>
            </div>
          </div>

          <div class="col-md-3 col-12 col-sm-6 col-lg-3">
            <div class="card">
                <img src="assets/new-mercedes-benz-gtr-licensed-ride-on-car-kids-electric-toy-car-1-7NJ.png" alt="" class="card-img-top mx-5    mt-4 col-md-3 col-12 col-sm-6 col-lg-3">
                <div class="icon-heart-eye py-5">
                  <a href=""><i class="bi bi-suit-heart"></i> </a>
                  <a href=""><i class="bi bi-eye"></i></a>
                </div>
            </div>
            <div class="card-body mx-2">
                <h6 class="card-title">Kids Electric Car</h6>
                <div class="d-flex">
                    <p class="text-danger py-2">$960</p>
                    <div class="stars mx-2 py-2 d-flex justify-content-end">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill start-fil"></i>
                      <i class="bi bi-star-fill start-fil"></i>
                    </div>
                    <p class="text-en-gras py-2 fw-bold">(65)</p>
                </div>
                <div class="image-color-change py-1">
                  <img src="assets/colour-chnage-GAE.png" alt="">
                </div>
            </div>
          </div>

          <div class="col-md-3 col-12 col-sm-6 col-lg-3">
            <div class="card">
                <img src="assets/copasense-1-2ki.png" alt="" class="card-img-top mx-5    mt-4 col-md-3 col-12 col-sm-6 col-lg-3">
                <div class="icon-heart-eye py-5">
                  <a href=""><i class="bi bi-suit-heart"></i> </a>
                  <a href=""><i class="bi bi-eye"></i></a>
                </div>
            </div>
            <div class="card-body mx-2">
                <h6 class="card-title">Jr. Zoom Soccer Cleats</h6>
                <div class="d-flex">
                    <p class="text-danger py-2">$1160</p>
                    <div class="stars mx-2 py-2 d-flex justify-content-end">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill start-fil"></i>
                      <i class="bi bi-star-fill start-fil"></i>
                    </div>
                    <p class="text-en-gras py-2 fw-bold">(35)</p>
                </div>
                <div class="image-color-change py-1">
                  <img src="assets/colour-chnage-GAE.png" alt="">
                </div>
            </div>
          </div>

          <div class="col-md-3 col-12 col-sm-6 col-lg-3">
            <div class="card">
                <img src="assets/gp11prd3-1-f2i.png" alt="" class="card-img-top mx-5   mt-4 col-md-3 col-12 col-sm-6 col-lg-3">
                <div class="icon-heart-eye py-5">
                  <a href=""><i class="bi bi-suit-heart"></i> </a>
                  <a href=""><i class="bi bi-eye"></i></a>
                </div>
            </div>
            <div class="card-body mx-2">
                <h6 class="card-title">GP11 Shooter USB Gamepad</h6>
                <div class="d-flex">
                    <p class="text-danger py-2">$660</p>
                    <div class="stars mx-2 py-2 d-flex justify-content-end">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill start-fil"></i>
                      <i class="bi bi-star-fill start-fil"></i>
                    </div>
                    <p class="text-en-gras py-2 fw-bold">(55)</p>
                </div>
                <div class="image-color-change py-1">
                  <img src="assets/colour-chnage-GAE.png" alt="">
                </div>
            </div>
          </div>

          <div class="col-md-3 col-12 col-sm-6 col-lg-3 ">
            <div class="card">
                <img src="assets/z8a1x34750011000000light-reversible-quilted-satin-jacket-1-3AA.png" alt="" class="card-img-top mx-5    mt-4 col-md-3 col-12 col-sm-6 col-lg-3">
                <div class="icon-heart-eye py-5">
                  <a href=""><i class="bi bi-suit-heart"></i> </a>
                  <a href=""><i class="bi bi-eye"></i></a>
                </div>
            </div>
            <div class="card-body mx-2">
                <h6 class="card-title">Quilted Satin Jacket</h6>
                <div class="d-flex">
                    <p class="text-danger py-2">$660</p>
                    <div class="stars mx-2 py-2 d-flex justify-content-end">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill start-fil"></i>
                      <i class="bi bi-star-fill start-fil"></i>
                    </div>
                    <p class="text-en-gras py-2 fw-bold">(55)</p>
                </div>
                <div class="image-color-change py-1">
                  <img src="assets/colour-chnage-GAE.png" alt="">
                </div>
            </div>
          </div>
          <div class="  mx-auto col-md-6 col-12">
            <button class="btn btn-lg btn-danger btn-button btn-block mx-5" type="button">View All Products</button>
          </div>

      </div>
  </div>

  <script>
            const initSlider =() => {
        const icon_arrow = document.querySelectorAll(".icon_arrow");
        const content = document.querySelector(".content");
        icon_arrow.forEach(icon_arrow => {
            icon_arrow.addEventListener("click",() => {
            const direction = icon_arrow.id === "prev" ? -1 : 1;
            const scrollAmount = content.clientWidth * direction;
            content.scrollBy({left: scrollAmount, behavior: "smooth"});
            });
        });
        }
        window.addEventListener("load", initSlider);
    </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
