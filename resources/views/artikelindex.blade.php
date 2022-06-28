@extends("template/navbar")
@section("content")
      <section id="userView">
        <div class="container-fluid p-5" style="min-height:85vh;">
          <div class="w-100" style="margin: auto;">

          @if(isset($data["status"]) && $data['status'] == "logged-in")
            @if($data["0"]["username"] == 'admin')
              <div class="row">
                <div class="container rounded col-12 text-center py-5" style="">
                  <a href="{{route('artikel.create')}}" type="button" class="button6 me-5" data-bs-toggle="add" data-bs-target="#addarticle" style="background-color:#D074D8; color:#ffffff; margin-left: 55rem; margin-top: 2rem;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                      <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                    </svg>
                    Add Article
                  </a>
                </div>
              </div>
              <div class="row">
            @else
            <div class="row" style="margin-top: 6rem;">
            @endif
          @else
            <div class="row" style="margin-top: 6rem;">
          @endif

              <div class="col-8 px-2" style="padding: 0%;" >
                <div class="d-flex flex-wrap">
                @foreach($artikel->take(-2)->reverse() as $x)
                  <div class="col-6 px-4">
                    <div class="card h-100 bg-transparent border-0">
                    <img src="{{asset('artikelimage/'.$x->picture)}}" class="card-img-top w-100" alt="image" style="height:14rem; object-fit: cover;">
                      <div class="card-body">
                        <h5 class="card-text">{{$x->title}}</h5>
                        <p class="card-text" style="">{{$x->description}}</p>
                      </div>
                      <div class="card-footer bg-transparent border-0">
                        @if(isset($data["status"]) && $data['status'] == "logged-in")
                          @if($data["0"]["username"] == 'admin')
                          <a href="{{route('artikel.edit' , ['id'=>$x->id])}}" class="btn btn-outline-purple w-25 float-right" style=" color:#D074D8; border-color: #D074D8;"> Edit </a>
                          <a class="btn btn-outline-purple w-50 float-right" style=" color:#D074D8; border-color: #D074D8;" href="{{route('artikel.detail' , ['id'=>$x->id])}}" role="button"> Baca Artikel </a>
                          @else
                          <a class="btn btn-outline-purple w-50 float-right" style=" color:#D074D8; border-color: #D074D8;" href="{{route('artikel.detail' , ['id'=>$x->id])}}" role="button"> Baca Artikel </a>
                          @endif
                        @else
                        <a class="btn btn-outline-purple w-50 float-right" style=" color:#D074D8; border-color: #D074D8;" href="{{route('artikel.detail' , ['id'=>$x->id])}}" role="button"> Baca Artikel </a>
                        @endif
                      </div>
                    </div>
                  </div>
                @endforeach
                </div>
              </div>

              <div class="col-4 px-4" style="padding: 0%;" >
                @foreach($artikel->random(3)->shuffle() as $x)
                <div class="card bg-transparent border-0">
                  <div class="card-body">
                    <h5 class="card-text"> {{$x->title}} </h5>
                    <p class="card-subtitle" style="">{{$x->description}}</p>
                    <a class="card-text" href="{{route('artikel.detail' , ['id'=>$x->id])}}" style="color: #D074D8;">Baca dalam 1 menit</a><br>
                  </div>
                    @if(isset($data["status"]) && $data['status'] == "logged-in")
                      @if($data["0"]["username"] == 'admin')
                        <div class="card-footer bg-transparent border-0">
                          <a href="{{route('artikel.edit' , ['id'=>$x->id])}}" class="btn btn-outline-purple float-right w-50" style="color:#D074D8; border-color: #D074D8;"> Edit </a>
                        {{-- <a href="artikel/1" class="btn btn-outline-purple w-50 float-right" style=" color:#D074D8; border-color: #D074D8;"> Edit </a> --}}
                        </div>
                      @endif
                    @endif
                </div>
                  @endforeach

                    {{-- <h5 class="card-text">Ketidakadilan Gender & Kekerasan Terhadap Perempuan Vol.II</h5>
                    <p class="card-text" style="height:110px;overflow-y:hidden;">“ Setiap pembedaan, pengucilan, atau pembatasan yang dibuat atas dasar jenis kelamin <br/>
                    @if(isset($data["status"]) && $data['status'] == "logged-in")
                      @if($data["0"]["username"] == 'admin')
                      <a href="artikel/2" class="btn btn-outline-purple w-50 float-right" style=" color:#D074D8; border-color: #D074D8;"> Edit </a>
                      @else
                      <a href="artikel/2" style="color: #D074D8;">Baca dalam 1 menit</a>
                      @endif
                    @else
                    <a href="artikel/2" style="color: #D074D8;">Baca dalam 1 menit</a>
                    @endif
                  <br>

                  <h5 class="card-text">Indonesia Tegaskan Komitmen Dukung Kesetaraan Gender</h5>
                  <p class="card-text" style="height:100px;overflow-y:hidden;">Pemerintah Indonesia menegaskan komitmen mendukung kesetaraan gender <br/>
                  @if(isset($data["status"]) && $data['status'] == "logged-in")
                    @if($data["0"]["username"] == 'admin')
                      <a href="artikel/3" class="btn btn-outline-purple w-50 float-right" style=" color:#D074D8; border-color: #D074D8;"> Edit </a>
                    @else
                      <a href="artikel/3" style="color: #D074D8;">Baca dalam 1 menit</a>
                    @endif
                  @else
                  <a href="artikel/3" style="color: #D074D8;">Baca dalam 1 menit</a>
                  @endif --}}
                </div>
              </div>
            </div>

            <div class="row mt-3">
              <h5 class="text p-3">Lebih Banyak Lagi...</h5>
              <a class="btn" style=" color:#D074D8; border-color: #D074D8; width: 10rem; height: 2rem; font-size: 14px; margin-left: -200px; margin-top: 15px;" href="{{route('artikel.all')}}" role="button">Lihat Semua Artikel</a>
              
              @foreach($artikel->take(4) as $x)
                <div class="col-3 px-2" style="padding: 0%" >
                  <div class="card h-100 bg-transparent border-0">
                    <img src="{{asset('artikelimage/'.$x->picture)}}" class="card-img-top w-100" alt="image" style="height:12rem; object-fit:cover">
                    <div class="card-body">
                      <h5 class="card-text"><a style="">{{$x->title}}</a></h5>
                      <p class="card-text" style="height: 130px;overflow-y:hidden;">{{$x->description}}</p>
                    </div>
                    <div class="card-footer bg-transparent border-0">
                      @if(isset($data["status"]) && $data['status'] == "logged-in")
                        @if($data["0"]["username"] == 'admin')
                        <a href="{{route('artikel.edit' , ['id'=>$x->id])}}" class="btn btn-outline-purple w-25 float-right" style=" color:#D074D8; border-color: #D074D8;"> Edit </a>
                        <a class="btn btn-outline-purple w-50 float-right" style=" color:#D074D8; border-color: #D074D8;" href="{{route('artikel.detail' , ['id'=>$x->id])}}" role="button"> Baca Artikel </a>
                        @else
                        <a class="btn btn-outline-purple w-50 float-right" style=" color:#D074D8; border-color: #D074D8;" href="{{route('artikel.detail' , ['id'=>$x->id])}}" role="button"> Baca Artikel </a>
                        @endif
                      @else
                      <a class="btn btn-outline-purple w-50 float-right" style=" color:#D074D8; border-color: #D074D8;" href="{{route('artikel.detail' , ['id'=>$x->id])}}" role="button"> Baca Artikel </a>
                    @endif
                    </div>
                  </div>
                </div>
              @endforeach

            </div>
          </div>
        </div>
      </section>

@endsection
