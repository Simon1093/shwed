<?require_once "includeSession.php"?>


<?php
$sql1 = "SELECT * FROM `products`";
$res = mysqli_query( $mysqli, "SELECT * FROM `products`");
?>

<?
$a = mysqli_query($mysqli, "SELECT COUNT(1) FROM `products`");
$count_produts = mysqli_fetch_array($a);
//echo $count_produts[0];
$count_produts_str = $count_produts[0];
?>


<?
if ($_GET['page']){
    //присвоим значение из get в переменную
    $page = $_GET['page'];
}
else {$page = 1 ;}
?>

<div class=" bg mask rgba-black-strong " >
    <div class="container-fluid d-flex align-items-center justify-content-center h-100">
        <div class="row d-flex justify-content-center text-center">
            <div class="col-10" >
                <h3 class=" white-text ">
                    Добро пожаловать
                </h3>
                <hr color="white">
                <h5 class="white-text my-4 "> мы очень рады, что вы посетили <a href="">
                        <span class="badge badge-light"> наш сайт </span></a> .<br> это означает, что
                тех, кто хочет пользоваться натуральным, стало чуть чуть больше</h5>
                <button class="btn btn-sm btn-outline-white waves-effect waves-light">
                    <a class="text-white" href="https://uhodzalitsom.online/sredstva/preimushhestva-naturalnoj-kosmetiki.html">
                        Read More   <i class="fa fa-book"></i>
                    </a>
                </button>
                </a>
            </div>
        </div>
    </div>
</div>




<main>

    <div class="container " >
        <div class="row mt-5 row-flex row-flex-wrap">
           <?
           $k = 0;
           $z= 0;
           while($r= mysqli_fetch_array($res)){
               for ($i=$z; $i<$z+1; $i++){
                   $arr_link[$i] = $r['link_photo'];
                   $arr_namerus[$i] = $r['name_rus'];
                   $arr_descriptions[$i] = $r['descriptions'];
                   $arr_id[$i] = $r['id'];
               }
               $z++;
           };



           for ($i = ($page-1)*20 ; $i< $page * 20 ; $i++) {
               ?>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12  ">
                <div class="card aside mb-3 ">
                    <div class="view overlay">
                        <img class="card-img-top " src="<?echo $arr_link[$i];?>" alt="упс, не прогрузилось">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <div class="card-body lineheight">
                        <h5 class="card-title"><?echo $arr_namerus[$i]?></h5>
                        <hr>
<!--                        class="fas fa-quote-left " делает типа циату -->
                        <p><?echo mb_substr($arr_descriptions[$i], 0,  250, "UTF-8")?><a href="description.php?id=<?echo $arr_id[$i]?>">...</a> </p>

                    </div>
<!--                    может такой вид лучшу-->
<!--                    <a href="#" class="black-text d-flex justify-content-end"><h5>Read more <i class="fas fa-angle-double-right"></i></h5></a>-->
                    <button class="btnStyle waves-effect waves-light btn btn-sm ">
                       <a  class="text-black-50" href="description.php?id=<?echo $arr_id[$i]?>">Читать больше</a>
                    </button>

                </div>
            </div>
            <?
//         задает сколько будет отобрадаться продуктов
           $k ++;
           if ( $k == 20 ) { break;}

           } ?>


        </div>
    </div>

    <!-- ПАГИНАЦИЯ -->
    <div class="container mt-4 ">
        <nav aria-label="Page navigation example">
            <ul class="pagination pagination-circle  justify-content-center">
<!--                <li class="page-item disabled"><a class="page-link">First</a></li>-->
<!--                <li class="page-item disabled">-->
<!--                    <a class="page-link" aria-label="Previous">-->
<!--                        <span aria-hidden="true">&laquo;</span>-->
<!--                        <span class="sr-only">Previous</span>-->
<!--                    </a>-->
<!--                </li>-->



        <?
//    echo $count_produts_str;
    $kkk  = $count_produts_str / 20;
    $count_page  = ceil($kkk);
//    echo $count_page;
//    страницы для пагинации
    $arr_pagination = [];
    for ($i = 0 ; $i < $count_page; $i++){
        $arr_pagination[$i] = $i+1;
//        echo  " новый элемент страницы - ".$arr_pagination[$i]."<br>";
       ?>
        <li class="page-item"><a class="page-link" href="index.php?page=<?echo $arr_pagination[$i]?>"><?echo $arr_pagination[$i];?></a></li>

        <?}

    ?>
<!--        <nav aria-label="Page navigation example">-->
<!--            <ul class="pagination pagination-circle  justify-content-center">-->
<!--                <li class="page-item disabled"><a class="page-link">First</a></li>-->
<!--                <li class="page-item disabled">-->
<!--                    <a class="page-link" aria-label="Previous">-->
<!--                        <span aria-hidden="true">&laquo;</span>-->
<!--                        <span class="sr-only">Previous</span>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li class="page-item active"><a class="page-link">1</a></li>-->
<!--                <li class="page-item"><a class="page-link">2</a></li>-->
<!--                <li class="page-item"><a class="page-link">3</a></li>-->
<!--                <li class="page-item"><a class="page-link">4</a></li>-->
<!--                <li class="page-item"><a class="page-link">5</a></li>-->
<!--                <li class="page-item">-->
<!--                    <a class="page-link" aria-label="Next">-->
<!--                        <span aria-hidden="true">&raquo;</span>-->
<!--                        <span class="sr-only">Next</span>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li class="page-item"><a class="page-link">Last</a></li>-->
            </ul>
        </nav>    </div>

</main>