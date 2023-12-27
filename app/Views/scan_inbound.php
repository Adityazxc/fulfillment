<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <!-- modal -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <?php include(APPPATH . 'Views/partials/datatable.php'); ?>
    <!-- Your Custom CSS Styles -->
    <style>
        #btn-add-scan-indbound {
            background: #2F395C;
            color: #FFF;
            font-family: Noto Sans;
            font-size: 14px;
            font-weight: 400;
            padding: 10px;
        }
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
        <?php
        $navbarConfig = [
            'show_back_link' => false,
        ];
        ?>
        <?php include(APPPATH . 'Views/widgets/navbar.php'); ?>
        <input type="text" id="searchInput" placeholder="Search...">




        <div class="mb-2">
            <div class="float-right">
                <button class="btn btn-primary">Button 1</button>
                <button id="btn-add-scan-indbound" class="btn" data-toggle="modal" data-target="#myModal">
                    <img src="<?= base_url("images/actions/add_white.png") ?>" alt="Add Scan Inbound"> Add Scan Inbound
                </button>
            </div>
            <div style="clear: both;"></div> <!-- Clear float -->
        </div>
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

        <!-- The Modal -->
        <div class="modal" id="myModal">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Add Scan Inbound</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form action="/action_page.php">
                            <div class="form-row">
                                <div class="form-group col-md-8">
                                    <label for="email">Email address:</label>
                                    <input type="email" class="form-control" placeholder="Enter email" id="email">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="pwd">Scan</label>
                                    <input type="password" class="form-control" placeholder="+ scan" id="pwd">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="pwd">Qty</label>
                                    <input type="password" class="form-control" placeholder="Enter password" id="pwd">
                                </div>
                            </div>

                            <div class="form-group form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox"> I agree to the broadcast
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                </div>
                <script>
                    $(document).ready(function () {
                        $('#userTable').DataTable({
                            "autoWidth": false
                        });
                    });

                    // pencarian data dalam table
                    $(document).ready(function () {
                        var table = $('#userTable').DataTable();

                        $('#searchInput').keyup(function () {
                            table.search(this.value).draw();
                        });
                    });
                </script>



            </div>

            <!-- Bootstrap JS -->

            <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
</body>

</html>