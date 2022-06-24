        <?php include "php_primer/header.php" ?>
        <h1>Hello HTML - PHP Primer</h1>
        <br>
        <?php
            echo "Hello PHP!";
            echo "<br>";
            echo "Second line";
            echo "<br>";
        ?>

        <?php
            $name = "Rithysak Korng";
            $age = 11;
            echo $name;
            echo "<h1>My name is $name</h1>";
            echo "<h1>My age is $age</h1>";
        ?>

        <?php require "php_primer/footer.php"?>