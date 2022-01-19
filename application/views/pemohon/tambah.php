<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h4 class="page-title mb-0">Tambah Data Pemohon</h4>

                            </div>
                            <div class="col-md-4">
                                <div class="float-right d-none d-md-block">
                                    <div class="dropdown">
                                        <a href="<?= base_url('pemohon'); ?>" class="btn btn-sm btn-secondary waves-effect m-l-5" type="button" aria-expanded="false">
                                            <i class="mdi mdi-keyboard-return mr-1"></i> BACK
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mt-0 header-title">Form</h4>
                            <p class="text-muted m-b-30 font-14">isi form tambah data pemohon dengan benar</p>
                            <form action="<?= base_url('pemohon/tambah'); ?>" method="POST">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">No KTP</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="number" id="noktp" name="noktp" value="<?= set_value('noktp'); ?>">
                                        <?= form_error('noktp', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" id="nama" name="nama" value="<?= set_value('nama'); ?>">
                                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Tempat Lahir</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" id="tempatlahir" name="tempatlahir" value="<?= set_value('tempatlahir'); ?>">
                                        <?= form_error('tempatlahir', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-3">
                                        <input class="form-control" type="date" id="tanggallahir" name="tanggallahir" value="<?= set_value('tanggallahir'); ?>">
                                        <?= form_error('tanggallahir', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" type="text" id="alamat" name="alamat" value="<?= set_value('alamat'); ?>"></textarea>
                                        <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input-sm" class="col-sm-2 col-form-label">Jenis kelamin</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" id="jeniskelamin" name="jeniskelamin">
                                            <option value="">Select</option>
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                        <?= form_error('jeniskelamin', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Umur</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="number" id="umur" name="umur" value="<?= set_value('umur'); ?>">
                                        <?= form_error('umur', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Pekerjaan</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" id="pekerjaan" name="pekerjaan" value="<?= set_value('pekerjaan'); ?>">
                                        <?= form_error('pekerjaan', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">No HP</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="number" id="nohp" name="nohp" value="<?= set_value('nohp'); ?>">
                                        <?= form_error('nohp', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group mb-0">
                                    <div>
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                                            Submit
                                        </button>
                                        <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                            Cancel
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->