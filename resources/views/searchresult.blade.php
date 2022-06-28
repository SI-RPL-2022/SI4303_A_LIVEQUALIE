@extends("template/navbar")
@section("content")

    <div style="margin-top:130px; margin-left:50px;">
      <h1 id="p" class="p-3">Search Result for "{{$value}}"</h1>
    </div>
    <div class="card w-75 darkmode" style="margin-left: 50px;">
      <h5 class="card-header" style=" color:#D074D8">Articles</h5>
      @foreach($article as $x)
        <div class="card-body mb-3">
          <a href="{{route('artikel.detail' , ['id'=>$x['id']])}}" style="text-decoration: none">
            <img src="{{asset('/artikelimage/'.$x->picture)}}" lt="" style="object-fit:cover; width: 400px ; height: 200px; margin-bottom:10px">
            <h5 id="p" class="card-title">{{$x->title}}</h5>
          </a>
          <h7 class="card-text">{{$x->description}}</h7>
        </div>
      @endforeach
    </div>
    <br>
    <div class="card w-75 darkmode" style="margin-left: 50px;">
      <h5 class="card-header" style=" color:#D074D8">Videos</h5>
      @foreach($video as $x)
        <div class="card-body mb-3">
          <a href="{{route('detailvideo' , ['id'=>$x['id']])}}" style="text-decoration: none; color: unset;">
            <img src="{{asset('/thumbnail/'.$x->thumbnail)}}"lt="" style="object-fit:cover; width: 400px ; height: 200px; ">
            <h5 id="p" class="card-title">{{$x->title}}</h5>
            <p class="card-text">{{$x->description}}</p>
          </a>
        </div>
      @endforeach
    </div>
    <br>
    <div class="card w-75 darkmode" style="margin-left: 50px;">
      <h5 class="card-header" style=" color:#D074D8">Forum</h5>
      @foreach($forum as $x)
        <div class="card-body mb-3">
          <a href="{{route('forum.index' , ['id'=>$x['id']])}}" style="text-decoration: none">
          <h5 id="p"  class="card-title">{{$x->title}}</h5>
          </a>
          <p class="card-text">Posted By <b>{{$x->user['name']}}</b></p>
        </div>
      @endforeach
    </div>
    <br>
    <div class="card w-75 darkmode" style="margin-left: 50px; margin-bottom: 30px;">
      <h5 class="card-header" style=" color:#D074D8">Glossary</h5>
      @foreach($glos as $x)
        <div class="card-body">
          <div class="card m-2" style="width: 18rem; background-color: #DBA4E5">
            <div class="card-body">
              <h3 class="card-title text-center" style="color: #9F62A9">{{$x->title}}</h3>
              <p class="card-text text-center fw-bold text-white">{{$x->baca}}</p>
              <p class="text-center text-white mb-5">{{$x->definition}}</p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
@endsection
