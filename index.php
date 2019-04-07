<?php
$title = "Главная";
require "navbar.php";

// проверка на соединение с БД
//if (!$mysqli) {
//    echo "нет соединения  с бд, ошибка - ". mysqli_connect_error();
//}
//else {
//    echo "все ок";
//}



//while ($r= mysqli_fetch_array($res)) {
//    echo $r['id'] . " ";
//    echo $r['name_rus'] . " ";
//    echo $r['vendor'] . "<br />";
//}

// не пойму почему это говно не вкл, но тут с левым меню,
// если да просто скопипастить
//require "bwlm.php";

//require "body.html";

require "body1.php";

require "footer.php";

