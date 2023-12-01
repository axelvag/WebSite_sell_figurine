<!-- <!doctype html>
<html>
<head>
<meta http-equiv="refresh" content="5" />
</head>
</html> -->
<?php 
//include 'jeu-2048.php';                     //pour utiliser la variable globale score


function message_bouton () 
{
    if(isset($_GET['action-submit']))
    {
        write_log("Message");
    }
}

function write_log($mesg)
{
    file_put_contents('logs.txt' , $mesg."\n" ,FILE_APPEND);
}

function affiche_logs($nbl) 
{
    $logs = file('logs-2048.txt');
    foreach ($logs as $i => $line) {
        echo "Ligne " . ($i+1) . " : " . htmlspecialchars($line) . "<br />\n";
    }
}

?>
