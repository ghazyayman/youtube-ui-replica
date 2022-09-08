<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
<body>

    <?php 
    class Chef {
        function makeChicken(){
            echo "The chef makes chicken <br>";
        }
        function makeSalad(){
            echo "The chef makes salad <br>";
        }
        function makeSpecialDish(){
            echo "The chef makes bbq ribs <br>"; 
        }
    }
    class ItalianChef extends Chef{
        function makePasta(){
            echo "The chef makes pasta";
        }
        function makeSpecialDish(){
            echo "The chef makes chicken parm";
        }
    }
    $chef = new Chef();
    $chef->makeSpecialDish();
 
    $italianChef = new ItalianChef();
    $italianChef->makeSpecialDish();

    ?>

</body>
</html>