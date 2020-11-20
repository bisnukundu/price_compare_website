<?php
$show_product = new Main_Functions();
$table;
if ($_SESSION["user_role"] == 1) {
    $table = "tesco";
} elseif ($_SESSION["user_role"] == 2) {
    $table = "heromarket";
} elseif ($_SESSION["user_role"] == 3) {
    $table = "giantmall";
}
$products = $show_product->show_product($table);

?>
<div class="row">
    <!-- manage user -->
    <div class="col-md-12">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">Manage Product</h4>
                    <p class="card-category"> Here you can manage of all User</p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="text-primary">
                                <th>S.N</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <?php
                                if (!empty($products)) {
                                    $ii = 1;
                                    foreach ($products as $product) { ?>
                                        <tr>
                                            <td><?php echo $ii++; ?></td>
                                            <td><img width="70px" src="assets/product/<?php echo $product['img']; ?>" alt=""></td>
                                            <td><?php echo $product['title']; ?></td>
                                            <td><?php echo $product['price']; ?></td>
                                            <td><a class="btn btn-danger btn-sm" href="delete.php?id=<?php echo $product['id']; ?>">Delete</a>|<a class="btn btn-info btn-sm" href="editProduct.php?id=<?php echo $product['id']; ?>">Edit</a></td>
                                        </tr>
                                <?php }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- manage user end -->


    </div>
</div>