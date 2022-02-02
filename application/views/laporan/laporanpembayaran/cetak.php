<div style="text-align: center; margin-bottom:0.75em;">
    <h3><?= strtoupper(page_title()) ?></h3>
</div>
<div style="text-align: center; margin-top:0.75em;">
    <h3>Kantor BPN Banjarmasin</h3>
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
    </table>
</div>


<tr>
    <td colspan="3">
        <div class="line"></div>
    </td>
    <td colspan="3">
        <p style="text-align: center;"> LAPORAN DATA PEMBAYARAN</p>

    </td>
    <td colspan="3">
        <div class="line"></div>
    </td>
</tr>
<br>
<table class="table table-bordered">
    <thead>
        <tr>
            <td>No</td>
            <td><b>No SPS</b></td>
            <td>No Pendaftaran</td>
            <td>Terbilang</td>
            <td>Tgl SPS</td>
            <td>Jumlah Biaya</td>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 1;
        foreach ($pembayaran as $pbyr) : ?>
            <tr>
                <td><?= $i ?></td>
                <td><b><?= $pbyr['No_SPS']; ?></b></td>
                <td><?= $pbyr['No_Pendaftaran']; ?></td>
                <td><?= $pbyr['Terbilang']; ?></td>
                <td><?= $pbyr['Tgl_SPS']; ?></td>
                <td style="text-align: center;"><?= $pbyr['Jumlah_Biaya']; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach ?>
        <tr>
            <td colspan="5" style="text-align: center;"><b>TOTAL</b></td>
                <td colspan="1" style="text-align: center;"><b><?= $sum; ?><b></td>
            </tr>
    </tbody>
</table>

