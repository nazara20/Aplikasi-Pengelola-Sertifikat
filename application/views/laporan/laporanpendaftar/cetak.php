<div style="text-align: center; margin-bottom:0.75em;">
    <h3><?= strtoupper(page_title()) ?></h3>
</div>

<tr>
    <td colspan="3">
        <div class="line"></div>
    </td>
</tr>

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
            <td>Total Pendaftar</td>
            <td>:</td>
            <td>&emsp; <?= $pendaftarNumber ?> Pendaftar</td>
        </tr>
    </table>
</div>


<tr>
    <td colspan="3">
        <div class="line"></div>
    </td>
    <td colspan="3">
        <p style="text-align: center;"> Data Pendaftar</p>

    </td>
    <td colspan="3">
        <div class="line"></div>
    </td>
</tr>
<br>
<table class="table table-bordered">
    <thead>
        <tr>
            <td><b>No</b></td>
            <td><b>No_Pendaftaran</b></td>
            <td><b>No_KTP</b></td>
            <td><b>No_KTPkuasa</b></td>
            <td><b>Kode_Biaya</b></td>
            <td><b>No_SuratKuasa</b></td>
            <td><b>Tgl_SuratKuasa</b></td>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 1;
        foreach ($pendaftaran as $pendaftar) : ?>
            <tr>
                <td><?= $i ?></td>
                <td><?= $pendaftar['No_Pendaftaran']; ?></td>
                <td><?= $pendaftar['No_KTP']; ?></td>
                <td><?= $pendaftar['No_KTPkuasa']; ?></td>
                <td><?= $pendaftar['Kode_Biaya']; ?></td>
                <td><?= $pendaftar['No_SuratKuasa']; ?></td>
                <td><?= $pendaftar['Tgl_SuratKuasa']; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach ?>
    </tbody>
</table>