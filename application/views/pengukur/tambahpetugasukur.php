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
                                <h4 class="page-title mb-0">Tambah Data Petugas</h4>
                            </div>
                            <div class="col-md-4">
                                <div class="float-right d-none d-md-block">
                                    <div class="dropdown">
                                        <a href="<?= base_url('pengukur/petugasukur'); ?>" class="btn btn-sm btn-secondary waves-effect m-l-5" type="button" aria-expanded="false">
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
                    <div class="card col-sm-6">
                        <div class="card-body">
                            <form action="<?= base_url('pengukur/tambahpetugasukur'); ?>" method="POST">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">NIP Petugas</label>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="text" id="Nip_petugas" name="Nip_petugas" value="<?= set_value('Nip_petugas')?>">
                                    </div>
                                    <?= form_error('Nip_petugas', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nama Petugas	</label>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="text" id="Nama_Petugas" name="Nama_Petugas" value="<?= set_value('Nama_Petugas')?>" >
                                    </div>
                                    <?= form_error('noktp', '<small class="text-danger pl-3">', '</small>'); ?>
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