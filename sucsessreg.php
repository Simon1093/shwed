<?
$title = "Авторизация";
require "navbar.php";?>

<?php
if (isset($_POST['email_autorithetion'])) {
    $email_autorithetion = $_POST['email_autorithetion'];
    if ($email_autorithetion == '') {
        unset($email_autorithetion);
    }
} //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную

if (isset($_POST['password_autorithetion'])) {
    $password_autorithetion=$_POST['password_autorithetion'];
    if ($password_autorithetion =='') {
        unset($password_autorithetion);}
}


if (empty($email_autorithetion) or empty($password_autorithetion)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
{?>
    <div class="container ">
        <div class="row text-center mt-3 ">
            <div class="col">
                <div class=" alert alert-danger  justify-content-center mt-5  ">
                    <?echo ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");?>
                    <br>
                    <a href="autorithetion.php" > ВЕРНУТЬСЯ К АВТОРИЗАЦИИ.</a>
                </div>
            </div>
        </div>
    </div>

<?}
else {
//если логин и пароль введены, то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
    $email_autorithetion = stripslashes($email_autorithetion);
    $email_autorithetion = htmlspecialchars($email_autorithetion);
    $password_autorithetion = stripslashes($password_autorithetion);
    $password_autorithetion = htmlspecialchars($password_autorithetion);

// подключаемся к базе
// происходит в navbar

// проверка на существование пользователя с таким же логином
    $sql3 = "SELECT * FROM `people` WHERE `email`= '$email_autorithetion'";
//$sql3 = "INSERT INTO `people`( `email`, `password`, `name`) VALUES ('иван','иван','иван')";
//if (($mysqli->$sql3)===true) {
//    echo "все прошло успешно";
//};
    $res3 = mysqli_query($mysqli, "SELECT * FROM `people` WHERE `email`= '$email_autorithetion'");
    $r3 = mysqli_fetch_array($res3);
    mysqli_error($mysqli);

    if (empty($r3['password']) or $r3==null){?>
        <div class="container ">
            <div class="row text-center mt-3 ">
                <div class="col">
                    <div class=" alert alert-danger  justify-content-center mt-5  ">
                        <?echo "Мы не нашли такого email у нас :(";?>
                        <br>
                        <p> Но мы с радостью можем Вас зарегистрировать
                            <a href="registration.php" > РЕГИСТРАЦИЯ ТУТ.</a></p>
                    </div>
                </div>
            </div>
        </div>
    <?}
    else {
        if (password_verify($password_autorithetion,$r3['password'])) {?>
            <div class="container ">
                <div class="row text-center mt-3 ">
                    <div class="col">
                        <div class=" alert alert-success  justify-content-center mt-5 ">
                            <?
                            $_SESSION['email'] = $r3['email'];
                            $_SESSION['id'] = $r3['id'];
                            $_SESSION['name'] = $r3['name'];
                            $_SESSION['id'] = $r3['id'];

                            echo "Супер, ".$_SESSION['name']."! Авторизация прошла успешно."."<br>"."Добро пожаловать!";
                            ?>
                            <br>
                                <a href="" > </a></p>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                setTimeout(function () {
                    window.location = 'index.php';
                }, 3000);
            </script>
        <?} else if ($password_autorithetion != $r3['password']) {?>
            <div class="container ">
                <div class="row text-center mt-3 ">
                    <div class="col">
                        <div class=" alert alert-danger  justify-content-center mt-5  ">
                            <?echo "Не тот пароль :( ";?>                            <br>
                            <a href="autorithetion.php" > ПОПРОБОВАТЬ СНОВА</a></p>
                        </div>
                    </div>
                </div>
            </div>
        <?} else {?>
            <div class="container ">
                <div class="row text-center mt-3 ">
                    <div class="col">
                        <div class=" alert alert-danger  justify-content-center mt-5  ">
                            <?echo "у нас технические неполадки, напишите нам !";?>
                            <a href="autorithetion.php" > ПОПРОБОВАТЬ СНОВА</a></p>
                        </div>
                    </div>
                </div>
            </div>
       <? }
    }
}
?>
<? require "footer.php";?>
