<?php

/**
 * Created by PhpStorm.
 * User: Daniel Lemos
 * Date: 11/10/2015
 * Time: 21:37
 */

namespace App;

use SON\Init\Bootstrap;

class Init extends Bootstrap
{


    protected function  initRoutes()
    {
        $ar['home'] = array('route'=>'/','controller'=>'index','action'=>'index');
        $ar['galeria'] = array('route'=>'/galeria','controller'=>'galeria','action'=>'galeria');
        $ar['release'] = array('route'=>'/release','controller'=>'release','action'=>'release');
        $ar['agenda'] = array('route'=>'/agenda','controller'=>'agenda','action'=>'agenda');
        $ar['contato'] = array('route'=>'/contato','controller'=>'index','action'=>'contato');
        $ar['selecionada'] = array('route'=>'/selecionada','controller'=>'selecionada','action'=>'selecionada');
        $ar['admin'] = array('route'=>'/admin');
        $this->setRoutes($ar);
    }
    
    public static  function  getDb()
    {
    	$db = new \PDO("mysql:host=mysql01.juliotorresfotografi.hospedagemdesites.ws;dbname=juliotorresfot", "juliotorresfot", "Manosgana1");
    	return $db;
    }
}