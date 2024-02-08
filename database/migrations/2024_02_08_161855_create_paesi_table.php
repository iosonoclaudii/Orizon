<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Definizione della classe migratoria per la creazione della tabella "paesi"
return new class extends Migration
{
    // Metodo up() che definisce le operazioni da eseguire per creare la tabella
    public function up(): void
    {
        // Utilizzo del facade Schema per creare la tabella "paesi"
        Schema::create('paesi', function (Blueprint $table) {
            // Definizione della colonna "id" come chiave primaria auto-incrementale
            $table->id();
            // Definizione della colonna "nome_nazione" come stringa di massimo 255 caratteri
            $table->string('nome_nazione', 255);
            // Aggiunta delle colonne "created_at" e "updated_at" per gestire automaticamente i timestamp di creazione e aggiornamento delle righe
            $table->timestamps();
        });
    }

    // Metodo down() che definisce le operazioni da eseguire per eliminare la tabella in caso di rollback della migrazione
    public function down(): void
    {
        // Utilizzo del facade Schema per eliminare la tabella "paesi" se esiste
        Schema::dropIfExists('paesi');
    }
};
