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
                                        <a href="<?= base_url('sertifikat'); ?>" class="btn btn-sm btn-secondary waves-effect m-l-5" type="button" aria-expanded="false">
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
                            <form action="" method="POST">
                            <input type="hidden" name="id" value="<?= $editsertifikat['id']; ?>">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">No Sertifikat</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" id="No_Sertifikat" name="No_Sertifikat" value="<?= $editsertifikat['No_Sertifikat']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">No HAK</label>
                                    <div class="col-sm-10">
                                        <div id="the-basics">
                                        <select name="No_HAK" id="select2-with-placeholdera" class="select2 form-control custom-select">
                                            <option value="<?= $editsertifikat['No_HAK']; ?>"><?= $editsertifikat['No_HAK']; ?></option>
                                            <?php foreach ($datatanahselect as $dts) : ?>
                                                <option class="" value="<?= $dts['No_HAK'] ?>"><?= $dts['No_HAK']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <?= form_error('No_HAK', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Tanggal Pengesahan</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="date" id="Tgl_Pengesahan" name="Tgl_Pengesahan" value="<?= $editsertifikat['Tgl_Pengesahan']; ?>" >
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