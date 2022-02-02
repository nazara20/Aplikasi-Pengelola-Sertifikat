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
            <td>Total Biaya</td>
            <td>:</td>
            <td>&emsp; <?= $sumsps; ?></td>
        </tr>
    </table>
</div>


<tr>
    <td colspan="3">
        <div class="line"></div>
    </td>
    <td colspan="3">
        <p style="text-align: center;"> Rincian</p>

    </td>
    <td colspan="3">
        <div class="line"></div>
    </td>
</tr>
<br>
<table class="table table-bordered">
    <thead>
        <tr>
            <td><b>Kode Biaya</b></td>
            <td><b>Nama Biaya</b></td>
            <td style="text-align: center;"><b>Biaya</b></td>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($biaya as $by) : ?>
            <tr>
                <td><?= $by['Kode_Biaya']; ?></td>
                <td><?= $by['Nama_Biaya']; ?></td>
                <td style="text-align: center;"><?= $by['Biaya']; ?></td>
            </tr>
        <?php endforeach ?>
        <tr>
            <td colspan="2" style="text-align: center;"><b>TOTAL BIAYA</b></td>
                <td colspan="1" style="text-align: center;"><b><?= $sumsps; ?><b></td>
            </tr>
    </tbody>
</table>

