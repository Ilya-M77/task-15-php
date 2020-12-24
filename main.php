<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/normalize.css">
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <?php include 'logo.inc.php' ?>
            <?php include 'menu.inc.php' ?>
        </header>

        <div class="main">
            <h1 class="main__title">
                <? echo $p ?>
            </h1>
            <div class="main__foto">
                <img src="img/foto.png" alt="ME">
            </div>
            <div class="main__data">
                <p>
                    <? echo "Меня зовут:  $name $surname" ?>
                </p>
                <p>
                    <? echo "Город: $city"?>
                </p>
                <p>
                    <? echo "Мне: $age года"?>
                </p>
            </div>

            <div class="main__knowledge">
                <?php  include 'knowledge.inc.php'; ?>
                <p class="know1">
                    <? echo "\$a = $a <br> \$b = $b <br> \$c = $c"?><br><br>
                    <?php   echo "$a $b $c" ?>
                </p>
                <p class="know2">
                    <?php
                        $a = 10;
                        $b = 20;
                        $c = $a + $b;
                        echo "\$a=$a <br> \$b=$b <br>\$c = \$a + \$b <br><br>\$c = $c";
                    ?>
                </p>
                <p class="know3">
                    <?php
                echo "\$number = 5 <br> gettype(\$number)<br><br><br> Выведет тип - $type -";
                ?>
                </p>
                <p class="know4">
                    <?php echo "\$price = 15; <br>
                        if(\$price >= 15 && \$price <= 20)"?><br><br>
                    <?echo $d?>
                </p>
            </div>
        </div>
        
        <div class="footer">
            <? include 'footer.inc.php' ?>
        </div>
    </div>
</body>

</html>