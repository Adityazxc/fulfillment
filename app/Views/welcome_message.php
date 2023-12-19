<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include(APPPATH . 'Views/partials/datatable.php'); ?>
	<style>
		body {
			font-family: "Lato", sans-serif;
		}

		.sidebar {
			height: 100%;
			width: 0;
			position: fixed;
			z-index: 1;
			top: 0;
			left: 0;
			background-color: #111;
			overflow-x: hidden;
			transition: 0.5s;
			padding-top: 60px;
		}

		.sidebar a {
			padding: 8px 8px 8px 32px;
			text-decoration: none;
			font-size: 25px;
			color: #818181;
			display: block;
			transition: 0.3s;
		}

		.sidebar a:hover {
			color: #f1f1f1;
		}

		.sidebar .closebtn {
			position: absolute;
			top: 0;
			right: 25px;
			font-size: 36px;
			margin-left: 50px;
		}

		.openbtn {
			font-size: 20px;
			cursor: pointer;
			background-color: #111;
			color: white;
			padding: 10px 15px;
			border: none;
		}

		.openbtn:hover {
			background-color: #444;
		}

		#main {
			transition: margin-left .5s;
			padding: 16px;
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
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
		<a href="#">About</a>
		<a href="#">Services</a>
		<a href="#">Clients</a>
		<a href="#">Contact</a>
	</div>

	<div id="main">
		<button class="openbtn" onclick="openNav()">☰ Open Sidebar</button>
		<h2>Collapsed Sidebar</h2>
		<p>Click on the hamburger menu/bar icon to open the sidebar, and push this content to the right.</p>
	</div>

	<script>
		function openNav() {
			document.getElementById("mySidebar").style.width = "250px";
			document.getElementById("main").style.marginLeft = "250px";
		}

		function closeNav() {
			document.getElementById("mySidebar").style.width = "0";
			document.getElementById("main").style.marginLeft = "0";
		}
	</script>
	 <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <?php
            $navbarConfig = [
                'page_title' => 'PutAway',
                'show_back_link' => false,
            ];
            ?>
            <?php include(APPPATH . 'Views/widgets/sidebar.php'); ?>
            <!-- Main Content -->
            <div id="content" class="col-sm-11">
                <!-- Your main content goes here -->
                <!-- navbar -->
                <?php include(APPPATH . 'Views/widgets/navbar.php'); ?>
                
                 <!-- Add Date Range Picker -->
                 <label for="dateRange">Filter by Date Range:</label>
                <input type="text" id="dateRange" name="dateRange" />

                <table id="putAwayTable" class="table table-striped table-bordered"
                    style="width:100%;  margin-top: 47px;">
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
                                'pdf' ,   // Add the export to PDF button
                                'print'
                            ]
                        });

                        $('#dateRange').on('apply.daterangepicker', function (ev, picker) {
                            table.columns(2).search(picker.startDate.format('YYYY-MM-DD') + ' to ' + picker.endDate.format('YYYY-MM-DD')).draw();
                        });
                    });

                </script>

            </div>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>

</body>

</html>