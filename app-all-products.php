<!-- Including header -->
<?php include 'modules/inc/header.php'; ?>

<!-- Including sidebar -->
<?php include 'modules/inc/sidebar.php'; ?>
<?php
include 'config/database.php';

$productQuerry = "SELECT * FROM `products`";
$productData = mysqli_query($conn, $productQuerry);
// $products = mysqli_fetch_assoc($productData);
// print_r($products);
?>
<!--**********************************
            Content body start
        ***********************************-->

<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
            </ol>
        </div>
    </div>
    <div class="text-center">
        <a href="app-add-product.php"><button class="btn-lg bg-secondary">Add Product</button></a>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h4>Product Table</h4>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Item_No</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // print_r($products);11
                                    while ($product = mysqli_fetch_assoc($productData)) {
                                        $id = $product['id'];
                                        $item_no = $product['item_no'];
                                        $name = $product['name'];
                                        $price = $product['price'];
                                        $quantity = $product['quantity'];
                                        // print_r($product);
                                        // echo $product['id'];
                                        echo '
                                            <tr>
                                                <td> ' . $id . '</td>
                                                <td> ' . $item_no . '</td>
                                                <td> ' . $name . '</td>
                                                <td> ' . $price . '</td>
                                                <td> ' . $quantity . '</td>
                                                    

                                                <td>
                                                    <button type="button" class="btn2 btn btn-md bg-secondary" onclick="delRow(' . $id . ')">Delete</button>
                                                    <a target="_blank" href="app-update-products.php?id=' . $id . '" class="btn3 btn btn-md bg-secondary">Edit</a>
                                                </td>
                                            </tr>
                                        ';
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- #/ container -->
</div>
<!--**********************************
            Content body end
        ***********************************-->
<script>
    function delRow(id) {
        $('#row_' + id).remove();
    };
</script>

<!-- Including footer -->
<?php include 'modules/inc/footer.php'; ?>