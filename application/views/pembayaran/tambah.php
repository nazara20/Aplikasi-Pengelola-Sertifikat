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
                                <h4 class="page-title mb-0">Tambah Data Pembayaran</h4>
                            </div>
                            <div class="col-md-4">
                                <div class="float-right d-none d-md-block">
                                    <div class="dropdown">
                                        <a href="<?= base_url('pembayaran');?>" class="btn btn-sm btn-secondary waves-effect m-l-5" type="button" aria-expanded="false">
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
                            <p class="text-muted m-b-30 font-14">isi form pembayaran dengan benar</p>
                            <form action="<?= base_url('pembayaran/tambah'); ?>" method="POST">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">No SPS</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" id="No_SPS" name="No_SPS" value="<?= $kodeuniksps; ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">No Pendaftaran</label>
                                    <div class="col-sm-10">
                                    <select name="No_Pendaftaran" id="No_Pendaftaran" class="select2 form-control custom-select">
                                            <option value="">Pilih No Pendaftaran</option>
                                            <?php foreach ($pendaftaranselect as $pds) : ?>
                                                <option value="<?= $pds['No_Pendaftaran'] ?>"><?= $pds['No_Pendaftaran']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <?= form_error('No_Pendaftaran', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Jumlah Biaya</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" id="Jumlah_Biaya" name="Jumlah_Biaya" value="<?= set_value('Jumlah_Biaya'); ?>">
                                        <?= form_error('Jumlah_Biaya', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Terbilang</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" id="Terbilang" name="Terbilang" value="<?= set_value('Terbilang'); ?>">
                                        <?= form_error('Terbilang', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Tanggal SPS</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="date" id="Tgl_SPS" name="Tgl_SPS" value="<?= set_value('Tgl_SPS'); ?>">
                                        <?= form_error('Tgl_SPS', '<small class="text-danger pl-3">', '</small>'); ?>
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