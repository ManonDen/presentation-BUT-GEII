<?php 

define("URL",str_replace("index.php","","http"."://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));

// si lutilisateur est nulle part dans url page accueil
if(empty($_GET["page"])){
    header("Location:".URL."accueil");
}
else{
    $url=explode("/",filter_var($_GET["page"],FILTER_SANITIZE_URL));
    
    switch($url[0]){
        case "accueil":
            require "views/accueil.view.php";
            break;
        case "geii":
            require "views/butgeii.view.php";
            break;
        case "iut":
            require "views/iut.view.php";
            break;
        case "associations":
            require "views/asso.view.php";
            break;
        case "sae-alternance":
            require "views/sae-alternance.view.php";
            break;
        default:
            header("Location:".URL."accueil");
            break;
    }
    

}