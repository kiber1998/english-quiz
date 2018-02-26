<?php
$mysqli = new mysqli("localhost", "root", "", "data");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}


function get_categories() {
    global $mysqli;

    $categories = [];

    $res = $mysqli->query("select * from category");
    while ($row = $res->fetch_assoc()) {
        $categories[] = $row;
    }

    return $categories;
}

function get_savol_javob($category_id){
    global $mysqli;
    $categorys_task = [];

    $resurs = $mysqli->query("select * from savolvajavop where category_id = " . $category_id );
    while ($row_q = $resurs->fetch_assoc()){
        $categorys_task[] = $row_q;
    }
    return $categorys_task;

}
function get_sana(){
//    $_now = date('Y-m-d');
    $_oneday = date('d')-1;
    $_twoday = date("d")-2;
    global $mysqli;
    $sana=[];
    $res_sana = $mysqli->query("select * from savolvajavop where sana BETWEEN '" . date("Y-m-$_twoday")  . "' AND '".date("Y-m-d")."'");
    while ($row_s =$res_sana->fetch_assoc()){
        $sana[]=$row_s;
    }
    return $sana;
}

function get_user(){
    global $mysqli;
    $user_data=[];
    $res_usr = $mysqli->query("select * from users" );
    while ($row_u = $res_usr->fetch_assoc()){
        $user_data[]=$row_u;
    }
    return $user_data;
}
function get_user_a(){
    global $mysqli;
    $user_data=[];
    $res_usr = $mysqli->query("select * from users ORDER BY users.score DESC " );
    while ($row_u = $res_usr->fetch_assoc()){
        $user_data[]=$row_u;
    }
    return $user_data;
}
/*categorys*/

function insert_category($category_name, $level){
    global $mysqli;
    $category = "INSERT INTO category(name, level) VALUES ('$category_name', $level)";
    if ($mysqli->query($category)=== true){
            $message = 'kiritildi';
            header('Location: addcategory.php');
        } else {
            $message = 'kiritilmadi';
        }
}
function insert_usr_data($username, $login, $password, $usr_levlel, $score){
    global $mysqli;
    $add_usr = "INSERT INTO users(`user_name`, `login`, `password`, `level`, `score`) VALUES ('$username', '$login', '$password', $usr_levlel, $score)";

    if ($mysqli->query($add_usr)=== true){
        $usr_massage='kiritildi';
        header('Location: addusr.php');
    }
    else{
        $usr_massage='kritildi';
    }
}
function insert_question($answer, $question, $category_id, $date){
    global $mysqli;
    $add_question = "INSERT INTO savolvajavop(savollar, javoplar, category_id, sana) VALUES ( '$question','$answer', $category_id, $date)";
    if ($mysqli->query($add_question) === true){
        header('Location: add-question.php');
    }{
        $question_massage='xato';
    }
}

function delete_savol_data($savol){
    global $mysqli;
    $delete_question_data = "DELETE FROM savolvajavop WHERE id=" . $savol['id'];
    if ($mysqli->query($delete_question_data) === true){
        header('Location: savollar.php?category=' . $savol['category_id']);
    }else{
        $question_massage='xato';
    }
}
function get_savol($savol){
    global $mysqli;
    $id_savol = "SELECT * FROM savolvajavop WHERE id=".$savol;
    $res = $mysqli->query($id_savol);
    $row = $res->fetch_assoc();
    return $row;
}
function delete_user_data($user_id){
    global $mysqli;
    $delete_users="DELETE FROM users WHERE id=". $user_id['ID'];
    if ($mysqli->query($delete_users) === true){
        header('Location: users.php');
    }
}
function get_user_fordelete($savol_id){
    global $mysqli;
    $id_user = "SELECT * FROM users WHERE id=".$savol_id;
    $res = $mysqli->query($id_user);
    $row = $res->fetch_assoc();
    return $row;
}
function questionst_index(){
    global $mysqli;
    $questions = [];
    $question_index = $mysqli->query("select * from savolvajavop" );
    while ($row_question = $question_index->fetch_assoc()) {
        $questions[] = $row_question;
    }
    return $questions;
}

?>