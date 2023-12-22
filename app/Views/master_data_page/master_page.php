<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

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


        <!-- navbar -->
        <?php include(APPPATH . 'Views/widgets/navbar.php'); ?>
      
        <!-- Navtabs -->
        <ul class="nav nav-tabs">
            <li class="active"><a href="<?= base_url('index.php/MasterData/master_data') ?>">Master Data</a></li>
            <li><a href="<?= base_url('index.php/MasterData/barang_in') ?>">Barang in</a></li>
            <li><a href="<?= base_url('index.php/MasterData/barang_out') ?>">Barang out</a></li>
            <li><a href="<?= base_url('index.php/MasterData/order_in') ?>">Orderan masuk</a></li>
            <li><a href="<?= base_url('index.php/MasterData/stok_opname') ?>">Stock opname</a></li>
            <li><a href="<?= base_url('index.php/MasterData/inventory') ?>">Inventory</a></li>
        </ul>

        
        <?php
        $informationConfig = [
            'binloc' => true,
            'total_barang'=> true,
            'user'=> true,
            'barang_in'=> true,
            'barang_out'=> true,
            'total_inventory'=> false,
            'total_stok'=> false,
            'total_invoice'=> false,            
        ]
            ?>
        <?php include(APPPATH . 'Views/widgets/information_master_data.php'); ?>

    </div>
    <!-- Bootstrap JS and Popper.js -->
    <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
</body>

</html>