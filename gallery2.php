<?php
    function gallery($path='/', $extensions='png')
    {
        $arrayImages = glob($path . "/*.{" . $extensions . "}", GLOB_BRACE);
        $render = null;
        foreach ($arrayImages as $key => $imagePath) {
            $render .= '<img class="img" src="' . $imagePath . '">';
        }
        return $render;
    }

    $gallery = gallery('images','jpg');
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
