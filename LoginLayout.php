<?php

namespace denis909\sbadmin2;

class LoginLayout extends \yii\base\Widget
{

    public $content;

    public $theme;

    public function run()
    {
        return $this->render('login-layout', [
            'content' => $this->content,
            'theme' => $this->theme
        ]);
    }

}