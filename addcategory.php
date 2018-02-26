<?php
/**
 * Created by PhpStorm.
 * User: acer-pc
 * Date: 22.02.2018
 * Time: 11:09
 */

$message = '';

function checkdata($category, $level) {
    if ( strlen($category)==0 ) {

        return false;
    }

    if (! ($level > 0)) {
        return false;
    }

    return true;

}


if (isset($_POST['has_data'])){
    include "database.php";

    $category_name=$_POST['category'];
    $level=$_POST['levels'];

    if (checkdata($category_name, $level)) {
        $message = insert_category($category_name, $level);
    } else {
        $message = 'xato';
    }

}




include "header.php";
?>
<div class="container">

    <?= $message; ?>
    <form class="mt-5" action="" method="post">
        <div class="form-row">
            <label for="input"></label>
            <div class=" form-group col-12 col-sm-12 col-md-6 col-lg-5 mx-auto">
                <input name="category" class="form-control " type="text" placeholder="Categoy name">
            </div>

            <div class=" form-group col-12 col-sm-12 col-md-6 col-lg-5 mx-auto">
                <select name="levels" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                    <option selected>Level</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <input type="submit" name="has_data" value="add" class="btn btn-info">
            </div>
        </div>
    </form>
</div>