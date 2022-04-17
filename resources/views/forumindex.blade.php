<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/57d7c543f3.js" crossorigin="anonymous"></script>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .button {
          background-color: white;
          border: 2px solid #D074D8;
          color: #BA68C8;
          padding: 5px 20px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          margin: 2px 1px;
          cursor: pointer;
          border-radius: 25px;
        }

        .button1 {
          background-color: #D074D8;
          border: 2px solid #D074D8;
          color: #ffffff;
          padding: 4px 25px;
          text-align: center;
          font-size: medium;
          text-decoration: none;
          display: inline-block;
          margin: 2px 1px;
          cursor: pointer;
          border-radius: 8px;
        }

        .button2 {
          background-color: white;
          color: #BA68C8;
          padding: 5px 20px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          margin: 2px 1px;
          cursor: pointer;
          border-radius: 25px;
        }

        .button4 {
          background-color: white;
          color: red;
          text-align: center;
          text-decoration: none;
          font-size: smaller;
          font-weight: bold;
        }

        .button5 {
          background-color: white;
          border: 2px solid #D074D8;
          color: #BA68C8;
          padding: 5px 20px;
          text-align: center;
          font-size: small;
          text-decoration: none;
          display: inline-block;
          margin: 2px 1px;
          cursor: pointer;
          border-radius: 5px;
        }

        .button6 {
          background-color: #D074D8;
          border: 2px solid #D074D8;
          color: #ffffff;
          padding: 6px 20px;
          text-align: center;
          font-size: small;
          text-decoration: none;
          display: inline-block;
          cursor: pointer;
          border-radius: 25px;

        }
        
        .button:hover {
          background-color: #F2F6F9;
        }
        
        .body{
          background-color: #a8afb5;
        }
        </style>
    <style type="text/css">
        
        #p{
        color: #D074D8;
        font-size: 28px;
        font-weight:bolder;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        font-style: normal;}
        
        
        #p1{
        color: #BA68C8;
        font-size: 16px;
        font-weight:lighter;
        font-family:Arial, Helvetica, sans-serif;
        font-style: normal;}

        #p2{
        color: #BA68C8;
        font-size: 16px;
        font-weight:bolder;
        text-decoration: underline;
        font-family:Arial, Helvetica, sans-serif;
        font-style: normal;}

        .bold{ font-weight: bolder;}
        </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow p-3 mb-5 bg-body rounded fixed-top" style="background-color : #F2F6F9;" >
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <a class="navbar-brand" href="" style="color: #D074D8;"><img src="/logo.png" alt="" style="margin-left: 0.2cm;"><b>LIVEQUALIE</b></a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a id="p1" class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a id="p1" class="nav-link" href="/artikel">Articles</a>
              </li>
              <li class="nav-item">
                <a id="p1" class="nav-link" href="#">Videos</a>
              </li>
              <li class="nav-item">
                <a id="p2" class="nav-link bold" href="/forum">Forum</a>
              </li>
              <li class="nav-item">
                <a id="p1" class="nav-link" href="#">Glossary</a>
              </li>
              <li class="nav-item">
                <a id="p1" class="nav-link" href="#">About Us</a>
              </li>
              <li class="nav-item">
                <div class="input-group rounded">
                  <input type="search" class="form-control rounded-pill" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                    <i class="fas fa-search button2" style="margin-top: 7px;"></i>
                </div>
              </li>
            </ul>
            <svg xmlns="http://www.w3.org/2000/svg" class="me-2" style="color: #D074D8;" width="30" height="30" fill="currentColor" viewBox="0 0 576 512"><path d="M192 352C138.1 352 96 309 96 256C96 202.1 138.1 160 192 160C245 160 288 202.1 288 256C288 309 245 352 192 352zM384 448H192C85.96 448 0 362 0 256C0 149.1 85.96 64 192 64H384C490 64 576 149.1 576 256C576 362 490 448 384 448zM384 128H192C121.3 128 64 185.3 64 256C64 326.7 121.3 384 192 384H384C454.7 384 512 326.7 512 256C512 185.3 454.7 128 384 128z"/></svg>
            <button class="button me-2">Donate Now</button>
            <li class="nav-item dropdown" style="list-style-type: none;">
              <a id="p1" class="nav-link dropdown-toggle" style="margin-bottom: 2px;" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Larasati N. <svg xmlns="http://www.w3.org/2000/svg" style="color: #D074D8;" width="15" height="15" fill="currentColor" viewBox="0 0 448 512"><path d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z"/></svg></a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Profil</a></li>
                <li><a class="dropdown-item" href="#">Log out</a></li>
              </ul>
            </li>
          </div>
        </div>
      </nav>
      <div class="container">
        <br> <br> <br>
        <div class="row justify-content">
        <div class="col-lg-9">
        <h1 id="p" style="margin-top: 75px; margin-left: 5px;" >FORUM</h1></div>
        <div class="col-lg-3">
        <div class="card-body d-grid gap-2 d-md-flex justify-content-md-end" style="margin-top: 75px;" >
          <button class="button6 me-5"><svg xmlns="http://www.w3.org/2000/svg" class="me-2" style="color: rgb(249, 249, 249);" width="23" height="23" fill="currentColor" viewBox="0 0 512 512"><path d="M0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256zM256 368C269.3 368 280 357.3 280 344V280H344C357.3 280 368 269.3 368 256C368 242.7 357.3 232 344 232H280V168C280 154.7 269.3 144 256 144C242.7 144 232 154.7 232 168V232H168C154.7 232 144 242.7 144 256C144 269.3 154.7 280 168 280H232V344C232 357.3 242.7 368 256 368z"/>
          </svg>Add Forum</button>
          </div>
        </div>
        </div>
      <div class="row justify-content">
      <div class="col-lg-9 mb-2" style="margin-top: 15px;">
          <div class="card-body" style="background-color: #ffffff; box-shadow: 1px 1px 4px 4px rgb(219, 217, 217); border-radius: 5px;">
            <div class="col" style="color: black;">
              <h5 class="card-title"><b>Mana yang lebih unggul pria atau wanita?</b></h5>
              <h7 class="card-subtitle mb-2 text-muted">Posted <b>3 Years</b> ago by</h7>
              <h7 class="card-subtitle mb-2" style="color: #BA68C8;"> Ario </h7> <br>
              <div class="card-text d-md-flex justify-content-md-end" style="color: red;">
                <span style="font-size: small; color: black;" class="card-subtitle mb-0 me-1">250</span>
                <span style="font-size: small; color: #BA68C8;" class="card-subtitle mb-0 me-4" >Reply </span>
                <span style="font-size: small; color: red;" class="card-subtitle mb-0 me-4" ><b>Report</b></span>
              </div>
            </div> 
          </div>
          <br> <br>
          <div class="card-body" style="background-color: #ffffff; box-shadow: 1px 1px 4px 4px rgb(219, 217, 217); border-radius: 5px;">
            <div class="col" style="color: black;">
              <h5 class="card-title"><b>Cara menghindari pelecehan seksual?</b></h5>
              <h7 class="card-subtitle mb-2 text-muted">Posted <b>1 month</b> ago by</h7>
              <h7 class="card-subtitle mb-2" style="color: #BA68C8;"> Yunita </h7> <br>
              <div class="card-text d-md-flex justify-content-md-end" style="color: red;">
                <span style="font-size: small; color: black;" class="card-subtitle mb-0 me-1">300</span>
                <span style="font-size: small; color: #BA68C8;" class="card-subtitle mb-0 me-4" >Reply </span>
                <span style="font-size: small; color: red;" class="card-subtitle mb-0 me-4" ><b>Report</b></span>
              </div>
            </div> 
          </div>
      </div>

      <div class="col-lg-3 mb-2" style="margin-top: 10px;">
        <div class="card h-100">
        <div class="card-body" style="background-color: #ffffff; box-shadow: 1px 1px 4px 4px rgb(219, 217, 217); border-radius: 5px;">
          <div class="col">
            <svg xmlns="http://www.w3.org/2000/svg" style="color: red;" width="30" height="30" fill="currentColor" viewBox="0 0 384 512"><path d="M384 319.1C384 425.9 297.9 512 192 512s-192-86.13-192-192c0-58.67 27.82-106.8 54.57-134.1C69.54 169.3 96 179.8 96 201.5v85.5c0 35.17 27.97 64.5 63.16 64.94C194.9 352.5 224 323.6 224 288c0-88-175.1-96.12-52.15-277.2c13.5-19.72 44.15-10.77 44.15 13.03C215.1 127 384 149.7 384 319.1z"/></svg>
            <h5 class="card-title" style="color: #BA68C8; text-align: center;"><b>Hot Forum</b></h5>
            <h5 class="card-title" style="margin-top: 10px;"><b>Kenapa masih banyak kekerasan pada wanita?</b></h5>
            <h7 class="card-subtitle mb-2 text-muted">Posted <b>20 minutes</b> ago by</h7>
            <h7 class="card-subtitle mb-2" style="color: #BA68C8;"> Laras </h7> <br>
            <div class="card-body d-grid gap-2 d-md-flex justify-content-center">
                <button class="button5">Baca Forum</button>
              </div>
          </div> 
        </div>
      </div>
    </div> 
    </div>
    <br>

    <div class="row justify-content" style="margin-bottom: 10px;">
      <div class="col-lg-9 mb-2" style="margin-top: 10px;">
          <div class="card-body" style="background-color: #ffffff; box-shadow: 1px 1px 4px 4px rgb(219, 217, 217); border-radius: 5px;">
            <div class="col" style="color: black;">
              <h5 class="card-title"><b>Kenapa masih banyak pernikahan paksa?</b></h5>
              <h7 class="card-subtitle mb-2 text-muted">Posted <b>3 days</b> ago by</h7>
              <h7 class="card-subtitle mb-2" style="color: #BA68C8;"> Chaula </h7> <br>
              <div class="card-text d-md-flex justify-content-md-end" style="color: red;">
                <span style="font-size: small; color: black;" class="card-subtitle mb-0 me-1">290</span>
                <span style="font-size: small; color: #BA68C8;" class="card-subtitle mb-0 me-4" >Reply </span>
                <span style="font-size: small; color: red;" class="card-subtitle mb-0 me-4" ><b>Report</b></span>
              </div>
            </div> 
          </div>
          <br> <br>
          <div class="card-body" style="background-color: #ffffff; box-shadow: 1px 1px 4px 4px rgb(219, 217, 217); border-radius: 5px;">
            <div class="col" style="color: black;">
              <h5 class="card-title"><b>Kenapa masih banyak kekerasan pada wanita?</b></h5>
              <h7 class="card-subtitle mb-2 text-muted">Posted <b>30 minutes</b> ago by</h7>
              <h7 class="card-subtitle mb-2" style="color: #BA68C8;"> Laras </h7> <br>
              <div class="card-text d-md-flex justify-content-md-end" style="color: red;">
                <span style="font-size: small; color: black;" class="card-subtitle mb-0 me-1">320</span>
                <span style="font-size: small; color: #BA68C8;" class="card-subtitle mb-0 me-4" >Reply </span>
                <span style="font-size: small; color: red;" class="card-subtitle mb-0 me-4" ><b>Report</b></span>
              </div>
            </div> 
          </div>
      </div>
      
      <div class="col-lg-3 mb-2" style="margin-top: 10px;">
        <div class="card h-100">
          <div class="card-body" style="background-color: #ffffff; box-shadow: 1px 1px 4px 4px rgb(219, 217, 217); border-radius: 5px;">
            <div class="col">
              <svg xmlns="http://www.w3.org/2000/svg" style="color: rgb(151, 190, 234);" width="30" height="30" fill="currentColor" viewBox="0 0 640 512"><path d="M416 176C416 78.8 322.9 0 208 0S0 78.8 0 176c0 39.57 15.62 75.96 41.67 105.4c-16.39 32.76-39.23 57.32-39.59 57.68c-2.1 2.205-2.67 5.475-1.441 8.354C1.9 350.3 4.602 352 7.66 352c38.35 0 70.76-11.12 95.74-24.04C134.2 343.1 169.8 352 208 352C322.9 352 416 273.2 416 176zM599.6 443.7C624.8 413.9 640 376.6 640 336C640 238.8 554 160 448 160c-.3145 0-.6191 .041-.9336 .043C447.5 165.3 448 170.6 448 176c0 98.62-79.68 181.2-186.1 202.5C282.7 455.1 357.1 512 448 512c33.69 0 65.32-8.008 92.85-21.98C565.2 502 596.1 512 632.3 512c3.059 0 5.76-1.725 7.02-4.605c1.229-2.879 .6582-6.148-1.441-8.354C637.6 498.7 615.9 475.3 599.6 443.7z"/></svg>
              <h5 class="card-title" style="color: #BA68C8; text-align: center; margin-top: 5px;"><b>Recommended Thread</b></h5>
              <h5 class="card-title" style="margin-top: 10px;"><b>Cara menghindari pelecehan seksual?</b></h5>
              <h7 class="card-subtitle mb-2 text-muted">Posted <b>1 month</b> ago by</h7>
              <h7 class="card-subtitle mb-2" style="color: #BA68C8;"> Yunita </h7> <br>
              <div class="card-body d-grid gap-2 d-md-flex justify-content-center">
                  <button class="button5">Baca Forum</button>
                </div>
                </div>
            </div> 
      </div>
    </div> 
    </div>
  </div>
           
          <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>