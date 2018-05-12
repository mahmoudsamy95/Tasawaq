<?php require_once("../resources/config.php"); ?>
   <?php include(TEMPLATE_FRONT . DS . "header.php"); ?>
    <!-- Page Content -->
    <div class="container">

      <header>
            <h1 class="text-center">Login</h1>
            <h3 class="text-center bg-warning"><?php disply_message(); ?></h3>
        <div class="col-sm-4 col-sm-offset-5">         
            <form class="" action="" method="post" enctype="multipart/form-data">
               <?php login_user(); ?>
                <div class="form-group"><label for="">
                    username<input type="text" name="username" class="form-control"></label>
                </div>
                 <div class="form-group"><label for="password">
                    Password<input type="password" name="password" class="form-control"></label>
                </div>

                <div class="form-group">
                  <input type="submit" name="submit" value="Sign in" class="btn btn-primary" >
                </div>
                 <div class="form-group">
                 <p>Don't have an account?</p> <a href="registeration.php">Sign up</a>
                </div>
            </form>
        </div>  


    </header>


        </div>

<?php include(TEMPLATE_FRONT . DS . "footer.php");?>