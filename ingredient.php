<? require "navbar.php"; ?>

<?
if ($_GET['id']){
    //присвоим значение из get в переменную
    $id = $_GET['id'];
    //выведем результат
}
// подключение ПРОДУКТЫ
$sql4 = "SELECT * FROM `ingridiens` WHERE `id_ingredients` = $id";
$res4 = mysqli_query( $mysqli, "SELECT * FROM `ingridiens` WHERE `id_ingredients` = $id");
$r4= mysqli_fetch_array($res4);
?>

<div class="container mt-5 justify-content-between">
    <h3><? echo $r4['name_rus'];
        if(empty($r4['name_rus'])){
            echo " Упс, что-то мы потеряли этот ингредиент ";};
    ?></h3>
    <hr class="grey">
    <p > оценка инфографикой </p>
    <div class="row">
        <div class="col-1"></div>
        <div class="col-lg-2 col-md-12 col-sm-12 col-12 ">
            <p class="font-weight-bold "> Происхождение </p>
        </div>
        <div class="col-8">
            <p> <? echo $r4['orign'];
                if(empty($r4['orign'])){
                    echo " неизвестно ";};?> </p>
        </div>
    </div>
    <div class="row">
        <div class="col-1"></div>
        <div class="col-lg-2 col-md-12 col-sm-12 col-12">
            <p class="font-weight-bold "> Название EN </p>
        </div>
        <div class="col-8">
            <p> <? echo $r4['name_en'];
                if(empty($r4['name_en'])){
                    echo " неизвестно ";}; ?> </p>
        </div>
    </div>
    <div class="row">
        <div class="col-1"></div>
        <div class="col-lg-2 col-md-12 col-sm-12 col-12">
            <p class="font-weight-bold "> Описание </p>
        </div>
        <div class="col-8">
            <p><? echo $r4['descriotions'];
                if(empty($r4['descriotions'])){
                    echo " пока нет описания ";}; ?></p>
        </div>
    </div>
    <div class="row">
        <div class="col-1"></div>
        <div class="col-lg-2 col-md-12 col-sm-12 col-12">
            <p class="font-weight-bold "> Синонимы  </p>
        </div>
        <div class="col-8">
            <p><? echo $r4['synonims'];
                  if(empty($r4['synonims'])){
                      echo " нет ";};
                  ?></p>
        </div>
    </div>
    <div class="row">
        <div class="col-1"></div>
        <div class="col-lg-2 col-md-12 col-sm-12 col-12">
            <p class="font-weight-bold "> Положительное воздействие </p>
        </div>
        <div class="col-8">
            <p><? echo $r4['positive_results'];
                if(empty($r4['positive_results'])){
                    echo " пока ничего неизвестно ";}; ?></p>
        </div>
    </div>
    <div class="row">
        <div class="col-1"></div>
        <div class="col-lg-2 col-md-12 col-sm-12 col-12">
            <p class="font-weight-bold "> Негативное воздействие </p>
        </div>
        <div class="col-8">
            <p><? echo $r4['negative_results'];
                if(empty($r4['negative_results'])){
                    echo " пока ничего неизвестно ";};?></p>
        </div>
    </div>
</div>



<? require "footer.php";?>