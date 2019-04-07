<?
$title = "Регистрация";
require "navbar.php";?>




<div class="container  mt-5 text-black">
    <div class="row justify-content-center">
        <h3> Мы рады, что ты решил присоединиться!</h3>
        <hr style="width: 76%">
        <!-- Default form login -->
        <form class="text-center border border-light p-5 formforlink" method="post" action="save_user.php">
            <p class="h4 mb-4">Присоединиться</p>
            <!--             md-form делает просто полосочку-->
            <div class="md-form">
                <input type="text" name="name_registration" class="form-control mb-4" placeholder="введите имя">
                <input type="email" name="email_registration" class="form-control mb-4" placeholder="введите e-mail">
                <input type="password" name="password_registration" class="form-control mb-4" placeholder="введите пароль">
            </div>

            <button class="btn btn-sm btn-block my-4 waves-effect waves-light black-text" type="submit">Зарегистрироваться</button>


        </form>
    </div>


</div>



<? require "footer.php";?>
