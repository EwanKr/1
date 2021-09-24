<?php
    $arrayImages = glob("images/*.{jpg,png,gif}", GLOB_BRACE);

    $gallery = null;
    foreach ($arrayImages as $key => $imagePath)
    {
        $gallery .= '<img class="img" src="'.$imagePath.'">';
    }
?>

<!DOCTYPE html>
<html>

    <style>
        #gallery{
            width: 360px;
            height: 240px;
            background-color: lightgrey;
            overflow: auto;
        }

        .img{
            height: 90px;
            float: left;
            border: grey solid 3px;
            margin 5px
        }

    </style>

<body>
    <h2>Volkswagen Golf</h2>
    <div id="gallery">
        <?= $gallery ?>
    </div>
</body>
</html>
