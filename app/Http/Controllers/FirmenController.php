<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Firmen;

class FirmenController extends Controller
{
    public function index()
    {
        $firmen = Firmen::all()->toArray();
        return array_reverse($firmen);
    }

    public function store(Request $request)
    {
        $firmen = new Firmen([
            'firmenname' => $request->input('firmenname'),
        ]);
        $firmen->save();

        return response()->json('Firma created :) ');
    }

    public function show($id)
    {
        $firmen = Firmen::find($id);
        return response()->json($firmen);
    }

    public function update($id, Request $request)
    {
        $firmen = Firmen::find($id);
        $firmen->update($request->all());

        return response()->json('Firma edited!');
    }

    public function destroy($id)
    {
        $firmen = Firmen::find($id);
        $firmen->delete();

        return response()->json('Firma ging PLeite :( !');
    }
}
