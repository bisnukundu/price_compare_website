<?php

$show_banar_ = new Main_Functions();
$banars = $show_banar_->show_banar();
?>
<div class="row">
    <!-- manage user -->
    <div class="col-md-12">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">Manage Banar</h4>
                    <p class="card-category"> Here you can manage of Banar</p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="text-primary">
                                <th>S.N</th>
                                <th>Banar1</th>
                                <th>Banar2</th>
                                <th>Banar3</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <?php
                                if (!empty($banars)) {
                                    $i = 1;
                                    foreach ($banars as $ban) { ?>
                                        <tr>
                                            <td><?php echo $i++; ?></td>
                                            <td><img width="100px" src="assets/banar/<?php echo $ban['banar1'] ?>" alt="banar"></td>
                                            <td><img width="100px" src="assets/banar/<?php echo $ban['banar2'] ?>" alt="banar"></td>
                                            <td><img width="100px" src="assets/banar/<?php echo $ban['banar3'] ?>" alt="banar"></td>
                                            <td><a class="btn btn-info btn-sm" href="delete.php?id=<?php echo $ban["id"]; ?>&del=del">Delete</a></td>
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