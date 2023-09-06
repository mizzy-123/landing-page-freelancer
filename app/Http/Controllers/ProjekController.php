<?php

namespace App\Http\Controllers;

use App\Models\projek;
use App\Models\category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreprojekRequest;
use App\Http\Requests\UpdateprojekRequest;

class ProjekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = projek::all();
        $data2 = category::all();
        $data_paginate = projek::paginate(5);
        $status_indikator = [
            "planning",
            "development",
            "testing",
            "debugging",
            "done",
            "cancel",
            "revisi"
        ];
        return view('project.index', compact('data', 'data2', 'data_paginate', 'status_indikator'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreprojekRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $req->validate([
            "name" => "required|string",
            "status" => "required|string",
            "deadline" => "required|date",
            "client" => "required|string",
            "biaya" => "required|string",
            "category" => "required|string",
        ]);

        $phoneNumber = $req->telepon;
        $pattern = '#^(\\+62|0)\\d{9,12}$#';
        if (preg_match($pattern, $phoneNumber)) {
            if (substr($phoneNumber, 0, 1) === '0') {
                $modifiedPhoneNumber = '62' . substr($phoneNumber, 1);
                $phoneNumber = $modifiedPhoneNumber;
            } else if (substr($phoneNumber, 0, 1) === '+') {
                $modifiedPhoneNumber = '62' . substr($phoneNumber, 1);
                $phoneNumber = $modifiedPhoneNumber;
            }
            // return $phoneNumber;
        } else {
            return back()->withErrors("Nomor tidak valid")->withInput();
        }

        $projek = new projek();
        // print_r([
        //     $req->name,
        //     $req->status,
        //     $req->deadline,
        //     $req->client,
        //     $req->biaya,
        //     $req->category,
        //     $req->note
        // ]            
        // );

        // {{-- <td>{{ $j->nama }}</td>
        //           <td>{{ $j->status }}</td>
        //           <td>{{ $j->deadline }} Hari</td>
        //           <td>{{ $j->nama_client }}</td>
        //           <td>Rp. {{ $j->fee }}</td>
        //           <td>{{ $data2->where('id',$j->id_category)->first()->nama }}</td>
        //           <td>{{ $j->note }}</td>
        //            --}}
        // $jumlah = explode("Rp ", $req->biaya);
        // $jumlah_t = explode(".", $jumlah[1]);
        // $fee = $jumlah_t[0] . $jumlah_t[1];
        $jumlah = str_replace("Rp ", "", $req->biaya); // Menghapus "Rp "
        $jumlah = str_replace(".", "", $jumlah); // Menghapus titik (.)
        $fee = (int)$jumlah; // Mengkonversi ke tipe integer

        $projek->nama = $req->name;
        $projek->status = $req->status;
        $projek->deadline = $req->deadline;
        $projek->nama_client = $req->client;
        $projek->fee = intval($fee);
        $projek->id_category = $req->category;
        $projek->note = $req->note;
        $projek->telepon = $phoneNumber;
        $projek->save();
        return redirect('project')->with('success', 'Data successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\projek  $projek
     * @return \Illuminate\Http\Response
     */
    public function show(projek $projek)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\projek  $projek
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $req, $id)
    {
        $projek = projek::find($id);
        $data = $projek->all();
        $data2 = category::all();
        $data_paginate = projek::paginate(5);
        $status_indikator = [
            "planning",
            "development",
            "testing",
            "debugging",
            "done",
            "cancel",
            "revisi"
        ];
        return view("project.update", compact('projek', 'data', 'data2', 'data_paginate', 'status_indikator'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateprojekRequest  $request
     * @param  \App\Models\projek  $projek
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $req->validate([
            "name" => "required|string",
            "status" => "required|string",
            "deadline" => "required|date",
            "client" => "required|string",
            "biaya" => "required|string",
            "category" => "required|string",
        ]);

        $phoneNumber = $req->telepon;
        $pattern = '#^(\\+62|0|62)\\d{9,12}$#';
        if (preg_match($pattern, $phoneNumber)) {
            if (substr($phoneNumber, 0, 1) === '0') {
                $modifiedPhoneNumber = '62' . substr($phoneNumber, 1);
                $phoneNumber = $modifiedPhoneNumber;
            } else if (substr($phoneNumber, 0, 1) === '+') {
                $modifiedPhoneNumber = '62' . substr($phoneNumber, 1);
                $phoneNumber = $modifiedPhoneNumber;
            }
            // return $phoneNumber;
        } else {
            return back()->withErrors("Nomor tidak valid")->withInput();
        }

        // $jumlah = explode("Rp ", $req->biaya);
        // $jumlah_t = explode(".", $jumlah[1]);
        // $fee = $jumlah_t[0] . $jumlah_t[1];
        $jumlah = str_replace("Rp ", "", $req->biaya); // Menghapus "Rp "
        $jumlah = str_replace(".", "", $jumlah); // Menghapus titik (.)
        $fee = (int)$jumlah; // Mengkonversi ke tipe integer

        $projek = projek::find($id);

        $projek->nama = $req->name;
        $projek->status = $req->status;
        $projek->deadline = $req->deadline;
        $projek->nama_client = $req->client;
        $projek->fee = $fee;
        $projek->id_category = $req->category;
        $projek->note = $req->note;
        $projek->telepon = $phoneNumber;
        $projek->save();
        // print_r([
        //     $projek->nama,
        //     $projek->status,
        //     $projek->deadline,
        //     $projek->nama_client,
        //     $projek->fee,
        //     $projek->id_category,
        //     $projek->note
        // ]            
        // );
        return redirect('project')->with('success', 'Data successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\projek  $projek
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        projek::where('id', $id)->delete();
        return redirect("project")->with('success', 'Data successfully deleted');
    }
}
