<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>

    <?php include(APPPATH . 'Views/partials/datatable.php'); ?>


    <!-- Your Custom CSS Styles -->
    <style>
        body {
            font-family: "Lato", sans-serif;
        }

        .sidebar {
            height: 100%;
            width: 127px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #2F395C;
            overflow-x: hidden;
            padding-top: 60px;
        }

        .sidebar a {
            font-weight: 400;            
            padding-top: 53px;
            text-decoration: none;
            font-size: 14px;
            color: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .sidebar a:hover {
            color: #f1f1f1;
        }


        #main {
            transition: margin-left .5s;
            padding: 16px;
            margin-left: 127px;
            /* background-color:#FAFAFA ; */
        }

        /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
        @media screen and (max-height: 450px) {
            .sidebar {
                padding-top: 15px;
            }

            .sidebar a {
                font-size: 18px;
            }
        }

        .dataTables_wrapper {
            margin-top: 47px;
            width: 95%;
            margin-left: auto;
            margin-right: auto;
            /* Adjust the margin-top value as needed */
        }

        .card-deck {
            display: inline-flex;
            flex-wrap: nowrap;
            /* Agar card-deck tidak wrap ke baris baru */
            overflow-x: auto;

        }

        .card-body {
            width: 192px;
            height: 120px;
            border-radius: 8px;
            text-decoration: none;
        }
    </style>

</head>

<body>

    <div id="mySidebar" class="sidebar">
        <ul class="list-unstyled components">
            <li>
                <a href="<?= base_url('index.php/Page/home') ?>">
                    <img src="<?= base_url('images/put_away.png') ?>" alt="Scan Ibound">
                    <span style="padding-top: 8px;">Home</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('index.php/Page/scan_inbound') ?>">
                    <img src="<?= base_url('images/scan_inbound.png') ?>" alt="Scan Ibound">
                    <span style="padding-top: 8px;">Scan Ibound</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('index.php/Page/put_away') ?>">
                    <img src="<?= base_url('images/put_away.png') ?>" alt="Put Away">
                    <span style="padding-top: 8px;">Put Away</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="<?= base_url('images/pick.png') ?>" alt="Pick and Pack">
                    <span style="padding-top: 8px;">Pick and Pack</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="<?= base_url('images/dispatcher.png') ?>" alt="Dispatcher">
                    <span style="padding-top: 8px;">Dispatcher</span>
                </a>
            </li>

        </ul>
    </div>

    <div id="main">



        <!-- Sidebar -->
        <?php
        $navbarConfig = [
            'page_title' => 'PutAway',
            'show_back_link' => false,
        ];
        ?>
        <?php
        // include(APPPATH . 'Views/widgets/sidebar.php'); 
        ?>
        <!-- Main Content -->

        <!-- Your main content goes here -->
        <!-- navbar -->
        <?php include(APPPATH . 'Views/widgets/navbar.php'); ?>

        <!-- Add Date Range Picker -->
        <label for="dateRange">Filter by Date Range:</label>
        <input type="text" id="dateRange" name="dateRange" />

        <table id="putAwayTable" class="table table-striped table-bordered" style="width:100%;  margin-top: 47px;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>User</th>
                    <th>Tanggal Proses</th>
                    <th>role</th>
                </tr>
            </thead>


            <?php

            foreach ($details as $detail): ?>
                <tr>
                    <td><a href="<?= site_url("Page/detail_put_away/{$detail->no_put_away}") ?>"
                            style="text-decoration:none;color: black; font-weight:bold">
                            <?= $detail->no_put_away ?>
                        </a></td>
                    <td>
                        <?= $detail->processed_by_name ?>
                    </td>
                    <td>
                        <?= $detail->date_process ?>
                    </td>
                    <td>
                        <?= $detail->approve_by_name ?>
                    </td>
                </tr>
                <?php
            endforeach; ?>

        </table>
        <script>
            $(document).ready(function () {
                var table = $('#putAwayTable').DataTable({
                    dom: 'Bfrtip', // Add this line to enable buttons
                    buttons: [
                        'excel', // Add the export to Excel button
                        'csv',   // Add the export to CSV button
                        'pdf',   // Add the export to PDF button
                        'print'
                    ]
                });

                $('#dateRange').on('apply.daterangepicker', function (ev, picker) {
                    table.columns(2).search(picker.startDate.format('YYYY-MM-DD') + ' to ' + picker.endDate.format('YYYY-MM-DD')).draw();
                });
            });

        </script>




    </div>


    <!-- Bootstrap JS and Popper.js -->
    <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
</body>

</html>