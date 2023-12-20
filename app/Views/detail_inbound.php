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
    <div id="main">
        <!-- Your main content goes here -->
        <table id="detail_put_away" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>SKU</th>
                    <th>QTY</th>
                    <th>Brand</th>
                    <th>Article</th>
                    <th>NO.PO</th>
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
                        <td>
                            <?= $detail->no_po ?>
                        </td>

                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <script>
            $(document).ready(function () {
                $('#detail_put_away').DataTable({
                    "autoWidth": false
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