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
        <td>:</td>
        <td>&emsp; <?= $suratUkur['No_HAK']; ?></td>
    </tr>
    <tr>
        <td>Nip_petugas</td>
        <td>:</td>
        <td>&emsp; <?= $suratUkur['Nip_petugas']; ?></td>
    </tr>
    <tr>
        <td>Provinsi</td>
        <td>:</td>
        <td>&emsp; <?= $suratUkur['Provinsi']; ?></td>
    </tr>
    <tr>
        <td>Kecamatan</td>
        <td>:</td>
        <td>&emsp; <?= $suratUkur['Kecamatan']; ?></td>
    </tr>
    <tr>
        <td>Kelurahan</td>
        <td>:</td>
        <td>&emsp; <?= $suratUkur['Kelurahan']; ?></td>
    </tr>
    <tr>
        <td>RT/RW</td>
        <td>:</td>
        <td>&emsp; <?= $suratUkur['RT/RW']; ?></td>
    </tr>
    <tr>
        <td>Batas_utara</td>
        <td>:</td>
        <td>&emsp; <?= $suratUkur['Batas_utara']; ?></td>
    </tr>
    <tr>
        <td>Batas_selatan</td>
        <td>:</td>
        <td>&emsp; <?= $suratUkur['Batas_selatan']; ?></td>
    </tr>
    <tr>
        <td>Batas_Barat</td>
        <td>:</td>
        <td>&emsp; <?= $suratUkur['Batas_Barat']; ?></td>
    </tr>
    <tr>
        <td>Batas_timur</td>
        <td>:</td>
        <td>&emsp; <?= $suratUkur['Batas_timur']; ?></td>
    </tr>
</table>


<tr>
    <td colspan="3">
        <div class="line"></div>
    </td>
    <td colspan="3">
        <p style="text-align: center;"> Data Petugas Ukur</p>
    </td>
    <td colspan="3">
        <div class="line"></div>
    </td>
</tr>
<br>
<?php if ($data) : ?>
            <?php foreach ($data as $surat) : ?>
<table>
    <tr>
        <td>Data Petugas</td>
        <td>:</td>
        <td><?= $surat['Nama_Petugas']; ?></td>
    </tr>
    <?php endforeach ?>
        <?php else : ?>
            <tr>
                <td colspan="8" style="text-align: center;">Tidak ada data</td>
            </tr>
        <?php endif ?>
</table>