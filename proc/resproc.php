<?php
//echo $_POST['Pokemon'];
if ($_POST['Pokemon']=='pikachu') {
    header('Location: ../view/pantalla1.php');
} else {
    header('Location:../index.html?msg=25');
}

?>