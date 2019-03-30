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
                <button class="btnStyle waves-effect waves-light btn btn-sm ">
                    <a  class="text-black-50 " href="description.php">Мне нравится  </a>
                </button>
                <button class="btnStyle waves-effect waves-light btn btn-sm ">
                    <a  class="text-black-50 " href="description.php">Прочитать позже </a>
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
                $ing1 = explode(",", $ing);
                $ing_lenght = count($ing1);
                ?>
                <div>
                    <?

//                    $r3 = mysqli_fetch_array($res3);
//                    $all_ing_name_rus0 = $r3['name_rus'];
//                    $all_ing_name_rus = explode(",",$all_ing_name_rus0);
//                    print_r($all_ing_name_rus);
//все ингредиенты из списка продукта в массиве
                    //print_r($ing1);


// это все синонины $r3['synonims']
                    // это прост лишнее удали
//                    for($i = 0 ; $i <$ing_lenght; $i++) {
//                        while ($r3 = mysqli_fetch_array($res3)){
//                            var_dump($r3['name_en']);
//                            echo "<hr>";
//                            if($ing1[$i] == $r3['name_rus']) {
//                                echo " имя рус - ".$r3['name_rus']."<br>";
//                            }
//                            else if ($ing1[i] == $r3['name_en']) {
//                                echo " имя англ - ".$r3['name_en']."<br>";
//                            }
//                            else if ($ing1[i] == $r3['synonims']) {
//                                echo " синоним  - ".$r3['synonims']."<br>";
//                            }
//                            else { echo " я хз";}
//                        }
//
//                    }
//                   while ( $r3= mysqli_fetch_array($res3)) {
////                     ШО ТУТ ПРОИСХОДИТ Я НИЧЕГО НЕ ПОНИМАЮ??
//
//                       $names_rus_ing0 = $r3['name_rus'];
//                       // все из синонимов по одному ингредиенту
//                       $names_rus_ing = explode("," ,  $names_rus_ing0);
//                        // получается это массив из массивов
//                       // как перебрать их
//                       print_r($names_rus_ing);
//
//                       $names_en_ing0 = $r3['name_en'];
//                       // все из синонимов по одному ингредиенту
//                       $names_en_ing = explode("," ,  $names_en_ing0);
//
//                       $names_synonims_ing0 = $r3['synonims'];
//                       // все из синонимов по одному ингредиенту
//                       $names_synonims_ing = explode("," , $names_synonims_ing0);
//
//                   };



//                    var_dump($ing1);
                    foreach ($ing1 as $i) { ?>
                    <div class="row ">
                        <div class="col-1"></div>
                        <div class="col-2">
                            <a> оценка </a>
                        </div>
                        <div class="col-8 ">
                            <a class="text-dark" href="ingredient.php">
                                <? echo $i;
                                   $checki = 0;
//                                $r3 = mysqli_fetch_array($res3);
//                                print_r($r3['name_rus']);
                                $r3 = mysqli_fetch_array($res3);
                                var_dump(json_encode($r3));
//                                var_dump(json_encode($r3));
//                                foreach ($r3 as $item) {
////                                foreach ()
//                                    $str0 = (string)$i;
//                                    $str = (string)$item;
//                                    echo "продукт - " . $str0;
//                                    echo "<br> ингредиент - " . $str . "<br>";
//                                }

                                ?>
                            </a>
                        </div>
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

