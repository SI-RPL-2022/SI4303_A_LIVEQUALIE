@extends("template/navbar")
@section("content")


        <h2 class="text-center" style="color: #D074D8; margin-top: 150px "> Yakin sudah aware dengan isu kesetaraan gender <br> di Indonesia ?</h2>
        <p class="text-center mt-3">Uji pemahamanmu dengan mengikuti quiz Livequaile</p>

        <div class="container my-5 mx-auto">
            <form action="{{route('quiz.result')}}" method="post">
                @csrf
                @method('post')
                    @foreach($question as $x)
                        <div class="card w-75 darkmode mx-auto p-3 mt-3">
                            <h5 class="p-3">{{$x->title}}</h5>

                            @foreach($x->answer->shuffle() as $y)

                                <div class="form-check mt-3 mx-3">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault{{$x->id}}" value="{{$y->is_correct}}" id="">
                                    <label class="form-check-label" for="flexRadioDefault1">{{$y->choices}}</label>
                                </div>

                            @endforeach

                            @if(isset($data["status"]) && $data['status'] == "logged-in")
                                @if($data["0"]["username"] == 'admin')

                                    <div class="container">
                                        <div class="d-flex align-content-end justify-content-end">
                                            <a href="{{route('quiz.edit' , ['id'=>$x->id])}}"><button type="button" class="btn m-1" style="width: 100px; background-color: #D074D9 ; color: white">Edit</button></a>
                                            <a href="{{route('quiz.delete' , ['id'=>$x->id])}}"><button type="button" class="btn m-1" style="width: 100px;  color:#D074D8; border-color: #D074D8;">Delete</button></a>
                                        </div>
                                    </div>

                                @endif
                            @endif

                        </div>

                    @endforeach
                    @if(isset($data["status"]) && $data['status'] == "logged-in")
                        @if($data["0"]["username"] == 'admin')
                            <div class="d-flex justify-content-center mt-3">
                                <button type="button" class="btn w-75 m-2" data-bs-toggle="modal" data-bs-target="#modaladd" style=" color:#D074D8; border-color: #D074D8;">Add Question</button>
                            </div>
                        @endif
                    @endif 
                    <div class="d-flex justify-content-center my-3">
                        <button type="submit" class="btn w-75 m-2" style="background-color: #D074D9 ; color: white">Submit</button>
                    </div>
            </form>
        </div>

    <!-- Modal -->
    <div class="modal fade" id="modaladd" tabindex="-1" aria-labelledby="modaladd" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content darkmode">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Pertanyaan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{route('quiz.add')}}" method="post">
                    @csrf
                    @method('post')
                    <div class="modal-body">
                        <div class="row input-group m-2">
                            <label for="title" class="col-3 custom-control-label m-2">Pertanyaan</label>
                            <input type="text" name="title" class="form-control" required>
                        </div>

                        <div class="row input-group m-2 mt-4">
                            <label for="benar" class="col-3 custom-control-label m-2">Jawaban Benar</label>
                            <input type="text" name="benar" class="form-control" required>
                        </div>

                        <div class="row input-group m-2">
                            <label for="salah1" class="col-3 custom-control-label m-2">Jawaban Salah 1</label>
                            <input type="text" name="salah1" class="form-control" required>
                        </div>

                        <div class="row input-group m-2">
                            <label for="salah2" class="col-3 custom-control-label m-2">Jawaban Salah 2</label>
                            <input type="text" name="salah2" class="form-control" >
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


@endsection
