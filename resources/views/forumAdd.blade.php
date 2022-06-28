@extends("template/navbar")
@section("content")
  <div class="container pt-5">
    <h1 id="p" style="margin-top: 85px; margin-left: 5px;">ADD DISCUSSION</h1>
  </div>
  <form action="" method="post" enctype="multipart/form-data">
      @csrf
      @method('post')
    <div class="row justify-content-center">
      <div class="col-lg-10 col-lg-offset-10 mt-4 mb-2">
        <div class="card h-100 darkmode">
          <div id="forum" class="card-body" style="border-radius: 5px;">
            <div class="col">
              <div class="form-group">
                <input required type="text" name="judul" class="form-control form-control-sm" placeholder="Berikan Judul Menarik di sini..." aria-describedby="helpId">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-10 col-lg-offset-10" style="margin-top: 10px; height: 300px;">
        <div class="card h-100 darkmode">
          <div id="forum" class="card-body" style="border-radius: 5px;">
            <div class="col">
              <div class="form-group">
                <textarea required type="text" name="konten" class="form-control form-control-sm" placeholder="Tuliskan konten artikel di sini..." aria-describedby="helpId" style="height: 250px;"></textarea>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <button type="submit" class="btn rounded-pill mt-4 mb-5" style="background-color:#D074D8; color:#ffffff; margin-left: 46rem;width: 80px;text-align: center;">Post</button>
  </form>

  <div class="vertical-center"></div>
@endsection
