<?php namespace App\Controllers;

class Main extends BaseController{


    public function index()
    {
        $parser = \Config\Services::parser();
        $dados = array(

            'title'   => 'Pagina Principal',
            'othercss' => ''
        );
        
        echo view('teste',$dados);
    }
}