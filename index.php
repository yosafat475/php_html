<?php include "data_siswa.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="asset1/css/all.css">
    <link rel="stylesheet" href="asset1/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-12">
        <h1>tes</h1>
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
        <?php $nomor=1; foreach($data_slide as $key): ?>
                <div class="carousel-item <?php if($nomor==1){echo "active";} ?>">
                <img src="<?php echo $key ?>" class="d-block w-100" alt="...">
                </div>
        <?php $nomor++; endforeach; ?>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <?php foreach ($dara_siswa as $key=>$value): ?>
            <div class="col">
                    <div class="card <?php if($value[3]){echo "bg-primary";}?>" style="width: 18rem;">
                        <img src="asset1\image\prakerja.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo "$value[0]"; ?></h5>
                        <p class="card-text"><?php echo "$value[1]"; ?></p>
                        <p class="card-text"><?php echo "$value[2]"; ?></p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                    </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<script src="asset1/css/js/jquery-full.min.js"></script>
<script src="asset1/css/js/popper.min.js"></script>
<script src="asset1/css/js/bootstrap.min.js"></script>
</body>
</html>