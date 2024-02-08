<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paese;

// Definizione del controller PaesiController che gestisce le richieste relative ai paesi
class PaesiController extends Controller
{
    // Metodo per ottenere tutti i paesi
    public function index()
    {
        // Ottiene tutti i paesi dal modello Paese
        $paesi = Paese::all();

        // Converte i paesi in formato JSON e li formatta in modo leggibile
        $paesiJson = json_encode($paesi, JSON_PRETTY_PRINT);

        // Ritorna la risposta JSON formattata correttamente con l'header Content-Type
        return response($paesiJson)->header('Content-Type', 'application/json');
    }

    // Metodo per creare un nuovo paese
    public function store(Request $request)
    {
        // Crea un nuovo paese utilizzando i dati dalla richiesta
        $paese = Paese::create($request->all());

        // Ritorna la risposta JSON con il nuovo paese creato e lo status code 201 (Created)
        return response()->json($paese, 201);
    }

    // Metodo per visualizzare un paese specifico
    public function show($id)
    {
        // Trova il paese con l'ID specificato
        $paese = Paese::find($id);

        // Se il paese non esiste, ritorna una risposta JSON con lo status code 404 (Not Found)
        if (!$paese) {
            return response()->json(['message' => 'Paese non trovato'], 404);
        }

        // Se il paese esiste, ritorna una risposta JSON con i dettagli del paese
        return response()->json($paese);
    }

    // Metodo per aggiornare un paese esistente
    public function update(Request $request, $id)
    {
        // Trova il paese con l'ID specificato
        $paese = Paese::find($id);

        // Se il paese non esiste, ritorna una risposta JSON con lo status code 404 (Not Found)
        if (!$paese) {
            return response()->json(['message' => 'Paese non trovato'], 404);
        }

        // Aggiorna il paese con i dati dalla richiesta
        $paese->update($request->all());

        // Ritorna la risposta JSON con il paese aggiornato e lo status code 200 (OK)
        return response()->json($paese, 200);
    }

    // Metodo per eliminare un paese esistente
    public function destroy($id)
    {
        // Trova il paese con l'ID specificato
        $paese = Paese::find($id);

        // Se il paese non esiste, ritorna una risposta JSON con lo status code 404 (Not Found)
        if (!$paese) {
            return response()->json(['message' => 'Paese non trovato'], 404);
        }

        // Elimina il paese
        $paese->delete();

        // Ritorna una risposta JSON vuota con lo status code 204 (No Content)
        return response()->json(null, 204);
    }
}
