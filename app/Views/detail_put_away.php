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

    
    <!-- Your Custom CSS Styles -->
    <style>
        .dataTables_wrapper {
            margin-top: 47px;
            width: 95%;
            margin-left: auto;
            margin-right: auto;
            /* Adjust the margin-top value as needed */
        }
    </style>

</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <?php include(APPPATH . 'Views/widgets/sidebar.php'); ?>

            <!-- Main Content -->
            <div id="content" class="col-sm-11">
                <!-- Your main content goes here -->

                <!-- Additional Navigation Bar -->
                <nav class="navbar navbar-expand-md bg-white">
                    <!-- Brand -->
                    <a class="navbar-brand" href="<?= base_url('index.php/Page/put_away') ?>">Back</a>

                    <!-- Toggler/collapsible Button -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Navbar links -->
                    <div class="collapse navbar-collapse" id="collapsibleNavbar">

                        <h3>Detail Inbound</h3>


                        <!-- Links on the right side -->
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <img src="<?= base_url('images/notification.png') ?>" alt="notification">
                            </li>
                            <li class="nav-item">
                                <h3>Asep</h3>
                            </li>
                        </ul>
                    </div>
                </nav>


                <h3>
                    <?= $no_put_away ?>
                </h3>
                <table id="detail_inbound" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>SKU</th>
                            <th>QTY</th>
                            <th>Brand</th>
                            <th>Article</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($details as $detail): ?>
                            <tr>
                                <td>
                                    <?= $detail->sku ?>
                                </td>
                                <td>
                                    <?= $detail->qty ?>
                                </td>
                                <td>
                                    <?= $detail->brand ?>
                                </td>
                                <td>
                                    <?= $detail->article ?>
                                </td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <script>
                    $(document).ready(function () {
                        $('#detail_inbound').DataTable({
                            "autoWidth": false,
                           
                        });
                    });
                </script>

            </div>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('js/popper.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
</body>

</html>