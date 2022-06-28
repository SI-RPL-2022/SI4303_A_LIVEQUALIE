@extends("template/navbar")
@section("content")

    <section id="editView">
      <div class="container-fluid p-5 rounded" style="min-height:85vh;">
        <h1 id="p" style="margin-top: 85px; margin-left: 5px;" >ADD ARTICLES</h1>
        <form action="{{route('artikel.create')}}" method="post" enctype="multipart/form-data">
          @method('post')
          @csrf
          <div class="form-group w-100">
            <div class="row">
              <div class=" card col m-1 darkmode" style="padding: 0%;" >
                <div class="card-body">
                  <p class="card-text" style="height: 30px;overflow-y:hidden; color: #D074D8">Judul artikel</p>
                  <input class="form-control" name="title" type="text" placeholder="Masukkan judul artikel di sini...">
                </div>
              </div>

              <div class="card col m-1 darkmode" style="padding: 0%;" >
                <div class="card-body">
                  <p class="card-text" style="height: 30px;overflow-y:hidden;color: #D074D8">Deskripsi singkat</p>
                  <input class="form-control" name="description" type="text" placeholder="Masukkan deskripsi singkat artikel di sini..." >
                </div>
              </div>
            </div>

            <div class="row">
              <div class="card col m-1 darkmode" style="padding: 0%;" >
                <div class="card-body">
                  <p class="card-text" style="height: 20px;overflow-y:hidden; color: #D074D8">Masukkan Gambar</p>
                    <div class="p-2">
                      <input type="file" name="picture" class="custom-file-input form-control" id="validatedCustomFile"required>
                      {{-- <input type="file" name="picture" class="form-control-file" id="exampleFormControlFile1"> --}}
                    </div>
                </div>
              </div>

              <div class="card col m-1 darkmode" style="padding: 0%;" >
                <div class="card-body">
                  <p class="card-text" style="height: 30px;overflow-y:hidden; color: #D074D8">Isi Artikel</p>
                  <textarea class="form-control" type="text" name="content" placeholder="Masukkan isi artikel di sini..." ></textarea>
                </div>
              </div>
            </div>
            <a href="{{route('artikel.index')}}"><button type="button" class="btn btn-md rounded-pill" style="color:#D074D8; border-color: #D074D8; margin-left: 63rem; margin-top: 1rem;">Cancel</button></a>
            <button type="submit" class="btn btn-md rounded-pill" data-bs-toggle="add" data-bs-target="#addarticle" style="background-color:#D074D8; color:#ffffff; margin-top: 1rem; width: 70px;">Post</button>
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
