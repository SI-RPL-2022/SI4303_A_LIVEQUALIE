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
        <a class="navbar-brand" href="" style="color: #D074D8;"><img src="/logo.png" alt="" style="margin-left: 0.2cm;"><b>LIVEQUALIE</b></a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a id="p1" class="nav-link active" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a id="p2" class="nav-link" href="/artikel">Articles</a>
            </li>
            <li class="nav-item">
              <a id="p1" class="nav-link" href="#">Videos</a>
            </li>
            <li class="nav-item">
              <a id="p1" class="nav-link bold" href="/forum">Forum</a>
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
      
    <section id="editView">
      <div class="container-fluid p-5 rounded" style="min-height:85vh;background-color:white;">
        <div class="row">
              <div class="col m-1" style="padding: 0%; background-color: #ffffff" >
                  <h1 id="p" style="margin-top: 90px; margin-left: 5px;">EDIT ARTICLES</h1>
              </div>
              <div class="col m-1" style="padding: 0%; background-color: #ffffff" >
                <button type="button" class="btn btn-md rounded-pill" data-bs-toggle="add" data-bs-target="#addarticle" style="background-color:#ffffff; color:#E92626; margin-left: 65rem; margin-top: 10px; margin-bottom: 15px; font-weight: 700; font-size: small;"> 
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                  </svg>
                  Delete Article
                </button>
              </div>
        </div>
          
        <form>
          <div class="form-group w-100">
            <div class="row">
              <div class=" card col m-1" style="padding: 0%; background-color: #ffffff" >
                <div class="card-body">
                  <p class="card-text" style="height: 30px;overflow-y:hidden; color: #D074D8">Judul artikel</p>
                  <input class="form-control" type="text" placeholder="Masukkan judul artikel di sini...">
                </div>
              </div>

              <div class="card col m-1" style="padding: 0%; background-color: #ffffff;" >
                <div class="card-body">
                  <p class="card-text" style="height: 30px;overflow-y:hidden;color: #D074D8">Deskripsi singkat </p>
                  <input class="form-control" type="text" placeholder="Masukkan deskripsi singkat artikel di sini..." >
                </div>
              </div>
            </div>

            <div class="row">
              <div class="card col m-1" style="padding: 0%; background-color: #ffffff;" >
                <div class="card-body">
                  <p class="card-text" style="height: 20px;overflow-y:hidden; color: #D074D8">Masukkan Gambar </p>
                  <div class="p-2">
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                  </div>
                </div>
              </div>

              <div class="card col m-1" style="padding: 0%; background-color: #ffffff;" >
                <div class="card-body">
                  <p class="card-text" style="height: 30px;overflow-y:hidden; color: #D074D8">Isi Artikel </p>
                  <textarea class="form-control" type="text" placeholder="Masukkan isi artikel di sini..." ></textarea>
                </div>
              </div>
            </div>
            <button type="button" class="btn btn-md rounded-pill" data-bs-toggle="add" data-bs-target="#addarticle" style="background-color:#ffffff; color:#D074D8; border-color: #D074D8; margin-left: 63rem; margin-top: 1rem;"> Cancel</button>
            <button type="button" class="btn btn-md rounded-pill" data-bs-toggle="add" data-bs-target="#addarticle" style="background-color:#D074D8; color:#ffffff; margin-top: 1rem; width: 70px;"> Post</button>
            
          </div>
                
        </form>
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