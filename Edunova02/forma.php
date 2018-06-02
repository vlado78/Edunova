<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foundation for Sites</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>
  
          <form>
            <div class="grid-x grid-padding-x">

              <div class="large-4 medium-4 cell">
                <label>Prvi broj</label>
                <input name="broj1" type="text" placeholder="Ovdje upiši prvi broj" />
              </div>

            </div>

            <div class="grid-x grid-padding-x">

              <div class="large-4 medium-4 cell">

                <label>Drugi broj</label>
                <input name="broj2" type="text" placeholder="Ovdje upiši drugi broj" />


              </div>
              <div class="large-4 medium-4 cell">
               
              </div>


              
              <div class="large-4 medium-4 cell">
                <div class="grid-x">
                  <input type="submit" class="button" value="Odradi" />
                </div>
              </div>
            </div>
           
           
            
          </form>
      
      <?php //print_r($_GET); 
      
      $rez = $_GET["broj1"] + $_GET["broj2"];

      echo (" Rezultat je   ").$rez;

      
      ?>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
