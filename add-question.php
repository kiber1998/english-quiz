<?php
/**
 * Created by PhpStorm.
 * User: acer-pc
 * Date: 23.02.2018
 * Time: 9:47
 */
include "database.php";
$question_massage='';
function check_question_data($_answer, $_question, $_idcategory){
    if (strlen($_answer) == 0){
        return false;
    }
    if (strlen($_question) == 0){
        return false;
    }
    if (!($_idcategory)>0){
        return false;
    }
    return true;
}

$target_dir = "assets/img/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadok = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
if (isset($_POST['addImage'])){
    $answer=$_POST['answer'];
    $Id_category=$_POST['id_category'];
    $now_date=date("Y-m-d");
    if (check_question_data($answer, $target_file, $Id_category)){
        $question_massage = insert_question($answer, $target_file, $Id_category, $now_date);
    }else{
        $question_massage = "xato";
    }

    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false){
        echo "add image -". $check["mime"]. ".";
        $uploadok =1;
    }else{
        $question_massage = "fie is not an image";
        $uploadok = 0;
    }
}
if ($imageFileType != "jpg" &&$imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif"){
    $uploadok=0;
}
else{
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file)){
        echo "okkk";
    }else{
        echo "sorry";
    }
}


include "header.php";
?>
<div class="container">
    <form action="" method="post" class="mt-5" enctype="multipart/form-data">
        <div class="form-row">
            <div class="col-auto col-sm-12 col-md-3 col-lg-3">
                <input name="answer" class="form-control" type="text" placeholder="Answer">
            </div>

            <div class="col-3 col-sm-12 col-sm-3 col-lg-3">
                <label class="custom-file" id="customFile">
                    <input type="file" name="fileToUpload" class="custom-file-input" id="exampleInputFile" aria-describedby="fileHelp">
                    <span class="custom-file-control form-control-file"></span>
                </label>
            </div>
            <div class="col-auto col-sm-12 col-md-3 col-lg-3">


                        <select name="id_category" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                            <option selected>IDcategroy</option>
                            <?php
                            foreach (get_categories() as $_value){
                                echo'<option value="'.$_value['id'].'">'.$_value['name'].'</option>';
                            }
                            ?>
                        </select>





                <input class="btn btn-info " type="submit" value="AddImage" name="addImage">
            </div>
        </div>
    </form>
</div>
