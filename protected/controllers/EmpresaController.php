<?php

class EmpresaController extends Controller {
    
    public function actionHola() {
        $this->layout = "//layouts/sworm";
        
        $m = "Hola desde PHP controller";
        
        $this->menu = array("");
        
        $this->render("hola", array("mensaje"=>$m));
        
    }
    
    
    public function actionIndex() {
        $dp = new CActiveDataProvider('empresa');
        $this->render('index', array('dp' => $dp));
        
    }
    
    
    public function actionView() {
        if (isset($_GET['id'])) {
            
            
        } else {
            throw new CHttpException(404,'The id is required.');
        }
        
    }
    
    
    
    
}

?>
