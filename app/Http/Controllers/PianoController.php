<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Piano;

class PianoController extends Controller
{
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function getAllPianos()
    {
        $pianos = Piano::All();
        return view('pianos.get_all_pianos', compact('pianos'));
    }

    public function editPiano($id)
    {
        $piano= Piano::find($id);

        return view('pianos.edit_piano', compact('piano'));        
    }
    public function updatePiano(Request $request, $id)
    {
        $piano = Piano::find($id);
        $piano->brand = $request->brand;
        $piano->length = $request->length;
        $piano->weight = $request->weight;
        $piano->save();
        return redirect('/pianos')->with('success', 'Les caractéristiques du piano ont été modifiées !');
    }
    public function deletePiano($id)
    {
        $piano = Piano::find($id);
        $piano->delete();
        return redirect('/pianos')->with('success', 'Le piano à été supprimé avec succès !');
    }
    public function createPiano()
    {
        return view('pianos.create_piano');
    }
    public function storePiano(Request $request)
    {
        $piano = new Piano([
            'brand' => $request->brand,
            'length' => $request->length,
            'weight' => $request->weight,
        ]);
        $piano->save();
        return redirect('/pianos')->with('success', 'Votre piano a été ajouté !');
    }
}
