<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;

class FirstController extends Controller
{
    public function index() {
        $photos = Photo::all();
        return view("firstcontroller.index", ["photos" => $photos]);
    }

    public function admin() {
        return view("firstcontroller.admin");
    }

    public function about() {
        return view("firstcontroller.about");
    }

    public function projets($id) {
        $titre = Photo::findOrFail($id)->where('id', $id)->get(); // toutes les lignes fonctionnes

        // $titre = Photo::select('titre')->where('id', $id)->get(); CELUI CI FONCTIONNE POUR ID ET TITRE
        // Photo::where('id', $id)->get(['titre']);
        
        return view('firstcontroller.projets', ["id" => $id, "titre" => $titre]);
        
    }

}
