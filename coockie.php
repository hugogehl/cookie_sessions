<?php
If (isset($_POST['submitCookie'])) {
    // on définit une durée de vie de notre cookie (en secondes), donc un an dans notre cas
    $temps = 365*24*3600;

    // on envoie un cookie de nom pseudo portant la valeur de la variable $nom, c'est-à-dire la valeur qu'a saisi la personne qui a rempli le formulaire
    setcookie ("cookieCart", $_POST['submitCookie'], time() + $temps);

    // fonction nous permettant de faire des redirections
    $url = 'cart.php';
    function redirection($url){
        if (headers_sent()){
            print('<meta http-equiv="refresh" content="0;URL='.$url.'">');
        }
        else {
            header("Location: $url");
        }
    }

    // on effectue une redirection vers la page d'accueil
    redirection ('indexConnected.php');
}
?>


