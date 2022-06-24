        <?php include "php_primer/header.php" ?>
        <?php
            $grade = 0;
            while($grade < 15){
                echo '<p>I AM LESS THAN 10!</p>';
                $grade++;
            }
            echo 'EXIT LOOP!';
        ?>

        <h1>DO-While LOOP</h1>
        <?php
            $grade = 0;
            do{
                echo '<p>I AM DO WHILE LOOP</p>';
                $grade++;
            }while($grade < 10);
            echo 'EXIT LOOP!';
        ?>

        <h1>Arrays</h1>
        <?php
            $title = "All courses";
            $num = 3;
            $numbers = array(1,2,3,4,5,6,7,8,101,2,65,78,4,65,65,68,65,65,657);
            echo $numbers[5];
            echo "<p>$numbers[9]</p>";
            $size = count($numbers);
            echo "<p>Array Numbers is size: $size</p>";
            for($count = 0; $count < $size; $count++){
                echo "$numbers[$count]";
            }
        ?>
        <?php
            $phrase1 = "Student who came late";
            $phrase2 = "in classs, stand with Rock";
            $name = "trevoir williams";
            echo $phrase1 . "; named Tiffany, ". $phrase2;
            echo '<br>';

            echo 'Uppercase first letter: '. ucfirst($name) . '<br>';
            echo 'Uppercase first letter of each word: ' . ucwords($name) . '<br>';
            echo 'Uppercase: ' . strtoupper($name) . '<br>';
            echo 'Lowercase: ' . strtolower("THIS WAS ALL UPPERCASE") . '<br>';
            echo '<hr>';
            echo 'Repeat String: ' . str_repeat('a',10) . '<br>';
            echo 'Repeat String - Nested Function : ' . strtoupper(str_repeat('a',10)) . '<br>';
            
        ?>
        <?php
            echo '<hr>';

            $datenow = getdate();
            echo "Today's date: <br>";
            echo $datenow['mday'] . '<br>';
            echo $datenow['mon'] . '<br>';
            echo $datenow['year'] . '<br>';
            echo '<hr>';

            echo "Today's date: ". $datenow['mday'] . '/' . $datenow['mon'] . '/' . $datenow['year'] . '<br>';
            echo '<hr>';

            echo time(). '<br>';
            echo '<hr>';

            print date("m/d/y G.i:s<br>", time()) . '<br>';
            echo '<hr>';
            print "Today is ";
            print date("j of F Y, \a\\t g.i a", time());
            echo '<hr>';
        ?>

        <h1>Functions</h1>
        <?php
            function writeMessage() {
                echo "You are a really nice person, Have a nice time! <br>";
            }

            writeMessage();
            
            echo"<hr>";

            function addFunction($num1, $num2){
                $sum = $num1 + $num2;
                echo "The sum of $num1 and $num2 is: $sum <br>";
            }
            function changeNum($num){
                $num = $num + 10;
            }
            function returnProduct($num1, $num2){
                $prod = $num1 + $num2;
                return $prod;
            }
            $num = 500;
            addFunction(10, 20);
            addFunction(10, $num);
            addFunction('10', '50');

            changeNum($num);
            echo $num . '<br>';

            $return_value = returnProduct(10, 200);
            echo $return_value . '<br>';
        ?>
        <?php include "php_primer/footer.php" ?>