@extends('template.navbar')
@section('content')
    <div class="tm-page-wrap mx-auto" style="margin-top: 6rem;">
        <div class="position-relative mb-5">
            <div class="tm-welcome-container text-center text-white">
                <div class="tm-welcome-container-inner">
                    <p class="tm-welcome-text mb-1 text-white">Nikmati informasi seputar kesetaraan gender pada laman video ini.</p>
                    <a href="#content" class="btn btn-light tm-btn-animate tm-btn-cta tm-icon-down">
                        <span>Discover</span>
                    </a>
                </div>
            </div>

            <div id="tm-video-container">
                <video autoplay muted loop id="tm-video">
                        <source src="/videoheader.mp4" type="video/mp4">
                </video>
            </div>
        </div>

        @if(isset($data["status"]) && $data['status'] == "logged-in")
            @if($data["0"]["username"] == 'admin')
        
                <!-- Modal -->
                <div class="modal fade" id="modaladd" tabindex="-1" aria-labelledby="modaladd" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content darkmode">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Video</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('post')
                                <div class="modal-body px-4">
                                    <div class="row input-group m-2">
                                        <label for="title" class="col-2 custom-control-label m-2">Title</label>
                                        <input type="text" name="title" class="form-control" required>
                                    </div>

                                    <div class="row input-group m-2">
                                        <label for="description" class="col-2 custom-control-label m-2">Deskripsi</label>
                                        <textarea type="text" name="description" class="form-control" required> </textarea>
                                    </div>

                                    <div class="row custom-file mb-3">
                                        <label for="filevideo">Masukan File Video</label>
                                        <input type="file" class="col-2 custom-file-input form-control" id="validatedCustomFile" name="filevideo" required>
                                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                                    </div>

                                    <div class="row custom-file mb-3">
                                        <label for="thumbnail">Thumbnail</label>
                                        <input type="file" class="col-2 custom-file-input form-control" id="validatedCustomFile" name="thumbnail" required>
                                        <div class="invalid-feedback">Example invalid custom file feedback</div>
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

                <div class="mx-5 mb-4">
                    <div class="d-flex align-content-end justify-content-end">
                        <button class="btn" data-bs-toggle="modal" data-bs-target="#modaladd" style="background-color: #D074D9 ; color: white">Add Video</button>
                    </div>
                </div>
            @endif
        @endif

        <div id="content" class="container-fluid">
            <div class="mx-auto tm-content-container">
                <main>
                    <div class="row tm-catalog-item-list px-4">
                        @foreach($video as $x)
                        <div class="modal fade" id="modaledit{{$x->id}}" tabindex="-1" aria-labelledby="modaladd" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content darkmode">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Video</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="{{route('video.edit' ,[ 'id'=>$x['id']])}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('post')
                                        <div class="modal-body px-4">
                                            <div class="row input-group m-2">
                                                <label for="title" class="col-2 custom-control-label m-2">Title</label>
                                                <input type="text" name="title" class="col form-control" value="{{$x['title']}}" required>
                                            </div>

                                            <div class="row input-group m-2">
                                                <label for="description" class="col-2 custom-control-label m-2" >Deskripsi</label>
                                                <textarea type="text" name="description" class="col form-control" required> {{$x['description']}} </textarea>
                                            </div>

                                            <div class="row custom-file mb-3">
                                                <label for="filevideo">Masukan File Video (Optional)</label>
                                                <input type="file" class="col-2 custom-file-input form-control" id="validatedCustomFile" name="filevideo" >
                                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                                            </div>

                                            <div class="row custom-file mb-3">
                                                <label for="thumbnail">Masukan Thumbnail (Optional)</label>
                                                <input type="file" class="col-2 custom-file-input form-control" id="validatedCustomFile" name="thumbnail" >
                                                <div class="invalid-feedback">Example invalid custom file feedback</div>
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

                        <div class="col-4 tm-catalog-item mb-3">
                            <a href="{{route('video.detail' , ['id'=>$x['id']])}}" style="text-decoration: none">
                            <div class="position-relative tm-thumbnail-container">
                                <img src="{{asset('/thumbnail/'.$x->thumbnail)}}" alt="Image" class="" style="height: 300px ; width: 500px; overflow: hidden; object-fit: cover">
                            </div>
                            <div class="p-3 tm-bg-gray tm-catalog-item-description">
                                <h3 id="p" class="tm-text-primary mb-2 tm-catalog-item-title" >{{$x->title}}</h3></a>
                                <p class="tm-catalog-item-text">
                                    {{$x->description}}
                                </p>

                                <?php if(isset($data["status"]) && $data['status'] == "logged-in") { ?>
                                    <?php if($data["0"]["username"] == 'admin'){ ?>
                                    <div class="d-flex justify-content-center">
                                        <button class="btn w-25 m-2" data-bs-toggle="modal" data-bs-target="#modaledit{{$x->id}}" style="background-color: #D074D9 ; color: white">Edit</button>
                                        <a class="btn w-25 m-2 btn-outline-danger " href="{{route('video.delete' , ['id'=>$x['id']])}}" >Delete</a>
                                    </div>
                                    <?php }} ?>
                            </div>

                        </div>
                        @endforeach
                        
                </main>

            </div>
        </div>

    </div>
    
@endsection