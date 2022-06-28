@extends("template/navbar")
@section("content")
      <div class="container pt-5">
        <div class="row justify-content">
          <div class="col-lg-9">
            <h1 id="p" style="margin-top: 85px; margin-left: 5px;" >FORUM</h1>
          </div>
          <div class="col-lg-3">
            <div class="card-body d-grid gap-2 d-md-flex justify-content-md-end" style="margin-top: 75px;" >
              <a type="button" class="button6 me-5" href="{{route('forum.add')}}">
                <svg xmlns="http://www.w3.org/2000/svg" class="me-2" style="color: rgb(249, 249, 249);" width="23" height="23" fill="currentColor" viewBox="0 0 512 512"><path d="M0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256zM256 368C269.3 368 280 357.3 280 344V280H344C357.3 280 368 269.3 368 256C368 242.7 357.3 232 344 232H280V168C280 154.7 269.3 144 256 144C242.7 144 232 154.7 232 168V232H168C154.7 232 144 242.7 144 256C144 269.3 154.7 280 168 280H232V344C232 357.3 242.7 368 256 368z"/></svg>
                Add Forum
              </a>
            </div>
          </div>
        </div>
        <div class="row justify-content">
          <div class="col-lg-9 mb-4" style="margin-top: 15px;">
          @foreach($forum as $x)
            <?php $names = $x->user->name ?> 
            <?php $count=$comment->where('forum_id', $x->id)->count() ?>
            <div id="forum" class="card-body mb-3 darkmode" style="border-radius: 5px;">
              <div class="col">
                <h5 class="card-title"><b>{{$x->title}}</b></h5>
                <h7 class="card-subtitle mb-2 text-muted">Posted by</h7>
                <h7 class="card-subtitle mb-2" style="color: #BA68C8;"> {{$names}} </h7> <br>
                <div class="card-text d-md-flex justify-content-md-end">
                  <span style="font-size: small; color:" class="card-subtitle mb-0 me-1">{{$count}}</span>
                  <span style="font-size: small; color: #BA68C8;" class="card-subtitle mb-0 me-4" ><a href="/forum/{{$x->id}}" style="color: #BA68C8; text-decoration: none">Reply</a></span>
                  @if(isset($data["status"]) && $data['status'] == "logged-in")
                    @if($data["0"]["username"] == 'admin')
                      <span style="font-size: small; color: red;" class="card-subtitle mb-0 me-4" ><b><a href="/forum/delete/{{$x->id}}" style="color: red; text-decoration: none">Delete</a></b></span>
                    @endif
                  @endif
                </div>
              </div>
            </div>
            @endforeach
          </div>

          <div class="col-lg-3 mb-2" style="margin-top: 10px;">
            <div id="forum" class="card-body mb-4 darkmode" style="border-radius: 5px;">
              <div class="col">
                <svg xmlns="http://www.w3.org/2000/svg" style="color: red;" width="30" height="30" fill="currentColor" viewBox="0 0 384 512"><path d="M384 319.1C384 425.9 297.9 512 192 512s-192-86.13-192-192c0-58.67 27.82-106.8 54.57-134.1C69.54 169.3 96 179.8 96 201.5v85.5c0 35.17 27.97 64.5 63.16 64.94C194.9 352.5 224 323.6 224 288c0-88-175.1-96.12-52.15-277.2c13.5-19.72 44.15-10.77 44.15 13.03C215.1 127 384 149.7 384 319.1z"/></svg>
                <h5 class="card-title" style="color: #BA68C8; text-align: center;"><b>Hot Forum</b></h5>
                <h5 class="card-title" style="margin-top: 10px;"><b>{{$hot->title}}</b></h5>
                <h7 class="card-subtitle mb-2 text-muted">Posted by</h7>
                <h7 class="card-subtitle mb-2" style="color: #BA68C8;"> {{$hot->user->name}} </h7> <br>
                <div class="card-body d-grid gap-2 d-md-flex justify-content-center">
                  <a href="/forum/{{$hot->id}}"><button class="btn btn-outline-purple" style=" color:#D074D8; border-color: #D074D8;">Baca Forum</button></a>
                </div>
              </div>
            </div>

            <div id="forum" class="card-body mb-5 darkmode" style="border-radius: 5px;">
              <div class="col">
                <svg xmlns="http://www.w3.org/2000/svg" style="color: rgb(151, 190, 234);" width="30" height="30" fill="currentColor" viewBox="0 0 640 512"><path d="M416 176C416 78.8 322.9 0 208 0S0 78.8 0 176c0 39.57 15.62 75.96 41.67 105.4c-16.39 32.76-39.23 57.32-39.59 57.68c-2.1 2.205-2.67 5.475-1.441 8.354C1.9 350.3 4.602 352 7.66 352c38.35 0 70.76-11.12 95.74-24.04C134.2 343.1 169.8 352 208 352C322.9 352 416 273.2 416 176zM599.6 443.7C624.8 413.9 640 376.6 640 336C640 238.8 554 160 448 160c-.3145 0-.6191 .041-.9336 .043C447.5 165.3 448 170.6 448 176c0 98.62-79.68 181.2-186.1 202.5C282.7 455.1 357.1 512 448 512c33.69 0 65.32-8.008 92.85-21.98C565.2 502 596.1 512 632.3 512c3.059 0 5.76-1.725 7.02-4.605c1.229-2.879 .6582-6.148-1.441-8.354C637.6 498.7 615.9 475.3 599.6 443.7z"/></svg>
                <h5 class="card-title" style="color: #BA68C8; text-align: center; margin-top: 5px;"><b>Recommended Thread</b></h5>
                <h5 class="card-title" style="margin-top: 10px;"><b>Cara menghindari pelecehan seksual?</b></h5>
                <h7 class="card-subtitle mb-2 text-muted">Posted <b>1 month</b> ago by</h7>
                <h7 class="card-subtitle mb-2" style="color: #BA68C8;"> Yunita </h7> <br>
                <div class="card-body d-grid gap-2 d-md-flex justify-content-center">
                  <button class="btn btn-outline-purple w-50" style=" color:#D074D8; border-color: #D074D8;">Baca Forum</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection
