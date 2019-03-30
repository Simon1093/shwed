<!-- ТУТ ПОМЕНЯТЬ WHERЕ = !!! -->

<?require "navbar.php";?>

<?php
$sql1 = "SELECT * FROM `products` WHERE `categori` = 1";
$res = mysqli_query( $mysqli, "SELECT * FROM `products` WHERE `categori` != 1");
?>
<main>
    <div class="container " >
        <div class="row mt-5 row-flex row-flex-wrap">
            <? while ($r= mysqli_fetch_array($res)) { ?>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 ">
                    <div class="card aside ">
                        <div class="view overlay">
                            <img class="card-img-top " src="<?echo $r['link_photo']?>" alt="упс, не прогрузилось">
                            <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <div class="card-body lineheight">
                            <h5 class="card-title"><?echo $r['name_rus']?></h5>
                            <hr>
                            <!--                        class="fas fa-quote-left " делает типа циату -->
                            <p><?echo mb_substr($r['descriptions'], 0,  250, "UTF-8")?><a href="description.php?id=<?echo $r['id']?>">...</a> </p>

                        </div>
                        <!--                    может такой вид лучшу-->
                        <!--                    <a href="#" class="black-text d-flex justify-content-end"><h5>Read more <i class="fas fa-angle-double-right"></i></h5></a>-->
                        <button class="btnStyle waves-effect waves-light btn btn-sm ">
                            <a  class="text-black-50" href="description.php?id=<?echo $r['id']?>">Читать больше</a>
                        </button>

                    </div>
                </div>
            <? } ?>
        </div>
    </div>
</main>


<?require "footer.php";?>
