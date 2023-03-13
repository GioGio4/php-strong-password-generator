<!------------------------------------------- TRACCIA------------------------------------------
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure.
L'esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.
- Milestone 1
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all'utente.
Scriviamo tutto (logica e layout) in un unico file *index.php*
- Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file *functions.php* che includeremo poi nella pagina principale
- Milestone 3 (BONUS)
Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all'utente.
- Milestone 4 (BONUS)
Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli. Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme).
Dare all'utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali. 
---------------------------------------------------------------------------------------------->
<?php

include_once(__DIR__ . "./functions.php");

?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Password Generator</title>
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>

  <main>
    <div class="container">
      <div class="row text-center my-4">
        <h2>Generatore di Password</h2>
        <div class="offset-3 col-6">
          <form method="GET" action="" class="card p-5">
            <label for="psw_user_lenght">Scegli la lunghezza della Password da 1 a 20</label>
            <input class="w-100" type="number" name="psw_user_lenght" id="psw_user_lenght" min="1" max="20">
            <button class="btn btn-primary mt-2">Invia</button>

            <?php
            // Controlla se l'utente ha inserito un numero, allora avvia la funzione e stampa il risultato
            if (!empty($_GET['psw_user_lenght'])) {
              $password_lenght = $_GET['psw_user_lenght'];
              $password_generate = generate_password($password_lenght);

              // Controlla se la password generata è della stessa lunghezza del valore inserito dall'utente
              if ((int)($_GET['psw_user_lenght']) == strlen($password_generate)) {
                session_start();
                $_SESSION["valid-generated-password"] = $password_generate;
                header("Location: ./password-generated.php");
              }
            }
            ?>

          </form>

        </div>
      </div>
    </div>
  </main>

</body>

</html>