<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        .card-deck {
            width: 999px;

        }
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