<?php require_once("../resources/config.php"); ?>
   <?php include(TEMPLATE_FRONT . DS . "header.php"); ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        

        <hr>

        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <h3>Latest Products</h3>
            </div>
        </div>
        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center">

           <?php category_products(); ?>

            

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
<?php include(TEMPLATE_FRONT . DS . "footer.php");?>