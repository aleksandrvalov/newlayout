<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />	
       
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/layout.css" rel="stylesheet">
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/layoutfix.css" rel="stylesheet">
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/sharefix.css" rel="stylesheet">

    </head>
    <body >
        <div class="main_container container_border">
         <?php $this->widget('application.components.widgets.Topnavbar'); ?>
         <?php  $this->beginWidget('application.components.widgets.Logoblock'); ?>
	<?php  $this->endWidget(); ?>
         <?php $this->widget('application.components.widgets.Sectionmenu'); ?>
      
        
         <div class="aritex_container ">
            
            <div class="main_block toleft border-dot-right">
			
                 <div class=""> 
         <?php
            if(isset($this->breadcrumbs))
                $this->widget('zii.widgets.CBreadcrumbs', array(
                    'links' => $this->breadcrumbs,
                    'separator' => ' / ',
                    'htmlOptions'=>array('class'=>'greytext w100 mb15'),
                ));
         ?>
	

         </div>
                <?php echo $content;?>
            </div>
			<div class="left_block">
               
                <?php //$this->widget('application.modules.catalog.components.widgets.Typemenu');?>
             <?php
                            
                            ?>
                <div style="padding-left: 10px;">
                <?php //$this->widget('application.modules.catalog.components.widgets.LeftPreview');?>
				</div>
            </div>
            
        </div>
               <?php //$this->widget('application.modules.catalog.components.widgets.Footer'); ?>  
                
                <?php
//                $this->widget('application.modules.catalog.components.widgets.Modalwindow', array(
//                    'type' => 1,
//                ));
                ?>
                  
         
        </div>
    </body>
</html>