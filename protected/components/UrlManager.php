<?php

class UrlManager extends CUrlManager
{
    public function createUrl($route,$params=array(),$ampersand='&')
    {
        return parent::createUrl($route, $params, $ampersand);
    }//end of createUrl
}//end of UrlManager
?>