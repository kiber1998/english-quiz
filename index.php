<?php
session_start();/// Sessiya  ochildi
error_reporting(E_ALL);
function checkanswer($javob) {
    return $_SESSION['answer'] == $javob;
}
$current_answer = false;
$user_point = 0;
if (isset($_GET['answer'])){ // javob kelganmi yuqmi qaraymiz va kelgan bolsa javob uni tekshiramiz
    $answer=$_GET['answer'];
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
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>


<div class="row">


    <div class="modal mt-5" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="pl-5 alert alert-success col-12 col-sm-12 col-md-12 col-xl2">Your scores:<?=$user_point; ?>
<!--                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
<!--                            <span class="mt-5" aria-hidden="true">&times;</span>-->
<!--                        </button>-->
                       <div class="result"> <?php
                        if ($current_answer){
                            echo '<div class="text-info">Correct</div>';
                        }else{
                            echo '<div class="text-danger">Incorrect</div>';
                        }
                        ?>
                       </div>

                    </div>
                </div>
                <div class="modal-body">
                    <!--<p>Modal body text goes here.</p>-->
                    <div class="col-12"><img id="fruits" class="img-thumbnail" src="<?php echo $image; ?>"></div>
                </div>
                <div class="modal-footer">
                    <!--<button type="button" class="btn btn-primary"></button>-->
                    <form action="index.php" method="GET">
                        <div class="form-row align-items-center">
                            <div class="col-8">
                                <label class="sr-only" ></label>
                                <input  type="text" class="form-control mb-2" id="" placeholder="" autocomplete="off"  name="answer">
                            </div>
                            <div class="col-2 mr-2">
                                <button type="button" class="btn btn-primary mb-2" id="btn-one">Next</button>
<!--                                <button type="button" class="btn btn-primary mb-2" id="next-btn">Next1</button>-->
                            </div>
                        </div>
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
