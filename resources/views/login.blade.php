<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
        <title>Login | Livequalie</title>
    </head>
    @if (Cookie::get('theme')=='off')
        <style>
            @import url('https://fonts.googleapis.com/css?family=Inter');
            body{
                font-family: "Inter";
                background-color: #F2F6F9;
            }

            .card-body{
                background-color: #FCDEC2; 
                color: #37474F;
                box-shadow: 1px 1px 4px 4px lightgrey;
            }

            
        </style>
    @else
        <style>
            @import url('https://fonts.googleapis.com/css?family=Inter');
            body{
                font-family: "Inter";
                background-color: #2c2d2d;
            }

            .navdarkmode{
            background-color: #212222;
            }

            .carddarkmode {
            background-color: #36373a;
            color: #D074D8;
            border: 0px solid;
            padding: 5px 20px;
            text-decoration: none;
            /* display: inline-block; */
            margin: 2px 1px;
            cursor: pointer;
            }

            .colorph::-webkit-input-placeholder{
            color: #babfbf;}

            
        </style>
    @endif
    <body>
        <!-- NAVBAR Regis&Login -->
        @if (Cookie::get('theme')=='off')
            <nav class="navbar navbar-expand-lg navbar-light bg-light shadow p-3 mb-5 bg-body rounded fixed-top">
        @else
            <nav class="navbar navbar-expand-lg navbar-light navbar-dark navdarkmode fixed-top">
        @endif
            <div class="container-fluid">
              <a class="navbar-brand" href="/" style="color: #D074D8;"><img src="/logo.png" alt="" style="margin-left: 0.2cm;"><b>LIVEQUALIE</b></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            </div>
        </nav>
        <form action="/login" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row justify-content-center" style="margin-top: 10rem;">
                <div class="col-lg-5 col-lg-offset-5 ">
                    <div class="card h-100 carddarkmode">
                        <div class="card-body" style="border-radius: 10px;">
                            <div class="col text-center" style="">
                                <h4><b>Login</b></h4>
                            </div>
                            <div class="form-group">
                                <p style="margin-top:5px;">Username</p>
                                <input required type="text" name="username" class="form-control form-control-sm" placeholder="Username" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                                <p style="margin-top:5px;">Password</p>
                                <input required type="password" name="password" class="form-control form-control-sm" placeholder="Password" aria-describedby="helpId">
                            </div>
                            {{-- <div class="form-group">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" style="margin-left: 1px;">
                                <label class="form-check-label" for="flexCheckDefault" name="remember" style="padding-left: 20px; ">Remember Me</label>
                                <a href="" style="padding-left: 190px; text-decoration: none;">Forgot Password?</a>
                            </div> --}}
                            <div class="form-group  text-center" style="margin-top: 30px">
                                <button type="submit" name="button" class="btn" style="background-color: #D074D8; color: white;">Login</button>
                            </div>
                            <div class="container login">
                                <center><p style="">Don't have an account? <a href="/register">Register</a>.</p></center>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </form>
    </body>


</html>