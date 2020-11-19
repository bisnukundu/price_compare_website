<?php

$show_users = new Main_Functions();
$user_data = $show_users->show_data("users");
?>
<div class="row">
    <!-- manage user -->
    <div class="col-md-12">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">Manage User</h4>
                    <p class="card-category"> Here you can manage of all User</p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="text-primary">
                                <th>S.N</th>
                                <th>Name</th>
                                <th>User Name</th>
                                <th>Role</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <?php
                                if (!empty($user_data)) {
                                    $i = 1;
                                    foreach ($user_data as $user) { ?>
                                        <tr>
                                            <td><?php echo $i++; ?></td>
                                            <td><?php echo $user['name'] ?></td>
                                            <td><?php echo $user['username'] ?></td>
                                            <?php
                                            if ($user['role'] == 1) {
                                                echo "<td>Tesco</td>";
                                            } elseif ($user['role'] == 2) {
                                                echo "<td>HeroMarket</td>";
                                            } elseif ($user['role'] == 3) {
                                                echo "<td>Giant Mall</td>";
                                            } elseif ($user['role'] == 0) {
                                                echo "<td>Admin</td>";
                                            }
                                            ?>

                                            <td><a class="btn btn-info btn-sm" href="delete.php?id=<?php echo $user["id"]; ?>">Delete</a></td>
                                        </tr>
                                <?php }
                                } ?>
                            </tbody>


                        </table>



                    </div>
                </div>
            </div>
        </div>
        <!-- manage user end -->


    </div>
</div>