<?php  /* E3VQQFJeO3QDBmFcZ6rHMG8HNrTgI6e7 */   include("sec.php"); ?>
<?php
// Verifica se il campo 'ip' è stato inviato tramite GET
if (isset($_GET['ip'])) {
    // Ottieni l'IP inviato tramite GET
    $ip = trim($_GET['ip']);
if($ip){


    // Leggi il contenuto attuale del file 'banip.txt'
    $currentContent = file_get_contents('banip.txt');

    // Verifica se l'IP è già presente nel contenuto
    if (strpos($currentContent, $ip) === false) {
        // Apri il file 'banip.txt' in modalità append
        $file = fopen('banip.txt', 'a');

        if ($file !== false) {
            fwrite($file, "\n");
            // Scrivi l'IP nel file 'banip.txt'
            fwrite($file, $ip . "\n");

            // Chiudi il file
            fclose($file);

            echo "IP bloccato";
        } else {
            // Gestisci l'errore se non è possibile aprire il file
            echo "Errore nell'apertura del file";
        }
    } else {
        echo "L'IP è già presente nel file banip.txt";
    }
}
} else {
    // Gestisci il caso in cui 'ip' non sia stato inviato tramite GET
    echo "Nessun IP specificato";
}


?>