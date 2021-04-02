<?php


class SuperControleur
{
    public static function callPage($page){
        switch ($pages){
            case "connexion" :
                include_once("pages/connexion/ControleurConnexion.php");
            case"filtres":
                include_once("pages/filtres/controleurFiltres");
            case"commande":
                include_once ("pages/commande/controleurCommande");
            case"compte":
                include_once ("pages/infoCompte/controleurCompte");
            case"contact":
                include_once ("pages/formulaireContacte/controleurContact");
            case"commantaire":
                include_once ("pages/commentaires/controleurCommande");
        }
    }
}