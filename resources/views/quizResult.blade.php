@extends("template/navbar")
@section("content")

    <img  class="d-block mx-auto w-25" style="margin-top: 150px" src="{{asset('/quizresult.png')}}" alt="">
    <h2 class="text-center" style="color: #D074D8;">Yay! Kamu berhasil melewati Quiz Livequalie</h2>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    <div class="m-5 mt-4">

       <h3 class="text-center" style="color: #D074D8; ">Score</h3>
        <h1 class="display-3 text-center bold" style="color: #D074D8; "> {{$total}}</h1>

    </div>






@endsection
