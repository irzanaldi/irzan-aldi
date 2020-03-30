<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $tittle; ?></h1>

    <section class="content">


        <?php foreach ($artikel as $a) { ?>

            <form method="post" action="<?php echo base_url('Admin/berita_update') ?>" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-9">

                        <div class="box box-primary">
                            <div class="box-body">


                                <div class="box-body">
                                    <div class="form-group">
                                        <label>Judul</label>
                                        <input type="hidden" name="id" value="<?php echo $a->id; ?>">
                                        <input type="text" name="judul" class="form-control" placeholder="Masukkan judul artikel.." value="<?php echo $a->artikel_judul; ?>">
                                        <br />
                                        <?php echo form_error('judul'); ?>
                                    </div>
                                </div>

                                <div class="box-body">
                                    <div class="form-group">
                                        <label>Konten</label>
                                        <?php echo form_error('konten'); ?>
                                        <br />
                                        <textarea class="form-control ckeditor" id="ckedtor" name="konten"> <?php echo $a->artikel_konten; ?> </textarea>
                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>

                    <div class="col-lg">
                        <div class="box box-primary">
                            <div class="box-body">

                                <br /><br />

                                <div class="form-group">
                                    <label>Gambar Sampul</label>

                                    <input type="file" name="sampul" id="sampul">

                                    <br />
                                    <?php
                                    if (isset($gambar_error)) {
                                        echo $gambar_error;
                                    }
                                    ?>
                                    <?php echo form_error('sampul'); ?>
                                </div>

                                <input type="submit" name="status" value="Selesai" class="btn btn-primary btn-block">
                                <a href="<?php echo base_url() . 'Admin/berita'; ?>" class="btn btn-block btn-danger">Kembali</a>
                                <br /><br />
                            </div>
                        </div>

                    </div>
                </div>
            </form>
        <?php } ?>

    </section>

</div>