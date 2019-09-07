<?php

namespace denis909\sbadmin2;

class MainLayout extends \yii\base\Widget
{

    public $content;

    public $theme;

    public $actionMenu;

    public $mainMenu;

    public $enableCard;

    public $cardTitle;

    public $user;

    public $logoutUrl = ['/site/logout'];

    public function run()
    {
        return $this->render('main-layout', [
            'content' => $this->content,
            'theme' => $this->theme,
            'actionMenu' => $this->actionMenu,
            'mainMenu' => $this->mainMenu,
            'enableCard' => $this->enableCard,
            'cardTitle' => $this->cardTitle,
            'user' => $this->user,
            'logoutUrl' => $this->logoutUrl
        ]);
    }

}