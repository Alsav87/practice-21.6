<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="flex-container">
        <div class = "header">
            <?php include 'logo.inc.php' ?>
            <?php include 'menu.inc.php' ?>
        </div>
        <div class = "about_me">
            <h1> <?php echo $p ?> </h1>

                <div class = "data">
                    <div class = "myImg">
                        <?php
                        echo '<img src="img/php.jpg">';
                        ?>
                    </div>
                    <div class = "fullname">
                        <p>Меня зовут
                            <?php echo $name, '',$surname . '<br>';
                                    echo 'город', '',$city; ?>
                            </p>
                        <p> Мне
                        <?php echo $age; ?>
                        года </p>
                        <p> Мы научились создавать переменные </p>
                        <p> Изучили простые операции с ними </p>
                    </div>
                </div>
                <div class = "knowledge">
                    <?php include 'knowledge.inc.php'; ?>
                    <?php
                    echo $a, '',$b,'',$c;
                    ?> <br>

                    <?php
                        $a= 20;
                        $b= 50;
                        $c= $a + $b;
                        echo $c;
                    ?>  <br>

                    <?php
                        echo $d;
                    ?>
                </div>

                <div class="article">
                    <p class ="text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                    </p>
                </div>
                <?php include 'footer.inc.php'?>
    </div>
    
</body>
</html>