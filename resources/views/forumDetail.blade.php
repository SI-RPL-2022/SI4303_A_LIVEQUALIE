@extends("template/navbar")
@section("content")

      <div class="container pt-5">
        <h1 id="p" style="margin-top: 85px; margin-left: 5px;" >FORUM</h1>
      </div>
      <form action="" method="" enctype="multipart/form-data">
        <div class="row justify-content-center">
          <div class="col-lg-10 col-lg-offset-10 mt-4 mb-2">
            <div class="card h-100 darkmode">
              <div id="forum" class="card-body" style="border-radius: 5px;">
                <div class="col" style="">
                  <h5 class="card-title"><b>{{$forum->title}}</b></h5>
                  <h7 class="card-subtitle mb-1 text-muted">Posted by</h7>
                  <h7 class="card-subtitle mb-1" style="color: #BA68C8;">{{$forum->user->name}}</h7> <br>
                  <hr size="4px" style="color: black;">
                  <span style="font-size: small;" class="card-subtitle mb-0">{{$comment->count()}}</span>
                  <span style="font-size: small; color: #BA68C8;" class="card-subtitle" >Reply </span>
                  
                  @foreach($comment as $c)
                  <?php $names = $c->userc->name ?> 
                  <div class="form-control darkmode me-2 my-2" style="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" class="me-2"  style="margin-top: 8px;" viewBox="0 0 512 512"><path d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 128c39.77 0 72 32.24 72 72S295.8 272 256 272c-39.76 0-72-32.24-72-72S216.2 128 256 128zM256 448c-52.93 0-100.9-21.53-135.7-56.29C136.5 349.9 176.5 320 224 320h64c47.54 0 87.54 29.88 103.7 71.71C356.9 426.5 308.9 448 256 448z"/></svg>
                    <h7 style="margin-top: 20px;" >{{$c->reply}}</h7>
                    <p class="card-text text-muted text-end"><span style="font-size: smaller;">Replied by <strong>{{$names}}</strong></span></p>
                  </div>
                  @endforeach

                </div>
              </div> 
            </div>
          </div>
        </div>
      </form>
      @if(isset($data["status"]) && $data['status'] == "logged-in")
        <form action="" method="post" enctype="multipart/form-data">
          @csrf
          <div class="row justify-content-center mb-5">
            <div class="col-lg-10 col-lg-offset-10" style="margin-top: 10px;">
              <div class="card h-100 darkmode">
                <div id="forum" class="card-body" style="border-radius: 0px;">
                  <div class="form-group" > 
                    <p class="card-text"> Add a reply</p>
                    <input required type="text" name="reply" class="form-control form-control-sm mb-4" placeholder="Reply" aria-describedby="helpId">
                    <button type="submit" class="button1">Reply</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      @else
      <div class="row justify-content-center mb-5">
        <div class="col-lg-10 col-lg-offset-10" style="margin-top: 10px;">
          <div class="card h-100 darkmode">
            <div id="forum" class="card-body" style="border-radius: 0px;">
              <div class="form-group" > 
                <p class="card-text"> <a href="{{route('login.index')}}">Login</a> to join the thread</p>
                <input required type="text" name="reply" class="form-control form-control-sm mb-4" placeholder="Reply" aria-describedby="helpId" disabled>
                <button type="" class="button1">Reply</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endif

@endsection