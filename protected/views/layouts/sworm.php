<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo CHtml::encode($this->pageTitle);?></title>
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseurl;?>/css/styles.css" type="text/css" />
</head>
<body>
<div id="container">
	<div id="header">
            <h1><a href="/">Notar&iacute;a Cuatro</a></h1>
        <h2>EDUARDO ROMERO RAMOS</h2>
        <div class="clear"></div>
    </div>
   
    
    <div id="nav">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
                                array("label"=>"Clientes", "url"=>array("/empresa/index")),
                                array("label"=>"Hola", "url"=>array("/empresa/hola")),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
                        "activeCssClass" => "selected",
                        "firstItemCssClass" => "start",
                        "lastItemCssClass" => "end",
                        "id" => false,
		)); ?>
    </div><!-- mainmenu -->
	
    
    <div id="body">
        
        
        <?php echo $content; ?>

     
    </div>
    <div id="footer">
        <div class="footer-content">
            <ul>
            	<li><h4>Proin accumsan</h4></li>
                <li><a href="#">Rutrum nulla a ultrices</a></li>
                <li><a href="#">Blandit elementum</a></li>
                <li><a href="#">Proin placerat accumsan</a></li>
                <li><a href="#">Morbi hendrerit libero </a></li>
                <li><a href="#">Curabitur sit amet tellus</a></li>
            </ul>
            
            <ul>
            	<li><h4>Condimentum</h4></li>
                <li><a href="#">Curabitur sit amet tellus</a></li>
                <li><a href="#">Morbi hendrerit libero </a></li>
                <li><a href="#">Proin placerat accumsan</a></li>
                <li><a href="#">Rutrum nulla a ultrices</a></li>
                <li><a href="#">Cras dictum</a></li>
            </ul>
            
            <ul class="endfooter">
            	<li><h4>Suspendisse</h4></li>
                <li><a href="#">Morbi hendrerit libero </a></li>
                <li><a href="#">Proin placerat accumsan</a></li>
                <li><a href="#">Rutrum nulla a ultrices</a></li>
                <li><a href="#">Curabitur sit amet tellus</a></li>
                <li><a href="#">Donec in ligula nisl.</a></li>
            </ul>
            
            <div class="clear"></div>
        </div>
        <div class="footer-bottom">
            <p>&copy; YourSite 2010. Design by <a href="http://www.spyka.net">Free CSS Templates</a> | <a href="http://www.justfreetemplates.com">Free Web Templates</a></p>
         </div>
    </div>
</div>
</body>
</html>
