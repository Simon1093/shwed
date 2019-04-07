<?
$title = "Выход";
require "navbar.php";?>




<div class="container  mt-5 text-black">
    <div class="row justify-content-center">
        <h3> Очень жаль, что ты уходишь, <? echo $_SESSION['name'] ;?> </h3>
        <hr style="width: 76%">
        <h4> С тобой было приятно проводить время! </h4>
        <h4> Ждем нашей встречи снова, <? echo $_SESSION['name'] ;?>! </h4>
        <h4> До скорого! </h4>
    </div>
</div>
<script>
    setTimeout(function () {
        window.location = 'index.php';
    }, 3000);
</script>
<?
session_unset();
session_destroy();

//$index123 = 'url=http://project/index.php';
//header('Location: '.$index123);
require "footer.php";
?>
