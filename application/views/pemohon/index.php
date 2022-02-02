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
                                <h4 class="page-title mb-0">Data Pemohon</h4>
                            </div>
                            <div class="col-md-4">
                                <div class="float-right d-none d-md-block">
                                    <div class="dropdown">
                                        <a href="<?= base_url('pemohon/tambah'); ?>" class="btn btn-sm btn-primary" type="button" aria-expanded="false">
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
                        <div class="card-header"><strong>Data Pemohon</strong>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered table-hover display nowrap table-sm m-b-0" style="width:100%">
                                    <thead>
                                        <tr>
                                            <td>No</td>
                                            <td>No KTP</td>
                                            <td>Nama Pemohon</td>
                                            <td>Tempat Lahir</td>
                                            <td>Tanggal Lahir</td>
                                            <td>Alamat</td>
                                            <td>Jenis Kelamin</td>
                                            <td>Umur</td>
                                            <td>Pekerjaan</td>
                                            <td>Tanggal Mendaftar</td>
                                            <td>No Telp</td>
                                            <td>Aksi</td>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <?php 
                                        $i = 1; 
                                        foreach ($pemohon as $pmh) : ?>
                                            <tr>
                                                <td><?= $i ?></td>
                                                <td><?= $pmh['No_KTP']; ?></td>
                                                <td><?= $pmh['Nama_Pemohon']; ?></td>
                                                <td><?= $pmh['tempat_lahir']; ?></td>
                                                <td><?= $pmh['TTL']; ?></td>
                                                <td><?= $pmh['Alamat']; ?></td>
                                                <td><?= $pmh['Jenis_kelamin']; ?></td>
                                                <td><?= $pmh['Umur']; ?></td>
                                                <td><?= $pmh['Pekerjaan']; ?></td>
                                                <td><?= $pmh['Tgl_Pendaftaran']; ?></td>
                                                <td><?= $pmh['Telp']; ?></td>
                                                <td>
                                                    <a href="<?= base_url(); ?>pemohon/edit/<?= $pmh['id']; ?>" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></a>
                                                    <a onclick="return confirm('apakah anda yakin?')" href="<?= base_url(); ?>pemohon/hapus/<?= $pmh['id']; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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