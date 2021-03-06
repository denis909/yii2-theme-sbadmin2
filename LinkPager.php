<?php

namespace denis909\themes\sbadmin2;

class LinkPager extends \yii\widgets\LinkPager
{

    public $options = ['class' => 'pagination', 'style' => 'justify-content: flex-end;' /*'style' => 'display: inline-flex;'*/];

    public $pageCssClass = 'paginate_button page-item';

    public $linkOptions = ['class' => 'page-link'];

    public $disabledListItemSubTagOptions = ['tag' => 'a', 'class' => 'page-link', 'href' => '#'];

    public $prevPageCssClass = 'paginate_button page-item previous';

    public $nextPageCssClass = 'paginate_button page-item next';

}