<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Exercice3 Part6</title>
</head>
<body>
  <a href="index.php?language=PHP&amp;server=LAMP"><button type="button" class="btn btn-success ">Language</button></a>
  <p>
    <?php
    if (!empty($_GET['language']) && !empty($_GET['server'])) {
      echo $_GET['language'] .' '. $_GET['server'];
    }
    ?>
  </p>
</body>
</html>
