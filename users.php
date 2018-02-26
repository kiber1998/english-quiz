<?php
/**
 * Created by PhpStorm.
 * User: acer-pc
 * Date: 21.02.2018
 * Time: 16:17
 */
include "database.php";
include "header.php";

?>
<div class="container-fuild mx-5 ">
    <div class="container">
        <div class="row">
            <div class="col-12 bg-light py-2 mb-3">
                <form action="" class="form-inline ">
                    <div class="mx-auto">
                        <input type="text" class="form-control w-50 mr-3 ">
                        <button type="button" class="btn btn-info">Seach</button>
                    </div>
                    <a class="text-white" href="addusr.php"><button type="button" class="btn btn-info"><i class="fa fa-plus  text-white mr-2"></i> Add</button></a>
                </form>
            </div>
        </div>
    </div>
    <div class="alert alert-info mt-3 " id="top_usr"><h3 class="text-center">TOP 3 Users</h3></div>
    <table class="table" id="top-usr">
        <thead class="theed-light">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Login</th>
            <th scope="col">Password</th>
            <th scope="col">Level</th>
            <th scope="col">Score</th>
            <th scope="col">Photo</th>

        </tr>
        </thead>
        <tbody>
        <?php
        foreach (get_user_a() as $val){
            echo '<tr>
                <th>'.$val['ID'].'</th>
                <td>'.$val['user_name'].'</td>
                <td>'.$val['login'].'</td>
                <td>'.$val['password'].'</td>
                <td>'.$val['level'].'</td>
                <td>'.$val['score'].'</td>
                <td><img src="'.$val['photo'].'" alt="" style="width: 35px;"></td>
                <td>
                <form action="deletecat.php" id="delete" method="post">
                    <input type="hidden" name="users_id" value="'.$val['ID'].'">
                        <button class=" btn btn-light float-right ml-5 mt-2 mr-2 glyphicon glyphicon-trash" ><i class="fa fa-times text-danger float-right"></i></button>
                    </form>
                </td>
            </tr>';
        }
        ?>
        </tbody>
    </table>

    <div class="alert alert-info mt-3" id="all_usr"><h3 class="text-center">All Users</h3></div>
    <table class="table">
        <thead class="theed-light">
        <tr>

            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Login</th>
            <th scope="col">Password</th>
            <th scope="col">Level</th>
            <th scope="col">Score</th>
            <th scope="col">Photo</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach (get_user() as $value) {

            echo '<tr>
                <th >' . $value['ID']. '</th>
                <td>'.$value['user_name'].'</td>
                <td>'.$value['login'].'</td>
                <td>'.$value['password'].'</td>
                <td>'.$value['level'].'</td>
                <td>'.$value['score'].'</td>
                <td><img src="'.$value['photo'].'" alt="" style="width: 35px;"></td>
                <td>
                <form action="deletecat.php" method="post">
                    <input type="hidden" name="users_id" value="'.$value['ID'].'">
                        <button class=" btn btn-light float-right ml-5 mt-2 mr-2 glyphicon glyphicon-trash" ><i class="fa fa-times text-danger float-right"></i></button>
                    </form>
                </td>
                </td>
            </tr>';
        }
        ?>
        </tbody>
    </table>
</div>