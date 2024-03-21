<?php
/**
* Main Controller Class
*   for Admin
* Mostly for this controller will resulting HTTP Body Content in HTML format
*
* @version 1.0.0
*
* @package Controller\Admin
* @since 1.0.0
*/
class Artikel_19 extends \SENE_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->setTheme('front');
    }
    public function index()
    {
        $data = array();
        $this->setTitle("Home Admin");
        
        // $this->putJsContent("artikel_2/artikel_bottom", $data);
        $this->putThemeContent("artikel/artikel19", $data);

        $this->loadLayout('col-1', $data);
        $this->render();
    }
}