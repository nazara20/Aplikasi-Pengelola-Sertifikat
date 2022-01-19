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
                                <h4 class="page-title mb-0">Tambah Data Tanah</h4>

                            </div>
                            <div class="col-md-4">
                                <div class="float-right d-none d-md-block">
                                    <div class="dropdown">
                                        <a href="<?= base_url('datatanah'); ?>" class="btn btn-sm btn-secondary waves-effect m-l-5" type="button" aria-expanded="false">
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
                            <p class="text-muted m-b-30 font-14">isi form tambah data tanah dengan benar</p>
                            <?= form_open_multipart('datatanah/tambah'); ?>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">No HAK</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="number" id="No_HAK" name="No_HAK" value="<?= $kodehak; ?>" readonly>
                                        <?= form_error('No_HAK', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">No KTP</label>
                                    <div class="col-sm-10">
                                        <select name="No_KTP" id="No_KTP" class="select2 form-control custom-select">
                                            <option value="">Pilih No KTP</option>
                                            <?php foreach ($pemohonselect as $bis) : ?>
                                                <option value="<?= $bis['No_KTP'] ?>"><?= $bis['No_KTP']; ?> - <?= $bis['Nama_Pemohon']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <?= form_error('No_KTP', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Letak Bidang Tanah</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" id="Letak_Bidang_Tnh" name="Letak_Bidang_Tnh" value="<?= set_value('Letak_Bidang_Tnh'); ?>">
                                        <?= form_error('Letak_Bidang_Tnh', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Luas Tanah</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" id="Luas_Tnh" name="Luas_Tnh" value="<?= set_value('Luas_Tnh'); ?>">
                                        <?= form_error('Luas_Tnh', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Status tanah</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" id="Status_tnh" name="Status_tnh" value="<?= set_value('Status_tnh'); ?>">
                                        <?= form_error('Status_tnh', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">No kohir</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" id="No_kohir" name="No_kohir" value="<?= set_value('No_kohir'); ?>">
                                        <?= form_error('No_kohir', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">No Persil</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" id="No_Persil" name="No_Persil" value="<?= set_value('No_Persil'); ?>">
                                        <?= form_error('No_Persil', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nama pewaris</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" id="Nama_pewaris" name="Nama_pewaris" value="<?= set_value('Nama_pewaris'); ?>">
                                        <?= form_error('Nama_pewaris', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Meninggal tahun</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" id="Meninggal_thn" name="Meninggal_thn" value="<?= set_value('Meninggal_thn'); ?>">
                                        <?= form_error('Meninggal_thn', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Surat waris</label>
                                    <div class="col-sm-10">
                                    <input type="file" class="filestyle" name="Surat_waris" data-buttonname="btn-secondary">
                                        <?= form_error('Surat_waris', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nama Pemberi hibah</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" id="Nama_pmbri_hibah" name="Nama_pmbri_hibah" value="<?= set_value('Nama_pmbri_hibah'); ?>">
                                        <?= form_error('Nama_pmbri_hibah', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Tanggal Hibah</label>
                                    <div class="col-sm-3">
                                        <input class="form-control" type="date" id="tgl_hibah" name="tgl_hibah" value="<?= set_value('tgl_hibah'); ?>">
                                        <?= form_error('tgl_hibah', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">No akta hibah</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" id="No_akta_hibah" name="No_akta_hibah" value="<?= set_value('No_akta_hibah'); ?>">
                                        <?= form_error('No_akta_hibah', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Tanggal Pembelian</label>
                                    <div class="col-sm-3">
                                        <input class="form-control" type="date" id="tgl_pembelian" name="tgl_pembelian" value="<?= set_value('tgl_pembelian'); ?>">
                                        <?= form_error('tgl_pembelian', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nama PPAT pembelian</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" id="Nm_PPAT_pembelian" name="Nm_PPAT_pembelian" value="<?= set_value('Nm_PPAT_pembelian'); ?>">
                                        <?= form_error('Nm_PPAT_pembelian', '<small class="text-danger pl-3">', '</small>'); ?>
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
                                <?= form_close(); ?>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->