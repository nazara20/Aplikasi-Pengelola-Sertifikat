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
                                <h4 class="page-title mb-0">Pengukur</h4>
                            </div>
                            <div class="col-md-4">
                                <div class="float-right d-none d-md-block">
                                    <div class="dropdown">
                                        <a href="<?= base_url('pengukur/tambahpetugasukur'); ?>" class="btn btn-sm btn-primary" type="button" aria-expanded="false">
                                            <i class="fa fa fa-plus"></i> &nbsp;&nbsp;Tambah
                                        </a>
                                        <button class="btn btn-sm btn-info" type="button" aria-expanded="false">
                                            <i class="fa fa-file-pdf-o"></i> &nbsp;&nbsp;Export
                                        </button>
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
                        <div class="card-header"><strong>Petugas Pengukur</strong>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered table-hover display nowrap table-sm m-b-0" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIP Petugas</th>
                                            <th>Nama Petugas</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <?php 
                                        $i = 1; 
                                        foreach ($petugas as $ptgs) : ?>
                                            <tr>
                                                <td><?= $i?></td>
                                                <td><?= $ptgs['Nip_petugas']; ?></td>
                                                <td><?= $ptgs['Nama_Petugas']; ?></td>
                                                <td>
                                                    <a href="<?= base_url('') ?>pengukur/editpetugasukur/<?= $ptgs['id']; ?>" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></a>
                                                    <a onclick="return confirm('apakah anda yakin?')" href="<?= base_url('') ?>pengukur/hapuspetugasukur/<?= $ptgs['id']; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <?php $i++; ?>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->



        </div> <!-- container-fluid -->

    </div> <!-- content -->