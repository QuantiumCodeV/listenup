<?php
$ip = $_SERVER['REMOTE_ADDR'];
$visitsFile = '404_ip.txt';
$blockedFile = '.htaccess';
$blocked404File = '404_ip_bloccati.txt';
$limit = 30;

if (filter_var($ip, FILTER_VALIDATE_IP)) {
    // Leggi il numero di visite per l'indirizzo IP dal file
    $visits = @file_get_contents($visitsFile);

    if ($visits === false) {
        $visits = [];
    } else {
        $visits = json_decode($visits, true);
    }

    // Incrementa il contatore delle visite per l'indirizzo IP
    if (isset($visits[$ip])) {
        $visits[$ip]++;
    } else {
        $visits[$ip] = 1;
    }

    // Scrivi il conteggio delle visite nel file
    file_put_contents($visitsFile, json_encode($visits));

    // Se il numero di visite raggiunge il limite, blocca l'IP nel file .htaccess
    if ($visits[$ip] >= $limit) {
        $htaccessContent = @file_get_contents($blockedFile);

        if ($htaccessContent !== false && strpos($htaccessContent, "Deny from $ip") === false) {
            $htaccessContent .= "\nDeny from $ip\n";
            // Aggiungi l'indirizzo IP bloccato al file .htaccess
         //   file_put_contents($blockedFile, $htaccessContent);
            
            // Aggiungi l'indirizzo IP al file banip.txt
        //   file_put_contents('banip.txt', "$ip\n", FILE_APPEND);

            // Aggiungi anche l'indirizzo IP al file 404_ip_bloccati.txt
            file_put_contents($blocked404File, "$ip\n", FILE_APPEND);
        }
    }

    ?>
    <!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
    <html><head>
    <title>404 Not Found</title>
    </head><body>
    <h1>Not Found</h1>
    <p>The requested URL was not found on this server.</p>
    <p>Additionally, a 404 Not Found
    error was encountered while trying to use an ErrorDocument to handle the request.</p>
    </body></html>
    <?php
} else {
    
}
?>
