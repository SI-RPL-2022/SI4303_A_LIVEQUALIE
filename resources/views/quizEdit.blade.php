@extends("template/navbar")
@section("content")


    <h2 class="text-center" style="color: #D074D8; margin-top: 150px "> Yakin sudah aware dengan isu kesetaraan gender <br> di Indonesia ?</h2>

    <p class="text-center mt-3">Uji pemahamanmu dengan mengikuti quiz Livequaile</p>

    <div class="m-5">

            <form action="{{route('quiz.edit' , ['id'=>$question->id])}}" method="post">
                @csrf
                @method('post')
                <div class="modal-body">
                    <label for="" class="custom-control-label m-2">Pertanyaan</label>

                        <input type="text" name="title" class="form-control" value="{{$question->title}}" required>
                    </div>

                    <div class="input-group m-2 mt-4">
                        <label for="" class="custom-control-label m-2">Jawaban Benar</label>
                        <input type="text" name="benar" class="form-control" value="{{$question->answer[0]['choices']}}" required>
                    </div>

                    <div class="input-group m-2">
                        <label for="" class="custom-control-label m-2">Jawaban Salah 1</label>
                        <input type="text" name="salah1" class="form-control" value="{{$question->answer[1]['choices']}}" required>
                    </div>



                    <div class="input-group m-2">
                        <label for="" class="custom-control-label m-2">Jawaban Salah 2</label>
                        <input type="text" name="salah2" class="form-control"  @if(count($question->answer) == 3) value="{{$question->answer[2]['choices']}}" @endif  >
                    </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>

    </div>






@endsection
