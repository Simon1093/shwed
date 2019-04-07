<?require_once "includeSession.php"?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="windows-1251">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/mdb.min.css" rel="stylesheet">
<!--        <link href="css/style.css" rel="stylesheet">-->
        <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="js/myjs.js"></script>
    <script src="https://unpkg.com/react@16/umd/react.development.js"></script>
    <script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js"></script>
    <script src="https://unpkg.com/babel-standalone@6.15.0/babel.min.js"></script>
    <!--это говно надо в конец боди-->
        <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="js/popper.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/mdb.js"></script>


    <title><?echo $title;?></title>
</head>

<header class="">
   <nav class="navbar navbar-expand-lg navbar-dark unique-color-dark fixed-top scrolling-navbar navtop ">
        <a class="navbar-brand animated heartBeat " href="index.php">ШВЕД</a>

       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navRoll"
                aria-controls="navRoll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navRoll">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link  waves-effect waves-light" href="forAdults.php">для взрослых</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="forKids.php">для детей</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">категории</a>
                    <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink1">
                        <a class="dropdown-item" href="#">демакияж</a>
                        <a class="dropdown-item" href="#">очищение кожи </a>
                        <a class="dropdown-item" href="#">крема</a>
                        <a class="dropdown-item" href="#">уход</a>
                        <a class="dropdown-item
                                   dropdown-toggle" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false">не надо!</a>
                            <div class="dropdown-menu" aria-label="navbarDropdownMenuLink2">
                                <a class="dropdown-item" href="#">лучше бы </a>
                                <a class="dropdown-item" href="#">тему</a>
                                <a class="dropdown-item" href="#">выбрал</a>
                                <a class="dropdown-item" href="#"> </a>

                            </div>
                    </div>
                </li>

            </ul>
            <!-- Links -->

            <form class="form-inline">
                <div class="md-form my-0" >
<!--                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="искать" >-->
<!--                   регистрация-->
                    <?
                    if(isset($_SESSION['id']))
                    {
                        $id_user = $_SESSION['id'] ;
                        $name_user = $_SESSION['name'];
                    ?>

                        <a href="seeLater.php"><i class="fa fa-clock" aria-hidden="true" style="margin-right: 20px"></i></a>
                        <a href="likeproducts.php"><i class="fa fa-heart" aria-hidden="true" style="margin-right: 20px"></i> </a>
                        <a href="out.php"><i class="fas fa-user-times " style="margin-right: 20px"></i> </a>

                    <?
                    }
                    else
                    {?>
                        <a href="autorithetion.php"><i class="fas fa-user-alt " style="margin-right: 20px"></i> </a>
                        <a href="registration.php"><i class="fas fa-user-plus "></i> </a>
                    <?
                    }
                    ?>

?>
                    <!--                    <button class="btn btn-outline-white btn-sm" ><a href="signin.php">вход</a></button>-->
                </div>
            </form>
        </div>
   </nav>



</header>
<body>
<div class="row  mt-5 "></div>
<?
$mysqli = new mysqli("localhost", "root", "","ecosite");
$mysqli->query("SET NAMES 'utf8`");
?>

<!--<div class=" bg mask rgba-black-strong mt-5">-->
<!--    <div class="container-fluid d-flex align-items-center justify-content-center h-100">-->
<!--        <div class="row d-flex justify-content-center text-center">-->
<!--            <div class="col-10">-->
<!--                <h3 class=" white-text ">-->
<!--                    Добро пожаловать-->
<!--                </h3>-->
<!--                <hr color="white">-->
<!--                <h5 class="white-text my-4 "> мы очень рады, что вы посетели<a href="">-->
<!--                        <span class="badge badge-light"> наш сайт </span></a> </h5>-->
<!--                <button class="btn btn-sm btn-outline-white waves-effect waves-light">-->
<!--                        Read More <i class="fa fa-book"></i>-->
<!--                </button>-->
<!--                </a>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
