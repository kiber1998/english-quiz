<?php
/**
 * Created by PhpStorm.
 * User: acer-pc
 * Date: 22.02.2018
 * Time: 14:04
 */


$usr_massage='';
function check_usrdata($user_name, $login, $password, $levels, $score){
    if (strlen($user_name) == 0){
        return false;
    }
    if (strlen($login) == 0){
        return false;
    }
    if (strlen($password) == 0){
        return false;
    }
    if (!($levels > 0)){
        return false;
    }
    if ($score > 1){
        return false;
    }
    return true;
}
if (isset($_POST['has_usr'])){
    include "database.php";
    $user_name = $_POST['user_name'];
    $login = $_POST['login'];
    $password = $_POST['password'];
    $levels = $_POST['levels'];
    $score = $_POST['score'];
    if (check_usrdata($user_name, $login, $password, $levels, $score)){
        $usr_massage=insert_usr_data($user_name, $login, $password, $levels, $score);
    }else{
        $usr_massage = 'xato';
    }
   //return$usr_massage;
}

include "header.php";
?>
<div class="container">
    <?= $usr_massage; ?>
    <form accept-charset="" method="post">
        <div class="form-row mt-5">
            <div class="col-5 mx-auto">
                <input name="user_name" class="form-control" type="text" placeholder="Username">
            </div>
            <div class="col-3  mx-auto">
                <input name="login" class="form-control" type="text" placeholder="Login">
            </div>
            <div class="col-3  mx-auto">
                <input name="password" class="form-control" type="password" placeholder="Password">
            </div>
            <div class="col-12 mt-4 text-right">
                <select name="levels" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                    <option selected>Level</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <select name="score" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                    <option selected>Score</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <input type="submit" name="has_usr" value="add" class="btn btn-info">
            </div>
        </div>
    </form>
</div>
