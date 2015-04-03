<div class="pl10pr10">
    <div class="topmenu" style='height: 25px; max-height: 25px;  min-height: 25px;'>
        <div class="toleft inlineblock " style="padding-top: 4px; padding-right: 10px;">
            <?php echo CHtml::link('Отзывы', array('/catalog/articleshow/review'), array('class' => 'b-r b-grey')); ?>
            <?php echo CHtml::link('Блоги', array('/catalog/articleshow/blogs'), array('class' => 'b-r b-grey')); ?>
            <?php echo CHtml::link('Статьи', array('/catalog/articleshow/index'), array('class' => 'b-r b-grey')); ?>
            <?php echo CHtml::link('Фотографии', array('/catalog/articleshow/photos'), array('class' => 'b-r b-grey')); ?>      
            <?php echo CHtml::link('Программа для ведения учета в отеле', 'http://smartyhotel.ru', array('class' => 'orangetext ')); ?>
        </div>

        <div class="toright inlineblock " style="padding-top: 5px;">
            <?php
            echo CHtml::link('Регистрация', 'javascript:void(0);', array('id' => 'registration_run', 'class' => 'toright in'));
            echo CHtml::link('Вход', 'javascript:void(0);', array('id' => 'auth_menu_run', 'class' => 'b-r b-grey toright in'));
            ?>
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/al.gif" class="toright inlineblock" style="margin-top: -5px; display: none;" id="page_loader">
        </div>

        <div class="toright" style=" ">
            <a style="display: block; margin-top: border:none;" onclick="yaCounter24783941.reachGoal('wid');" target="_blank" 
               href="#"><img src="http://img.yandex.net/i/service/wdgt/yand-add-b.png" 
                          border="0" alt="добавить на Яндекс"/></a>
        </div>


    </div>
</div>


