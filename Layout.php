<?php

namespace denis909\sbadmin2;

class Layout extends \yii\base\Widget
{

    public $content;

    public $theme;

    public function run()
    {
        return $this->render('layout', [
            'content' => $this->content,
            'theme' => $this->theme
        ]);
    }

}