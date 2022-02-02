<div style="text-align: center; margin-bottom:1rem;">
    <h3><?= strtoupper(page_title()) ?></h3>
</div>

<div style="margin-bottom: 1rem;">
    <table>
        <tr>
            <td>Tanggal</td>
            <td>:</td>
            <td>&emsp; <?= format_date(date('Y-m-d')) ?></td>
        </tr>
        <tr>
            <td>Di cetak oleh</td>
            <td>:</td>
            <td>&emsp; <?= $user['name']; ?></td>
        </tr>
        <tr>
            <td>No HAK</td>
            <td>:</td>
            <td>&emsp; <?= $dataTanah['No_HAK']; ?></td>
        </tr>
    </table>
</div>


<tr>
    <td colspan="3">
        <div class="line"></div>
    </td>
    <td colspan="3">
        <p style="text-align: center;"> Data Tanah</p>
    </td>
    <td colspan="3">
        <div class="line"></div>
    </td>
</tr>
<br>
<table>
    <tr>

        <td>No HAK</td>
        <td>&emsp; :</td>
        <td>&emsp;&emsp; <?= $dataTanah['No_HAK']; ?></td>
    </tr>
    <tr>
        <td>No KTP</td>
        <td>&emsp; :</td>
        <td>&emsp;&emsp; <?= $dataTanah['No_KTP']; ?></td>
    </tr>
    <tr>
        <td>Letak Bidang Tanah</td>
        <td>&emsp; :</td>
        <td>&emsp;&emsp; <?= $dataTanah['Letak_Bidang_Tnh']; ?></td>
    </tr>
    <tr>
        <td>Luas Tanah</td>
        <td>&emsp; :</td>
        <td>&emsp;&emsp; <?= $dataTanah['Luas_Tnh']; ?></td>
    </tr>
    <tr>
        <td>Status tanah</td>
        <td>&emsp; :</td>
        <td>&emsp;&emsp; <?= $dataTanah['Status_tnh']; ?></td>
    </tr>
    <tr>
        <td>No kohir</td>
        <td>&emsp; :</td>
        <td>&emsp;&emsp; <?= $dataTanah['No_kohir']; ?></td>
    </tr>
    <tr>
        <td>No Persil</td>
        <td>&emsp; :</td>
        <td>&emsp;&emsp; <?= $dataTanah['No_Persil']; ?></td>
    </tr>
    <tr>
        <td>Nama pewaris</td>
        <td>&emsp; :</td>
        <td>&emsp;&emsp; <?= $dataTanah['Nama_pewaris']; ?></td>
    </tr>
    <tr>
        <td>Meninggal tahun</td>
        <td>&emsp; :</td>
        <td>&emsp;&emsp; <?= $dataTanah['Meninggal_thn']; ?></td>
    </tr>
    <tr>
        <td>Surat waris</td>
        <td>&emsp; :</td>
        <td>&emsp;&emsp; <i>Terlampir</i></td>
    </tr>
    <tr>
        <td>Nama Pemberi Hibah</td>
        <td>&emsp; :</td>
        <td>&emsp;&emsp; <?= $dataTanah['Nama_pmbri_hibah']; ?></td>
    </tr>
    <tr>
        <td>Tanggal hibah</td>
        <td>&emsp; :</td>
        <td>&emsp;&emsp; <?= $dataTanah['tgl_hibah']; ?></td>
    </tr>
    <tr>
        <td>No akta hibah</td>
        <td>&emsp; :</td>
        <td>&emsp;&emsp; <?= $dataTanah['No_akta_hibah']; ?></td>
    </tr>
    <tr>
        <td>Tanggal Pembelian</td>
        <td>&emsp; :</td>
        <td>&emsp;&emsp; <?= $dataTanah['tgl_pembelian']; ?></td>
    </tr>
    <tr>
        <td>Nama PPAT pembelian</td>
        <td>&emsp; :</td>
        <td>&emsp;&emsp; <?= $dataTanah['Nm_PPAT_pembelian']; ?></td>
    </tr>
   
</table>

<tr>
        <td colspan="3">
            <div class="line"></div>
        </td>

    </tr>