@extends("template/navbar")
@section("content")

      <div class="container mx-auto">
        <div class="row">
          <div class="col">
            <img class="d-block mx-auto" style="width: 8pc; height: 8pc; object-fit: cover; border-radius: 100px; -moz-border-radius: 100px; margin-top: 10pc;" src="{{asset('/profpic/'.$profile->profpic)}}" alt="">
            <h5 style="text-align: center; margin-top: 16px;">{{$profile['name']}}</h5>
          </div>
        </div>
        <div class="row px-5">
            <div class="col">
              <div id="profile" class="card-body darkmode" style="margin-top: 35px; margin-bottom: 30px; border-radius: 5px;">
                <h5 class="bold p-3" style="text-align: center;">PROFIL</h5>
                  <form>
                    <div class="row px-2" style="margin-top: 20px;">
                      <div class="col-lg-4 ps-4" style="margin-top: 10px;">
                        <label for="field1" class="form-label bold"><span>Email</span></label><br><br>
                        <label for="field2" class="form-label bold"><span>Nama</span></label><br><br>
                        <label for="field3" class="form-label bold">Phone Number</label><br><br>
                        <label for="field4" class="form-label bold">Username</label>
                        {{-- <label for="field5" class="form-label bold">Password</label> --}}
                      </div>
                      <div class="col-lg-8">
                          <a>{{$profile['email']}}</a><br><br>
                          <input type="text" id="disabledTextInput" class="form-control"  disabled placeholder="{{$profile['name']}}"><br>
                          <input type="text" id="disabledTextInput" class="form-control"  disabled placeholder="{{$profile['phone']}}"><br>
                          <input type="text" id="disabledTextInput" class="form-control"  disabled placeholder="{{$profile['username']}}"><br>
                          {{-- <input type="text" id="disabledTextInput" class="form-control"  disabled placeholder="*****"><br> --}}
                      </div>
                    </div>
                    <div class="card-body d-flex justify-content-center">
                      <a class="button1" href="{{route('profile.edit')}}">Edit</a>
                    </div>
                  </form>
              </div>
            </div>
        </div>
      </div>
@endsection
