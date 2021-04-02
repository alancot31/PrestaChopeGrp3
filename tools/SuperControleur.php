<?php


class SuperControleur
{
    public static function callPage($page){
        switch ($pages){
            case "connexion" :
                include_once("pages1/connexion/ControleurConnexion.php");
            case"filtres":
                include_once("pages1/filtres/controleurFiltres");
            case"commande":
                include_once("pages1/commande/controleurCommande");
            case"compte":
                include_once("pages1/infoCompte/controleurCompte");
            case"contact":
                include_once("pages1/formulaireContacte/controleurContact");
            case"commantaire":
                include_once("pages1/commentaires/controleurCommande");
        }
    }
}