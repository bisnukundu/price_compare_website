<?php
require_once("./admin/config/functions.php");
$banar_show = new Main_Functions();
$banar = $banar_show->show_banar();
$banar1;
$banar2;
$banar3;
foreach ($banar as $ban) {
    $banar1 = $ban['banar1'];
    $banar2 = $ban['banar2'];
    $banar3 = $ban['banar3'];
}
?>
<div class="col-12 px-0">
    <div id="slider" class="carousel slide w-100" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#slider" data-slide-to="0" class="active"></li>
            <li data-target="#slider" data-slide-to="1"></li>
            <li data-target="#slider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="./admin/assets/banar/<?php echo $banar1; ?>" style="height: 500px;" class="img-fluid slider-img">
            </div>
            <div class="carousel-item">
                <img src="./admin/assets/banar/<?php echo $banar2; ?>" style="height: 500px;" class="img-fluid slider-img">
            </div>
            <div class="carousel-item">
                <img src="./admin/assets/banar/<?php echo $banar3; ?>" style="height: 500px;" class="img-fluid slider-img">
            </div>
        </div>
        <a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#slider" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>