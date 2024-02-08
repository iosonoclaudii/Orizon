<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paese;

class PaesiController extends Controller
{
    public function index()
    {
        $paesi = Paese::all();
        $paesiJson = json_encode($paesi, JSON_PRETTY_PRINT);
        return response($paesiJson)->header('Content-Type', 'application/json');
    }

    public function store(Request $request)
    {
        $paese = Paese::create($request->all());
        return response()->json($paese, 201);
    }

    public function show($id)
    {
        $paese = Paese::find($id);
        if (!$paese) {
            return response()->json(['message' => 'Paese non trovato'], 404);
        }
        return response()->json($paese);
    }

    public function update(Request $request, $id)
    {
        $paese = Paese::find($id);
        if (!$paese) {
            return response()->json(['message' => 'Paese non trovato'], 404);
        }
        $paese->update($request->all());
        return response()->json($paese, 200);
    }

    public function destroy($id)
    {
        $paese = Paese::find($id);
        if (!$paese) {
            return response()->json(['message' => 'Paese non trovato'], 404);
        }
        $paese->delete();
        return response()->json(null, 204);
    }
}
