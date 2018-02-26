<?php
//include "add-question.php";
/**
 * Created by PhpStorm.
 * User: acer-pc
 * Date: 23.02.2018
 * Time: 17:59
 *
 */
function delete_savol($savol){
    unlink($savol['savollar']);
}
if (isset($_POST['savollar_id'])){
    include "database.php";

    $savol=get_savol($_POST['savollar_id']);
    if ($savol){
        delete_savol($savol);
        delete_savol_data($savol);
    }

}
function delete_user($user){
    unlink($user['photo']);
    }

if (isset($_POST['users_id'])){
    include "database.php";
    $user = get_user_fordelete($_POST['users_id']);
    if ($user){
        if (isset($_POST['photo'])){
            delete_user($user);
        }
        delete_user_data($user);
    }
}


?>

