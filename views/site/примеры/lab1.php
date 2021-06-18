<html>
<head>
  <?php //$this->head() ?>
</head>

  <body>
      <?php //$this->beginBody() ?>
<div align="left" class="alert alert-success" role="alert"><h4>  Лабораторная работа №1</h4> </div>

<div class="container">
<div class="col-md-7 col-xs-12 main">

    <?php require "entry.php"; ?>
</div>

<div class="col-md-5 col-xs-12 sidebar">
    <?php //if (Yii::$app->session->hasFlash('success')):
          //if  (Yii::$app->session->has('name')):
          //if (isset($session['success'])):
          //if  (Yii::$app->session->has('name')):
          if (Yii::$app->request->post('EntryForm')):  ?>
          <?php  //debug($model); ?>
    <?php require "entry-confirm.php" ?>
    <?php  endif;   ?>
</div>
</div>
  </body>
<?php $this->endPage() ?>
</html>
