<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $tittle; ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Muhamadiyah</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="padding-top: 30px;">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?= base_url('assets/img/profile/default.jpg'); ?>" class="d-block" width="100%" height="500" alt="...">

                </div>
                <div class="carousel-item">
                    <img src="<?= base_url('assets/img/profile/default.jpg'); ?>" class="d-block" width="100%" height="500" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url('assets/img/profile/default.jpg'); ?>" class="d-block" width="100%" height="500" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>

    <!-- ISI konten -->
    <div class="container mr-30 ml-30 mt-20 p-5">
        <div class="container">
            <div class="row">
                <div class="col-8" style="text-align: justify;">
                    <h1>
                        <marquee> Selamat Datang di website Organisasi masyarakat Muhamadiyah </marquee>
                    </h1>
                    Sekolah Islam Terpadu pada hakekatnya adalah sekolah yang mengimplementasikan konsep pendidikan Islam berlandaskan AlQur’an dan As Sunnah.

                    Konsep operasional SIT merupakan akumulasi dari proses pembudayaan, pewarisan dan pengembangan ajaran agama Islam, budaya dan peradaban Islam dari generasi ke generasi. Istilah “Terpadu” dalam SIT dimaksudkan sebagai penguat (taukid) dari Islam itu sendiri.
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="<?= base_url('assets/img/profile/default.jpg') ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h1>Profile</h1>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Konten Berita -->
        <div class="container" style="padding-top: 100px;">

            <!--/ Section Blog Star /-->
            <section id="blog" class="blog-mf sect-pt4 route">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="title-box text-center">
                                <h3 class="title-a">
                                    Blog
                                </h3>
                                <p class="subtitle-a">
                                    Artikel Terbaru Dari Kami.
                                </p>
                                <div class="line-mf"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <?php foreach ($artikel as $a) { ?>
                            <div class="col-md-4">
                                <div class="card card-blog">
                                    <div class="card-img">
                                        <a href="<?php echo base_url() . $a->artikel_slug ?>">
                                            <?php if ($a->artikel_sampul != "") { ?>
                                                <img src="<?php echo base_url(); ?>assets/img/artikel/<?php echo $a->artikel_sampul ?>" alt="" class="img-fluid" width="100%">
                                            <?php } ?>
                                        </a>
                                    </div>
                                    <div class="card-footer">
                                        <div class="post-author">
                                            <a href="#">
                                                <span class="author"><?php echo $a->artikel_author; ?></span>
                                            </a>
                                        </div>
                                        <div class="post-date">
                                            <span class="ion-ios-clock-outline"></span> <?php echo date('d-M-Y', strtotime($a->artikel_tanggal)); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                    </div>
                </div>
            </section>
        </div>
        <!--/ Section Blog End /-->






    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>
    <script src="<?= base_url('assets/'); ?>ckeditor/ckeditor.js"></script>
    <script src="<?php echo base_url('assets/js/scripts.js') ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('assets/demo/chart-area-demo.js') ?>"></script>
    <script src="<?php echo base_url('assets/demo/chart-bar-demo.js') ?>"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('assets/demo/datatables-demo.js') ?>"></script>
    <script>
        $('.custom-file-input').on('change', function() {
            let filename = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(filename);
        });
    </script>

</body>

</html>