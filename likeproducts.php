
<?
$title = "Понравившиеся товары";
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
    $user_like_it = $r2 ['like_products'];

//    возращает тру или фолс в зависимости от нахождения подстроки
    $find_str = strpos($user_like_it, $id_product );



if($find_str === false) {$user_like_it = $user_like_it.$id_product ;}

    // запись новых понравившихся продуктов (ид) строкой через запятую с пробелом
    $res2 = mysqli_query($mysqli, "UPDATE `people` SET `like_products`=('$user_like_it') WHERE `id`= $id_user");

}

?>


<!-- ВЫВОД ПОНРАВШЕГОСЯ -->
<?
// запрос на обновленный контент
$res4 = mysqli_query( $mysqli, "SELECT * FROM `people` WHERE `id` = $id_user");
$r4= mysqli_fetch_array($res4);
// это строка
$user_like_it_str_show = $r4 ['like_products'];

// перевод в массив
$user_like_it_arr_show = explode(", ", $user_like_it_str_show);



$res3 = mysqli_query( $mysqli, "SELECT * FROM `products`");



?>
<div class="container mt-5">
    <div class="text-center">
        <?
        if(empty($user_like_it_str_show)) { ?>
            <hr class="">
            <h3> Тебе пока еще ничего не понравилось, скорее исправляйся! </h3>
            <hr class="">
            <?
        }
        else {?>
        <h3 >Тебе это понравилось, <?echo $name_user;?>!</h3>
        <hr class="">

    </div>
    <div class="row mt-3 row-flex row-flex-wrap" >

<?
while($r3 = mysqli_fetch_array($res3)) {
    foreach ($user_like_it_arr_show as $eee  ) {
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
?> <? }?>
    </div>

</div>
<?







//echo "<br><br><br>";
//foreach ($user_like_it_arr_show as $eee  ) {
//    echo $eee."<br>";
//}


?>





















<? require "footer.php";?>