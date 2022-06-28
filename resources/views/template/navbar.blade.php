<!doctype html>
<html lang="en">
  <head>
    <title>Livequalie | Learning Gender Equality in Fun Way!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/57d7c543f3.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/templatemo-video-catalog.css">
    @if (Cookie::get('theme')=='off')
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

        .button3 {
          background-color: #D074D8;
          border: 2px solid #D074D8;
          color: #ffffff;
          padding: 5px 18px;
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

        .tm-welcome-container {
              position: absolute;
              width: 100%;
              height: 100%;
              display: flex;
              justify-content: center;
              flex-direction: column;
              z-index: 999;
          }

          .tm-welcome-container-inner {
              margin-top: 100px;
          }

          .tm-welcome-text {
              font-size: 1.6rem;
          }

          #tm-video-container {
              max-height: 720px;
              overflow: hidden;
              background-color: #333;
          }

          #tm-video {
              width: 100%;
              height: auto;
          }

          .tm-thumbnail-container {
              overflow: hidden;
          }

          .form-check-input:checked{
            background-color: #BA68C8
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

        #forum{
          box-shadow: 1px 1px 4px 4px #dbd9d9;
        }

        #dashboard{
          color: white;
        }

        #profile{
          box-shadow: 1px 1px 4px 4px #dbd9d9;
          background-color: #FCDEC2;
        }

        .bold{ font-weight: bolder;}
        </style>
            
    @else   
      <style>
          .button {
            background-color: #212222;
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
            background-color: #212222;
            color: #BA68C8;
            padding: 5px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            margin: 2px 1px;
            cursor: pointer;
            border-radius: 25px;
          }
  
          .button3 {
            background-color: #D074D8;
            border: 2px solid #D074D8;
            color: #ffffff;
            padding: 5px 18px;
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
  
          .buttonSearch {
            background-color: #2c2d2d;
            border: 0px solid;
            padding: 5px 20px;
            /* text-align: center; */
            text-decoration: none;
            display: inline-block;
            margin: 2px 1px;
            cursor: pointer;
            border-radius: 25px;
          }
          
          .navdarkmode{
            background-color: #212222;
          }
  
          .darkmode{
            background-color: #36373a;
            color: #ffffff;
            /* border: none */
            /* border-color: #D074D8;
            border-width: 2pt; */
          }
  
          .button:hover {
            background-color: #2c2d2d;
          }

          .tm-welcome-container {
              position: absolute;
              width: 100%;
              height: 100%;
              display: flex;
              justify-content: center;
              flex-direction: column;
              z-index: 999;
          }

          .tm-welcome-container-inner {
              margin-top: 100px;
          }

          .tm-welcome-text {
              font-size: 1.6rem;
          }

          #tm-video-container {
              max-height: 720px;
              overflow: hidden;
              background-color: #333;
          }

          #tm-video {
              width: 100%;
              height: auto;
          }

          .tm-thumbnail-container {
              overflow: hidden;
          }
          
          body{
            background-color: #2c2d2d;
            color: #ffffff;
          }

          input[type=search]:focus{
          background-color: #2c2d2d;
          color:#ffffff;
          }

          .form-check-input:checked{
            background-color: #BA68C8
          }

          /* input[type=text]{
          background-color: #2c2d2d;
          color:#ffffff;
          border: #babfbf;
          }

          textarea[type=text]{
          background-color: #2c2d2d;
          color:#ffffff;
          border: #babfbf;
          } */
          
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
  
          #p3{
          color: #ffffff;
          font-size: 18px;
          font-weight:lighter;
          font-family: 'Arial Narrow', Arial, sans-serif;
          font-style: normal;}
  
          #p4{
          color: #ffffff;
          font-size: 38px;
          font-weight:bolder;
          font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
          font-style: normal;}
  
          .colorph::-webkit-input-placeholder{
          color: #D074D8;}
  
          .bold{ font-weight: bolder;}
          </style>
      
      <style>
          .post-body {
          /* background-color: #302d30; */
          height: 215px;
          position: relative;
          padding: 20px 15px 0;
          }
          
      </style>
    @endif 
  </head>
  <body>
    @if (Cookie::get('theme')=='off')
      <nav class="navbar navbar-expand-lg navbar-light bg-light shadow p-3 mb-5 bg-body rounded fixed-top" style="background-color : #F2F6F9;" >
    @else
      <nav class="navbar navbar-expand-lg navbar-dark navdarkmode p-3 mb-5 rounded fixed-top">
    @endif
      <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="/" style="color: #D074D8;"><img src="/logo.png" alt="" style="margin-left: 0.2cm;"><b>LIVEQUALIE</b></a>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a id="p1" class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a id="p1" class="nav-link" href="{{route('artikel.index')}}">Articles</a>
              </li>
              <li class="nav-item">
                <a id="p1" class="nav-link" href="{{route('video.index')}}">Videos</a>
              </li>
              <li class="nav-item">
                <a id="p1" class="nav-link" href="{{route('forum.index')}}">Forum</a>
              </li>
              <li class="nav-item">
                <a id="p1" class="nav-link" href="{{route('glosarium.index')}}">Glossary</a>
              </li>
              <li class="nav-item">
                <a id="p1" class="nav-link" href="{{route('aboutus')}}">About Us</a>
              </li>
              <li class="nav-item">
                <form action="{{route('search')}}" method="get">
                  @csrf
                  @method('get')
                  <div class="input-group rounded ms-3">
                    {{-- <input type="search" class="form-control rounded-pill" placeholder="Search" aria-label="Search" name="search" aria-describedby="search-addon" /> --}}
                    <input type="search" class="form-control rounded-pill buttonSearch colorph"  placeholder="Search" name="search" aria-label="Search" aria-describedby="search-addon" />
                    <button type="submit" style="border: none;background-color: transparent"><i class="fas fa-search button2" style="margin-top: 7px;"></i></button>
                  </div>
                </form>
              </li>
            </ul>
            {{-- <svg xmlns="http://www.w3.org/2000/svg" class="me-2" " width="30" height="30" fill="currentColor" viewBox="0 0 576 512"><path d="M192 352C138.1 352 96 309 96 256C96 202.1 138.1 160 192 160C245 160 288 202.1 288 256C288 309 245 352 192 352zM384 448H192C85.96 448 0 362 0 256C0 149.1 85.96 64 192 64H384C490 64 576 149.1 576 256C576 362 490 448 384 448zM384 128H192C121.3 128 64 185.3 64 256C64 326.7 121.3 384 192 384H384C454.7 384 512 326.7 512 256C512 185.3 454.7 128 384 128z"/></svg> --}}
            @if (Cookie::get('theme')=='off')
              <form action="{{route('cookie.post')}}" method="post">@csrf @method('post')<input type="text" name="v" value="on" hidden>
                <button type="submit" style="background: none; border: none">
                  <svg xmlns="http://www.w3.org/2000/svg" style="color: #D074D8; margin-right: 5px;" aria-hidden="true" role="img" width="45px" height="45px" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                    <g transform="rotate(180 12 12)">
                    <path fill="currentColor" d="M17 6H7c-3.31 0-6 2.69-6 6s2.69 6 6 6h10c3.31 0 6-2.69 6-6s-2.69-6-6-6m0 10H7c-2.21 0-4-1.79-4-4s1.79-4 4-4h10c2.21 0 4 1.79 4 4s-1.79 4-4 4m0-7c-1.66 0-3 1.34-3 3s1.34 3 3 3s3-1.34 3-3s-1.34-3-3-3Z"/>
                  </svg>
                </button>
              </form>
            @else
            <form action="{{route('cookie.post')}}" method="post">@csrf @method('post')<input type="text" name="v" value="off" hidden>
              <button type="submit" style="background: none; border: none">
                <svg xmlns="http://www.w3.org/2000/svg" style="color: #D074D8; margin-right: 5px;" aria-hidden="true" role="img" width="45px" height="45px" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                  <path fill="currentColor" d="M17 6H7c-3.31 0-6 2.69-6 6s2.69 6 6 6h10c3.31 0 6-2.69 6-6s-2.69-6-6-6m0 10H7c-2.21 0-4-1.79-4-4s1.79-4 4-4h10c2.21 0 4 1.79 4 4s-1.79 4-4 4m0-7c-1.66 0-3 1.34-3 3s1.34 3 3 3s3-1.34 3-3s-1.34-3-3-3Z"/>
                </svg>
              </button>
            </form>
            @endif
            <svg xmlns="http://www.w3.org/2000/svg" style="color: #D074D8; margin-right: 16px;" aria-hidden="true" role="img" width="20px" height="20px" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M9.37 5.51A7.35 7.35 0 0 0 9.1 7.5c0 4.08 3.32 7.4 7.4 7.4c.68 0 1.35-.09 1.99-.27A7.014 7.014 0 0 1 12 19c-3.86 0-7-3.14-7-7c0-2.93 1.81-5.45 4.37-6.49zM12 3a9 9 0 1 0 9 9c0-.46-.04-.92-.1-1.36a5.389 5.389 0 0 1-4.4 2.26a5.403 5.403 0 0 1-3.14-9.8c-.44-.06-.9-.1-1.36-.1z"/></svg>
            @if(isset($data["status"]) && $data['status'] == "logged-in")
              @if($data["0"]["username"] != 'admin')
                <a href="/donation"><button class="button me-2">Donate Now</button></a>
              @endif
              <li class="nav-item dropdown" style="list-style-type: none;">
                <a id="p1" class="nav-link dropdown-toggle" style="margin-bottom: 2px;" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><?= explode(" ",$data["0"]["name"])[0]?>  <svg xmlns="http://www.w3.org/2000/svg" style="color: #D074D8;" width="15" height="15" fill="currentColor" viewBox="0 0 448 512"><path d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z"/></svg></a>
                <ul class="dropdown-menu">
                  @if($data["0"]["username"] != 'admin')
                    <li><a class="dropdown-item" href="{{route('profile.index')}}">Profil</a></li>
                  @endif
                  <li><a class="dropdown-item" href="/logout">Log out</a></li>
                </ul>
              </li>
            @else
              <a href="/donation"><button class="button me-2">Donate Now</button></a>
              <a href="/login"><button class="button3 me-2"> Register | Login </button></a>
            @endif
          </div>
      </div>
    </nav>

@yield('content')

    <footer class="bg-light text-center text-lg-start mt-5 mb-0">
      <div class="text-center p-3" style="background-color: #D177D7; color: white">
          Made by A-Team of SI4303<br>©2022
    </footer>
  </body>
</html>
