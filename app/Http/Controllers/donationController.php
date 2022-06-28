<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;

class donationController extends Controller
{
    public function donation(Request $req){
        $data = $req->session()->all();
        $donation = Donation::all();
        if(isset($data["status"]) && $data['status'] == "logged-in")
            if($data['0']['username'] == "admin")
                return view('donationList' ,['data'=>$data, 'donation'=>$donation]);
            else
                return view('donation' ,['data'=>$data]);
        else
        return view('login');

    }

    public function donationAdd(Request $req){
        $data = $req->session()->all();
        $donation = new Donation();
        $donation->name = $data[0]['name'];
        $donation->amount = $req->amount;

        $file = $req->file('buktidonasi');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'buktidonasi';
        $file->move($tujuan_upload,$nama_file);
        $donation->picture = $nama_file;

        $donation->save();

        return redirect()->route('donation')->with('berhasildonasi' , 'Berhasil Membuat donasi');

    }
}
