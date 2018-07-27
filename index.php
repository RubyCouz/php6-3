<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 3</title>
  </head>
  <body>
    <p>

    <?php
    if (isset($_GET['startDate']) && isset($_GET['endDate'])) // si on a le les deux paramêtres, test les variable startDate et endDate
    {
echo $_GET['startDate'] . ' ' . $_GET['endDate'];
} else //manque de paramêtre
{
  echo 'manque de renseignement';
}
     ?>
   </p>
  </body>
</html>
