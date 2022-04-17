<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://kit.fontawesome.com/57d7c543f3.js" crossorigin="anonymous"></script>
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

    .body {
      background-color: #a8afb5;
    }
  </style>
  <style type="text/css">
    #p {
      color: #D074D8;
      font-size: 25px;
      font-weight: bolder;
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
      font-style: normal;
    }


    #p1 {
      color: #BA68C8;
      font-size: 16px;
      font-weight: lighter;
      font-family: Arial, Helvetica, sans-serif;
      font-style: normal;
    }

    #p2 {
      color: #BA68C8;
      font-size: 16px;
      font-weight: bolder;
      text-decoration: underline;
      font-family: Arial, Helvetica, sans-serif;
      font-style: normal;
    }

    .bold {
      font-weight: bolder;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light shadow p-3 mb-5 bg-body rounded fixed-top" style="background-color : #F2F6F9;">
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
            <a id="p1" class="nav-link" href="#">Articles</a>
          </li>
          <li class="nav-item">
            <a id="p1" class="nav-link" href="#">Videos</a>
          </li>
          <li class="nav-item">
            <a id="p2" class="nav-link bold" href="#">Forum</a>
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
        <svg xmlns="http://www.w3.org/2000/svg" class="me-2" style="color: #D074D8;" width="30" height="30" fill="currentColor" viewBox="0 0 576 512">
          <path d="M192 352C138.1 352 96 309 96 256C96 202.1 138.1 160 192 160C245 160 288 202.1 288 256C288 309 245 352 192 352zM384 448H192C85.96 448 0 362 0 256C0 149.1 85.96 64 192 64H384C490 64 576 149.1 576 256C576 362 490 448 384 448zM384 128H192C121.3 128 64 185.3 64 256C64 326.7 121.3 384 192 384H384C454.7 384 512 326.7 512 256C512 185.3 454.7 128 384 128z" />
        </svg>
        <button class="button me-2">Donate Now</button>
        <li class="nav-item dropdown" style="list-style-type: none;">
          <a id="p1" class="nav-link dropdown-toggle" style="margin-bottom: 2px;" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Larasati N. <svg xmlns="http://www.w3.org/2000/svg" style="color: #D074D8;" width="15" height="15" fill="currentColor" viewBox="0 0 448 512">
              <path d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z" />
            </svg></a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Profil</a></li>
            <li><a class="dropdown-item" href="#">Log out</a></li>
          </ul>
        </li>
      </div>
    </div>
  </nav>
  <div class="container p-5">
    <br> <br> <br>
    <h1 id="p" style="margin-top: 75px; margin-left: 30px;">ADD DISCUSSION</h1>
  </div>
  <form action="/thread" method="post" enctype="multipart/form-data">
    <div class="row justify-content-center">
      <div class="col-lg-10 col-lg-offset-10" style="margin-top: 10px; margin-bottom: 20px;">
        <div class="card h-100">
          <div class="card-body" style="background-color: #ffffff; box-shadow: 1px 1px 4px 4px rgb(219, 217, 217); border-radius: 5px;">
            <div class="col">
              <div class="form-group">
                <input required type="text" name="here" class="form-control form-control-sm" placeholder="Berikan Judul Menarik di sini..." aria-describedby="helpId">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>

  <form action="/thread" method="post" enctype="multipart/form-data">
    <div class="row justify-content-center">
      <div class="col-lg-10 col-lg-offset-10" style="margin-top: 10px; height: 300px;">
        <div class="card h-100">
          <div class="card-body" style="background-color: #ffffff; box-shadow: 1px 1px 4px 4px rgb(219, 217, 217); border-radius: 5px;">
            <div class="col">
              <div class="form-group">
                <textarea required type="text" name="here" class="form-control form-control-sm" placeholder="Tuliskan konten artikel di sini..." aria-describedby="helpId" style="height: 300px;"></textarea>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>

  <div class="vertical-center"></div>
  <button type="submit" class="btn rounded-pill" data-bs-toggle="add" data-bs-target="#addarticle" style="background-color:#D074D8; color:#ffffff; margin-left: 46rem; margin-top: 4rem; width: 80px;text-align: center;">
    Post</button>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>