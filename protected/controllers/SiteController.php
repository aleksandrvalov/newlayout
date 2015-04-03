<?php

class SiteController extends Controller {

   public $layout = 'main';
    
   public function actionIndex(){ 
       $this->render('object_list');
   }
   
   /**
     * Экшн - обработчик исключений
     */
    public function actionError() {
        if ($error = Yii::app()->errorHandler->error) {
            echo $error['message'];
        }//if
    }//end of error

}

//end of site