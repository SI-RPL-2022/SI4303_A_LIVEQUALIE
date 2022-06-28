@extends('template/navbar')
@section('content')

      <section id="userView">
        <div class="container-fluid p-5" style="min-height:85vh;">
          <div class="w-100" style="margin: auto;">
            <div class="row" style="margin-top:5rem;">
              <h5 id="p" class="text p-3">Semua Artikel</h5>
              
              @foreach($artikel as $x)
                <div class="col-3 px-2 mb-3" style="padding: 0%" >
                  <div class="card h-100 bg-transparent border-0">
                  <img src="{{asset('artikelimage/'.$x->picture)}}" class="card-img-top w-100" alt="image" style="height:12rem; object-fit: cover">
                  <div class="card-body">
                    <h5 class="card-text"><a style="">{{$x->title}}</a></h5>
                    <p class="card-text" style="height: 130px;overflow-y:hidden;">{{$x->description}}</p>
                  </div>
                  <div class="card-footer bg-transparent border-0">
                    @if(isset($data["status"]) && $data['status'] == "logged-in")
                      @if($data["0"]["username"] == 'admin')
                      <a href="{{route('artikel.edit' , ['id'=>$x->id])}}" class="btn btn-outline-purple w-25 float-right" style=" color:#D074D8; border-color: #D074D8;"> Edit </a>
                      @endif
                    @endif
                    <a class="btn btn-outline-purple w-50 float-right" style=" color:#D074D8; border-color: #D074D8;" href="{{route('artikel.detail' , ['id'=>$x->id])}}" role="button"> Baca Artikel </a>
                  </div>
                </div>
                </div>
              @endforeach
              
            </div>
          </div>
        </div>
      </section>
      
@endsection
