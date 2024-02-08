<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Definizione della classe migratoria per la creazione della tabella "viaggi"
return new class extends Migration
{
    // Metodo up() che definisce le operazioni da eseguire per creare la tabella
    public function up(): void
    {
        // Utilizzo del facade Schema per creare la tabella "viaggi"
        Schema::create('viaggi', function (Blueprint $table) {
            // Definizione della colonna "id" come chiave primaria auto-incrementale
            $table->id();
            // Definizione della colonna "nome_destinazione" come stringa di massimo 255 caratteri
            $table->string('nome_destinazione', 255);
            // Definizione della colonna "nazione_destinazione" come chiave esterna per l'id della tabella "paesi"
            $table->unsignedBigInteger('nazione_destinazione');
            // Definizione della colonna "posti_disponibili" come intero per rappresentare il numero di posti disponibili
            $table->integer('posti_disponibili');
            // Definizione della colonna "descrizione" come stringa di massimo 255 caratteri per descrivere il viaggio
            $table->string('descrizione', 255);
            // Aggiunta delle colonne "created_at" e "updated_at" per gestire automaticamente i timestamp di creazione e aggiornamento delle righe
            $table->timestamps();

            // Definizione della chiave esterna "nazione_destinazione" che fa riferimento all'id della tabella "paesi"
            $table->foreign('nazione_destinazione')->references('id')->on('paesi');
        });
    }

    // Metodo down() che definisce le operazioni da eseguire per eliminare la tabella in caso di rollback della migrazione
    public function down(): void
    {
        // Utilizzo del facade Schema per eliminare la tabella "viaggi" se esiste
        Schema::dropIfExists('viaggi');
    }
};
