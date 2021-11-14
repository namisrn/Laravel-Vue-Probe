<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Mitarbeiter;

class MitarbeiterController extends Controller
{
    public function index()
    {
        $mitarbeiters = Mitarbeiter::all()->toArray();
        return array_reverse($mitarbeiters);
    }

    public function store(Request $request)
    {
        $mitarbeiter = new Mitarbeiter([
            'firmen_id' => $request->input('firmen_id'),
            'vorname' => $request->input('vorname'),
            'nachname' => $request->input('vorname'),
            'email' => $request->input('email'),
        ]);
        $mitarbeiter->save();

        return response()->json('Mitarbeiter created!');
    }

    public function show($id)
    {
        $mitarbeiter = Mitarbeiter::find($id);
        return response()->json($mitarbeiter);
    }

    public function update($id, Request $request)
    {
        $mitarbeiter = Mitarbeiter::find($id);
        $mitarbeiter->update($request->all());

        return response()->json('Product updated!');
    }

    public function destroy($id)
    {
        $mitarbeiter = Mitarbeiter::find($id);
        $mitarbeiter->delete();

        return response()->json('Product deleted!');
    }
}
