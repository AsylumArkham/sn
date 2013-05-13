<?php

class EmpresaController extends Controller {
    
    public $layout = "//layouts/colu2";
    
    
    public function actionHola() {
        
     
        $m = "Hola desde PHP controller";
        
        $this->menu = array(
                array("label" => "Create Empresa", "url"=> array("create")),
                array("label" => "Delete Empresa", "url"=> array("delete")),
                array("label"=> "Editar", "url" => array("update", "id"=>2)),
            );
        
        $this->render("hola", array("mensaje" => $m));
        
    }
    
    
    public function actionIndex() {
        $dp = new CActiveDataProvider('empresa');
        
        $this->menu = array(
            array('label' => "Nuevo Cliente", 'url'=>array('create')),
            array('label' => "Administracion", 'url'=>array('admin')),
            
        );
        
        $this->render('index', array('dp' => $dp));
        
    }
    
    public function actionMenu(){
        
        $this->render("mymenu");
    }
    
    
    public function actionView() {
        if (isset($_GET['id'])) {
            
            
        } else {
            throw new CHttpException(404,'The id is required.');
        }
        
    }
    
    
}

?>
