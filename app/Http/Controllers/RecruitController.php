<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelamar;

class RecruitController extends Controller
{
    public function store(Request $request)
    {
        $destinationPath = 'uploads';
        $cv = $request->file('cv');
        $cv->move($destinationPath, $request->email."_".$cv->getClientOriginalName());
        $suratLamaran = $request->file('suratLamaran');
        $suratLamaran->move($destinationPath, $request->email."_".$suratLamaran->getClientOriginalName());

        $recruit = new Pelamar;
        $recruit->email = $request->email;
        $recruit->nama = $request->nama;
        $recruit->cv = $request->email."_".$cv->getClientOriginalName();
        $recruit->surat_lamaran = $request->email."_".$suratLamaran->getClientOriginalName();
        $recruit->recruitment_id = $request->recruitment_id;
        $recruit->save();
        return redirect('/');
    }
}
