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
    <link href="<?= base_url('css/theme.css')?>" rel="stylesheet" />

    <!-- Your Custom CSS Styles -->
    <style>
        /* .card-deck {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-top: 39px;
            margin-left: 40px;
            
        } */
        .cardone {
            display: inline-flex;
        }

        .card-deck {
            margin-top: 39px;
            flex-wrap: nowrap;
            overflow-x: auto;
        }

        .card-body {
            width: 192px;
            height: 120px;
            border-radius: 8px;
            margin-bottom: 15px;
        }



        .container-chart {
            width: 65%;
            margin-right: 30px;
        }

        .container-table {
            width: 25%;
        }

        .table {
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <?php
            $navbarConfig = [
                'page_title' => 'Home',
                'show_back_link' => false,
            ];
            ?>
            <?php include(APPPATH . 'Views/widgets/sidebar.php'); ?>
            <!-- Main Content -->
            <div id="content" class="col-sm-11">
                <!-- Your main content goes here -->
                <!-- navbar -->
                <?php include(APPPATH . 'Views/widgets/navbar.php'); ?>



                <div class="cardone">
                    <div class="card-deck">
                        <div class="card bg-white">
                            <div class="card-body">
                                <h6 class="card-title">
                                    Total Barang
                                </h6>
                                <p class="card-text">33</p>
                            </div>
                        </div>
                        <div class="card bg-white">
                            <div class="card-body">
                                <h6 class="card-title">
                                    Total Barang
                                </h6>
                                <p class="card-text">33</p>
                            </div>
                        </div>
                        <div class="card bg-white">
                            <div class="card-body">
                                <h6 class="card-title">
                                    Total Barang
                                </h6>
                                <p class="card-text">33</p>
                            </div>
                        </div>
                        <div class="card bg-white">
                            <div class="card-body">
                                <h6 class="card-title">
                                    Total Barang
                                </h6>
                                <p class="card-text">33</p>
                            </div>
                        </div>
                        <div class="card bg-white">
                            <div class="card-body">
                                <h6 class="card-title">
                                    Total Barang
                                </h6>
                                <p class="card-text">33</p>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="cardtwo">
                    <div class="row">
                        <div class="col-6">
                            <button type="button" class="btn btn-primary">Tombol 1</button>
                        </div>
                        <div class="col-6">
                            <button type="button" class="btn btn-secondary">Tombol 2</button>
                        </div>
                    </div>
                    <div class="card-deck">
                        <!-- <div class="chart"> -->
                        <div class="container-chart">
                            <div class="card bg-white">
                                <div style="width: 90%; margin: auto;">
                                    <canvas id="myChart"></canvas>
                                </div>
                            </div>
                        </div>
                        <!-- </div> -->
                        <div class="container-table">
                            <div class="card bg-white">
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
        <!-- Bootstrap JS and Popper.js -->
        <script src="<?= base_url('js/jquery.min.js') ?>"></script>
        <script src="<?= base_url('js/popper.min.js') ?>"></script>
        <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
</body>

</html>