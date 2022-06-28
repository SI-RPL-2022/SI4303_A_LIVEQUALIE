@extends("template/navbar")
@section("content")


    <div class="tm-page-wrap mx-auto" style="margin-top: 85px; background-color: #D074D8;">
        @if(session()->has('berhasildonasi'))
        <div class="alert alert-success" role="alert">
            Berhasil Berdonasi
        </div>
        @endif
        <div class="row justify-content-center mt-5">
            <div class="col-md-5">
                <h1 class="my-5 ps-5" style="color:#ffffff">Donasi</h1>
                <p class="ps-5" style="color:#ffffff">Untuk mendukung gerakan penyetaraan gender dan membantu korban yang terdampak dari diskriminasi gender</p>
            </div>
        <div class="col-md-5">
            <img src="/charity 1.png" width="500px" height="300px" alt="Charity">
        </div>
        </div>
    </div>

    <div class="mt-1 p-5">
        <div class="row">
            <div class="col-3"></div>
            <div class="col">
                <form action="{{route('donation')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method("POST")
                    <label for="amount">Masukan Jumlah Donasi</label>
                    <div class="input-group m-2">
                        <span class="input-group-text">Rp</span>
                        <input type="number" name="amount" class="form-control" placeholder="Rp" required>
                    </div>

                    <label for="buktidonasi">Masukan Bukti Donasi</label>
                    <div class="custom-file mb-3">
                        <input type="file" class="custom-file-input form-control" id="validatedCustomFile" name="buktidonasi" required>
                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                    </div>

                    <button class="btn w-100 text-white" style="background-color: #D074D8" type="submit">Submit</button>


                </form>
            </div>
            <div class="col-3"></div>
        </div>

    </div>

@endsection
