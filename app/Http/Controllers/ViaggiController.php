<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Viaggio;

class ViaggiController extends Controller
{
    public function index()
    {
        $viaggi = Viaggio::all();
        $viaggiJson = json_encode($viaggi, JSON_PRETTY_PRINT);

        // Ritorna la risposta JSON formattata correttamente
        return response($viaggiJson)->header('Content-Type', 'application/json');
    }

    public function store(Request $request)
    {
        $viaggio = Viaggio::create($request->all());
        return response()->json($viaggio, 201);
    }

    public function show($id)
    {
        $viaggio = Viaggio::find($id);
        if (!$viaggio) {
            return response()->json(['message' => 'Viaggio non trovato'], 404);
        }
        return response()->json($viaggio);
    }

    public function update(Request $request, $id)
    {
        $viaggio = Viaggio::find($id);
        if (!$viaggio) {
            return response()->json(['message' => 'Viaggio non trovato'], 404);
        }
        $viaggio->update($request->all());
        return response()->json($viaggio, 200);
    }

    public function destroy($id)
    {
        $viaggio = Viaggio::find($id);
        if (!$viaggio) {
            return response()->json(['message' => 'Viaggio non trovato'], 404);
        }
        $viaggio->delete();
        return response()->json(null, 204);
    }
}
