<?php require_once("../../resources/config.php");

include "../../resources/templates/back/header.php";

?>

</div>

<div id="page-wrapper">
    <h1 class="page-header"><i class="fa fa-fw fa-list"></i>
        Product Categories...!!
    </h1>
    <h4 class="text-center bg-success"><?php display_message(); ?></h4>

    <div class="col-md-4">
        <form action="" method="post">

            <?php add_category(); ?>

            <div class="form-group">
                <label for="category-title">Title</label>
                <input name="cat_title" type="text" class="form-control">
            </div>

            <div class="form-group">
                <button name="add_category" type="submit" class="btn btn-primary">Add Category <span class="glyphicon glyphicon-ok"></span></button>
            </div>

        </form>
    </div>

    <div class="col-md-8">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Delete</th>
                </tr>
            </thead>

            <tbody>
                <?php show_categories_in_admin(); ?>
            </tbody>

        </table>
    </div>

</div>
<!-- /#page-wrapper -->

<?php include "../../resources/templates/back/footer.php"; ?>