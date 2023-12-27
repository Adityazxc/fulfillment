<!DOCTYPE html>
<html lang="en">

<head>
   

    <style>
        /* .cardone {
            display: inline-flex;
        } */
        @media (min-width: 768px) {
        .card-deck {
            width: 999px;
        }
    }
        /* .card-deck {
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
        } */


        /* .container-chart {
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
        } */
    </style>
</head>

<body>




    <div class="card-deck">
            <div class="card bg-white col-sm-4">
                <div class="card-body">
                    <h6 class="card-title">
                        Total Barang
                    </h6>
                    <div class="d-flex align-items-center justify-content-between">
                        <h6 class="card-text mb-0">
                        <?php foreach ($inbound as $inbound1): ?>
                                <?= $inbound1->total_qty ?>
                            <?php endforeach; ?>
                        </h6>
                        <img src="<?= base_url("images/avatar.png") ?>" class="ml-2" width="32px">
                    </div>
                </div>
            </div>
            <div class="card bg-white col-sm-4">
                <div class="card-body">
                    <h6 class="card-title">
                        Total Barang
                    </h6>
                    <div class="d-flex align-items-center justify-content-between">
                        <h6 class="card-text mb-0">
                            <?php foreach ($inbound as $inbound1): ?>
                                <?= $inbound1->total_qty ?>
                            <?php endforeach; ?>
                        </h6>
                        <img src="<?= base_url("images/avatar.png") ?>" class="ml-2" width="32px">
                    </div>
                </div>
            </div>
            <div class="card bg-white col-sm-4">
                <div class="card-body">
                    <h6 class="card-title">
                        Total Barang
                    </h6>
                    <div class="d-flex align-items-center justify-content-between">
                        <h6 class="card-text mb-0">
                            <?php foreach ($inbound as $inbound1): ?>
                                <?= $inbound1->total_qty ?>
                            <?php endforeach; ?>
                        </h6>
                        <img src="<?= base_url("images/avatar.png") ?>" class="ml-2" width="32px">
                    </div>
                </div>
            </div>
            <div class="card bg-white col-sm-4">
                <div class="card-body">
                    <h6 class="card-title">
                        Total Barang
                    </h6>
                    <div class="d-flex align-items-center justify-content-between">
                        <h6 class="card-text mb-0">
                            <?php foreach ($inbound as $inbound1): ?>
                                <?= $inbound1->total_qty ?>
                            <?php endforeach; ?>
                        </h6>
                        <img src="<?= base_url("images/avatar.png") ?>" class="ml-2" width="32px">
                    </div>
                </div>
            </div>
            <div class="card bg-white col-sm-4">
                <div class="card-body">
                    <h6 class="card-title">
                        Total Barang
                    </h6>
                    <div class="d-flex align-items-center justify-content-between">
                        <h6 class="card-text mb-0">
                            <?php foreach ($inbound as $inbound1): ?>
                                <?= $inbound1->total_qty ?>
                            <?php endforeach; ?>
                        </h6>
                        <img src="<?= base_url("images/avatar.png") ?>" class="ml-2" width="32px">
                    </div>
                </div>
            </div>


        </div>
</body>

</html>