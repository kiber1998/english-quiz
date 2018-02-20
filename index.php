<?php
session_start();/// Sessiya  ochildi
error_reporting(E_ALL);
//$oldtime = $_SESSION['start'] = time();
//$_SESSION['end'] = time() + 60;
//if ($_SESSION['end'] < time()){

//}
function checkanswer($javob) {
    return $_SESSION['answer'] == $javob;
}
function hasAnswer(){
    return isset($_POST['answer']);
}
$current_answer = false;
$user_point = 0;
if (hasAnswer()){ // javob kelganmi yuqmi qaraymiz va kelgan bolsa javob uni tekshiramiz
    $answer=$_POST['answer'];
    if(checkanswer($answer)) {
        $current_answer = true;
        if (isset($_SESSION['point'])){
            $_SESSION['point']=$_SESSION['point'] +1;
        } else{
            $_SESSION['point']=0;
        }
        $user_point = $_SESSION['point'];
    } else {
        $current_answer = false;
        $_SESSION['point'] = $_SESSION['point'] -1;
        if ($_SESSION['point'] < 1){
            $_SESSION['point'] = 0;
        }
        $user_point = $_SESSION['point'];
    }
}



$fruits =[
    [
        "assets/img/541b8c1202150432ea27577fef4a3365.jpg",
        "lemon",

    ],
    [
        "assets/img/Без%20названия.jpg",
        "apple",
    ],
    [
        "assets/img/brace-1298738_640.png",
        "cherry",
    ],
    [
        "assets/img/juicy_peach_and_green_leaf_vector_570559.jpg",
        "peach"
    ],
    [
        "assets/img/857739476.jpg",
        "quince",
    ],
    [
        "assets/img/617734754.jpg",
        "grape",
    ],
    [
        "assets/img/watercolor-drawing-raspberries-hand-drawn-vector-illustration-48242474.jpg",
        "raspberries",
    ],
    [
        "assets/img/coloured-strawberries-design_1308-848.jpg",
        "strawberries"
    ],

];

//dalshe random qilib ekranga chiqaramiz
$current_fruit_key = array_rand($fruits); //bitta fruitni random qilib oldik
$current_fruit = $fruits[$current_fruit_key];
$image = $current_fruit[0];
$_SESSION['answer']=$current_fruit[1];
//time php
//
//if (isset($_SESSION['oldtime'])){ //tekshirvoti agar wunaqa sessya bosa end time ocw keregini etvoti
//    $endtime=$_SESSION['oldtime'] +1*60; //old time + 5minut
//    if ($endtime - time() > 0){ //yengi voxtdan eskisni ayrganda 0dan kota bolw funksiyasi
//        echo 'xali bor';
//    }else{
//        echo 'voxtingiz tamom';
//    }
//} else {
//    // oyin boshlandi, boshlanish vaqti urnatildi
//    $_SESSION['oldtime'] = time(); //sessyaga ovoti
//}
//time php
//if (isset($_GET['result'])) $timer=$_GET['result'];
//if ($timer==true){
//    echo 'Game Over';
//}else{
//    echo 'xali bor';
//}

//}
//echo $_SESSION['oldtime']."sessyadi old time".'<br/>';
//echo time()."time()".'<br/>';
//echo $endtime."endtime peremeni".'<br/>';
//$oldtime=$_SESSION['oldtime']=time();
//$endtime=$oldtime+2*60;
//$ntime=$endtime - $oldtime;
//$sek = $ntime/120;

//session_destroy();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>js project</title>
    <script type="text/javascript" src="assets/jquery+popper/node_modules/popper.js/dist/umd/popper.js"></script>
    <script type="text/javascript" src="assets/jquery+popper/node_modules/jquery/dist/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="assets/js/style.js"></script>
    <script type="text/javascript" src="assets/js/timer.js"></script>
    <!--    <script type="text/javascript" src="assets/js/jquery.timer.js"></script>-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
<script>
    var result_t = <?php echo $_SESSION['result_t']=true;?>
    //<!--    var oldtime= --><?php ////echo $oldtime?>
//<!--//    var remain_time = --><?php //////echo $endtime; ?>
//<!--//    var ntime = --><?php //////echo $ntime?>
//<!--//    var sek = --><?php //////echo $sek?>
</script>

<div class="row">
<!--    <div class="alert alert-danger"><h2>I LOVE YOU LAYLO !!!!</h2></div>-->
<!--    <script>-->
<!---->
<!--        //     const step = 100;-->
<!--        // var timerId = setInterval(function() {-->
<!--        //     var remaining_time = remaining_time - step-->
<!--        //     $('#timer').html((remaining_time / 1000) + ' sek');-->
<!--        //     if (remaining_time < 0) {-->
<!--        //         clearInterval(timerId)-->
<!--        //         $('.result').show();-->
<!--        //         alert('GAME OVER')-->
<!--        //     }-->
<!--        // }, step);-->
<!---->
<!--    </script>-->

    <div class="modal mt-5 " tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="pl-5 alert alert-success col-12 col-sm-12 col-md-12 col-xl2">Your scores:<?=$user_point; ?>
                        <div class="result">
                            <?php
                            if (hasAnswer()){

                                if ($current_answer){
                                    echo '<div class="text-info">Correct</div>';
                                }else{
                                    echo '<div class="text-danger">Incorrect</div>';
                                }
                            }

                            ?>
                            <h2 class="text-right "><span id="my_timer" class=""></span></h2>
                            <h2 class="time-error">voxtingiz tugadi</h2>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <!--<p>Modal body text goes here.</p>-->
                    <div class="col-12"><img id="fruits" class="img-thumbnail" src="<?php echo $image; ?>"></div>
                </div>
                <div class="modal-footer">
                    <!--<button type="button" class="btn btn-primary"></button>-->
                    <form action="index.php" method="POST">
                        <fieldset id="disable" >
                            <div class="form-row align-items-center">
                                <div class="col-8">
                                    <label class="sr-only" ></label>
                                    <input   class="form-control mb-2 for-disable" id="my-input" placeholder="" autocomplete="off"  name="answer" >
                                </div>
                                <div class="col-2 mr-2 " id="btn-one">
                                    <button type="button" class="btn btn-primary mb-2" >Next</button>
                                    <!--                                <button type="button" class="btn btn-primary mb-2" id="next-btn">Next1</button>-->
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- modal -->
<div class="container">
    <div class="row">
        <!--        <button type="button" class="btn btn2 btn-outline-success col-12 mt-5" id="btn"><h1>Start</h1></button>-->
    </div>
</div>

</body>

</html>
