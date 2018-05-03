<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Links APP</title>
    </head>
    <body>
        <h3>Lista de links</h3>
        <?php
        foreach ($selectAll as $link) {
            echo $link->TITULO." - <a href='". $link->LINK ."' target='_blank'>Enlace<a><br>";
        }
        ?>
        <a href="<?php echo $ayuda->url("link", "newlink");?>">Añadir link</a>

    </body>
</html>