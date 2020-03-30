<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $tittle; ?></h1>
    <a class="btn btn-primary mb-4 float-left" href="<?= base_url('admin/b_berita'); ?>" role="button">
        Buat berita</a>
    <?= $this->session->flashdata('message'); ?>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th width="1%">NO</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Judul Artikel</th>
                <th scope="col">Author</th>
                <th width="10%">Gambar</th>
                <th width="15%">OPSI</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($artikel as $a) {
            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo date('d/m/Y H:i', strtotime($a->artikel_tanggal)); ?></td>
                    <td>
                        <?php echo $a->artikel_judul; ?>
                        <br />
                        <small class="text-muted">
                            <?php echo base_url() . "" . $a->artikel_slug; ?>
                        </small>
                    </td>
                    <td><?php echo $a->name; ?></td>
                    <td><img width="100%" class="img-responsive" src="<?php echo base_url() . '/assets/img/artikel/' . $a->artikel_sampul; ?>"></td>
                    <td><a target="_blank" href="<?php echo base_url() . $a->artikel_slug; ?>" class="btn btn-success btn-sm"> <i class="fa fa-eye"></i> </a>
                        <a href="<?php echo base_url() . 'admin/berita_edit/' . $a->id; ?>" class="btn btn-warning btn-sm"> <i class="fa fa-pen"></i> </a>
                        <a href="<?php echo base_url() . 'admin/berita_hapus/' . $a->id; ?>" class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i> </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>