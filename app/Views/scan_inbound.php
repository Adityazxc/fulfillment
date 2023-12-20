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
                'page_title' => 'Inbound',
                'show_back_link' => false,
            ];
            ?>
            <!-- Main Content -->
            
                <!-- Your main content goes here -->
                <!-- navbar -->
                

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

    <!-- Bootstrap JS -->
   
    <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
</body>

</html>