<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Viaggio;

// Definizione del controller ViaggiController che gestisce le richieste relative ai viaggi
class ViaggiController extends Controller
{
    // Metodo per ottenere tutti i viaggi
    public function index()
    {
        // Ottiene tutti i viaggi dal modello Viaggio
        $viaggi = Viaggio::all();

        // Converte i viaggi in formato JSON e li formatta in modo leggibile
        $viaggiJson = json_encode($viaggi, JSON_PRETTY_PRINT);

        // Ritorna la risposta JSON formattata correttamente con l'header Content-Type
        return response($viaggiJson)->header('Content-Type', 'application/json');
    }

    // Metodo per creare un nuovo viaggio
    public function store(Request $request)
    {
        // Crea un nuovo viaggio utilizzando i dati dalla richiesta
        $viaggio = Viaggio::create($request->all());

        // Ritorna la risposta JSON con il nuovo viaggio creato e lo status code 201 (Created)
        return response()->json($viaggio, 201);
    }

    // Metodo per visualizzare un viaggio specifico
    public function show($id)
    {
        // Trova il viaggio con l'ID specificato
        $viaggio = Viaggio::find($id);

        // Se il viaggio non esiste, ritorna una risposta JSON con lo status code 404 (Not Found)
        if (!$viaggio) {
            return response()->json(['message' => 'Viaggio non trovato'], 404);
        }

        // Se il viaggio esiste, ritorna una risposta JSON con i dettagli del viaggio
        return response()->json($viaggio);
    }

    // Metodo per aggiornare un viaggio esistente
    public function update(Request $request, $id)
    {
        // Trova il viaggio con l'ID specificato
        $viaggio = Viaggio::find($id);

        // Se il viaggio non esiste, ritorna una risposta JSON con lo status code 404 (Not Found)
        if (!$viaggio) {
            return response()->json(['message' => 'Viaggio non trovato'], 404);
        }

        // Aggiorna il viaggio con i dati dalla richiesta
        $viaggio->update($request->all());

        // Ritorna la risposta JSON con il viaggio aggiornato e lo status code 200 (OK)
        return response()->json($viaggio, 200);
    }

    // Metodo per eliminare un viaggio esistente
    public function destroy($id)
    {
        // Trova il viaggio con l'ID specificato
        $viaggio = Viaggio::find($id);

        // Se il viaggio non esiste, ritorna una risposta JSON con lo status code 404 (Not Found)
        if (!$viaggio) {
            return response()->json(['message' => 'Viaggio non trovato'], 404);
        }

        // Elimina il viaggio
        $viaggio->delete();

        // Ritorna una risposta JSON vuota con lo status code 204 (No Content)
        return response()->json(null, 204);
    }
}
