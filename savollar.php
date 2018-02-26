<?php
/**
 * Created by PhpStorm.
 * User: acer-pc
 * Date: 20.02.2018
 * Time: 15:12
 */
//include "add-question.php";

?>
<?php
/**
 * Created by PhpStorm.
 * User: acer-pc
 * Date: 20.02.2018
 * Time: 10:27
 */


include "database.php";
include "header.php";


$category_id = $_GET['category'];
?>

<div class="container">
    <div class="row">
        <div class="col-12 bg-light py-2 mb-3">
            <form action="" class="form-inline ">
                <div class="mx-auto">
                    <input type="text" class="form-control w-50 mr-3 ">
                    <button type="button" class="btn btn-info">Seach</button>
                </div>
                <a href="add-question.php"><button type="button" class="btn btn-info"><i class="fa fa-plus  text-white mr-2"></i>Add</button></a>
            </form>
        </div>

        <?php
            foreach (get_savol_javob($category_id) as $row) {
                echo '<div class="alert alert-dark col-12" role="alert">
                    <a href="savollar.php?category=' . $row['id'] . '">' . $row['savollar'] . '</a>
                    <a href="savollar.php?category=' . $row['id'] . '">' . $row['javoblar'] . '</a>
                    <span class="col-2 mx-auto"> '. $row['javoplar'] . '</span>
                    
                    <form action="deletecat.php" id="delete" method="post">
                    <input type="hidden" name="savollar_id" value="'.$row['id'].'">
                        <button class=" btn btn-light float-right ml-5 mt-2 mr-2 glyphicon glyphicon-trash" ><i class="fa fa-times text-danger float-right"></i></button>
                    </form>
                    <img class="float-right " src="'.$row['savollar'].'" alt="" style="width: 35px;">
                </div>';

            }
        ?>
    </div>
</div>

</body>
</html>

