<?
$title = 'описание';
?>

<?require "navbar.php";?>



<?
if ($_GET['id']){
    //присвоим значение из get в переменную
    $id = $_GET['id'];
    //выведем результат
}
// подключение ПРОДУКТЫ
$sql2 = "SELECT * FROM `products` WHERE `id` = $id";
$res2 = mysqli_query( $mysqli, "SELECT * FROM `products` WHERE `id` = $id");
$r2= mysqli_fetch_array($res2);


//                    подключение ИНГРЕДИЕНТЫ
$sql3 = "SELECT * FROM `ingridiens`";
$res3 = mysqli_query( $mysqli, "SELECT * FROM `ingridiens`");
$r3 = mysqli_fetch_all($res3, MYSQLI_ASSOC);
?>




<div class="container align-content-center align-items-center ">
    <div class="row mt-5 ">
        <div class="col-lg-4 col-md-4 col-sm-12 col-12  ">
            <div class="card sticky mt-5 " >
                <div class="view overlay ">
                    <img class="card-img-top" src="<? echo $r2['link_photo']; ?>" alt="у фото перерыв">
                    <a href="#!">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>







                <button class="btnStyle waves-effect waves-light btn btn-sm " >
                    <a  class="text-black-50 iLike " href="likeproducts.php?id=<?echo $r2['id'];?>" >Мне нравится  </a>
                </button>











                <button class="btnStyle waves-effect waves-light btn btn-sm ">
                    <a  class="text-black-50 " href="seeLater.php?id=<?echo $r2['id'];?>">Прочитать позже </a>
                </button>







                <button class="btnStyle waves-effect waves-light btn btn-sm ">
<!--                    // передает id продукта на ссылку-->
                    <a  class="text-black-50 " href="alling.php?id= <? echo $r2['id']?>"> Смотреть разбор всех ингридиентов </a>
                </button>
            </div>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12 col-12">
            <h3><? echo $r2['name_rus']; ?></h3>
            <hr class="grey">
            <p class="text-right"> оценка </p>
            <p><?echo $r2['descriptions']?></p>
            <h5> Состав </h5>
            <hr>
            <div>
                <?
                $ing = $r2['ingredients'];
                $ing1 = explode(", ", $ing);
                $ing_lenght = count($ing1);
                ?>
                <div>
                    <?


                    foreach ($ing1 as $i) { ?>
                    <div class="row ">

                        <?
                        foreach ($r3 as $ing) {
                        if($ing['name_en'] == $i) {
                        ?>
                        <div class="col-1"></div>
                        <div class="col-2">
                            <a> оценка </a>
                        </div>
                        <div class="col-8 ">
                            <a class="text-dark" href="ingredient.php?id=<? echo $ing['id_ingredients']; ?>">
                                <? echo $i;

//        echo $ing['name_en'];



                                ?>
                            </a>
                        </div>
                        <? }
                        } ?>
                    </div>
                    <? } ;?>
                </div>
            </div>
        </div>
    </div>
        </div>

    </div>
</div>

<?require "footer.php";?>

