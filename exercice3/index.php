<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Exercice3 Part6</title>
</head>
<body>
  <a href="index.php?startDate=2/05/2016&amp;endDate=27/11/2016"><button type="button" class="btn btn-success ">Date</button></a>
  <p>
    <?php
    if (!empty($_GET['startDate']) && !empty($_GET['endDate'])) {
      echo $_GET['startDate'] .' '. $_GET['endDate'];
    }
    ?>
  </p>
</body>
</html>
