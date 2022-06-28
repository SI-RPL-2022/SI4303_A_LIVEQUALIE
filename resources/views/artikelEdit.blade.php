@extends("template/navbar")
@section("content")

    <section id="editView">
      <div class="container-fluid p-5 rounded" style="min-height:85vh;">
        <div class="row mt-5">
              <div class="col m-1" style="padding: 0%; " >
                  <h1 id="p" style="margin-top: 90px; margin-left: 5px;">EDIT ARTICLES</h1>
              </div>
              <div class="col m-1" style="padding: 0%; " >
                <a href="{{route('artikel.delete' , ['id'=>$artikel->id])}}" class="btn btn-md rounded-pill" data-bs-toggle="add" data-bs-target="#addarticle" style="color:#E92626; margin-left: 65rem; margin-top: 10px; margin-bottom: 15px; font-weight: 700; font-size: small;">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                  </svg>
                  Delete Article
                </a>
              </div>
        </div>

        <form action="{{route('artikel.edit' , ['id'=>$artikel->id])}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('post')
          <div class="form-group w-100">
            <div class="row">
              <div class=" card col m-1 darkmode" style="padding: 0%; " >
                <div class="card-body">
                  <p class="card-text" style="height: 30px;overflow-y:hidden; color: #D074D8">Judul artikel</p>
                  <input class="form-control" name="title" type="text" placeholder="Masukkan judul artikel di sini..." value="{{$artikel->title}}">
                </div>
              </div>

              <div class="card col m-1 darkmode" style="padding: 0%; ;" >
                <div class="card-body">
                  <p class="card-text" style="height: 30px;overflow-y:hidden;color: #D074D8">Deskripsi singkat </p>
                  <input class="form-control" name="description" type="text" placeholder="Masukkan deskripsi singkat artikel di sini..." value="{{$artikel->description}}">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="card col m-1 darkmode" style="padding: 0%; ;" >
                <div class="card-body">
                  <p class="card-text" style="height: 20px;overflow-y:hidden; color: #D074D8">Masukkan Gambar </p>
                  <div class="p-2">
                    <input type="file" class="form-control-file" name="picture" id="exampleFormControlFile1">
                  </div>
                </div>
              </div>

              <div class="card col m-1 darkmode" style="padding: 0%; ;" >
                <div class="card-body">
                  <p class="card-text" style="height: 30px;overflow-y:hidden; color: #D074D8">Isi Artikel </p>
                  <textarea class="form-control" name="content" type="text" placeholder="Masukkan isi artikel di sini..." >{{$artikel->content}}</textarea>
                </div>
              </div>
            </div>
            <a href="{{route('artikel.index')}}"><button type="button" class="btn btn-md rounded-pill" style="color:#D074D8; border-color: #D074D8; margin-left: 63rem; margin-top: 1rem;"> Cancel </button></a>
            <button type="submit" class="btn btn-md rounded-pill" style="background-color:#D074D8; color:#ffffff; margin-top: 1rem;"> Update </button>

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
   
@endsection
