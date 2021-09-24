<?php
    function doSomething()
    {
        $output = "";
            for ($i = 1; $i <= 1000000; $i++) {
            $output .= $i . ' Euro ' . '<br>';}
            return $output;
    }
    $value = doSomething();
?>
<html>
    <body>
        <?php echo $value; ?>
    </body>
</html>