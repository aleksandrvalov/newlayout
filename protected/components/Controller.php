<?php
/*
 * Расширяем класс CController
 */

class Controller extends CController {

    // Шаблон
    public $layout = '//layouts/site';
    //массив хлебных крошек
    public $breadcrumbs = array();

    /*
     * Переопределяем конструктор
     */

    public function __construct($id, $module = null) {
        parent::__construct($id, $module);
    }

    
}

//end of Controller