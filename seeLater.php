<?
$title = "Посмотреть позже";
require "navbar.php";?>

    <!-- ЗАПИСЬ ПОНРАВИВШЕГОСЯ В ТАБЛИЦУ -->
<?
if ($_GET['id']){
    $id_product = $_GET['id'];
    $id_product = $id_product.", ";
//    $id_product_arr = explode(", ",$id_product);


    $res2 = mysqli_query( $mysqli, "SELECT * FROM `people` WHERE `id` = $id_user");
    $r2= mysqli_fetch_array($res2);

// это чтоб считать то что понравилось
    $user_see_later_it = $r2 ['see_later'];

//    возращает тру или фолс в зависимости от нахождения подстроки
    $find_str = strpos($user_see_later_it, $id_product );



    if($find_str === false) {$user_see_later_it = $user_see_later_it.$id_product ;}

    // запись новых понравившихся продуктов (ид) строкой через запятую с пробелом
    $res2 = mysqli_query($mysqli, "UPDATE `people` SET `see_later`=('$user_see_later_it') WHERE `id`= $id_user");

}

?>


    <!-- ВЫВОД ПОНРАВШЕГОСЯ -->
<?
// запрос на обновленный контент
$res4 = mysqli_query( $mysqli, "SELECT * FROM `people` WHERE `id` = $id_user");
$r4= mysqli_fetch_array($res4);
// это строка
$user_see_later_it_str_show = $r4 ['see_later'];

// перевод в массив
$user_see_later_it_arr_show = explode(", ", $user_see_later_it_str_show);



$res3 = mysqli_query( $mysqli, "SELECT * FROM `products`");

?>
    <div class="container mt-5">
    <div class="text-center ">
<?
if(empty($user_see_later_it_str_show)) { ?>
    <hr class="">
    <h3> Ты либо все посмотрел, либо забыл добавить сюда самые интересные товары, которые посмотришь завтра! </h3>
    <hr class="">
    <?
}
else {?>
        <h3 >Не забудь посмотреть на это позже, <?echo $name_user;?>!</h3>
        <hr class="">
    </div>
        <div class="row mt-3 row-flex row-flex-wrap" >
            <?
            while($r3 = mysqli_fetch_array($res3)) {
                foreach ($user_see_later_it_arr_show as $eee  ) {
                    if($r3['id'] ==  $eee) {
                        ?>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 ">
                            <div class="card aside mb-3 ">
                                <div class="view overlay">
                                    <img class="card-img-top " src="<?echo $r3['link_photo']?>" alt="упс, не прогрузилось">
                                    <a href="#!">
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                                <div class="card-body lineheight">
                                    <h5 class="card-title"><?echo $r3['name_rus']?></h5>
                                    <hr>
                                    <p><?echo mb_substr($r3['descriptions'], 0,  250, "UTF-8")?><a href="description.php?id=<?echo $r3['id']?>">...</a> </p>

                                </div>

                                <button class="btnStyle waves-effect waves-light btn btn-sm ">
                                    <a  class="text-black-50" href="description.php?id=<?echo $r3['id']?>">Читать больше</a>
                                </button>

                            </div>
                        </div>
                        <?
                    }
                }
            };
            ?>
            <? }?>
    </div>
    </div>
<?










?>



<? require "footer.php";?>