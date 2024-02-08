# Orizon API

## Descrizione
Orizon API è un'applicazione back-end che gestisce i dati relativi ai paesi e ai viaggi.

## Tecnologie Utilizzate
- Laravel: un framework PHP per la creazione di applicazioni web.
- MySQL: un sistema di gestione di database relazionali.

## Prerequisiti
- PHP >= 7.4
- Composer (https://getcomposer.org/)
- MySQL

## Installazione
1. Clonare questo repository nella directory desiderata sul tuo server.
2. Eseguire `composer install` per installare le dipendenze PHP.
3. Copiare il file `.env.example` in un nuovo file chiamato `.env`.
4. Configurare il file `.env` con le informazioni del tuo database MySQL.
5. Eseguire `php artisan key:generate` per generare la chiave dell'applicazione.
6. Eseguire `php artisan migrate` per eseguire le migrazioni e creare le tabelle nel database.
7. Ora sei pronto per utilizzare l'applicazione!

## Utilizzo delle API
Le seguenti sono le rotte disponibili per l'utilizzo delle API:

### Paesi
- `GET /api/paesi`: Visualizza tutti i paesi.
- `POST /api/paesi`: Crea un nuovo paese.
- `GET /api/paesi/{id}`: Visualizza le informazioni di un paese specifico.
- `PUT /api/paesi/{id}`: Aggiorna le informazioni di un paese esistente.
- `DELETE /api/paesi/{id}`: Cancella un paese esistente.

### Viaggi
- `GET /api/viaggi`: Visualizza tutti i viaggi.
- `POST /api/viaggi`: Crea un nuovo viaggio.
- `GET /api/viaggi/{id}`: Visualizza le informazioni di un viaggio specifico.
- `PUT /api/viaggi/{id}`: Aggiorna le informazioni di un viaggio esistente.
- `DELETE /api/viaggi/{id}`: Cancella un viaggio esistente.

## Contribuire
Le pull request sono benvenute. Per modifiche importanti, ti preghiamo di aprire prima un ticket per discutere delle modifiche proposte.

## Licenza
Questo progetto è sotto licenza MIT. Per ulteriori informazioni, consulta il file [LICENSE](LICENSE).
