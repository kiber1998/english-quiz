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
function get_sana($sana_res){
    global $mysqli;
    $sana=[];
    $res_sana = $mysqli->query("select * from savolvajavop where sana = ".$sana_res);
    while ($row_s =$res_sana->fetch_assoc()){
        $sana[]=$row_s;
    }
    return $sana;
}


?>