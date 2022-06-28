@extends("template/navbar")
@section("content")

    <div class="card mx-5 darkmode" style="margin-top: 150px">
        <h4 class="p-4">List of Donation</h4>
        <table class="table table-hover darkmode">
            <thead>
                <tr>
                    <th scope="col">Account</th>
                    <th scope="col">Bukti Tranfer</th>
                    <th scope="col">Jumlah Donasi</th>
                </tr>
            </thead>
            <tbody>
            <?php $y = 0?>
            @foreach($donation as $x)
                <tr>
                    <td>{{$x->name}}</td>
                    <td> <button class="btn" data-bs-toggle="modal" data-bs-target="#modaladd{{$x->id}}" style="background-color: #D074D9 ; color: white">Lihat Bukti</button></td>
                    <td>Rp {{number_format($x->amount,0)}}</td>
                </tr>
                <?php $y = $y + $x->amount ?>

                <!-- Modal -->
                <div class="modal fade" id="modaladd{{$x->id}}" tabindex="-1" aria-labelledby="modaladd{{$x->id}}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Bukti Transfer</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img class="d-block mx-auto w-100" src="{{asset('/buktidonasi/'.$x->picture)}}" alt="">
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
            {{-- <tr>
                <th>

                </th>
                <th></th>
                <th></th>
            </tr> --}}
            </tbody>
            <tfoot>
                <tr>
                    <th>Total</th>
                    <th></th>
                    <th>Rp {{number_format($y,0)}}</th>
                </tr>
            </tfoot>
        </table>

    </div>

@endsection
