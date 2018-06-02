<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Zadatak 2</title>
    <style>
        p{
            display: block;
        }
        p.labela{
            font-size: 1em;
        }
        p.vrijednost{
            font-size: 3em;
        }
    </style>
  </head>
  <body>
          <p class="labela">Broj cipela</p>
          <p class="vrijednost"><?php echo $_REQUEST["brojCipela"] ?></p>
          <p class="labela">Visina</p>
          <p class="vrijednost"><?php echo $_REQUEST["visina"] ?></p>
  </body>
</html>
