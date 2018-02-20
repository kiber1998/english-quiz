<?php
/**
 * Created by PhpStorm.
 * User: acer-pc
 * Date: 20.02.2018
 * Time: 10:27
 */

include "database.php";

include "header.php";
?>

<div class="container">
    <div class="row">
        <div class="col-12 bg-light py-2 mb-3">
            <form action="" class="form-inline ">
                <div class="mx-auto">
                    <input type="text" class="form-control w-50 mr-3 ">
                    <button type="button" class="btn btn-info">Seach</button>
                </div>
                <button type="button" class="btn btn-info"><i class="fa fa-plus  text-white mr-2"></i>Add</button>
            </form>
        </div>

        <?php
            foreach (get_categories() as $row) {
                echo '<div class="alert alert-dark col-12" role="alert">
                    <a href="savollar.php?category=' . $row['id'] . '">' . $row['name'] . '</a>
                    
                </div>';

            }
        ?>
    </div>
</div>

</body>
</html>
