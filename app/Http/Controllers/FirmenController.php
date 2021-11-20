<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Firmen;
use App\Models\Mitarbeiter;

class FirmenController extends Controller
{
    public function index()
    {
        $firmen = Firmen::orderBy("updated_at","desc")->get()->toArray();

        $result = [];
        foreach ($firmen as $firma){
            $mitarbeiten = Mitarbeiter::where("firmen_id", $firma["id"])->get();
            $result[] = array_merge($firma,["mitarbeiten" => $mitarbeiten]);
        }
        return response()->json($result);
    }

    public function store(Request $request)
    {
        $firmen = new Firmen([
            'firmenname' => $request->input('firmenname'),
        ]);
        $firmen->save();

        return response()->json($firmen);
    }

    public function show($id)
    {
        $firmen = Firmen::find($id);
        return response()->json($firmen);
    }

    public function update(Request $request, $id)
    {
        $firmen = Firmen::find($id);
        $firmen->update($request->all());

        return response()->json($firmen);
    }

    public function destroy($id)
    {
        $firmen = Firmen::find($id);
        $firmen->delete();

        return response()->json([
            id=>$id
        ]);
    }
}
