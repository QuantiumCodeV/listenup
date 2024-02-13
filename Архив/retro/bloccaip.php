<?php  /* E3VQQFJeO3QDBmFcZ6rHMG8HNrTgI6e7 */   include("sec.php"); ?>

<?php include("layout1.php") ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se il campo 'fileContent' è stato inviato tramite il modulo POST
    if (isset($_POST['fileContent'])) {
        // Ottieni il contenuto inviato tramite POST
        $newContent = $_POST['fileContent'];

        $lines = explode("\n", $newContent);

            // Rimuovi le righe vuote dall'array
            $linesWithoutEmptyLines = array_filter($lines, function($line) {
                return trim($line) !== '';
            });

            // Unisci le righe rimanenti in una nuova stringa
            $newContent = implode("\n", $linesWithoutEmptyLines);



        if( $newContent ){

       
        // Salva il nuovo contenuto nel file 'banip.txt'
            if (file_put_contents('banip.txt', $newContent) !== false) {
            
            } else {
            }
        }
    } else {
    }
}
?>
		<div id="log" class="container"><br>
			<h3>gli ip bloccati non vedranno la pagina</h3>
          <br>  
          <form  method="POST">
          <textarea rows="10" cols="50" name="fileContent">
<?php
// Verifica se il file banip.txt esiste
if (file_exists('banip.txt')) {
    // Legge il contenuto del file, esegue il trim e lo visualizza nella textarea
    $fileContent = file_get_contents('banip.txt');
    $trimmedContent = trim($fileContent);
    echo htmlspecialchars($trimmedContent, ENT_QUOTES);
} else {
    echo "Il file banip.txt non esiste.";
}
?>
        </textarea><br><br>
<input type="submit" class="btn btn-danger" value="salva " />
          </form>
		</div>

<?php include("layout2.php") ?><?php  ?>