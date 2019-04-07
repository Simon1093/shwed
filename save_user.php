<?
$title = "Регистрация";
require "navbar.php";?>

<?php
if (isset($_POST['name_registration'])) {
    $name_registration = $_POST['name_registration'];
    if ($name_registration == '') {
        unset($name_registration);
        }
} //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
if (isset($_POST['email_registration'])) {
    $email_registration=$_POST['email_registration'];
    if ($email_registration =='') {
        unset($email_registration);} }
if (isset($_POST['password_registration'])) {
    $password_registration=$_POST['password_registration'];
    if ($password_registration =='') {
        unset($password_registration);} }


if (empty($name_registration) or empty($email_registration)or empty($password_registration)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
{?>
    <div class="container ">
        <div class="row text-center mt-3 ">
            <div class="col">
                <div class=" alert alert-danger  justify-content-center mt-5  ">
                    <?echo ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");?>
                    <br>
                    <a href="registration.php" > ВЕРНУТЬСЯ К РЕГИСТРАЦИИ.</a>
                </div>
            </div>
        </div>
    </div>

<?}
else {
//если логин и пароль введены, то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
    $name_registration = stripslashes($name_registration);
    $name_registration = htmlspecialchars($name_registration);
    $email_registration = stripslashes($email_registration);
    $email_registration = htmlspecialchars($email_registration);
    $password_registration = stripslashes($password_registration);
    $password_registration = htmlspecialchars($password_registration);
//удаляем лишние пробелы
    $name_registration = trim($name_registration);
    $email_registration = trim($email_registration);
    $password_registration = trim($password_registration);
// подключаемся к базе
// происходит в navbar

// проверка на существование пользователя с таким же логином
    $sql3 = "SELECT * FROM `people` WHERE `email`= '$email_registration'";
//$sql3 = "INSERT INTO `people`( `email`, `password`, `name`) VALUES ('иван','иван','иван')";
//if (($mysqli->$sql3)===true) {
//    echo "все прошло успешно";
//};
    $res3 = mysqli_query($mysqli, "SELECT * FROM `people` WHERE `email`= '$email_registration'");
    $r3 = mysqli_fetch_array($res3);
    mysqli_error($mysqli);
//var_dump($res3);


    if (!empty($r3['email'])) { ?>
        <div class="container ">
            <div class="row text-center mt-3 ">
                <div class="col">
                    <div class=" alert alert-danger  justify-content-center  mt-5 ">
                        <?
                        echo "Извините, введённый вами email уже зарегистрирован. Введите другой email."; ?>
                        <br>
                        <a href="registration.php"> ВЕРНУТЬСЯ К РЕГИСТРАЦИИ.</a>
                    </div>
                </div>
            </div>
        </div>

    <?
    } else {
// если такого нет, то сохраняем данные
        $password_registration = password_hash($password_registration, PASSWORD_DEFAULT);
        $result2 = mysqli_query($mysqli, "INSERT INTO `people` (`name`, `password`, `email`) VALUES ('$name_registration','$password_registration','$email_registration')");
// Проверяем, есть ли ошибки
        if ($result2 == true) { ?>
            <div class="container">
                <div class="row text-center mt-3">
                    <div class="col">
                        <div class=" alert alert-success  justify-content-center  mt-5 ">
                            <? echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. "; ?>
                            <br>
                            <a href='index.php'>ГЛАВНАЯ СТРАНИЦА</a>
                        </div>
                    </div>
                </div>
            </div>
        <? } else { ?>
            <div class="container">
                <div class="row text-center mt-3">
                    <div class="col">
                        <div class=" alert alert-danger  justify-content-center  mt-5 ">
                            <? echo "Ошибка! Вы не зарегистрированы."; ?>
                        </div>
                    </div>
                </div>
            </div>
        <? }
    }
}
?>


<? require "footer.php";?>
