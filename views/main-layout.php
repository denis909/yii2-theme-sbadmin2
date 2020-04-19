<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;

$this->registerJs('$(document).on("click", "#sidebarToggle", function() {

    if ($(".sidebar").hasClass("toggled")) 
    {
        document.cookie = "sbadmin2_sidebar_toggled=1";
    }
    else
    {
        document.cookie = "sbadmin2_sidebar_toggled=0";
    }
});');

if (array_key_exists('sbadmin2_sidebar_toggled', $_COOKIE) && ($_COOKIE['sbadmin2_sidebar_toggled'] == 1))
{
    $this->params['bodyClass'] = trim(ArrayHelper::getValue($this->params, 'bodyClass') . ' sidebar-toggled');

    $sidebarToggled = true;
}
else
{
    $sidebarToggled = false;
}

$theme->beginLayout();

?>

<!-- Page Wrapper -->
<div id="wrapper">

<?php require __DIR__ . '/_menu.php';?>

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

  <!-- Main Content -->
  <div id="content">

    <?php require __DIR__ . '/_topbar.php';?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= Html::encode($this->title);?></h1>
        <?php

        if (!empty($this->params['actionMenu']))
        {
            echo '<div>';

            echo Yii::$app->backendTheme->actionMenu(['items' => $this->params['actionMenu']]);
        
            echo '</div>';
        }

        ?>
      
        <?php
        /*  
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
        */
        ?>
      </div>

        <?= $theme->alertMessages(['messages' => $successMessages, 'type' => 'success']);?>
        <?= $theme->alertMessages(['messages' => $infoMessages, 'type' => 'info']);?>
        <?= $theme->alertMessages(['messages' => $errorMessages, 'type' => 'error']);?>

        <?php if(array_key_exists('enableCard', $this->params) && $this->params['enableCard']):?>

            <div class="card shadow mb-4">
                <?php if(!empty($this->params['cardTitle'])):?>  
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"><?= $this->params['cardTitle'];?></h6>
                </div>
                <?php endif;?>
                <div class="card-body">                    
                    <?= $content;?>
                </div>
            </div>

        <?php else:?>

        <?= $content;?>

      <?php endif;?>

    </div>
    <!-- /.container-fluid -->

  </div>
  <!-- End of Main Content -->

<?php if($copyright):?>

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span><?= $copyright;?></span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

<?php endif;?>

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>

<?php require __DIR__ . '/_logout.php';?>

<?php $theme->endLayout();?>