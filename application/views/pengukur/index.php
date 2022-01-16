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
                                        <button class="btn btn-sm btn-primary" type="button" aria-expanded="false">
                                            <i class="fa fa fa-plus"></i> &nbsp;&nbsp;Tambah
                                        </button>
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
                                        <th>Kecamatan</th>
                                        <th>Kelurahan</th>
                                        <th>RT/RW</th>
                                        <th>Batas Utara</th>
                                        <th>Batas Selatan</th>
                                        <th>Batas Barat</th>
                                        <th>Batas Timur</th>
                                        <th>Provinsi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    <?php foreach ($pengukur as $pngr) : ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $pngr['No_HAK']; ?></td>
                                            <td><?= $pngr['Nip_petugas']; ?></td>
                                            <td><?= $pngr['Kecamatan']; ?></td>
                                            <td><?= $pngr['Kelurahan']; ?></td>
                                            <td><?= $pngr['RT/RW']; ?></td>
                                            <td><?= $pngr['Batas_utara']; ?></td>
                                            <td><?= $pngr['Batas_selatan']; ?></td>
                                            <td><?= $pngr['Batas_Barat']; ?></td>
                                            <td><?= $pngr['Batas_timur']; ?></td>
                                            <td><?= $pngr['Provinsi']; ?></td>
                                            <td>
                                                <a href="" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></a>
                                                <a onclick="return confirm('apakah anda yakin?')" href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
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