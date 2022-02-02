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
                                        <a href="<?= base_url('pengukur/tambah'); ?>" class="btn btn-sm btn-primary" type="button" aria-expanded="false">
                                            <i class="fa fa fa-plus"></i> &nbsp;&nbsp;Tambah
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
                        <div class="card-header"><strong>Data Pengukur</strong>
                        </div>
                        <div class="card-body">
                        <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered table-hover display nowrap table-sm m-b-0" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No HAK</th>
                                        <th>NIP Petugas</th>
                                        <th>Provinsi</th>
                                        <th>Kecamatan</th>
                                        <th>Kelurahan</th>
                                        <th>RT/RW</th>
                                        <th>Batas Utara</th>
                                        <th>Batas Selatan</th>
                                        <th>Batas Barat</th>
                                        <th>Batas Timur</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    <?php
                                    $i = 1; 
                                    foreach ($pengukur as $pngr) : ?>
                                        <tr>
                                            <td><?= $i ?></td>
                                            <td><?= $pngr['No_HAK']; ?></td>
                                            <td><?= $pngr['Nip_petugas']; ?></td>
                                            <td><?= $pngr['Provinsi']; ?></td>
                                            <td><?= $pngr['Kecamatan']; ?></td>
                                            <td><?= $pngr['Kelurahan']; ?></td>
                                            <td><?= $pngr['RT/RW']; ?></td>
                                            <td><?= $pngr['Batas_utara']; ?></td>
                                            <td><?= $pngr['Batas_selatan']; ?></td>
                                            <td><?= $pngr['Batas_Barat']; ?></td>
                                            <td><?= $pngr['Batas_timur']; ?></td>
                                            <td>
                                                <a href="<?= base_url('') ?>pengukur/edit/<?= $pngr['id']; ?>" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></a>
                                                <a onclick="return confirm('apakah anda yakin?')" href="<?= base_url('') ?>pengukur/hapus/<?= $pngr['id']; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                                <a href="<?= base_url(); ?>laporansuratukur/cetak/<?= $pngr['id']; ?>" class="btn btn-info btn-sm"><i class="fa fa-file-pdf-o"></i> &nbsp;&nbsp;Cetak Surat</a>
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