<?
$title = "Все ингридиенты продукта";
require "navbar.php"; ?>
<?
if ($_GET['id']){
//присвоим значение из get в переменную
$id = $_GET['id'];
};
// подключение ПРОДУКТЫ
$sql2 = "SELECT * FROM `products` WHERE `id` = $id";
$res2 = mysqli_query( $mysqli, "SELECT * FROM `products` WHERE `id` = $id");
$r2= mysqli_fetch_array($res2);

$sql3 = "SELECT * FROM `ingridiens`";
$res3 = mysqli_query( $mysqli, "SELECT * FROM `ingridiens`");
$r3 = mysqli_fetch_all($res3, MYSQLI_ASSOC);
?>


<div class="container mt-5">
    <h3> <?echo $r2['name_rus']?> </h3>
    <hr>
    <p> оценка продукта инфографика</p>
    <?
    $ing = $r2['ingredients'];
    $ing1 = explode(", ", $ing);
    $ing_lenght = count($ing1);
    ?>


<?foreach ($ing1 as $i) {
    ?>

    <div class="row ">
        <?
        foreach ($r3 as $ing) {
        if($ing['name_en'] == $i) {
        ?>
        <div class="col-1"></div>
        <div class="col-2">

            <p>оценка</p>
        </div>
        <div class="col-8 " >
<!--            // сделать больше шрифт-->
            <h4 style="text-transform: uppercase"> <span class="badge badge-light font-weight-bold ">

                        <? echo $i; ?>




                </span></h4>
            <div class="row">
                <div class="col-12">
                <hr>
                <p > оценка инфографикой </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2 col-md-12 col-sm-12 col-12 ">
                    <p class="font-weight-bold "> Происхождение </p>
                </div>
                <div class="col-1"></div>
                <div class="col-8">
                    <p> <? echo $ing['orign'];
                        if(empty($ing['orign'])){
                            echo " неизвестно ";};?> </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2 col-md-12 col-sm-12 col-12">
                    <p class="font-weight-bold "> Название EN </p>
                </div>
                <div class="col-1"></div>
                <div class="col-8">
                    <p> <? echo $ing['name_en'];
                        if(empty($ing['name_en'])){
                            echo " неизвестно ";}; ?> </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2 col-md-12 col-sm-12 col-12">
                    <p class="font-weight-bold "> Описание </p>
                </div>
                <div class="col-1"></div>
                <div class="col-8">
                    <p><? echo $ing['descriotions'];
                        if(empty($ing['descriotions'])){
                            echo " пока нет описания ";}; ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2 col-md-12 col-sm-12 col-12">
                    <p class="font-weight-bold "> Синонимы  </p>
                </div>
                <div class="col-1"></div>
                <div class="col-8">
                    <p><? echo $ing['synonims'];
                        if(empty($ing['synonims'])){
                            echo " нет ";};
                        ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2 col-md-12 col-sm-12 col-12">
                    <p class="font-weight-bold "> Положительное воздействие </p>
                </div>
                <div class="col-1"></div>
                <div class="col-8">
                    <p><? echo $ing['positive_results'];
                        if(empty($ing['positive_results'])){
                            echo " пока ничего неизвестно ";}; ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2 col-md-12 col-sm-12 col-12">
                    <p class="font-weight-bold "> Негативное воздействие </p>
                </div>
                <div class="col-1"></div>
                <div class="col-8">
                    <p><? echo $ing['negative_results'];
                        if(empty($ing['negative_results'])){
                            echo " пока ничего неизвестно ";};?></p>
                </div>
        </div>
    </div>

        <?}}?>

</div>
<? }; ?>
</div>

<? require "footer.php";?>
