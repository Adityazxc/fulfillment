<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />

    <!-- Jquery -->
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- DataTable -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
    
    <!-- DataTables JS -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>

    <!-- Your Custom CSS Styles -->
    <style>
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
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <?php
            $navbarConfig = [
                'page_title' => 'Inbound',
                'show_back_link' => false,
            ];
            ?>
            <?php include(APPPATH . 'Views/widgets/sidebar.php'); ?>
            <!-- Main Content -->
            <div id="content" class="col-sm-11">
                <!-- Your main content goes here -->
                <!-- navbar -->
                <?php include(APPPATH . 'Views/widgets/navbar.php'); ?>

                <table id="userTable" class="table table-striped table-bordered" style="width:100%;  margin-top: 47px;">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Tanggal Proses</th>
                            <th>role</th>
                        </tr>
                    </thead>


                    <?php

                    foreach ($users as $user): ?>
                        <tr>
                            <td><a href="<?= site_url("Page/detail_inbound/{$user->no_inbound}") ?>" 
                            style="text-decoration:none;color: black; font-weight:bold">
                                    <?= $user->no_inbound ?>
                                </a></td>
                            <td>
                                <?= $user->processed_by_name ?>
                            </td>
                            <td>
                                <?= $user->date_process ?>
                            </td>
                            <td>
                                <?= $user->approve_by_name ?>
                            </td>
                        </tr>
                        <?php
                    endforeach; ?>

                </table>
                <script>
                    $(document).ready(function () {
                        $('#userTable').DataTable({
                            "autoWidth": false
                        });
                    });
                </script>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
   
    <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
</body>

</html>