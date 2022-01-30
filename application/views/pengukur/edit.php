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
                                <h4 class="page-title mb-0">Tambah Data Pengukur</h4>
                            </div>
                            <div class="col-md-4">
                                <div class="float-right d-none d-md-block">
                                    <div class="dropdown">
                                        <a href="<?= base_url('pengukur'); ?>" class="btn btn-sm btn-secondary waves-effect m-l-5" type="button" aria-expanded="false">
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
                            <p class="text-muted m-b-30 font-14">isi form tambah data pengukur dengan benar</p>
                            <form action="" method="POST">
                            <input type="hidden" name="id" value="<?= $editpengukur['id']; ?>">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">No HAK</label>
                                    <div class="col-sm-10">
                                    <select name="No_HAK" id="No_HAK" class="select2 form-control custom-select">
                                            <option value="<?= $editpengukur['No_HAK']; ?>"><?= $editpengukur['No_HAK']; ?></option>
                                            <?php foreach ($datatanahselect as $dts) : ?>
                                                <option class="" value="<?= $dts['No_HAK'] ?>"><?= $dts['No_HAK']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <?= form_error('No_HAK', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">NIP Petugas</label>
                                    <div class="col-sm-10">
                                        <select name="Nip_petugas" id="select2-with-placeholdera" class="select2 form-control custom-select">
                                            <option value="<?= $editpengukur['Nip_petugas']; ?>"><?= $editpengukur['Nip_petugas']; ?></option>
                                            <?php foreach ($petugasukurselect as $pus) : ?>
                                                <option class="" value="<?= $pus['Nip_petugas'] ?>"><?= $pus['Nip_petugas']; ?> - <?= $pus['Nama_Petugas']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <?= form_error('Nip_petugas', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Provinsi</label>
                                    <div class="col-sm-10">
                                        <div id="the-basics">
                                        <input class="form-control" type="text" id="Provinsi" name="Provinsi" value="<?= $editpengukur['Provinsi']; ?>">
                                        </div>
                                        <?= form_error('Provinsi', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Kecamatan</label>
                                    <div class="col-sm-10">
                                        <div id="the-basics">
                                        <input class="form-control" type="text" id="Kecamatan" name="Kecamatan" value="<?= $editpengukur['Kecamatan']; ?>">
                                        </div>
                                        <?= form_error('Kecamatan', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Kelurahan</label>
                                    <div class="col-sm-10">
                                        <div id="the-basics">
                                        <input class="form-control" type="text" id="Kelurahan" name="Kelurahan" value="<?= $editpengukur['Kelurahan']; ?>">
                                        </div>
                                        <?= form_error('Kelurahan', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">RT/RW</label>
                                    <div class="col-sm-10">
                                        <div id="the-basics">
                                        <input class="form-control" type="text" id="RT/RW" name="RT/RW" value="<?= $editpengukur['RT/RW']; ?>">
                                        </div>
                                        <?= form_error('RT/RW', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Batas_utara</label>
                                    <div class="col-sm-10">
                                        <div id="the-basics">
                                        <input class="form-control" type="text" id="Batas_utara" name="Batas_utara" value="<?= $editpengukur['Batas_utara']; ?>">
                                        </div>
                                        <?= form_error('Batas_utara', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Batas_selatan</label>
                                    <div class="col-sm-10">
                                        <div id="the-basics">
                                        <input class="form-control" type="text" id="Batas_selatan" name="Batas_selatan" value="<?= $editpengukur['Batas_selatan']; ?>">
                                        </div>
                                        <?= form_error('Batas_selatan', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Batas_Barat</label>
                                    <div class="col-sm-10">
                                        <div id="the-basics">
                                        <input class="form-control" type="text" id="Batas_Barat" name="Batas_Barat" value="<?= $editpengukur['Batas_Barat']; ?>">
                                        </div>
                                        <?= form_error('Batas_Barat', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Batas_timur</label>
                                    <div class="col-sm-10">
                                        <div id="the-basics">
                                        <input class="form-control" type="text" id="Batas_timur" name="Batas_timur" value="<?= $editpengukur['Batas_timur']; ?>">
                                        </div>
                                        <?= form_error('Batas_timur', '<small class="text-danger pl-3">', '</small>'); ?>
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