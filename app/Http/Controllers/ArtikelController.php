<?php

namespace App\Http\Controllers;

use App\Models\artikel;
use App\Models\category;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;
use App\Http\Requests\StoreartikelRequest;
use App\Http\Requests\UpdateartikelRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = new artikel();
        $category = new category();
        $data = $artikel->paginate(5);
        $data2 = $category::all();
        $data_to_update = $artikel::all();
        return view('portofolio.index', compact(['data', 'data2', 'data_to_update']));
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
     * @param  \App\Http\Requests\StoreartikelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $req->validate([
            'name' => 'required|string',
            'durasi' => 'required|int',
            'link' => 'required|string',
            'gambar' => 'image|file',
        ]);


        $slug = SlugService::createSlug(artikel::class, 'slug', $req->name);

        $artikel = new artikel();

        if ($req->file('gambar')) {
            $gambar = $req->file('gambar')->store('gambar-artikel');
            $artikel->gambar = $gambar;
        }

        $artikel->judul = $req->name;
        $artikel->durasi = $req->durasi;
        $artikel->link = $req->link;
        $artikel->tech_stack = $req->teknologi;
        $artikel->contributors = $req->contributor;
        $artikel->id_category = $req->category;
        $artikel->isi = $req->isi;
        $artikel->slug = $slug;
        $artikel->excerpt = Str::limit(strip_tags($req->isi), 200);

        // print_r(
        //     [    
        //     $req->name,
        //     $req->durasi,
        //     $req->link,
        //     $req->category,
        //     $req->isi]);

        $artikel->save();
        return redirect('/portofolio');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function show(artikel $artikel)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artikel = new artikel();
        $category = new category();
        $data = $artikel->paginate(5);
        $data2 = $category->paginate(5);
        $data_to_update = artikel::where('id', $id)->first();
        return view('portofolio.update', compact('data_to_update', 'data', 'data2'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateartikelRequest  $request
     * @param  \App\Models\artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $req->validate([
            'name' => 'required|string',
            'durasi' => 'required|int',
            'link' => 'required|string',
            'gambar' => 'image|file',
        ]);

        $artikel = artikel::find($id);
        if ($req->file('gambar')) {
            if ($artikel->gambar != null) {
                Storage::delete($artikel->gambar);
            }
            $gambar = $req->file('gambar')->store('gambar-category');
            $artikel->gambar = $gambar;
        }
        $artikel->judul = $req->name;
        $artikel->durasi = $req->durasi;
        $artikel->link = $req->link;
        $artikel->tech_stack = $req->teknologi;
        $artikel->contributors = $req->contributor;
        $artikel->id_category = $req->category;
        $artikel->isi = $req->isi_update;
        $artikel->excerpt = Str::limit(strip_tags($req->isi_update), 200);

        // print_r(
        //     [    
        //     $req->name,
        //     $req->durasi,
        //     $req->link,
        //     $req->teknologi,
        //     $req->category,
        //     $req->isi_update
        //     ]);

        $artikel->save();


        return redirect('/portofolio')->with('success', 'data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\req  $artikel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $req, $id)
    {
        $artikel = artikel::find($id);
        if ($artikel->gambar != null) {
            Storage::delete($artikel->gambar);
        }
        $data_id = $id;
        artikel::where('id', $data_id)->delete();


        // print_r($data_id);
        return redirect('/portofolio')->with('success', 'data berhasil dihapus');
    }
}
