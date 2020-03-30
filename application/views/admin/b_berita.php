<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $tittle; ?></h1>
    <div class="row">
        <div class="col-lg-6">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>
    <?php echo form_open_multipart('Admin/c_berita'); ?>
    <div class="form-group">
        <label for="exampleFormControlInput1">Judul Berita</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="judul" id="judul">
        <?= form_error('judul', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Isi Berita</label>
        <textarea class="form-control ckeditor" id="exampleFormControlTextarea1 ckedtor" rows="5" name="konten" id="konten"></textarea>
        <?= form_error('konten', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>

    <div class="form-group">
        <label for="exampleFormControlFile1">Masukkan Gambar</label>
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="image" name="image">
            <label class="custom-file-label" for="image">Choose file</label>
        </div>
        <?= form_error('image', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
    <button type="submit" class="btn btn-primary mb-2 float-right">Simpan</button>
    <a class="btn btn-secondary mr-2 float-right" href="<?= base_url('admin/berita'); ?>" role="button">Batal</a>
    </form>


</div>