   <?php
include ('includes/db.php');
?>
<!DOCTYPE html>

<html>
    <head>
        <title> Insert products </title>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <!--<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet"> !-->
        <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
        <script>tinymce.init({ selector:'textarea' });</script>

    </head>
    <body>

    <div class="row"> <!-- row starts -->
        <div class="col-lg-12"> <!-- col-lg-12 starts -->
            <ol class="breadcrumb"> <!-- breadcrumb starts -->
                <li class="active">
                    <i class="fa fa-dashboard"></i> Dashboard / Insert Products
                </li>
            </ol> <!-- breadcrumb Ends -->
        </div> <!-- col-lg-12 ends -->
    </div> <!-- row ends -->
    <div class="row"> <!-- row 2 starts -->
        <div class="col-lg-12"> <!-- col-lg-12 starts -->
            <div class="panel panel-default"><!-- panel panel-default starts -->
                <div class="panel-heading"> <!-- panel-heading starts -->
                    <h3 class="panel-title">
                        <i class="fa fa-money fa-fw"></i> Insert Products
                    </h3>
                </div> <!-- panel-heading ends-->
                <div class="panel-body"> <!-- panel-body starts -->
                    <form class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

                        <div class="form-group" ><!-- form-group Starts -->

                            <label class="col-md-3 control-label" > Product title </label>

                            <div class="col-md-6" >

                                <input type="text" name="product_title" class="form-control" required >

                            </div>

                        </div><!-- form-group Ends -->
						
						   <div class="form-group" ><!-- form-group Starts -->

                            <label class="col-md-3 control-label" > Product category ID </label>

                            <div class="col-md-6" >

                                <input type="text" name="product_cat_id" class="form-control" required >

                            </div>

                        </div><!-- form-group Ends -->
                        
 <div class="form-group" ><!-- form-group Starts -->

                            <label class="col-md-3 control-label" > Product price </label>

                            <div class="col-md-6" >

                                <input type="text" name="product_price" class="form-control" required >

                            </div>

                        </div><!-- form-group Ends -->
                        
                         <div class="form-group" ><!-- form-group Starts -->

                            <label class="col-md-3 control-label" > Product Quantity </label>

                            <div class="col-md-6" >

                                <input type="text" name="product_quantity" class="form-control" required >

                            </div>

                        </div><!-- form-group Ends -->
                       
                       
                        <div class="form-group" ><!-- form-group Starts -->

                            <label class="col-md-3 control-label" > Product Image </label>

                            <div class="col-md-6" >

                                <input type="file" name="product_image" class="form-control" required >

                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group" ><!-- form-group Starts -->

                            <label class="col-md-3 control-label" > Seller name </label>

                            <div class="col-md-6" >

                                <input type="text" name="seller_name" class="form-control" required >

                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group" ><!-- form-group Starts -->

                            <label class="col-md-3 control-label" > Product Description </label>

                            <div class="col-md-6" >

                                <textarea name="product_description" class="form-control" rows="6" cols="19" ></textarea>

                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group" ><!-- form-group Starts -->

                            <label class="col-md-3 control-label" ></label>

                            <div class="col-md-6" >

                                <input type="submit" name="submit" value="Insert Product" class="btn btn-primary form-control" >

                            </div>

                        </div><!-- form-group Ends -->

                    </form><!-- form-horizontal Ends -->
                </div> <!-- panel-body ends -->
            </div> <!-- panel panel-default ends-->
        </div> <!-- col-lg-12 ends-->
    </div> <!-- row 2 ends -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.min.js"></script>
    </body>
</html>
<?php
if(isset($_POST['submit'])){
    $product_title=$_POST['product_title'];
	$seller_name=$_POST['seller_name'];
    $product_price=$_POST['product_price'];
    $product_cat_id=$_POST['product_cat_id'];
    $product_description=$_POST['product_description'];
    $product_quantity=$_POST['product_quantity'];
    $product_image= $_FILES['product_image']['name'];

    $temp_name = $_FILES['product_image']['tmp_name'];

    move_uploaded_file($temp_name,"product_images/$product_image");


    //$insert_product = "insert into product (product_name,seller_name,product_image,product_price,product_description) values ('$product_name,'$seller_name','$product_image','$product_price','$product_description')";
	$insert_product = "INSERT INTO products(product_image, product_title, product_price, product_description, seller_name,product_category_id,product_quantity) VALUES ('$product_image','$product_title','$product_price','$product_description','$seller_name','$product_cat_id',
    '$product_quantity')"; 
    $run_product = mysqli_query($con,$insert_product);
    echo $insert_product;
    $run_product = mysqli_query($con,$insert_product);
    echo $run_product;

    if($run_product){

        echo "<script>alert('Product has been inserted successfully')</script>";

        //echo "<script>window.open('index.php?view_products','_self')</script>";

    }

}

?>