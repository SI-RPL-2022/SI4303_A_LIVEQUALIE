<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/57d7c543f3.js" crossorigin="anonymous"></script>
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

        .button3 {
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
        font-size: 25px;
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
            <a class="navbar-brand" href="" style="color: #D074D8;"><img src="logo.png" alt="" style="margin-left: 0.2cm;"><b>LIVEQUALIE</b></a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a id="p1" class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a id="p2" class="nav-link" href="#">Articles</a>
              </li>
              <li class="nav-item">
                <a id="p1" class="nav-link" href="#">Videos</a>
              </li>
              <li class="nav-item">
                <a id="p1" class="nav-link bold" href="#">Forum</a>
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
                    <i class="fas fa-search button3" style="margin-top: 7px;"></i>
                  </span>
                </div>
              </li>
            </ul>
            <svg xmlns="http://www.w3.org/2000/svg" class="me-2" style="color: #D074D8;" width="30" height="30" fill="currentColor" viewBox="0 0 576 512"><path d="M192 352C138.1 352 96 309 96 256C96 202.1 138.1 160 192 160C245 160 288 202.1 288 256C288 309 245 352 192 352zM384 448H192C85.96 448 0 362 0 256C0 149.1 85.96 64 192 64H384C490 64 576 149.1 576 256C576 362 490 448 384 448zM384 128H192C121.3 128 64 185.3 64 256C64 326.7 121.3 384 192 384H384C454.7 384 512 326.7 512 256C512 185.3 454.7 128 384 128z"/></svg>
            <li class="nav-item dropdown" style="list-style-type: none;">
              <a id="p1" class="nav-link dropdown-toggle" style="margin-bottom: 2px; " data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Admin <svg xmlns="http://www.w3.org/2000/svg" style="color: #D074D8;" width="15" height="15" fill="currentColor" viewBox="0 0 448 512"><path d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z"/></svg></a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Log out</a></li>
              </ul>
            </li>
          </div>
        </div>
      </nav>

      
      <section id="adminView">
        <div class="container-fluid p-5" style="min-height:85vh;background-color:white;">
          <div class="w-100" style="margin: auto;">
            <div class="row">
              <div class="container rounded col-12 text-center" style="padding:5% 5%;background-color:white;">
                <button type="button" class="btn w-20 rounded-pill" data-bs-toggle="add" data-bs-target="#addarticle" style="background-color:#D074D8; color:#ffffff; margin-left: 55rem; margin-top: 2rem;"> 
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                  </svg>
                  Add Article</button>
              </div>
            </div>
            <div class="row ">
              <div class="col-4 px-2" style="padding: 0%;" >
                <img src="1.jpeg" class="card-img-top w-110" alt="image" style="height:14rem;">
                <div class="card-body">
                  <h5 class="card-text">Perempuan Dan Teriakannya Seputar Kesetaraan Gender</h5>
                  <p class="card-text" style="height: 130px;overflow-y:hidden;">
                    Jargon “Kesetaraan Gender” sering digemakan oleh para aktivis sosial, kaum perempuan hingga para politikus Indonesia. </p>
                    <button type="submit" class="btn btn-outline-purple w-50 float-right" data-bs-toggle="modal" data-bs-target="#editartikel" style="background-color:#ffffff; color:#D074D8; border-color: #D074D8;"> Edit </button>
                  </div>
              </div>

              <div class="col-4 px-2" style="padding: 0%;">
                <img src="2.jpeg" class="card-img-top w-100" alt="image" style="height:14rem;">
                <div class="card-body " >
                  <h5 class="card-text">Ini Pentingnya Kesetaraan Gender Untuk Sebuah Negara</h5>
                  <p class="card-text" style="height: 130px;overflow-y:hidden;">
                    "Kesetaraan gender tidak hanya penting dari sisi moralitas, keadilan, tetapi juga sangat penting dan relevan dari sisi ekonomi," tuturnya.</p>
                    <button type="submit" class="btn btn-outline-purple w-50 float-right" data-bs-toggle="modal" data-bs-target="#editartikel" style="background-color:#ffffff; color:#D074D8; border-color: #D074D8;"> Edit </button>
                </div>
              </div>
    
              <div class="col-4 px-4" style="padding: 0%;" >
                <div class="card-body ">
                  <h5 class="card-text"> Ketika Kesetaraan Gender Harus Diperdebatkan</h5>
                  <p class="card-text" style="height:110px;overflow-y:hidden;">
                    Saat ini,di DPR sedang gencar-gencarnya dibahas RUU Kesetaraan dan Keadilan Gender.
                    <br>
                    <button type="submit" class="btn btn-outline-purple w-50 float-right" data-bs-toggle="modal" data-bs-target="#editartikel" style="background-color:#ffffff; color:#D074D8; border-color: #D074D8;"> Edit </button>
                  
                    <h5 class="card-text">Ketidakadilan Gender & Kekerasan Terhadap Perempuan Vol.II</h5>
                  <p class="card-text" style="height:110px;overflow-y:hidden;">
                    “ Setiap pembedaan, pengucilan, atau pembatasan yang dibuat atas dasar jenis kelamin
                    <br>
                    <button type="submit" class="btn btn-outline-purple w-50 float-right" data-bs-toggle="modal" data-bs-target="#editartikel" style="background-color:#ffffff; color:#D074D8; border-color: #D074D8;"> Edit </button>

                  <h5 class="card-text">Indonesia Tegaskan Komitmen Dukung Kesetaraan Gender</h5>
                  <p class="card-text" style="height:100px;overflow-y:hidden;">
                    Pemerintah Indonesia menegaskan komitmen mendukung kesetaraan gender 
                    <button type="submit" class="btn btn-outline-purple w-50 float-right" data-bs-toggle="modal" data-bs-target="#editartikel" style="background-color:#ffffff; color:#D074D8; border-color: #D074D8;"> Edit </button>
                </div>
              </div>
            </div>

            <div class="row">
              <h5 class="text p-3"> Ketika Kesetaraan Gender Harus Diperdebatkan</h5>
              <div class="col-3 px-2" style="padding: 0%" >
                <img src="3.jpeg" class="card-img-top w-100" alt="image" style="height:12rem;">
                <div class="card-body">
                  <h5 class="card-text">Perempuan Dan Teriakannya Seputar Kesetaraan Gender</h5>
                  <p class="card-text" style="height: 130px;overflow-y:hidden;">
                    Jargon “Kesetaraan Gender” sering digemakan oleh para aktivis sosial, kaum perempuan hingga para politikus Indonesia. </p>
                    <button type="submit" class="btn w-50 float-right" data-bs-toggle="modal" data-bs-target="#editartikel" style="background-color:#ffffff; color:#D074D8; border-color: #D074D8;"> Edit </button>
                  </div>
                </div>

              <div class="col-3 px-2" style="padding: 0%" >
                <img src="4.jpeg" class="card-img-top w-100" alt="image" style="height:12rem;">
                <div class="card-body">
                  <h5 class="card-text">Perempuan Dan Teriakannya Seputar Kesetaraan Gender</h5>
                  <p class="card-text" style="height: 130px;overflow-y:hidden;">
                    Jargon “Kesetaraan Gender” sering digemakan oleh para aktivis sosial, kaum perempuan hingga para politikus Indonesia. </p>
                    <button type="submit" class="btn w-50 float-right" data-bs-toggle="modal" data-bs-target="#editartikel" style="background-color:#ffffff; color:#D074D8; border-color: #D074D8;"> Edit </button>
                  </div>
                </div>

              <div class="col-3 px-2" style="padding: 0%" >
                <img src="5.jpeg" class="card-img-top w-100" alt="image" style="height:12rem;">
                <div class="card-body">
                  <h5 class="card-text">Perempuan Dan Teriakannya Seputar Kesetaraan Gender</h5>
                  <p class="card-text" style="height: 130px;overflow-y:hidden;">
                      Jargon “Kesetaraan Gender” sering digemakan oleh para aktivis sosial, kaum perempuan hingga para politikus Indonesia. </p>
                      <button type="submit" class="btn w-50 float-right" data-bs-toggle="modal" data-bs-target="#editartikel" style="background-color:#ffffff; color:#D074D8; border-color: #D074D8;"> Edit </button>
                    </div>
                  </div>

                  <div class="col-3 px-2" style="padding: 0%" >
                    <img src="6.jpeg" class="card-img-top w-100" alt="image" style="height:12rem;">
                    <div class="card-body">
                      <h5 class="card-text">Perempuan Dan Teriakannya Seputar Kesetaraan Gender</h5>
                      <p class="card-text" style="height: 130px;overflow-y:hidden;">
                          Jargon “Kesetaraan Gender” sering digemakan oleh para aktivis sosial, kaum perempuan hingga para politikus Indonesia. </p>
                          <button type="submit" class="btn w-50 float-right" data-bs-toggle="modal" data-bs-target="#editartikel" style="background-color:#ffffff; color:#D074D8; border-color: #D074D8;"> Edit </button>
                        </div>
                      </div>
                         
            </div>
          </div>
        </div>
      </section>

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