<?php require_once("../resources/config.php"); ?>
<?php include(TEMPLATE_FRONT . DS . "header.php"); ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

           <?php include(TEMPLATE_FRONT . DS . "side-nav.php"); ?>

            <div class="col-md-9">

                <?php include(TEMPLATE_FRONT . DS . "slider.php"); ?>
                    </div>

                </div>

                <div class="row">
                <h1></h1>
<?php get_products(); ?>
                    
                </div>

            </div>

        </div>

    </div>
   <?php include(TEMPLATE_FRONT . DS . "footer.php");?>