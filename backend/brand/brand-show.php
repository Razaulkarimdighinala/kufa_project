<?php
require '../session.php';
require '../db.php';
require '../inc/header.php';
?>

<div class="content">
    <!-- Start Content-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card-box text-center">
                    <h4 class="header-title pb-2">Brand Image Show</h4>

                    <?php
                    if (isset($_SESSION['about_image_deleted'])) {
                    ?>
                        <div class="alert alert-danger">
                            <?php
                            echo $_SESSION['about_image_deleted'];
                            unset($_SESSION['about_image_deleted']);
                            ?>
                        </div>
                    <?php
                    };
                    ?>

                    <div class="table-responsive">
                        <table class="table table-bordered mb-0">
                            <thead>

                            </thead>
                            <tbody>

                                <?php
                                $select = "SELECT * FROM brand_image";
                                $query = mysqli_query($db, $select);

                                foreach ($query as $key => $value) {
                                ?>
                                    <tr>
                                        <td><img style="width:50px;height:50px;" src="../../uploads2/images2/<?php echo $value['brand']; ?>"></td>
                                        <td>
                                            <a href="brand-edit.php?id=<?php echo $value['id']; ?>" class="btn btn-info">Edit</a>
                                        </td>
                                        <td>
                                            <a href="brand-delete.php?id=<?php echo $value['id']; ?>" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>

        <!-- end row -->
    </div> <!-- end container-fluid -->
</div>

<?php require '../inc/footer.php'; ?>