<?php
require "../lib/smarty/Smarty.class.php"; // On inclut la classe Smarty

/**
 * Represents a disease
 */
class Disease
{
    public $name;
    public $type;
    public $meridian;

    /**
     * Construct
     */
    public function __construct($name, $type, $meridian)
    {
        $this->name = $name;
        $this->type = $type;
        $this->meridian = $meridian;
    }
}

$diseases = array(
    new Disease("méridien du poumon externe", "me", "Yin Qiao Mai"),
    new Disease("méridien du poumon interne", "mi", "Yin Wei Mai"),
    new Disease("voie luo du poumon pleine", "lp", "Yang Qiao Mai"),
    new Disease("voie luo du poumon vide", "lv", "Yang Wei Mai"),
    new Disease("jing jin du poumon", "j", "Coeur"),
    new Disease("zang poumon plein", "tfp", "Coeur"),
    new Disease("zang poumon vide", "tfv", "Coeur"),
    new Disease("zang poumon chaud", "tfc", "Coeur"),
    new Disease("zang poumon froid", "tff", "Coeur"),
    new Disease("méridien du gros intestin externe", "me", "Coeur"),
    new Disease("méridien du gros intestin interne", "mi", "Coeur"),
    new Disease("voie luo du gros intestin pleine", "lp", "Chong Mai"),
    new Disease("voie luo du gros intestin vide", "lv", "Chong Mai"),
    new Disease("jing jin du gros intestin", "j", "Chong Mai"),
    new Disease("fu gros intestin plein", "tfp", "Chong Mai"),
    new Disease("fu gros intestin vide", "tfv", "Dai Mai"),
    new Disease("fu gros intestin chaud", "tfc", "Du Mai"),
    new Disease("fu gros intestin froid", "tff", "Du Mai"),
    new Disease("méridien de l'estomac externe", "me", "Du Mai"),
    new Disease("méridien de l'estomac interne", "mi", "Estomac"),
    new Disease("voie luo de l'estomac pleine", "lp", "Estomac"),
    new Disease("voie luo de l'estomac vide", "lv", "Estomac"),
    new Disease("jing jin de l'estomac", "j", "Estomac"),
    new Disease("fu estomac plein et chaud", "tfpc", "Estomac"),
    new Disease("fu estomac vide et froid", "tfvf", "Estomac")
);

require "layout.php";

$smartyTemplate->assign('diseases', $diseases);
$smartyTemplate->assign('currentPage', "pathologies");
$smartyTemplate->assign('stylesheets', ["diseases.css"]);
$smartyTemplate->assign('scripts', ["diseases.js"]);
$smartyTemplate->display("diseases.tpl");
