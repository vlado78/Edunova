<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
   
    <title>Foundation for Sites</title>
  </head>
  <body>
          <form action="rezultat.php" method="post">
                <label for="b1">Input Label</label>
                <input id="b1" name="broj1" type="text"  />

                <label>Input label
                    <input name="broj2" type="text" />
                </label>
               
               
                  <input type="submit" class="button" value="Odradi" />
               
          </form>
      
      <?php //print_r($_GET); 
      
      $rez = $_GET["broj1"] + $_GET["broj2"];

      echo $rez;
      ?>
  </body>
</html>
