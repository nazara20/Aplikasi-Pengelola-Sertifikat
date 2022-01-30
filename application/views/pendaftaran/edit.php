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
                                <h4 class="page-title mb-0">Tambah Pendaftaran</h4>
                            </div>
                            <div class="col-md-4">
                                <div class="float-right d-none d-md-block">
                                    <div class="dropdown">
                                        <a href="<?= base_url('pendaftaran'); ?>" class="btn btn-sm btn-secondary waves-effect m-l-5" type="button" aria-expanded="false">
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
                            <p class="text-muted m-b-30 font-14">isi form pendaftaran dengan benar</p>
                            <form action="" method="POST">
                                <input type="hidden" name="id" value="<?= $editpendaftaran['id']; ?>">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">No Pendaftaran</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" id="nopendaftaran" name="nopendaftaran" value="<?= $editpendaftaran['No_Pendaftaran']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">No KTP</label>
                                    <div class="col-sm-10">
                                        <select name="noktp" id="select2-with-placeholdera" class="select2 form-control custom-select">
                                            <option value="<?= $editpendaftaran['No_KTP']; ?>"><?= $editpendaftaran['No_KTP']; ?></option>
                                            <?php foreach ($pemohonselect as $bis) : ?>
                                                <option class="" value="<?= $bis['No_KTP'] ?>"><?= $bis['No_KTP']; ?> - <?= $bis['Nama_Pemohon'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <?= form_error('noktp', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>


                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">No KTP(Kuasa)</label>
                                    <div class="col-sm-10">
                                        <div id="the-basics">
                                            <input class="form-control" type="text" id="noktpkuasa" name="noktpkuasa" value="<?= $editpendaftaran['No_KTPkuasa']; ?>">
                                        </div>
                                        <?= form_error('noktpkuasa', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="kodebiaya" class="col-sm-2 col-form-label">Kode Biaya</label>
                                    <div class="col-sm-10">
                                        <select name="kodebiaya" id="kodebiaya" class="select2 form-control custom-select">
                                            <option value="<?= $editpendaftaran['Kode_Biaya']; ?>"><?= $editpendaftaran['Kode_Biaya']; ?></option>
                                            <?php foreach ($biayaselect as $bis) : ?>
                                                <option class="" value="<?= $bis['Kode_Biaya']; ?>"><?= $bis['Kode_Biaya']; ?> - <?= $bis['Nama_Biaya']; ?> - <?= $bis['Biaya']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <?= form_error('kodebiaya', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>


                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">No Surat Kuasa</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" id="nosuratkuasa" name="nosuratkuasa" value="<?= $editpendaftaran['No_SuratKuasa']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Tanggal Surat Kuasa</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" id="tanggalsuratkuasa" name="tanggalsuratkuasa" value="<?= $editpendaftaran['Tgl_SuratKuasa']; ?>" readonly>
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