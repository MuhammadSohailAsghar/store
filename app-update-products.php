<?php
include 'config/database.php';

// assigning values to variables
echo $i = $_GET['id'];
$itemNo = $_POST['item_no' . $i];
$Name = $_POST['name' . $i];
$Price = $_POST['price' . $i];
$Quantity = $_POST['quantity' . $];

// echo $i;
?>

<!-- Including header -->
<?php include 'modules/inc/header.php'; ?>

<!-- Including sidebar -->
<?php include 'modules/inc/sidebar.php'; ?>

<!--**********************************
            Content body start
        ***********************************-->

<div class="login-form-bg h-100 my-5">
    <div class="container h-100">
        <div class="row justify-content-center h-100">
            <div class="col-xl-6">
                <div class="form-input-content">
                    <div class="card login-form mb-0">
                        <div class="card-body pt-5">

                            <form class="mt-5 mb-5 text-dark login-input" action="modules/register/add-product.php" method="POST">
                                <div class="form-group">
                                    <p>Item No</p>
                                    <input type="text" class="input form-control px-1 " style="border:1px solid black ;" name="item_no" value="" required>
                                </div>
                                <div class="form-group">
                                    <p>Name</p>
                                    <input type="text" class="input form-control px-1 " style="border:1px solid black ;" name="name" required>
                                </div>
                                <div class="form-group">
                                    <p>Price</p>
                                    <input type="text" class="input form-control px-1" style="border:1px solid black ;" name="price" required>
                                </div>
                                <div class="form-group">
                                    <p>Quantity</p>
                                    <input type="number" class="input form-control px-1" style="border:1px solid black ;" name="quantity" required>
                                </div>


                                <button class="btn login-form__btn submit w-100" type="submit">Add Product</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!--**********************************
            Content body end
        ***********************************-->


<!-- Including footer -->
<?php include 'modules/inc/footer.php'; ?>