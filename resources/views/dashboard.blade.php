@extends("template/navbar")
@section("content")

      <section id="Dashboard" class="Dashboard py-5" style="margin-top: 6rem; margin-bottom: -2rem; background-color: #D177D7;">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-8">
              <img src="/bgdashboard.png" width="800px" height="" alt="bgdashboard">
            </div>
            <div class="col-4 my-auto">
                <h1 class="display-4" style="color:#ffffff; font-weight: 600;">LIVEQUALIE</h1>
                <p style="color:#ffffff; font-size: 20px;">Learning Gender Equality in Fun Way!</p>
            </div>
          </div>
        </div>
      </section>
      
      <section style="margin-top: 6rem;">
        <div class="container">
          <div class="row">
            <div class="col-sm-4" >
              <div id="forum" class="card darkmode" style="">
                <a href="{{route('forum.index')}}" style="text-decoration: none; color:unset">
                  <div class="card-body darkmode">
                    <center>
                      <h4 class="card-title" style="color: #D177D7;">Forum</h4>
                      <h1 class="display-4 p-3 pb-0">{{$forum}} threads</h1>
                      <p class="h5 p-3 pt-0" style="color: #D177D7;">{{$comment}} replies</p>
                    </center>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-sm-4" >
                <div id="forum" class="card darkmode" style="">
                  <a href="{{route('artikel.index')}}" style="text-decoration: none; color:unset">
                    <div class="card-body">
                      <center>
                          <h4 class="card-title" style="color: #D177D7;">Articles</h4>
                          <h1 class="display-4 p-3 pb-0" >{{$article}} posts</h1>
                          <p class="h5 p-3 pt-0" style="color: #D177D7;">{{$view}} views</p>
                      </center>
                      </div>
                    </a>
                </div>
              </div>
              <div class="col-sm-4" >
                <div id="forum" class="card darkmode" style="">
                  <a href="{{route('donation')}}" style="text-decoration: none; color:unset">
                    <div class="card-body">
                      <center>
                          <h4 class="card-title" style="color: #D177D7;">Donation</h4>
                          <h1 class="display-4 p-3 pb-0" >Rp {{number_format($total,0)}}</h1>
                          <p class="h5 p-3 pt-0" style="color: #D177D7;">{{$donation}} donors</p>
                      </center>
                      </div>
                    </a>
                </div>
              </div>
          </div>
          <div class="row mt-4">
            <div class="col-sm-4" >
              <div id="forum" class="card darkmode" style="">
                <a href="{{route('video.index')}}" style="text-decoration: none; color:unset">
                  <div class="card-body">
                    <center>
                        <h4 class="card-title" style="color: #D177D7;">Videos</h4>
                        <h1 class="display-4 p-3">{{$video}} posts</h1>
                    </center>
                    </div>
                  </a> 
              </div>
            </div>
            <div class="col-sm-4" >
              <div id="forum" class="card darkmode" style="">
                <a href="{{route('glosarium.index')}}" style="text-decoration: none; color:unset">
                  <div class="card-body">
                    <center>
                        <h4 class="card-title" style="color: #D177D7;">Glossary</h4>
                        <h1 class="display-4 p-3">{{$glos}} words</h1>
                    </center>
                    </div>
                  </a>
              </div>
            </div>
            <div class="col-sm-4" >
              <div id="forum" class="card darkmode" style="">
                <a href="{{route('quiz.index')}}" style="text-decoration: none; color:unset">
                  <div class="card-body">
                    <center>
                        <h4 class="card-title" style="color: #D177D7;">Quiz</h4>
                        <h1 class="display-4 p-3">{{$question}} questions</h1>
                    </center>
                    </div>
                  </a>  
              </div>
            </div>
          </div>
        </div>  
      </section>

@endsection