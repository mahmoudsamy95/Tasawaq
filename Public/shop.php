<?php require_once("../resources/config.php"); ?>
   <?php include(TEMPLATE_FRONT . DS . "header.php"); ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <header>
           <h1>Shop</h1>
        </header>


      
        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center">

           <?php  shop_products(); ?>


        </div>
        <!-- /.row -->

        <!-- Footer -->
<?php include(TEMPLATE_FRONT . DS . "footer.php");?>