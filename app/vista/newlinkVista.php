<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Añadir Link</title>
    </head>
    <body>

        <h3>Añadir Link</h3>
        <form action="<?php echo $ayuda->url("link", "addLink")?>" method="POST">
            <label for="titulo">Título</label>
            <input type="text" name="titulo">
            <br>
            <label for="link">Link</label>
            <input type="text" name="link">
            <br>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>

