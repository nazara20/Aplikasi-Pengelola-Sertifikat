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
                        <div class="card-header"><strong>Data Tanah</strong>
                        </div>
                        <div class="card-body">
                        <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered table-hover display nowrap table-sm m-b-0" style="width:100%">
                                <thead>
                                    <tr>
                                    <td>No</td>
                             <td>No HAK</td>
                             <td>No KTP</td>
                             <td>Letak Bidang Tnh</td>
                             <td>Luas Tnh</td>
                             <td>Status tnh</td>
                             <td>No kohir</td>
                             <td>No Persil</td>
                             <td>Nama pewaris</td>
                             <td>Meninggal thn</td>
                             <td>Surat waris</td>
                             <td>Nama pmbri hibah</td>
                             <td>tgl hibah</td>
                             <td>No akta hibah	</td>
                             <td>tgl pembelian</td>
                             <td>Nm PPAT pembelian</td>
                             <td>Aksi</td>
                                    </tr>
                                </thead>


                                <tbody>
                                <?php foreach ($datatanah as $dt) : ?>
                             <tr>
                                 <td><?= $no++ ?></td>
                                 <td><?= $dt['No_HAK']; ?></td>
                                 <td><?= $dt['No_KTP']; ?></td>
                                 <td><?= $dt['Letak_Bidang_Tnh']; ?></td>
                                 <td><?= $dt['Luas_Tnh']; ?></td>
                                 <td><?= $dt['Status_tnh']; ?></td>
                                 <td><?= $dt['No_kohir']; ?></td>
                                 <td><?= $dt['No_Persil']; ?></td>
                                 <td><?= $dt['Nama_pewaris']; ?></td>
                                 <td><?= $dt['Meninggal_thn']; ?></td>
                                 <td><?= $dt['Surat_waris']; ?></td>
                                 <td><?= $dt['Nama_pmbri_hibah']; ?></td>
                                 <td><?= $dt['tgl_hibah'];?></td>
                                 <td><?= $dt['No_akta_hibah']; ?></td>
                                 <td><?= $dt['tgl_pembelian']; ?></td>
                                 <td><?= $dt['Nm_PPAT_pembelian']; ?></td>
                                     <td>
                                         <a href="" class="btn btn-success btn-sm"><i class="fa fa-pen"></i></a>
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