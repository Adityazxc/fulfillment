<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <style>
        .cardone {
            display: inline-flex;
        }

        .card-deck {
            margin-top: 39px;
            flex-wrap: nowrap;
            overflow-x: auto;
            width: auto;
        }

        .card.bg-white {
            border-radius: 10px;
        }

        .card-body {
            width: 192px;
            height: 120px;
            border-radius: 8px;
            margin-bottom: 15px;
        }
        .card-content {
            margin-top: 19px;
            margin-left: 25px;
        }


        .container-chart {
            width: 60%;
            margin-right: 30px;
        }

        .container-table {
            width: 25%;
        }
        

        .ml-3 {
            color: #000;
            font-family: Noto Sans;
            font-size: 22px;
            font-style: normal;
            font-weight: 600;
            line-height: normal;
            margin-left: 34px;
        }

        .nav.nav-tabs {
            color: #2F395C;
            font-family: Noto Sans;
            font-size: 16px;
            font-style: normal;
            font-weight: 600;
            line-height: normal;
        }
        .card-title {
            color: #7A7A7A;
            font-family: Noto Sans;
            font-size: 14px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
            margin-top: 17px;
            margin-left: 18px;
        }
    </style>
</head>

<body>



    <div class="cardone">
        <div class="card-deck">

        <?php if ($informationConfig['binloc']): ?>
            <div class="card bg-white">
                <div class="card-body">
                    <h6 class="card-title">
                        Binloc
                    </h6>
                    <div class="card-content">
                        <div class="d-flex align-items-center">
                            <img src="<?= base_url("images/avatar.png") ?>" alt="Gambar Kiri" class="mr-3" width="32px">
                            <h6 class="ml-3">66.460</h6>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>

            <?php if ($informationConfig['total_barang']): ?>
            <div class="card bg-white">
                <div class="card-body">
                    <h6 class="card-title">
                        Total Barang
                    </h6>
                    <div class="card-content">
                        <div class="d-flex align-items-center">
                            <img src="<?= base_url("images/avatar.png") ?>" alt="Gambar Kiri" class="mr-3" width="32px">
                            <h6 class="ml-3">66.460</h6>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>

            <?php if ($informationConfig['user']): ?>
            <div class="card bg-white">
                <div class="card-body">
                    <h6 class="card-title">
                        User
                    </h6>
                    <div class="card-content">
                        <div class="d-flex align-items-center">
                            <img src="<?= base_url("images/avatar.png") ?>" alt="Gambar Kiri" class="mr-3" width="32px">
                            <h6 class="ml-3">66.460</h6>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>

            <?php if ($informationConfig['barang_in']): ?>
            <div class="card bg-white">
                <div class="card-body">
                    <h6 class="card-title">
                        Barang In
                    </h6>
                    <div class="card-content">
                        <div class="d-flex align-items-center">
                            <img src="<?= base_url("images/avatar.png") ?>" alt="Gambar Kiri" class="mr-3" width="32px">
                            <h6 class="ml-3">66.460</h6>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>

            <?php if ($informationConfig['barang_out']): ?>
            <div class="card bg-white">
                <div class="card-body">
                    <h6 class="card-title">
                        Barang Out
                    </h6>
                    <div class="card-content">
                        <div class="d-flex align-items-center">
                            <img src="<?= base_url("images/avatar.png") ?>" alt="Gambar Kiri" class="mr-3" width="32px">
                            <h6 class="ml-3">66.460</h6>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>

            <?php if ($informationConfig['total_invoice']): ?>
            <div class="card bg-white">
                <div class="card-body">
                    <h6 class="card-title">
                        Total Invoic
                    </h6>
                    <div class="card-content">
                        <div class="d-flex align-items-center">
                            <img src="<?= base_url("images/avatar.png") ?>" alt="Gambar Kiri" class="mr-3" width="32px">
                            <h6 class="ml-3">66.460</h6>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>

            <?php if ($informationConfig['total_stok']): ?>
            <div class="card bg-white">
                <div class="card-body">
                    <h6 class="card-title">
                        Total Stok
                    </h6>
                    <div class="card-content">
                        <div class="d-flex align-items-center">
                            <img src="<?= base_url("images/avatar.png") ?>" alt="Gambar Kiri" class="mr-3" width="32px">
                            <h6 class="ml-3">66.460</h6>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <?php if ($informationConfig['total_inventory']): ?>
            <div class="card bg-white">
                <div class="card-body">
                    <h6 class="card-title">
                        Total Inventory
                    </h6>
                    <div class="card-content">
                        <div class="d-flex align-items-center">
                            <img src="<?= base_url("images/avatar.png") ?>" alt="Gambar Kiri" class="mr-3" width="32px">
                            <h6 class="ml-3">66.460</h6>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>


        </div>
    </div>
</body>

</html>