<?php
/**
 * Class BaseController
 * Classe abstraite servant de modèle à nos controllers
 */
abstract class BaseController
{
    protected $name = 'base';
    protected $smarty;

    /**
     * BaseController constructor.
     */
    public function __construct()
    {
        $this->smarty = new SmartyLoader();
        $this->renderView();
    }


    /**
     * Cette méthode gère la logique permettant l'affichage de la vue associée à ce controller.
     * @throws SmartyException
     */
    protected function renderView()
    {
        $this->smarty->getHeader($this->getAssets(), true, $this->name); // Affichage du header via SmartyLoader.
        $this->smarty->assign($this->getTemplateVars()); // Assignation des variables nécessaires à notre vue.
        $this->smarty->display(strtolower($this->name).'.tpl'); // Rendu propre à notre controller.
        $this->smarty->getFooter(); // Affichage du footer via SmartyLoader.
    }

    /**
     * @return array
     * Retourne un tableau structurée contenant les chemins d'accès aux fichiers js et css nécessaire à la vue de notre controller.
     */
    protected function getAssets()
    {
        return $assets = array(
            "css" => array(),
            "js" => array()
        );
    }

    /**
     * @return array
     * Retourne un tableau contenant les différentes variables nécessair à la vue de notre controller.
     */
    protected function getTemplateVars()
    {
        return array(
            "controller" => $this->name,
        );
    }
}