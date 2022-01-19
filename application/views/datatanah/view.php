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
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header"><strong>Surat Wasiat Pewaris "<?= $datatanahview['Nama_pewaris']; ?>" </strong>
                            <div class="float-right">
                                <a href="<?= base_url('datatanah'); ?>" class="btn btn-sm btn-secondary waves-effect m-l-5" type="button" aria-expanded="false">
                                    <i class="mdi mdi-keyboard-return mr-1"></i> BACK
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="text-center">
                                <embed type="application/pdf" src="<?= base_url('admin/img/datatanah/') . $datatanahview['Surat_waris']; ?>" width="700" height="700"></embed>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->



    </div> <!-- container-fluid -->

</div> <!-- content -->