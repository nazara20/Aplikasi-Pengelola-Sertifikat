<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= page_title() ?></title>

    <style>
        .container {
            max-width: 800px;
            margin: 0 auto;
            box-sizing: border-box;
            padding-left: 20px;
            padding-right: 20px;
        }

        #kop td.logo {
            width: 80px;
            height: 80px;
        }

        .logo-image {
            width: 100%;
        }

        .logo-left {
            display: flex;
            justify-content: start;
        }

        .logo-right {
            display: flex;
            justify-content: end;
        }

        .header {
            text-align: center;
        }

        .line {
            border-top: 2px solid black;
            margin-top: 12px;
            margin-bottom: 2px;
        }

        .hair-line {
            border-top: 1px solid black;
            margin-bottom: 5px;
        }

        #kop {
            width: 100%;
        }

        .table {
            width: 100%;
        }

        .table td,
        .table th {
            padding: 5px 10px;
        }

        .uppercase{
            letter-spacing: 200px;
        }

        .table-bordered {
            border-collapse: collapse;
        }

        .table-bordered td,
        .table-bordered th {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <div class="container">
        <table id="kop">
            <tr>
                <td class="logo">
                    <div class="logo-left">
                        <img class="logo-image" src="<?= base_url('admin/img/logobpn.png') ?>" alt="Logo">
                    </div>
                </td>
                <td>
                    <div class="header">
                        <div style="font-weight: bold; text-transform: uppercase; font-size:20px">
                            KEMENTRIAN AGRARIA DAN TATA RUANG/
                        </div>
                        <div style="font-weight: bold; text-transform: uppercase; font-size:20px">
                            BADAN PERTAHANAN NASIONAL
                        </div>
                        <div style="font-weight: bold; text-transform: uppercase; font-size:20px">
                            KOTA BANJARMASIN
                        </div>
                        <small style="font-size: 14px;">Kantor Pemerintah Jl. Pramuka, Pemurus Luar, Kota Banjarmasin, Kalimantan Selatan 70249</small>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <div class="line"></div>
                    <div class="hair-line"></div>
                </td>
            </tr>
        </table>

        <div style="padding-top: 1rem; padding-bottom: 1rem;">