@extends("template/navbar")
@section("content")
    <section id="Dashboard" class="Dashboard py-5" style="margin-top: 6rem; background-color: #D177D7;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <img src="/bgdashboard.png" width="800px" height="" alt="bgdashboard">
                </div>
                <div class="col-lg-4 my-auto">
                    <h1 class="display-4" style="color:#ffffff; font-weight: 600;">LIVEQUALIE</h1>
                    <p style="color:#ffffff; font-size: 20px;">Learning Gender Equality in Fun Way!</p>
                </div>
            </div>
        </div>
    </section>

    <div class="m-5">
        <div class="row">
            <div class="col-lg-8">
                <div id="forum" class="container rounded darkmode my-4">
                    <h3 class="p-4">Articles</h3>
                        <div class="row">
                            @foreach($article as $x)
                            <div class="col-lg">
                                    <a href="{{route('artikel.detail' , ['id'=>$x->id])}}" style="text-decoration: none; color: unset;">
                                    <div class="card bg-transparent border-0 darkmode mb-3">
                                        <img src="{{asset('/artikelimage/'.$x->picture)}}"  class="card-image-top" alt="" style="width: 220px; height: 145px; object-fit: cover">
                                        <div class="card-body">
                                            <h6 class="card-text">{{$x->title}}</h6>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                        <div class="col-lg d-flex justify-content-center align-items-center">
                            <a href="{{route('artikel.index')}}" style="text-decoration: none; color: unset;">
                                <div class="d-flex justify-content-center align-items-center">
                                    @if (Cookie::get('theme')=='off')
                                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="56px" height="56px" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32">
                                            <path fill="" d="m16 8l-1.43 1.393L20.15 15H8v2h12.15l-5.58 5.573L16 24l8-8l-8-8z"/>
                                            <path fill="" d="M16 30a14 14 0 1 1 14-14a14.016 14.016 0 0 1-14 14Zm0-26a12 12 0 1 0 12 12A12.014 12.014 0 0 0 16 4Z"/>
                                        </svg>
                                    @else
                                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="56px" height="56px" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32">
                                            <path fill="white" d="m16 8l-1.43 1.393L20.15 15H8v2h12.15l-5.58 5.573L16 24l8-8l-8-8z"/>
                                            <path fill="white" d="M16 30a14 14 0 1 1 14-14a14.016 14.016 0 0 1-14 14Zm0-26a12 12 0 1 0 12 12A12.014 12.014 0 0 0 16 4Z"/>
                                        </svg>
                                    @endif
                                </div>
                                <h4 class="mt-1">See All</h4>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="my-4">
                    <div class="row">
                        @foreach($video as $x)
                        <div class="col-lg">
                            <div id="forum" class="card h-100 darkmode" style="">
                                <img src="{{asset('/thumbnail/'.$x->thumbnail)}}" class="card-img-top h-100" style="object-fit: cover" alt="Card image">
                                <div class="d-flex justify-content-between p-3 align-items-center">
                                    <h4 class="tm-text-primary mb-3 card-title" ><a href="{{route('video.detail' , ['id'=>$x['id']])}}" style="text-decoration: none; color: unset;">{{$x->title}}</a></h4>
                                        <a href="{{route('video.detail' , ['id'=>$x['id']])}}">
                                            <svg width="50px" height="50px" viewBox="0 0 11 14" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <!-- Generator: Sketch 52.5 (67469) - http://www.bohemiancoding.com/sketch -->
                                                <title>Play</title>
                                                <desc>Created with Sketch.</desc>
                                                <g id="Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g id="Rounded" transform="translate(-753.000000, -955.000000)">
                                                        <g id="AV" transform="translate(100.000000, 852.000000)">
                                                            <g id="-Round-/-AV-/-play_arrow" transform="translate(646.000000, 98.000000)">
                                                                <g>
                                                                    <rect id="Rectangle-Copy-50" x="0" y="0" width="24" height="24"></rect>
                                                                    <path d="M7,6.82 L7,17.18 C7,17.97 7.87,18.45 8.54,18.02 L16.68,12.84 C17.3,12.45 17.3,11.55 16.68,11.15 L8.54,5.98 C7.87,5.55 7,6.03 7,6.82 Z" id="🔹Icon-Color" fill="#D074D9"></path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div id="forum" class="container rounded darkmode my-4" style="background-color: #D074D9">
                    <div class="d-flex justify-content-between p-4 align-items-center">
                        <div class="col-lg-10">
                            <p class="display-6 p-4 pb-0 text-white"><strong> Yakin sudah aware dengan isu kesetaraan gender di Indonesia?</strong></p>
                            <h5 class="p-4 pt-0 text-white">Uji pemahamanmu dengan mengikuti Quiz Livequalie?</h5>
                        </div>
                        <div class="col-lg">
                            <div class="d-flex justify-content-center align-items-center">
                                <a href="{{route('quiz.index')}}" style="text-decoration: none; color: unset;">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="56px" height="56px" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32">
                                            <path fill="white" d="m16 8l-1.43 1.393L20.15 15H8v2h12.15l-5.58 5.573L16 24l8-8l-8-8z"/>
                                            <path fill="white" d="M16 30a14 14 0 1 1 14-14a14.016 14.016 0 0 1-14 14Zm0-26a12 12 0 1 0 12 12A12.014 12.014 0 0 0 16 4Z"/>
                                        </svg>
                                    </div>
                                    <h4 class="mt-1 text-white">See All</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-4">
                <div id="forum" class="card darkmode my-4">
                    <h3 class="p-4">Forum</h3>
                    <div class="px-4">
                        @foreach($forum as $x)
                            <div class="m-1">
                                <a href="{{route('forum.detail' , ['id'=>$x->id])}}" style="text-decoration: none; color: unset;">
                                    <h5>{{$x->title}}</h5>
                                    <p>Posted By <b>{{$x->user['name']}}</b></p>
                                </a>
                            </div>
                        @endforeach
                        <a href="{{route('forum.index')}}" class="my-3 text-center d-block mx-auto fs-5" style="color: unset;">See All</a>
                    </div>
                </div>

                <div id="forum" class="card my-4 p-4" style="background-color: #D074D8">
                    <h5 class="text-center" style="color:#EDE6F5">Word Of The Day</h5>
                    <h1 class="p-3 pb-0 text-center" style="color:#EDE6F5">{{$glos[0]['title']}}</h1>
                    <a href="{{route('glosarium.index')}}" class="text-center p-3 pt-1" style="color:#EDE6F5">See Definition</a>
                </div>


                <div id="forum" class="card my-4 p-4" style="background-color: #EDCC88">
                    <h5 class="text-center" style="color:#EDE6F5">Donasi Terkumpul</h5>
                    <?php $t = 0?>
                    @foreach($donation as $x)
                        <?php $t = $t + $x['amount']?>
                    @endforeach
                    <h1 class="p-3 pb-0 text-center" style="color:#EDE6F5">Rp {{number_format($t,0)}}</h1>
                    <a href="{{route('donation')}}" class="text-center p-3 pt-1" style="color:#EDE6F5">Donate Now</a>
                </div>
            </div>
        </div>
    </div>

@endsection
