<html>
  <head>

  </head>
  <body>

    <div align="left" class="alert alert-success" role="alert" style="font-size:18px">Лабораторная работа №3
    </div>
    <?php
    $hash=Yii::$app->getSecurity()->generatePasswordHash('1234567');
    echo $hash;
    ?>
  </div>

  </body>

</html>
