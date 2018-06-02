<!doctype html>
<html class="no-js" lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hello world</title>
        <link rel="stylesheet" href="css/foundation.css">
        <link rel="stylesheet" href="css/app.css">
    </head>
    <body>
        <div class="grid-x">
            <div class="cell">
                <div class="alert callout">
                    
                    <?php
                    
                    echo "<h1>Hello world</h1>";
                    
                    
                    ?>
                
                </div>
            </div>
            <div class="cell">
                <div class="success callout">
                <?php 
                    
                    echo 'Pod jednostrukim staviti dvostruke "AAA"';
                    
                    ?>
                </div>
            </div>
        </div>
        <div class="grid-x">
            <div class="cell small-6">
                <div class="warning callout">
                <?php 
                    
                    echo '<span style="color: red;">Boja</span>';
                    
                    ?>
                </div>
            </div>
            <div class="cell small-6">
                <div class="warning callout">
                    <?php echo "ovo su \" navodnici"; ?>
                
                </div>
            </div>
        </div>
        <div class="grid-x">
            <div class="cell medium-6 large-4">
                <div class="alert callout"><?php 
                    print "Pero";
                    ?></div>
            </div>
            <div class="cell medium-6 large-8">
                <div class="alert callout">12/6/8 cells PODEBLJAN TEKST</div>
            </div>
        </div>

        <script src="js/vendor/jquery.js"></script>
        <script src="js/vendor/what-input.js"></script>
        <script src="js/vendor/foundation.js"></script>
        <script src="js/app.js"></script>
    </body>
</html>
