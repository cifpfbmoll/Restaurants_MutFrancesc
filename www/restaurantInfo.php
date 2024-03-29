<?php session_start();?>
<!DOCTYPE html>
<html>

    <?php
        include 'structure/navbar.php';
        include 'structure/footer.php';
        include 'content/getRestaurants.php';
    ?> 

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Espardenya's Testing Area</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="style/sticky-footer.css" rel="stylesheet"> 
    </head>
    
    <body class="bg-light containter">
        
        <?php navbar()?>

        <?php //Setting up object Restaurant from which we'll withdraw our information ?>
        <?php $id = $_GET["restid"]; $restaurant = getRestaurant($id); ?>

        <div class="p-3 mx-auto">
            <div class = "row">
                <div class = "col-sm-2">
                    <img src=<?php print($restaurant->img) ?> class="card-img">
                </div>
                <div class = "col">
                    <div>
                        <h4><?php print($restaurant->name)?></h4>
                    </div>
                    <div >
                        <p style = "text-align: justify; padding: 1%;"><?php print($restaurant ->desc)?></p>
                    </div>
                </div>
                <div class = "col-sm-4">
                    <p>Contact at: <?php print($restaurant->phone)?></p>
                    <p>Address info: <?php print ($restaurant->addr)?></p>
                </div>
            </div>
        </div>

        <?php footer(); ?>

        
    </body>
    
</html>