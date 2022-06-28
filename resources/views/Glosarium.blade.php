@extends("template/navbar")
@section("content")

    <img  class="d-block mx-auto rounded w-50" style="margin-top: 140px" src="{{asset('/glossaryheader.jpg')}}" alt="">
    <p class="text-center mt-3">Halo! Ini merupakan laman glossary yang dapat menambah pengetahuan kosa katamu <br> dalam memahami pentingnya kesadaran akan kesetaraan gender. <br>Selamat mengeksplor!</p>

    @if(isset($data["status"]) && $data['status'] == "logged-in")
        @if($data["0"]["username"] == 'admin')

            <div class="container">
                <div class="d-flex align-content-end justify-content-end">
                    <button class="btn" data-bs-toggle="modal" data-bs-target="#modaladd" style="background-color: #D074D9 ; color: white">Add Dictionary</button>
                </div>
            </div>
        @endif
    @endif

    <!-- Modal -->
    <div class="modal fade" id="modaladd" tabindex="-1" aria-labelledby="modaladd" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content darkmode">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Kosa Kata</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="form-horizontal" action="" method="post">
                    @csrf
                    @method('post')
                    <div class="modal-body">
                        <div class="row input-group m-2">
                            <label for="title" class="col-2 custom-control-label m-2">Title</label>
                            <input type="text" name="title" class="col form-control" required>
                        </div>

                        <div class="row input-group m-2">
                            <label for="baca" class="col-2 custom-control-label m-2">Bacaan</label>
                            <input type="text" name="baca" class="form-control" required>
                        </div>

                        <div class="row input-group m-2">
                            <label for="defenition" class="col-2 custom-control-label m-2">Arti</label>
                            <input type="text" name="defenition" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row row-cols-4 row-cols-md-4">

            @foreach($glossary as $x)
            <div class="modal fade" id="modaladd{{$x->id}}" tabindex="-1" aria-labelledby="modaladd" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content darkmode">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Kosa Kata</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form class="form-horizontal" action="{{route('glosarium.update' , ['id'=>$x->id])}}" method="post">
                            @csrf
                            @method('post')
                            <div class="modal-body">
                                <div class="row input-group m-2">
                                    <label for="title" class="col-2 custom-control-label m-2">Title</label>
                                    <input type="text" name="title" class="form-control" required value="{{$x->title}}">
                                </div>
        
                                <div class="row input-group m-2">
                                    <label for="baca" class="col-2 custom-control-label m-2">Bacaan</label>
                                    <input type="text" name="baca" class="form-control" required value="{{$x->baca}}">
                                </div>
        
                                <div class="row input-group m-2">
                                    <label for="defenition" class="col-2 custom-control-label m-2">Arti</label>
                                    <input type="text" name="defenition" class="form-control" required value="{{$x->definition}}">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col my-3">
                <div class="card h-100" style="background-color: #DBA4E5">
                    <div class="card-body">
                        <h3 class="card-title text-center" style="color: #9F62A9">{{$x->title}}</h3>
                        <p class="card-text text-center text-white">[ <i>{{$x->baca}}</i> ]</p>
                        <p class="text-center text-white"> {{$x->definition}}</p>
                    </div>
                        @if(isset($data["status"]) && $data['status'] == "logged-in")
                            @if($data["0"]["username"] == 'admin')
                                <div class="card-footer bg-transparent border-0">
                                    <div class="mb-3 d-flex justify-content-center">
                                        <button class="btn bg-white m-1" style="width: 100px;color: #9F62A9" data-bs-toggle="modal" data-bs-target="#modaladd{{$x->id}}">Edit</button>
                                        <a href="{{route('glosarium.delete' , ['id'=>$x->id])}}" class="btn bg-white m-1" style="width: 100px;color: #9F62A9">Delete</a>
                                    </div>
                                </div>
                            @endif
                        @else
                        @endif                    
                </div>
            </div>
            @endforeach
        </div>
    </div>
        
@endsection
