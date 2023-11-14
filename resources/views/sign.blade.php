<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter%3A700"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C500%2C700"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins%3A400%2C500"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css"/>
    <style>
        .account{
            background-color: #db4444!important;
        }
    </style>
</head>
<body>
    @include('partial.navbar')

    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6 col-md-12 ">
                <img src="./assets/phone.png" alt="" width="100%" height="100%">
            </div>
            <div class="col-lg-5 col-md-12">
                <h1>Create an Account</h1>
                <p class="para3">Enter your details below</p>
                <form>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Name</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="nameHelp">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail2" class="form-label">Email or Phone Number</label>
                      <input type="email" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-danger btn1 p-3 account">Create Account</button>
                        <button type="submit" class="btn btn-transparent btn2 p-3 mt-3"><img src="./assets/icon-google.png" alt="" width="6%"> Sign up with Google</button>
                    </div>
                    <div class="d-flex pt-3">
                        <p class="para3 me-3">Already have account?</p>
                        <a href="http://127.0.0.1:5501/login.html" class="lg1"> Log in</a>
                    </div>
                  </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
