<?php
/**
 * Created by PhpStorm.
 * User: acer-pc
 * Date: 20.02.2018
 * Time: 17:12
 */
include "database.php";

include "header.php";
$sana_res = date("Y-m-d");
?>
<div class="container">
    <div class="row">
    <?php

            foreach (get_sana() as $row) {
                echo '<div class="alert alert-dark col-12" role="alert">
                    <a href="savollar.php?category=' . $row['id'] . '">' . $row['savollar'] . '</a>
                    <a href="savollar.php?category=' . $row['id'] . '">' . $row['javoblar'] . '</a>
                    <span class="col-2 mx-auto"> '. $row['javoplar'] . '</span>
                    <img class="float-right " src="'.$row['savollar'].'" alt="" style="width: 35px;">
                </div>';

        }
    ?>
    </div>
</div>
