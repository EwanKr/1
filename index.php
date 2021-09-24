<?php
    include 'lib/bootstrap.php';
    bootstrap('lib');

    $content = urltrigger();
?>

<!DOCTYPE html>
<html>
    <style>
        article {
            width: 360px;
            height: 240px;
            background-color: lightgrey;
            overflow: auto;
        }
        .img{
            height: 90px;
            float: left;
            border: grey solid 3px;
            margin: 5px;
        }

    </style>
    <body>
        <h2>PHP Website</h2>
        <nav>
            <a href="index.php?controller=home">home</a>
            <a href="index.php?controller=photos">gallery</a>
            <a href="index.php?controller=users">users</a>
        </nav>
        <article>
            <?= $content ?>
        </article>
    </body>
</html>
