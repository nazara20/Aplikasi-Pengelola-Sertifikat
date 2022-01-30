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
                                <h4 class="page-title mb-0">Edit Data Biaya</h4>
                            </div>
                            <div class="col-md-4">
                                <div class="float-right d-none d-md-block">
                                    <div class="dropdown">
                                        <a href="<?= base_url('pembayaran/biaya');?>" class="btn btn-sm btn-secondary waves-effect m-l-5" type="button" aria-expanded="false">
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
                            <p class="text-muted m-b-30 font-14">isi form biaya dengan benar</p>
                            <form action="" method="POST">
                            <input type="hidden" name="id" value="<?= $editbiaya['id']; ?>">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Kode Biaya</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" id="kodebiaya" name="kodebiaya" value="<?= $editbiaya['Kode_Biaya']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nama Biaya</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" id="namabiaya" name="namabiaya" value="<?= $editbiaya['Nama_Biaya']; ?>">
                                        <?= form_error('namabiaya', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Biaya</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" id="biaya" name="biaya" value="<?= $editbiaya['Biaya']; ?>">
                                        <?= form_error('biaya', '<small class="text-danger pl-3">', '</small>'); ?>
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