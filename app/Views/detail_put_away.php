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
    
        
            <!-- Sidebar -->
            <?php include(APPPATH . 'Views/widgets/sidebar.php'); ?>

            <!-- Main Content -->
            <div id="main" >
                <!-- Your main content goes here -->             
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

    <!-- Bootstrap JS and Popper.js -->
    <script src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('js/popper.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
</body>

</html>