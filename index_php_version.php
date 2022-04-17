<?php
    require __DIR__ . '/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato&display=swap">
    <title>Php Dischi</title>
</head>
<body>
    <div id="app">
        <header>
            <div class="container" id="header-container">
                <div class="header-left">
                    <img src="http://pluspng.com/img-png/spotify-logo-png-open-2000.png" alt="">
                </div>
                <div class="header-right">
                </div>
            </div>
        </header>

        <main>
            <div class="container">
                <div id="discs-container">

                    <?php
                        foreach($database as $disco) {
                            echo"<div class='disc'>
                                <img src='".$disco['poster']."' alt=''>
                                <h3>".$disco['title']."</h3>
                                <small>".$disco['author']."</small>
                                <strong>".$disco['year']."</strong>
                            </div>";  
                        }
                    ?>
                </div>
            </div>
        </main>
    </div>
</body>
</html>