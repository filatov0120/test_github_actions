<!DOCTYPE html>
<html>
<head>
  <title>Server address v1</title>
</head>
<body>
  <h1>Server address v1:</h1>
  <p>
    <?php
      // Получение IP-адреса сервера
      $serverAddress = $_SERVER['SERVER_ADDR'];
      echo $serverAddress;
    ?>
  </p>
</body>
</html>
