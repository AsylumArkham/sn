Hola, este es un menu generado por la clase CMENU:<br>


<?php


$this->widget('zii.widgets.CMenu', array(
   'items' => array(
       array("label"=>"Home", "url"=>array("index")),
       array("label"=>"Cliente1", "url"=>array("view", "id"=>1)),
       array("label"=>"Contact", "url"=>array("/site/contact")),
       
   ),
   'htmlOptions' => array("class" => "nav")
    
    
));
?>
