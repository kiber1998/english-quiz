
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
<?php
session_start();
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
$ran_fruits = array_rand($fruits, 2);
$my_ran = $fruits[$ran_fruits[0]];
$_SESSION['ran_session']=$my_ran[1];
$ran_session;
if (isset($_GET['answer'])){
    $answer=$_GET['answer'];
}
if ($answer==$ran_session){
    echo 'togri';
}

//if ($answer==$my_ran[1]){
//    echo 'togri';
//}
?>
<div class="row">


    <div class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!--<p>Modal body text goes here.</p>-->
                    <div class="col-12"><img id="fruits" class="img-thumbnail" src="<?php echo $my_ran[0]; ?>"></div>
                </div>
                <div class="modal-footer">
                    <!--<button type="button" class="btn btn-primary"></button>-->
                    <form action="index.php" method="GET">
                        <div class="form-row align-items-center">
                            <div class="col-8">
                                <label class="sr-only" ></label>
                                <input type="text" class="form-control mb-2" id="value" placeholder=""  name="answer">
                            </div>
                            <div class="col-2 mr-2">
                                <button type="button" class="btn btn-primary mb-2" id="btn-one">Next</button>
                                <button type="button" class="btn btn-primary mb-2" id="next-btn">Next1</button>
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
        <button type="button" class="btn btn2 btn-outline-success col-12 mt-5" id="btn"><h1>Start</h1></button>
    </div>
</div>
</body>

</html>
