<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Testando routing</title>
  </head>
  <body>
    Bom dia, você está na página INDEX!
    <br><br><br>

    <a href="<?php echo $view['router']->path('carol'); ?>">clique aqui para ir para outra página</a>
  </body>
</html>
