<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>

    <?php include(APPPATH . 'Views/partials/datatable.php'); ?>
    
    
    <!-- Your Custom CSS Styles -->
    <style>
        
        </style>

</head>

<body>
    <?php include(APPPATH . 'Views/widgets/sidebar.php'); ?>

   

    <div id="main">
        <!-- Sidebar -->
        <?php
        $navbarConfig = [
            'page_title' => 'PutAway',
            'show_back_link' => false,
        ];
        ?>
        <?php
    
        ?>
        <!-- Main Content -->

        <!-- Your main content goes here -->
        <!-- navbar -->
        

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