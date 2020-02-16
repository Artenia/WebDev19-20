<?php
//La classe parent, nécessaire pour l'héritage
require_once('./vendors/smarty/Smarty.class.php');
define("JS_DIR", "./views/js/");
define("CSS_DIR", "./views/css/");
class SmartyLoader extends Smarty
{
    //La configuration de smarty est directement injectée dans le constructeur,
    //plus besoin de la spécifiée à la main.
    public function __construct()
    {
        parent::__construct();
        $this->template_dir = './views/templates';
        $this->compile_dir = './views/templates_c';
        $this->config_dir = './views/configs/';
        $this->cache_dir = './views/cache/';
    }

    //La méthode getHeader affiche le rendu du template de notre header
    //Il prends en paramètre plusieurs propriétés :
    // $assets contenant un tableau de chemin d'accès vers nos fichier js et css
    // $bootstrap contenant un boolean afin d'activer ou non la librairie Bootstrap
    // $title contenant le titre de la page sous forme de chaîne de caractère
    public function getHeader($assets = array("css" => array(), "js" => array()), $bootstrap = false, $title="New page")
    {
        $assets['css'][]='./views/css/global.css';
        $this->assign(array(
            'title' => $title,
            'assets' => $assets,
            'bootstrap' => $bootstrap,
        ));
        $this->display('header.tpl');
    }

    //La méthode getFooter affiche le rendu du template de notre footer
    public function getFooter()
    {
        $this->assign(array(
        ));
        $this->display('footer.tpl');
    }
}