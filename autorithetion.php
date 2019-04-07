<?
$title = "Авторизация";
require "navbar.php";?>




<div class="container  mt-5 text-black">
    <div class="row justify-content-center">
        <h3> Заходи скорее, мы соскучились!</h3>
        <hr style="width: 70%">
        <!-- Default form login -->
        <form class="text-center border border-light p-5 formforlink" method="post" action="sucsessreg.php">
            <p class="h4 mb-4">Зайти</p>
<!--             md-form делает просто полосочку-->
           <div class="md-form">
            <input type="email" name="email_autorithetion" class="form-control mb-4" placeholder="введите e-mail">
            <input type="password" name="password_autorithetion" class="form-control mb-4" placeholder="введите пароль">
           </div>
            <div class="d-flex flex-row-reverse ">
                    <!--              justify-content-end     сделать эту форму-->
                    <a href="mail.php" ><span class="badge badge-light font-weight-bold right">Забыл пароль?</span></a>
            </div>

            <button class="btn btn-sm btn-block my-4 waves-effect waves-light black-text" type="submit">Зайти</button>


            <p >Еще не с нами?
                <a href="registration.php"><span class="badge badge-light font-weight-bold ">Зарегистрироваться</span></a>
            </p>
        </form>
    </div>


</div>



<? require "footer.php";?>
