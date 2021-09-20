<?php
//i18n - textes du site du restaurants

//Méta information sur la page
/*$titre = [
    "accueil" => "Bienvenue",       //étiquettes ont le mm noms que $page
    "vins" => "Carte de vins",
    "menu" => "Menu"
];

$description = [
    "accueil" => "Restaurant Leila - Montréal",
    "vins" => "",
    "menu" => ""
];*/

// !!!!!!!!!!!! TRUC DU PROF !!!!!!!!!!!!!!! + changer dans entete


$meta = [
    'accueil'   =>  [
                        'titre' =>  "Bienvenue",
                        'desc'  =>  "Restaurant Leila - Montréal",
                        'h1'    =>  "Leila"
                    ],
    'vins'      =>  [
                        'titre' =>  "Carte des vins",
                        'desc'  =>  "Carte des vins du restaurant Leila à Montréal. Carte variée, incluant des vins d'importation privée sélectionnés par notre sommelier.",
                        'h1'    =>  "Vins"
                    ],
    'menu'      =>  [
                        'titre' =>  "Menu",
                        'desc'  =>  "Menu du restaurant Leila à Montréal. Un menu eclectique et raffiné, combinant créativité et tradition. Produits locaux et spécialités du terroir québécois.",
                        'h1'    =>  "Menu"
                    ]
];

//Entête
//si yen a bcp, mettre préfixe
$en_sousTitre = "CUISINE BISTRONOMIQUE";
$en_heuresOuverture = "Ouvert aujourd'hui jusqu'à 23 h";
$en_adresse = "275 rue Notre-Dame Est, Montréal, Québec";
$en_telephone = "(514) 958-2580";
$en_titreMenu = "Les menus";
$en_titreVins = "Carte des vins";
$en_titreReservation = "Réservation en ligne - à venir";

//Pied de page
$pp_infos = "Info pratique";
$pp_heuresCuisine = "Cuisine ouverte de 11 h à 22 h.";
$pp_heuresCuisine2 = "Fermé le lundi.";
$pp_etiquetteReservation = "Pour réservation : ";
$pp_titreCarte = "Cliquez ici pour localiser le restaurant sur Google Maps";
$pp_altCarte = "Carte";

//Accueil
$acc_titrePage = "Cuisine créative de saison";
$acc_introImgAlt = "En cuisine";
$acc_introP1 = "Cette maison feutrée située à deux pas du Centre des sciences de Montréal offre un charme indéniable. Sa déco coloniale et son cadre chic lui confèrent une atmosphère cosy et feutrée particulièrement appréciée d’une clientèle exigeante. Assisté en salle de son charmant partenaire Léandre, Clémentine Matuvu propose une cuisine très personnelle. Cheffe d’une insatiable curiosité, elle revisite ses classiques avec talent et n’hésite pas à sortir des sentiers battus tout en respectant les saisons et leurs produits avec le marché comme source d’inspiration. Très agréable jardin en saison.";
$acc_introP2 = "Un immeuble parmi les plus anciens de la ville dans... la rue Neuve, cela ne s'invente pas ! La cheffe, passionnée par son métier et le vin, joue à fond la carte de la « bistronomie », en misant sur des produits du marché de très belle qualité. Un délice... comme la terrasse estivale";

//Carte de vins
$vin_frmEtiquette = "Recherche : ";
$vin_frmPlaceholder = "Par pays (exemples : Québec, France, Espagne)";
?>