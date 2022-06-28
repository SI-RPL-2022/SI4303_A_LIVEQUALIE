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
                <form method="post" action="" enctype="multipart/form-data">
                    @csrf
                    @method('post')

                    <div class="row px-2" style="margin-top: 20px;">
                        <div class="col-lg-4 ps-4" style="margin-top: 10px;">
                            <label for="field1" class="form-label bold"><span>Email</span></label><br><br><br>
                            <label for="field2" class="form-label bold"><span>Nama</span></label><br><br>
                            <label for="field3" class="form-label bold">Phone Number</label><br><br>
                            <label for="field4" class="form-label bold">Username</label><br><br>
                            <label for="field5" class="form-label bold">Password</label><br><br>
                            <label for="field6" class="form-label bold">Profile Picture</label>

                        </div>
                        <div class="col-lg-8">
                            <a>{{$profile['email']}}</a><br><br>
                            <input type="text" class="form-control" name="email" value="{{$profile['email']}}" hidden><br>
                            <input type="text" class="form-control" name="name" value="{{$profile['name']}}"><br>
                            <input type="text" class="form-control" name="phone" value="{{$profile['phone']}}"><br>
                            <input type="text" class="form-control" name="username" value="{{$profile['username']}}"><br>
                            <input type="password" class="form-control" name="password" placeholder="Password" required><br>
                            <input type="file" class="custom-file-input form-control" id="validatedCustomFile" name="profpic" required>

                        </div>
                    </div>
                    <div class="card-body d-flex justify-content-center">
                        <button class="button1" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
