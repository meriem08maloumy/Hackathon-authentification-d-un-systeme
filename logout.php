<?php
session_start();
//supprimer ga3 les variables dyal session.
$_SESSION =[] ;
//hadi kt verifier lina wach session ktsta3ml cookies.(cookie est activée ou non)
if(ini_get("session.use_cookie_params")){
    //params fonction qui retourne les parametres utilises par php bach t cree lina cookie dyal session.
    $params = session_get_cookie_params();
    //42000 random number (11H40 en secondes)
    setcookie(session_name(),'',time()-42000, 
    $params["path"],$params['domain'],
    $params["secure"], $params["httponly"]
);
}
session_destroy();
//bach yraj3 lina utilisateur lpage login redirection.
header("Location: login.php");
exit;
?>