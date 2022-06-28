@extends("template/navbar")
@section("content")


    <div style="margin-top: 100px; background-image: url({{asset('back.jpg')}}); background-size: contain;">
        <div class="row mx-0" style="padding-left: 80px ; padding-bottom: 50px;">
            <div class="col-6" style=" padding-top: 90px ;">
                <h1 class="display-6 bold" style="color: #BA69C8">ABOUT US</h1>
                <p style="color: black">{{$fill[0]->isi}}</p>
                @if(isset($data["status"]) && $data['status'] == "logged-in")
                    @if($data["0"]["username"] == 'admin')
                        <button class="btn" data-bs-toggle="modal" data-bs-target="#modaladd" style="background-color: #D074D9 ; color: white">Edit About Us</button>
                    @endif
                @endif
            </div>
            <div class="col-6 pt-5 px-0">
                <img  class="d-block mx-auto w-50" src="{{asset('/aboutuslogo.png')}}" alt="">
        </div>
    </div>

    <div class="modal fade" id="modaladd" tabindex="-1" aria-labelledby="modaladd" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content darkmode">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update About Us</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="form-horizontal" action="{{route('aboutus.edit' , 1)}}" method="post">
                    @csrf
                    @method('post')
                    <div class="modal-body">
                        <div class="row input-group m-2">
                            <label for="isi" class="col-2 custom-control-label m-2">About Us</label>
                            <input type="text" name="isi" class="form-control" required value="{{$fill[0]->isi}}">
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

    <div class="" style="background-color: #BA69C8">
        <div class="d-flex justify-content-center">
            <div class="p-4" style="margin-right: 300px">
                <h2 class="text-white">Our team</h2>
                <p class="mt-2 text-white">
                    Ario Wisanggeni <br> Chaula Nurdin <br> Hilal Arqaan pratama <br> Larasanti Nur Intani <br> Yuki Muhammad Faruq <br> Yunita Andella
                </p>
            </div>

            <div class="p-4">
                <h2 class="text-white">Contact Us</h2>

                <p class="text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="30px" height="30px" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><g fill="none" stroke="#f8f8f8" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="10" r="3"/><path d="M12 2a8 8 0 0 0-8 8c0 1.892.402 3.13 1.5 4.5L12 22l6.5-7.5c1.098-1.37 1.5-2.608 1.5-4.5a8 8 0 0 0-8-8Z"/></g></svg>
                    Jalan Sukabirus No.5, Bojongsoang
                </p>

                <p class="text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="30px" height="30x" preserveAspectRatio="xMidYMid meet" viewBox="0 0 28 28"><path fill="white" d="m7.85 2.703l1.937-.584a2.75 2.75 0 0 1 3.301 1.506l1.358 3.02a2.75 2.75 0 0 1-.633 3.14l-2.067 1.926c-.277.263-.067 1.288.945 3.042c1.013 1.755 1.796 2.449 2.157 2.341l2.708-.828a2.75 2.75 0 0 1 3.034 1.02l1.93 2.675a2.75 2.75 0 0 1-.339 3.606l-1.492 1.413a3.75 3.75 0 0 1-3.676.863c-3.126-.957-6.021-3.797-8.724-8.48C5.58 12.673 4.557 8.717 5.27 5.485a3.75 3.75 0 0 1 2.58-2.782Z"/></svg>
                    0888-1234-2134
                </p>


                <p class="text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="30px" height="30px" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20"><path fill="white" d="M10 .4C4.698.4.4 4.698.4 10s4.298 9.6 9.6 9.6s9.6-4.298 9.6-9.6S15.302.4 10 .4zm2.274 6.634h-1.443c-.171 0-.361.225-.361.524V8.6h1.805l-.273 1.486H10.47v4.461H8.767v-4.461H7.222V8.6h1.545v-.874c0-1.254.87-2.273 2.064-2.273h1.443v1.581z"/></svg>
                    Livequaile Official
                </p>

                <p class="text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="28px" height="28px" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16"><path fill="white" d="M8 0C5.829 0 5.556.01 4.703.048C3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7C.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297c.04.852.174 1.433.372 1.942c.205.526.478.972.923 1.417c.444.445.89.719 1.416.923c.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417c.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046c.78.035 1.204.166 1.486.275c.373.145.64.319.92.599c.28.28.453.546.598.92c.11.281.24.705.275 1.485c.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598c-.28.11-.704.24-1.485.276c-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598a2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485c-.038-.843-.046-1.096-.046-3.233c0-2.136.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486c.145-.373.319-.64.599-.92c.28-.28.546-.453.92-.598c.282-.11.705-.24 1.485-.276c.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92a.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217a4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334a2.667 2.667 0 0 1 0-5.334z"/></svg>
                    Live.quaile
                </p>


            </div>
        </div>
    </div>






@endsection
