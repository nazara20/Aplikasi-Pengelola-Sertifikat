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
                                <h4 class="page-title mb-0">Data Tanah</h4>
                            </div>
                            <div class="col-md-4">
                                <div class="float-right d-none d-md-block">
                                    <div class="dropdown">
                                        <a href="<?= base_url('datatanah/tambah'); ?>" class="btn btn-sm btn-primary" type="button" aria-expanded="false">
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
                        <div class="card-header"><strong>Data Tanah</strong>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>No HAK</th>
                                            <th>No KTP</th>
                                            <th>Letak Bidang Tnh</th>
                                            <th>Luas Tanah</th>
                                            <th>Status tanah</th>
                                            <th>No kohir</th>
                                            <th>No Persil</th>
                                            <th>Nama pewaris</th>
                                            <th>Meninggal tahun &emsp;&emsp;&emsp;</th>
                                            <th>Surat waris &emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;</th>
                                            <th>Nama pemberi hibah &nbsp;&emsp;</th>
                                            <th>tanggal hibah &nbsp;&emsp;&nbsp;&emsp;&emsp;&emsp;</th>
                                            <th>No akta Hibah &emsp;&nbsp;&emsp;&emsp;&emsp;</th>
                                            <th>Tanggal Pembelian &emsp;&emsp;</th>
                                            <th>Nama PPAT pembelian &emsp;</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <?php
                                        $i = 1;
                                        foreach ($datatanah as $dt) : ?>
                                            <tr>
                                                <td><?= $i ?></td>
                                                <td><?= $dt['No_HAK']; ?></td>
                                                <td><?= $dt['No_KTP']; ?></td>
                                                <td><?= $dt['Letak_Bidang_Tnh']; ?></td>
                                                <td><?= $dt['Luas_Tnh']; ?></td>
                                                <td><?= $dt['Status_tnh']; ?></td>
                                                <td><?= $dt['No_kohir']; ?></td>
                                                <td><?= $dt['No_Persil']; ?></td>
                                                <td><?= $dt['Nama_pewaris']; ?></td>
                                                <td><?= $dt['Meninggal_thn']; ?></td>
                                                <td> <a href="<?= base_url(''); ?>datatanah/viewpicture/<?= $dt['id']; ?>">Lihat Surat</a></td>
                                                <td><?= $dt['Nama_pmbri_hibah']; ?></td>
                                                <td><?= $dt['tgl_hibah']; ?></td>
                                                <td><?= $dt['No_akta_hibah']; ?></td>
                                                <td><?= $dt['tgl_pembelian']; ?></td>
                                                <td><?= $dt['Nm_PPAT_pembelian']; ?></td>
                                                <td>
                                                    <a href="" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></a>
                                                    <a onclick="return confirm('apakah anda yakin?')" href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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