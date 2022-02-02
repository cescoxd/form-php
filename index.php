<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio de datos</title>
</head>
<body>
    <h1>Formulario para enviar datos</h1>
    <form action="proc/resproc.php" method="post">
        <input type="text" name="Pokemon" placeholder="Inserte Pokemon...">
        <input type="submit">
    </form>
    <?php
    if (isset($_GET['msg'])) {
        echo '<p>Intenta con el pokemon #' $_GET['msg'].'</p>';
    }
    ?>
</body>
</html>