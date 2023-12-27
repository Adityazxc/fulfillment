<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />

    <!-- Tambahkan di bagian <head> HTML -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>



    <!-- Include Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Main CSS-->
    <link href="<?= base_url('css/theme.css') ?>" rel="stylesheet" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Your Custom CSS Styles -->

</head>


<style>
    @media (min-width: 768px) {
        .card-deck {
            width: 999px;
        }
    }

    .card-deck {
        padding-bottom: 39px;
    }

    .image_home {
        position: relative;
        width: 100px;
        height: 100px;
    }

    .image_one,
    .image_two {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);

    }

    #imageOne {
        z-index: 1;
    }

    #imageTwo {
        z-index: 0;

    }

    .title-dashboard {
        color: #000;
        font-family: Noto Sans;
        font-size: 16px;
        font-style: normal;
        font-weight: 600;
        line-height: 36px;
        /* 225% */
    }
</style>



<body>

    <div id="main">
        <!-- Sidebar -->

        <?php include(APPPATH . 'Views/widgets/sidebar.php'); ?>
        <!-- Main Content -->

        <!-- navbar -->
        <?php
        $navbarConfig = [         
            'show_back_link' => false,
        ];
        ?>
        <?php include(APPPATH . 'Views/widgets/navbar.php'); ?>
        <?php
        //  include(APPPATH . 'Views/dashboard_item/statistik_dashboard.php'); 
        ?>


        <a href="javascript:void(0);" class="icon" onclick="toggleSidebar()">
            <i class="fa fa-bars"></i>
        </a>

        <text class="title-dashboard">Overview</text>
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


        <!-- Chart -->
        <div class="row">
            <div class="col-8">
                <text class="title-dashboard">Total Conversations</text>
                <div class="container-chart" style="padding-top:8px">
                    <div class="card bg-white table">
                        <div style="width: 90%; margin: auto;">
                            <canvas id="myChart"></canvas>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-4">
                <text class="title-dashboard">List of Operators</text>
                <div class="card table bg-white table" style="padding-top:8px">
                    <table id="userTable" class="table">

                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Role</th>
                            </tr>
                        </thead>
                        <?php
                        foreach ($users as $user): ?>
                            <tr>
                                <td>
                                    <?= $user->name ?>
                                </td>
                                <td>
                                    <?= $user->role ?>
                                </td>
                            </tr>
                            <?php
                        endforeach; ?>
                    </table>
                    <script>
                        $(document).ready(function () {
                            $('#userTable').DataTable(

                            );
                        });
                    </script>
                </div>
            </div>

        </div>


    </div>


    <script>
        var data = {

            labels: ["Qty Order",
                "Success",
                "On Going",
                "Cancel",
                "Total Barang di Invoice"],
            datasets: [{
                label: 'Jumlah',
                data: [50, 30, 10, 5, 95], // Ganti data ini dengan nilai sesuai kebutuhan
                backgroundColor: ['rgba(75, 192, 192, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: ['rgba(75, 192, 192, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(255, 99, 132, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }

            ]
        }

            ;

        // Konfigurasi chart
        var options = {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }

            ;

        // Mendapatkan elemen canvas
        var ctx = document.getElementById('myChart').getContext('2d');

        // Membuat chart
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: data,
            options: options
        });
    </script>

    <!-- Bootstrap -->

    <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
</body>

</html>